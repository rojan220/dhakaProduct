@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="{{route('category.index')}}">
          <div class="card card-stats">
            <div class="card-header card-header-primary card-header-icon">
              <div class="card-icon">
                <i class="material-icons">content_copy</i>
              </div>
              <h3 class="card-category">Categories</h3>
            </div>
          </div>
        </a>
        </div>


        <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="{{route('product.index')}}">
            <div class="card card-stats">
              <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">content_copy</i>
                </div>
                <h3 class="card-category">Products</h3>
              </div>
            </div>
        </a>
          </div>


                <div class="col-lg-3 col-md-6 col-sm-6">
                        <a href="{{route('purchase.index')}}">
                    <div class="card card-stats">
                      <div class="card-header card-header-info card-header-icon">
                        <div class="card-icon">
                          <i class="material-icons">content_copy</i>
                        </div>
                        <h3 class="card-category">Purchase</h3>
                      </div>
                    </div>
                </a>
                  </div>

      </div>
    </div>
  </div>
@endsection


