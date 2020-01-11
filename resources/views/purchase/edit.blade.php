@extends('layouts.app', ['activePage' => 'purchase-management', 'titlePage' => __('Purchase Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('purchase.update', $purchase) }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('put')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Edit Purchase') }}</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('purchase.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                  </div>
                </div>
							<div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Cart') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('cart') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('cart') ? ' is-invalid' : '' }}" name="cart" id="input-cart" type="text" placeholder="{{ __('Cart') }}" value="{{ old('cart', $purchase->cart) }}" required="true" aria-required="true"/>
                      @if ($errors->has('cart'))
                        <span id="cart-error" class="error text-danger" for="input-cart">{{ $errors->first('cart') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
							<div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Ra') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('ra') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('ra') ? ' is-invalid' : '' }}" name="ra" id="input-ra" type="text" placeholder="{{ __('Ra') }}" value="{{ old('ra', $purchase->ra) }}" required="true" aria-required="true"/>
                      @if ($errors->has('ra'))
                        <span id="ra-error" class="error text-danger" for="input-ra">{{ $errors->first('ra') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
							<div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Address') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" id="input-address" type="text" placeholder="{{ __('Address') }}" value="{{ old('address', $purchase->address) }}" required="true" aria-required="true"/>
                      @if ($errors->has('address'))
                        <span id="address-error" class="error text-danger" for="input-address">{{ $errors->first('address') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
							<div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Address1') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('address1') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('address1') ? ' is-invalid' : '' }}" name="address1" id="input-address1" type="text" placeholder="{{ __('Address1') }}" value="{{ old('address1', $purchase->address1) }}" required="true" aria-required="true"/>
                      @if ($errors->has('address1'))
                        <span id="address1-error" class="error text-danger" for="input-address1">{{ $errors->first('address1') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
							<div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Country') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('country') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" id="input-country" type="text" placeholder="{{ __('Country') }}" value="{{ old('country', $purchase->country) }}" required="true" aria-required="true"/>
                      @if ($errors->has('country'))
                        <span id="country-error" class="error text-danger" for="input-country">{{ $errors->first('country') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
							<div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Phone') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" id="input-phone" type="text" placeholder="{{ __('Phone') }}" value="{{ old('phone', $purchase->phone) }}" required="true" aria-required="true"/>
                      @if ($errors->has('phone'))
                        <span id="phone-error" class="error text-danger" for="input-phone">{{ $errors->first('phone') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
							<div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Zip code') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('zip_code') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('zip_code') ? ' is-invalid' : '' }}" name="zip_code" id="input-zip_code" type="text" placeholder="{{ __('Zip code') }}" value="{{ old('zip_code', $purchase->zip_code) }}" required="true" aria-required="true"/>
                      @if ($errors->has('zip_code'))
                        <span id="zip_code-error" class="error text-danger" for="input-zip_code">{{ $errors->first('zip_code') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
							<div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Status') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('status') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" id="input-status" type="text" placeholder="{{ __('Status') }}" value="{{ old('status', $purchase->status) }}" required="true" aria-required="true"/>
                      @if ($errors->has('status'))
                        <span id="status-error" class="error text-danger" for="input-status">{{ $errors->first('status') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection