<?php
namespace App\Functional\Database;
use App\Http\Requests\product\ProductCreateRequest;
use App\Http\Requests\product\ProductDeleteRequest;
use App\Http\Requests\product\ProductStoreRequest;
use App\Http\Requests\product\ProductUpdateRequest;
use App\Http\Requests\product\ProductViewRequest;
use App\Models\Product;

interface IDatabase{
    public function index(ProductViewRequest $request,Product $model);
    public function create(ProductCreateRequest $request);
    public function store(ProductStoreRequest $request, Product $model);
    public function edit(Product $product);
    public function update(ProductUpdateRequest $request,Product  $product);
    public function destroy(ProductDeleteRequest $request,Product  $product);
}
