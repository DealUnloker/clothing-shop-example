<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\ProductType;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function products()
    {
        $products = Products::all();

        return response($products);
    }

    public function delete_product(Request $request)
    {
        $id = $request->only('id');

        $product = Products::find($id)->first();

        if (!$product) {
            return response('No such product');
        }

        $product->delete();
        return response($id);
    }

    public function types()
    {
        $types = ProductType::all();

        return response($types);
    }

    public function delete_type(Request $request)
    {
        $id = $request->only('id');

        $product_type = ProductType::find($id)->first();

        if (!$product_type) {
            return response('No such product type');
        }

        $product_type->delete();
        return response($id);
    }
}
