@extends('layouts.app', ['activePage' => 'product-management', 'titlePage' => __('Product Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('product.store') }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Add Product') }}</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('product.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                  </div>
                </div>
							<div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required="true" aria-required="true" />
                      @if ($errors->has('name'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                  <div class="row">
                      <label class="col-sm-2 col-form-label">{{ __('Image') }}</label>
                      <div class="col-sm-7">
                          <div class="form-group{{ $errors->has('image') ? ' has-danger' : '' }}">
                              <input class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" id="input-image" type="file" placeholder="{{ __('Image') }}" value="{{ old('image', auth()->user()->image) }}"/>
                              @if ($errors->has('image'))
                                  <span id="image-error" class="error text-danger" for="input-image">{{ $errors->first('image') }}</span>
                              @endif
                              <a class="btn btn-primary" style="text-decoration:none;color:#fff;"onClick="document.getElementById('input-image').click()">Upload Image</a>
                          </div>
                      </div>
                  </div>
							<div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('In stock') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('in_stock') ? ' has-danger' : '' }}">
                      <input class="{{ $errors->has('in_stock') ? ' is-invalid' : '' }}" name="in_stock" id="input-in_stock" type="radio" placeholder="{{ __('In stock') }}" value="1" />Yes<br/>
                      <input class="{{ $errors->has('in_stock') ? ' is-invalid' : '' }}" name="in_stock" id="input-in_stock" type="radio" placeholder="{{ __('In stock') }}" value="0"/>No<br/>
                      @if ($errors->has('in_stock'))
                        <span id="in_stock-error" class="error text-danger" for="input-in_stock">{{ $errors->first('in_stock') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
							<div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Category') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('category_id') ? ' has-danger' : '' }}">
                        <select class="form-control {{$errors->has('category_id')?'is-invalid':''}}" name="category_id">
                            @foreach($categories as $key=>$value)
                                <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('category_id'))
                        <span id="category_id-error" class="error text-danger" for="input-category_id">{{ $errors->first('category_id') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
							<div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Quantity') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('quantity') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}" name="quantity" id="input-quantity" type="text" placeholder="{{ __('Quantity') }}" value="{{ old('quantity') }}" required="true" aria-required="true"/>
                      @if ($errors->has('quantity'))
                        <span id="quantity-error" class="error text-danger" for="input-quantity">{{ $errors->first('quantity') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
							<div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Rate(in Rs)') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('rating') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('rating') ? ' is-invalid' : '' }}" name="rating" id="input-rating" type="text" placeholder="{{ __('Rate(in Rs)') }}" value="{{ old('rating') }}" required="true" aria-required="true"/>
                      @if ($errors->has('rating'))
                        <span id="rating-error" class="error text-danger" for="input-rating">{{ $errors->first('rating') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Add Product') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
