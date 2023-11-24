@extends('layouts.landing-page.app')

@section('container')
  {{-- Customer Service Section --}}
  <section id="customer-service" class="customer-service mt-5 mb-5">
    <div class="container" >

      <div class="section-title">
        <p>{{ $title }}</p>
      </div>

      <div class="row gy-5">

        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5>Filter</h5>

              <div class="my-3">
                <h6>Position</h6>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="ceo">
                  <label class="form-check-label" for="ceo">
                    CEO
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="cto">
                  <label class="form-check-label" for="cto">
                    CTO
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="engineer">
                  <label class="form-check-label" for="engineer">
                    Engineer
                  </label>
                </div>
              </div>
              
            </div>
          </div>
        </div>

        <div class="col-md-9">

          <div class="row gy-5">

            <div class="col-md-4 d-flex">
              <div class="customer-service-employee">
                <div class="employee-img">
                  <img src="{{ asset('landing-page/img/pexels-thisisengineering-3862614.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="employee-info">
                  <h4>Sarah</h4>
                  <span>CEO</span>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas sapiente qui magni commodi doloribus quisquam consequatur doloremque nemo quia consectetur, voluptatem, asperiores est impedit dolor fuga repellendus officiis exercitationem praesentium.</p>
                </div>
              </div>
            </div>

            <div class="col-md-4 d-flex">
              <div class="customer-service-employee">
                <div class="employee-img">
                  <img src="{{ asset('landing-page/img/pexels-andrea-piacquadio-3771045.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="employee-info">
                  <h4>Alex</h4>
                  <span>CTO</span>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas sapiente qui magni commodi doloribus quisquam consequatur doloremque nemo quia consectetur, voluptatem, asperiores est impedit dolor fuga repellendus officiis exercitationem praesentium.</p>
                </div>
              </div>
            </div>

            <div class="col-md-4 d-flex">
              <div class="customer-service-employee">
                <div class="employee-img">
                  <img src="{{ asset('landing-page/img/pexels-canva-studio-3194524.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="employee-info">
                  <h4>Michaela</h4>
                  <span>Engineer</span>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas sapiente qui magni commodi doloribus quisquam consequatur doloremque nemo quia consectetur, voluptatem, asperiores est impedit dolor fuga repellendus officiis exercitationem praesentium.</p>
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