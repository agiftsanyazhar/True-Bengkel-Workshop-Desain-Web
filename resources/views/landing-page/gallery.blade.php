@extends('layouts.landing-page.app')

@section('container')
  {{-- Gallery Section --}}
  <section id="gallery" class="gallery mt-5 mb-5">
    <div class="container" >

      <div class="section-title">
        <p>Gallery</p>
      </div>

      <div class="row gy-5">

        <div class="col-md-3 products-item">
          <div class="card">
            <img src="{{ asset('landing-page/img/pexels-pixabay-162553.jpg') }}" class="card-img-top">
            <div class="card-body text-center">
              <h4>Image 1</h4>
            </div>
          </div>
        </div>
        
        <div class="col-md-3 products-item">
          <div class="card">
            <img src="{{ asset('landing-page/img/pexels-lisa-fotios-115558.jpg') }}" class="card-img-top">
            <div class="card-body text-center">
              <h4>Image 2</h4>
            </div>
          </div>
        </div>
        
        <div class="col-md-3 products-item">
          <div class="card">
            <img src="{{ asset('landing-page/img/pexels-pavel-chernonogov-2381463.jpg') }}" class="card-img-top">
            <div class="card-body text-center">
              <h4>Image 3</h4>
            </div>
          </div>
        </div>
        
        <div class="col-md-3 products-item">
          <div class="card">
            <img src="{{ asset('landing-page/img/pexels-suntorn-somtong-1029243.jpg') }}" class="card-img-top">
            <div class="card-body text-center">
              <h4>Image 4</h4>
            </div>
          </div>
        </div>
        
        <div class="col-md-3 products-item">
          <div class="card">
            <img src="{{ asset('landing-page/img/pexels-pixabay-162553.jpg') }}" class="card-img-top">
            <div class="card-body text-center">
              <h4>Image 5</h4>
            </div>
          </div>
        </div>
        
        <div class="col-md-3 products-item">
          <div class="card">
            <img src="{{ asset('landing-page/img/pexels-lisa-fotios-115558.jpg') }}" class="card-img-top">
            <div class="card-body text-center">
              <h4>Image 6</h4>
            </div>
          </div>
        </div>
        
        <div class="col-md-3 products-item">
          <div class="card">
            <img src="{{ asset('landing-page/img/pexels-pavel-chernonogov-2381463.jpg') }}" class="card-img-top">
            <div class="card-body text-center">
              <h4>Image 7</h4>
            </div>
          </div>
        </div>
        
        <div class="col-md-3 products-item">
          <div class="card">
            <img src="{{ asset('landing-page/img/pexels-suntorn-somtong-1029243.jpg') }}" class="card-img-top">
            <div class="card-body text-center">
              <h4>Image 8</h4>
            </div>
          </div>
        </div>

      </div>

      <div class="mt-5 text-center">
        <a class="btn" href="javasript:void(0)" role="button">Load More <i class="bi bi-chevron-double-down"></i></a>
      </div>

    </div>
  </section>
@endsection