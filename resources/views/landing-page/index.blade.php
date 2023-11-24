@extends('layouts.landing-page.app')

@section('container')
  {{-- Hero Section --}}
  <section id="hero" class="hero d-flex align-items-center" style="background-image: url('{{ asset('landing-page/img/pexels-mike-bird-190574.jpg') }}');">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-md-12 d-flex flex-column justify-content-center align-items-center text-center">
          <h2>Welcome to True Bengkel</h2>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum esse fuga amet perspiciatis assumenda dignissimos, itaque adipisci accusamus saepe asperiores. Quae totam facere, id recusandae libero ipsam ratione rem at officiis, quibusdam tempore cum odit impedit dignissimos, quo sequi delectus possimus deleniti distinctio aperiam sint inventore! Quibusdam vel esse at.</p>
          <div class="d-flex">
            <a href="{{ url()->route('landing-page.index') . '#about' }}" class="btn-login">Get Started</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  {{-- About Section --}}
  <section id="about" class="about">
    <div class="container" >

      <div class="section-title">
        <p>About</p>
      </div>

      <div class="row gy-5">
        <div class="col-md-5 about-img" style="background-image: url({{ asset('landing-page/img/pexels-pixabay-73833.jpg') }});">
        </div>
        <div class="col-md-7 d-flex align-items-center">
          <div class="content ps-0 ps-md-5">
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio ducimus quisquam aperiam eveniet possimus voluptatum fugit delectus omnis autem unde?
            </p>
            <ul>
              <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, illo dignissimos magnam doloribus veniam quia quos illum fuga saepe quibusdam fugiat! Consectetur, temporibus nihil recusandae officia dicta, quis optio odio praesentium earum eum maxime totam quam. Quidem tempore incidunt quasi ut ipsum porro aspernatur ab fuga saepe, accusamus molestias distinctio.
            </p>
          </div>
        </div>
      </div>

    </div>
  </section>

  {{-- Products Section --}}
  <section class="products">
    <div class="container" >

      <div class="section-title">
        <p>Products</p>
      </div>

      <ul class="nav nav-tabs d-flex justify-content-center">

        <div class="slider">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#products-boats">
              <h4>Boats</h4>
            </a>
          </li>
  
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#products-cars">
              <h4>Cars</h4>
            </a>
  
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#products-motorcycles">
              <h4>Motorcycles</h4>
            </a>
          </li>
  
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#products-trucks">
              <h4>Trucks</h4>
            </a>
          </li>

        </div>


      </ul>

      <div class="tab-content">

        <div class="tab-pane fade active show" id="products-boats">

          <div class="row gy-5">

            <div class="col-md-3 products-item">
              <a href="">
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

          </div>
        </div>

        <div class="tab-pane fade" id="products-cars">

          <div class="row gy-5">

            <div class="col-md-3 products-item">
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

            <div class="col-md-3 products-item">
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
            
            <div class="col-md-3 products-item">
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

            <div class="col-md-3 products-item">
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

            <div class="col-md-3 products-item">
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

            <div class="col-md-3 products-item">
              <a href="javascript:void(0)">
                <div class="card">
                  <img src="{{ asset('landing-page/img/pexels-mike-bird-241197.jpg') }}" class="card-img-top">
                  <div class="card-body">
                    <h4>Tire</h4>
                    <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <p class="price">Rp 1.495.000</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-3 products-item">
              <a href="javascript:void(0)">
                <div class="card">
                  <img src="{{ asset('landing-page/img/pexels-mike-bird-111766.jpg') }}" class="card-img-top">
                  <div class="card-body">
                    <h4>Wheel</h4>
                    <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <p class="price">Rp 595.000</p>
                  </div>
                </div>
              </a>
            </div>

          </div>
        </div>

        <div class="tab-pane fade" id="products-motorcycles">

          <div class="row gy-5">

            <div class="col-md-3 products-item">
              <a href="javascript:void(0)">
                <div class="card">
                  <img src="{{ asset('landing-page/img/pexels-pixabay-163210.jpg') }}" class="card-img-top">
                  <div class="card-body">
                    <h4>Aprilia</h4>
                    <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <p class="price">Rp 895.000</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-3 products-item">
              <a href="javascript:void(0)">
                <div class="card">
                  <img src="{{ asset('landing-page/img/pexels-pixabay-37527.jpg') }}" class="card-img-top">
                  <div class="card-body">
                    <h4>Helmet</h4>
                    <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <p class="price">Rp 1.495.000</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-3 products-item">
              <a href="javascript:void(0)">
                <div class="card">
                  <img src="{{ asset('landing-page/img/pexels-pixabay-39693.jpg') }}" class="card-img-top">
                  <div class="card-body">
                    <h4>Yamaha</h4>
                    <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <p class="price">Rp 595.000</p>
                  </div>
                </div>
              </a>
            </div>

          </div>
        </div>

        <div class="tab-pane fade" id="products-trucks">

          <div class="row gy-5">

            <div class="col-md-3 products-item">
              <a href="javascript:void(0)">
                <div class="card">
                  <img src="{{ asset('landing-page/img/pexels-screen-post-12712470.jpg') }}" class="card-img-top">
                  <div class="card-body">
                    <h4>volvo</h4>
                    <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <p class="price">Rp 595.000</p>
                  </div>
                </div>
              </a>
            </div>

          </div>
        </div>

      </div>

      <div class="mt-5 text-end">
        <a class="btn" href="{{ route('landing-page.products.index') }}" role="button">See All <i class="bi bi-chevron-double-right"></i></a>
      </div>

    </div>
  </section>

  {{-- Customer Service Section --}}
  <section class="customer-service">
    <div class="container" >

      <div class="section-title">
        <p>Customer Service</p>
      </div>

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

      </div>

      <div class="mt-5 text-end">
        <a class="btn" href="{{ route('landing-page.customer-service') }}" role="button">See All <i class="bi bi-chevron-double-right"></i></a>
      </div>

    </div>
  </section>

  {{-- Gallery Section --}}
  <section class="gallery">
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

      </div>

      <div class="mt-5 text-end">
        <a class="btn" href="{{ route('landing-page.gallery') }}" role="button">See All <i class="bi bi-chevron-double-right"></i></a>
      </div>

    </div>
  </section>

  {{-- Contact Section --}}
  <section class="contact">
    <div class="container">

      <div class="section-title">
        <p>Contact</p>
      </div>

      <div class="row gy-5">

        <div class="col-md-5 d-flex align-items-stretch">
          <div class="info">
            <a href="javascript:void(0)">
              <div class="social-contact">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Institut Teknologi Sepuluh Nopember, Kampus Jl. Raya ITS, Keputih, Kec. Sukolilo, Surabaya, Jawa Timur 60111, Indonesia</p>
              </div>
            </a>

            <a href="javascript:void(0)">
              <div class="social-contact">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>contact@true-bengkel.com</p>
              </div>
            </a>

            <a href="javascript:void(0)">
              <div class="social-contact">
                <i class="bi bi-telephone"></i>
                <h4>Call Us:</h4>
                <p>+628123456789</p>
              </div>
            </a>

            <a href="javascript:void(0)">
              <div class="social-contact">
                <i class="bi bi-clock"></i>
                <h4>Opening Hours:</h4>
                <p><b>Mon-Sat:</b> 8AM-4PM; <b>Sunday:</b> Closed</p>
              </div>
            </a>
            
          </div>
          
        </div>
        
        <div class="col-md-7 mt-5 d-flex align-items-stretch">
          <div class="info">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16673.13208541504!2d112.7937557!3d-7.275847100000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa10ea2ae883%3A0xbe22c55d60ef09c7!2sPoliteknik%20Elektronika%20Negeri%20Surabaya!5e1!3m2!1sid!2sus!4v1696674447535!5m2!1sid!2sus" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>

      </div>

    </div>
  </section>
@endsection