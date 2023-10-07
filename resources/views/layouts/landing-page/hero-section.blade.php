{{-- Hero Section --}}
<section id="hero" class="hero d-flex align-items-center" style="background-image: url('{{ asset('landing-page/img/pexels-mike-bird-190574.jpg') }}');">
  <div class="container">
    <div class="row justify-content-between gy-5">
      <div class="col-md-12 d-flex flex-column justify-content-center align-items-center text-center">
        <h2>Welcome to True Bengkel</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum esse fuga amet perspiciatis assumenda dignissimos, itaque adipisci accusamus saepe asperiores. Quae totam facere, id recusandae libero ipsam ratione rem at officiis, quibusdam tempore cum odit impedit dignissimos, quo sequi delectus possimus deleniti distinctio aperiam sint inventore! Quibusdam vel esse at.</p>
        <div class="d-flex flex-column">
          <a href="{{ url()->route('landing-page.index') . '#about' }}" class="btn-login">Get Started</a>
        </div>
      </div>
    </div>
  </div>
</section>