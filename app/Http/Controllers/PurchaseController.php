<?php

namespace App\Http\Controllers;
use App\Models\Purchase;
use App\Http\Requests\purchase\PurchaseCreateRequest;
use App\Http\Requests\purchase\PurchaseEditRequest;
use App\Http\Requests\purchase\PurchaseStoreRequest;
use App\Http\Requests\purchase\PurchaseUpdateRequest;
use App\Http\Requests\purchase\PurchaseDeleteRequest;
use App\Http\Requests\purchase\PurchaseViewRequest;
use Illuminate\Support\Facades\Hash;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the purchase
     *
     * @param  \App\Purchase  $model
     * @return \Illuminate\View\View
     */
    public function index(PurchaseViewRequest $request,Purchase $model)
    {
        return view('purchase.index', ['purchase' => $model->paginate(20)]);
    }

    /**
     * Show the form for creating a new purchase
     *
     * @return \Illuminate\View\View
     */
    public function create(PurchaseCreateRequest $request)
    {
        return view('purchase.create');
    }

    /**
     * Store a newly created purchase in storage
     *
     * @param  \App\Http\Requests\PurchaseRequest  $request
     * @param  \App\Purchase  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PurchaseStoreRequest $request, Purchase $model)
    {
        $model->create($request->all());

        return redirect()->route('purchase.index')->withStatus(__('Purchase successfully created.'));
    }

    /**
     * Show the form for editing the specified purchase
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\View\View
     */
    public function edit(Purchase $purchase)
    {
        return view('purchase.edit', compact('purchase'));
    }

    /**
     * Update the specified purchase in storage
     *
     * @param  \App\Http\Requests\PurchaseRequest  $request
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PurchaseUpdateRequest $request,Purchase  $purchase)
    {
        $purchase->update($request->all());
        return redirect()->route('purchase.index')->withStatus(__('Purchase successfully updated.'));
    }

    /**
     * Remove the specified purchase from storage
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(PurchaseDeleteRequest $request,Purchase  $purchase)
    {
        $purchase->delete();

        return redirect()->route('purchase.index')->withStatus(__('Purchase successfully deleted.'));
    }
}
