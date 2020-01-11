<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Http\Requests\category\CategoryCreateRequest;
use App\Http\Requests\category\CategoryEditRequest;
use App\Http\Requests\category\CategoryStoreRequest;
use App\Http\Requests\category\CategoryUpdateRequest;
use App\Http\Requests\category\CategoryDeleteRequest;
use App\Http\Requests\category\CategoryViewRequest;
use Illuminate\Support\Facades\Hash;

class CategoryController extends Controller
{
    /**
     * Display a listing of the category
     *
     * @param  \App\Category  $model
     * @return \Illuminate\View\View
     */
    public function index(CategoryViewRequest $request,Category $model)
    {
        return view('category.index', ['category' => $model->paginate(20)]);
    }

    /**
     * Show the form for creating a new category
     *
     * @return \Illuminate\View\View
     */
    public function create(CategoryCreateRequest $request,Category $category)
    {

        return view('category.create')->with(['categories'=>$category->all()->pluck('name','id')->toArray()]);
    }

    /**
     * Store a newly created category in storage
     *
     * @param  \App\Http\Requests\CategoryRequest  $request
     * @param  \App\Category  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CategoryStoreRequest $request, Category $model)
    {
        $model->create($request->all());

        return redirect()->route('category.index')->withStatus(__('Category successfully created.'));
    }

    /**
     * Show the form for editing the specified category
     *
     * @param  \App\Category  $category
     * @return \Illuminate\View\View
     */
    public function edit(Category $category)
    {
        return view('category.edit', compact('category'))->with(['categories'=>$category->all()->pluck('name','id')->toArray()]);;
    }

    /**
     * Update the specified category in storage
     *
     * @param  \App\Http\Requests\CategoryRequest  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CategoryUpdateRequest $request,Category  $category)
    {
        $category->update($request->all());
        return redirect()->route('category.index')->withStatus(__('Category successfully updated.'));
    }

    /**
     * Remove the specified category from storage
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(CategoryDeleteRequest $request,Category  $category)
    {
        $category->delete();

        return redirect()->route('category.index')->withStatus(__('Category successfully deleted.'));
    }
}
