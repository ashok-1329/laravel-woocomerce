<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\ProductAttributesMap;
use App\Models\product_variations;
use App\Models\attributes;
use App\Models\categories;
use DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class ProductsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = products::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                            $btn = '<a href="'.route('products.show', $row->id).'" class="edit btn btn-success btn-sm">View</a>';
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('products');
    }

    public function show($id)
    {

        $product = products::with('variations', 'attributes')
        ->where('id', $id)
        ->orderBy('id', 'desc')
        ->firstOrFail();
        
        foreach ($product['attributes'] as $key => $value) {

            $variations = DB::table('attributes')
            ->select('attribute_values.*')
            ->leftJoin('attribute_values', 'attribute_values.attribute_id', '=', 'attributes.id')
             ->where('attributes.id', $value['id'])
            ->get();
            $product['attributes'][$key]['all-attribute'] = $variations;
            
        }


        foreach ($product['variations'] as $key => $value) {

            $variations = DB::table('product_variations')
            ->select('attribute_values.*')
            ->leftJoin('product_var_att_value_map', 'product_variations.id', '=', 'product_var_att_value_map.product_var_id')
            ->leftJoin('attribute_values', 'product_var_att_value_map.att_value_id', '=', 'attribute_values.id')
            ->where('product_variations.id', $value['id'])
            ->get();
            $product['variations'][$key]['availabe-attribute'] = $variations;
            
        }
        $jsonData = json_encode($product);
        return view('show', compact('jsonData','product'));
    }

     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = categories::all();
      
        $attributes = attributes::with('values')->get();
        // echo "<pre/>";
        // print_r($attributes);
        // die('here');
        return view('add-product', compact('categories', 'attributes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

          // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'category_id' => 'required'
        ]);

        // Create a new product instance with the validated data
        $product = products::create($validatedData);

        return redirect()->route('products.index')->with('success', 'Product created successfully');

    }
}
