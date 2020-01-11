<?php
namespace App\Functional\Services;
use App\Http\Requests\product\ProductStoreRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

trait Store{
    public function Store(ProductStoreRequest $request, Product $model){
        $input= $request->all();
        if(isset($input['image'])&&!is_null($input['image'])) {
            $filepath = '/public/image';
            $data =Storage::put($filepath,$input['image']);
            $input['image'] = implode('/storage',explode('public',$data));
        }
        // dd($input);
        $model->create($input);

        return redirect()->route('product.index')->withStatus(__('Product successfully created.'));
    }

}
