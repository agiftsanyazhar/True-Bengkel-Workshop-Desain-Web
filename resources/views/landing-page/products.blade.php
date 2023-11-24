@extends('layouts.landing-page.app')

@section('container')
  {{-- Products Section --}}
  <section id="products" class="products mt-5 mb-5">
    <div class="container" >

      <div class="section-title">
        <p>{{ $title }}</p>
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

        <div class="col-md-9 tab-content">

          <div class="row gy-5">

            <div class="col-md-4 products-item">
              <a href="{{ route('landing-page.products.detail') }}">
                <div class="card">
                  <img src="{{ asset('landing-page/img/pexels-anthony-133627.jpg') }}" class="card-img-top">
                  <div class="card-body">
                    <h4>Lifebuoy</h4>
                    <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <p class="price">Rp 595.000</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-4 products-item">
              <a href="javascript:void(0)">
                <div class="card">
                  <img src="{{ asset('landing-page/img/pexels-dietmar-janssen-396007.jpg') }}" class="card-img-top">
                  <div class="card-body">
                    <h4>Airbag</h4>
                    <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <p class="price">Rp 1.295.000</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-4 products-item">
              <a href="javascript:void(0)">
                <div class="card">
                  <img src="{{ asset('landing-page/img/pexels-lex-ger-3642618.jpg') }}" class="card-img-top">
                  <div class="card-body">
                    <h4>Brake</h4>
                    <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <p class="price">Rp 995.000</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-4 products-item">
              <a href="javascript:void(0)">
                <div class="card">
                  <img src="{{ asset('landing-page/img/2.3.-Sasis-Backbone-1000x569.jpg') }}" class="card-img-top">
                  <div class="card-body">
                    <h4>Chassis</h4>
                    <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <p class="price">Rp 995.000</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-4 products-item">
              <a href="javascript:void(0)">
                <div class="card">
                  <img src="{{ asset('landing-page/img/pexels-miguel-á-padriñán-3785927.jpg') }}" class="card-img-top">
                  <div class="card-body">
                    <h4>Gearbox</h4>
                    <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <p class="price">Rp 1.295.000</p>
                  </div>
                </div>
              </a>
            </div>
            
            <div class="col-md-4 products-item">
              <a href="javascript:void(0)">
                <div class="card">
                  <img src="{{ asset('landing-page/img/pexels-saulo-leite-18262240.jpg') }}" class="card-img-top">
                  <div class="card-body">
                    <h4>Steering Wheel</h4>
                    <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <p class="price">Rp 895.000</p>
                  </div>
                </div>
              </a>
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