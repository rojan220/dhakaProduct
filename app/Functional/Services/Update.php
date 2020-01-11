<?php
namespace App\Functional\Services;
use App\Http\Requests\product\ProductUpdateRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

trait Update{
    public function Update(ProductUpdateRequest $request,Product  $product){
        $input= $request->all();
        if(isset($input['image'])&&!is_null($input['image'])) {
            $filepath = '/public/image';
            $data =Storage::put($filepath,$input['image']);
            $input['image'] = implode('/storage',explode('public',$data));
        }

        $product->update($input);
        return redirect()->route('product.index')->withStatus(__('Product successfully updated.'));
    }

}
