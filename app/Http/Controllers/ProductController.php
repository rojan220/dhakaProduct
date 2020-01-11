<?php

namespace App\Http\Controllers;
use App\Functional\Database\IDatabase;
use App\Models\Category;
use App\Models\Product;
use App\Http\Requests\product\ProductCreateRequest;
use App\Http\Requests\product\ProductEditRequest;
use App\Http\Requests\product\ProductStoreRequest;
use App\Http\Requests\product\ProductUpdateRequest;
use App\Http\Requests\product\ProductDeleteRequest;
use App\Http\Requests\product\ProductViewRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
class ProductController extends Controller
{
    private $database;
     public function __construct(IDatabase $database){
        $this->database = $database;
     }

    /**
     * Display a listing of the product
     *
     * @param  \App\Product  $model
     * @return \Illuminate\View\View
     */
    public function index(ProductViewRequest $request,Product $model)
    {
        $result = $this->database->index($request,$model);
        return $result;
    }

    /**
     * Show the form for creating a new product
     *
     * @return \Illuminate\View\View
     */
    public function create(ProductCreateRequest $request)
    {
        $result = $this->database->create($request);
        return $result;
    }

    /**
     * Store a newly created product in storage
     *
     * @param  \App\Http\Requests\ProductRequest  $request
     * @param  \App\Product  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProductStoreRequest $request, Product $model)
    {
        $result = $this->database->store($request,$model);
        return $result;
    }

    /**
     * Show the form for editing the specified product
     *
     * @param  \App\Product  $product
     * @return \Illuminate\View\View
     */
    public function edit(Product $product)
    {
        $result = $this->database->edit($product);
        return $result;
    }

    /**
     * Update the specified product in storage
     *
     * @param  \App\Http\Requests\ProductRequest  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProductUpdateRequest $request,Product  $product)
    {
        $result = $this->database->update($request,$product);
        return $result;
    }

    /**
     * Remove the specified product from storage
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(ProductDeleteRequest $request,Product  $product)
    {
        $result = $this->database->destroy($request,$product);
        return $result;
    }
}
