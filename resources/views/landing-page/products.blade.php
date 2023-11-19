@extends('layouts.landing-page.app')

@section('container')
  {{-- Products Section --}}
  <section id="products" class="products mt-5 mb-5">
    <div class="container" >

      <div class="section-title">
        <p>Products</p>
      </div>

      <div class="row gy-5">

        <div class="col-md-3 products-item">
          <div class="card">
            <div class="card-body">
              <h5>Filter</h5>

              <div class="my-3">
                <h6>Category</h6>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="boat">
                  <label class="form-check-label" for="boat">
                    Boat
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="car">
                  <label class="form-check-label" for="car">
                    Car
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="motorcycle">
                  <label class="form-check-label" for="motorcycle">
                    Motorcycle
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="truck">
                  <label class="form-check-label" for="truck">
                    Truck
                  </label>
                </div>
              </div>

              <div class="my-3">
                <h6>Price</h6>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="free">
                  <label class="form-check-label" for="free">
                    Free
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="100k-500k">
                  <label class="form-check-label" for="100k-500k">
                    100k - 500k
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="500k-900k">
                  <label class="form-check-label" for="500k-900k">
                    500k - 900k
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id=">900k">
                  <label class="form-check-label" for=">900k">
                    >900k
                  </label>
                </div>
              </div>
              
            </div>
          </div>
        </div>

        <div class="col-md-9 products-item">

          <div class="row gy-5">

            <div class="col-md-4">
              <div class="card">
                <img src="{{ asset('landing-page/img/pexels-pixabay-162553.jpg') }}" class="card-img-top">
                <div class="card-body text-center">
                  <h4>Image 1</h4>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card">
                <img src="{{ asset('landing-page/img/pexels-lisa-fotios-115558.jpg') }}" class="card-img-top">
                <div class="card-body text-center">
                  <h4>Image 2</h4>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card">
                <img src="{{ asset('landing-page/img/pexels-pavel-chernonogov-2381463.jpg') }}" class="card-img-top">
                <div class="card-body text-center">
                  <h4>Image 3</h4>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card">
                <img src="{{ asset('landing-page/img/pexels-suntorn-somtong-1029243.jpg') }}" class="card-img-top">
                <div class="card-body text-center">
                  <h4>Image 4</h4>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card">
                <img src="{{ asset('landing-page/img/pexels-pixabay-162553.jpg') }}" class="card-img-top">
                <div class="card-body text-center">
                  <h4>Image 5</h4>
                </div>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="card">
                <img src="{{ asset('landing-page/img/pexels-lisa-fotios-115558.jpg') }}" class="card-img-top">
                <div class="card-body text-center">
                  <h4>Image 6</h4>
                </div>
              </div>
            </div>

            <div class="mt-5 text-center">
              <a class="btn" href="javasript:void(0)" role="button">Load More <i class="bi bi-chevron-double-down"></i></a>
            </div>

          </div>

        </div>

      </div>

    </div>
  </section>
@endsection