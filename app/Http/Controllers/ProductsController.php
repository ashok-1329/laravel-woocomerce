<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\product_attributes_map;
use App\Models\product_variations;
use App\Models\attributes;
use App\Models\categories;
use App\Models\PrdVarAttValueMap;
use DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = products::select("*");
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn("action", function ($row) {
                    $btn =
                        '<a href="' .
                        route("products.show", $row->id) .
                        '" class="edit btn btn-success btn-sm">View</a>';
                    return $btn;
                })
                ->rawColumns(["action"])
                ->make(true);
        }

        return view("products");
    }

    public function show($id)
    {
        $product = products::with("variations", "attributes")
            ->where("id", $id)
            ->orderBy("id", "desc")
            ->firstOrFail();
        foreach ($product["attributes"] as $key => $value) {
            $variations = DB::table("attributes")
                ->select("attribute_values.*")
                ->leftJoin(
                    "attribute_values",
                    "attribute_values.attribute_id",
                    "=",
                    "attributes.id"
                )
                ->where("attributes.id", $value["id"])
                ->get();
            $product["attributes"][$key]["all-attribute"] = $variations;
        }

        foreach ($product["variations"] as $key => $value) {
            $variations = DB::table("product_variations")
                ->select("attribute_values.*")
                ->leftJoin(
                    "product_var_att_value_map",
                    "product_variations.id",
                    "=",
                    "product_var_att_value_map.product_var_id"
                )
                ->leftJoin(
                    "attribute_values",
                    "product_var_att_value_map.att_value_id",
                    "=",
                    "attribute_values.id"
                )
                ->where("product_variations.id", $value["id"])
                ->get();
            $product["variations"][$key]["availabe-attribute"] = $variations;
        }
        $jsonData = json_encode($product);
        return view("show", compact("jsonData", "product"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = categories::all();

        $attributes = attributes::with("values")->get();
        return view("add-product", compact("categories", "attributes"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $variationsData = $request->input("variationsData");

        $variationsData = json_decode($_POST["variationsData"], true);

        $attributeIds = json_decode($_POST["attributeIds"], true);

        $imageName = null;
        if ($request->hasFile("image")) {
            $image = $request->file("image");
            $imageName = time() . "_" . $image->getClientOriginalName();
            $image->move(public_path("images"), $imageName);
        }

        $product = new products();
        $product->name = $_POST["name"];
        $product->category_id = $_POST["category_id"];
        $product->price = $_POST["price"];
        $product->description = $_POST["description"];
        $product->image = $imageName;
        $product->save();
        $lastInsertId = $product->id;

        if ($lastInsertId) {
            foreach ($attributeIds as $key => $att_id) {
                $product_map = new product_attributes_map();
                $product_map->product_id = $lastInsertId;
                $product_map->attribute_id = $att_id;
                $product_map->save();
            }

            foreach ($variationsData as $key => $value) {
                $product_variations = new product_variations();
                $product_variations->product_id = $lastInsertId;
                $product_variations->stock = $value["stock"];
                $product_variations->save();
                $pro_var_insertId = $product_variations->id;

                foreach (
                    $variationsData[$key]["attributeValueIds"]
                    as $key1 => $value1
                ) {
                    $product_variations_map = new PrdVarAttValueMap();

                    $product_variations_map->product_var_id = $pro_var_insertId;
                    $product_variations_map->att_value_id = $value1;
                    $product_variations_map->save();
                }
            }
        }
        return response()->json([
            "success" => true,
            "message" => "Product added successfully.",
        ]);
    }
}
