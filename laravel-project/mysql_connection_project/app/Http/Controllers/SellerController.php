<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Product;

class SellerController extends Controller
{
    public function oto(){
        return Seller::find(1)->product_oto_Data;
    }

    public function otm(){
        return Seller::find(1)->product_otm_Data;
    }

    public function mto(){
        // return Product::all();
        $data = Product::with('seller_mto_Data')->get();
        return $data;
    }
}
