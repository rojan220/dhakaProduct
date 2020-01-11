<?php
namespace App\Functional\Services;
use App\Models\Category;
use App\Models\Product;

trait Edit{
    public function Edit(Product $product){
        return view('product.edit', compact('product'))->with(['categories'=>Category::all()->pluck('name','id')->toArray()]);;
    }

}
