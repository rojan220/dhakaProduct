<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function index(Request $request){
        //dd(session()->get('product'));
//        if($request->exists('id')){
//            $obj = new \stdClass();
//            $obj->{'product_'.$request->get('id')} = Product::find($request->get('id'))->first();
//            if(session()->exists('product')){
//                $ar = session()->get('product');
//                if(!array_key_exists('product_'.$request->get('id'),$ar)){
//                    array_push($ar,$obj);
//                }
//
//            }else{
//                $ar = [$obj];
//            }
//            session()->put('product',$ar);
//            return redirect()->back();
//        }
        if($request->exists('id')){
            $obj=Product::find($request->get('id'));
            if(session()->exists('product')){
                $ar = session()->get('product');
                foreach($ar as $arr){
                    if($arr->id==$obj->id){
                        $arr->quantity++;
                        $found = true;
                    }else{
                        $found = false;
                        $obj->quantity = 1;
                    }
                }
                if(!$found){
                    array_push($ar,$obj);
                }
            }else{
                $obj->quantity=1;
                $ar = [$obj];
            }
            session()->put('product',$ar);
            return redirect()->back();
        }
        return view('pages.cart');
    }
}
