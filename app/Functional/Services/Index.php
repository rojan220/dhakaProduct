<?php
namespace App\Functional\Services;
use App\Http\Requests\product\ProductViewRequest;
use App\Models\Category;
use App\Models\Product;

trait Index{
    public function Index(ProductViewRequest $request,Product $model){
        return view('product.index', ['product' => $model->paginate(20)]);
    }
}
