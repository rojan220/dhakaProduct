<?php
namespace App\Functional\Services;
use App\Http\Requests\product\ProductDeleteRequest;
use App\Models\Product;

trait Destroy{
    public function Destroy(ProductDeleteRequest $request,Product  $product){
        $product->delete();
        return redirect()->route('product.index')->withStatus(__('Product successfully deleted.'));
    }

}
