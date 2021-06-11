<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function list()
    {
        return product::all();
    }

    public function add(Request $request)
    {
        $product = new product;
        $product->product_name = $request->product_name;
        $product->weight = $request->weight;
        $product->price = $request->price;
        $product->exp_date = $request->exp_date;
        $save = $product->save();
        if ($save) {
            return ["Result" => 'Data Berhasil Disimpan'];
        } else {
            return ["Result" => 'Data Tidak Tersimpan'];
        }
    }
}
