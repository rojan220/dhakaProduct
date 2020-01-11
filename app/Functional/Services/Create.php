<?php
namespace App\Functional\Services;
use App\Http\Requests\product\ProductCreateRequest;
use App\Models\Category;

trait Create{
    public function Create(ProductCreateRequest $request){
        return view('product.create')->with(['categories'=>Category::all()->pluck('name','id')->toArray()]);
    }
}
