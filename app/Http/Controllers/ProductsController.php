<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\ProductAttributesMap;
use App\Models\product_variations;
use App\Models\attributes;
use DataTables;
use Illuminate\Support\Facades\DB;


class ProductsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = products::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                            $btn = '<a href="'.route('products.show', $row->id).'" class="edit btn btn-primary btn-sm">View</a>';
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('products');
    }

    public function show($id)
    {
    //    $product = products::findOrFail($id);

        $product = products::with('variations','attributes')->findOrFail($id);
        
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
         $jsonData = json_encode($product); // Convert data to JSON manually

        // Pass the JSON data to the view using the view helper
        return view('show', compact('jsonData','product'));

        // return response()->json($product);
        // return view('show', compact('product'));
    }
}
