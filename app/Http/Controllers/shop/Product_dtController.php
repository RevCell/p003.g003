<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;

class Product_dtController extends Controller
{
    public function show(Product $pro_id)
    {
        return view("client_side.product_detail.show",[
            "product"=>$pro_id
        ]);
    }
}
