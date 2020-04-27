<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function  create (Request $request){

        $cat= Product::create(
            $request->all()
        );
        return response()->json([
            "success" => true,
            'msg'=>'category created'

        ],200   );
    }




    public  function  index(){

        $pro=Product::all();


        return response()->json(['data'=>$pro]);
    }
}
