@extends('frontend.layouts.app')






@section('content')

<!-- hero area -->
<section class="hero-area bg-primary" id="parallax">
    <div class="container">
      <div class="row">
        <div class="col-lg-11 mx-auto">
          <h1 class="text-white font-tertiary">Hi! Welcome <br>To<br> SEQUENTIAL LOGIC</h1>
        </div>
      </div>
    </div>
    {{-- <div class="layer-bg w-100">
      <img class="img-fluid w-100" src="images/illustrations/leaf-bg.png" alt="bg-shape">
    </div>
    <div class="layer" id="l2">
      <img src="images/illustrations/dots-cyan.png" alt="bg-shape">
    </div>
    <div class="layer" id="l3">
      <img src="images/illustrations/leaf-orange.png" alt="bg-shape">
    </div>
    <div class="layer" id="l4">
      <img src="images/illustrations/dots-orange.png" alt="bg-shape">
    </div>
    <div class="layer" id="l5">
      <img src="images/illustrations/leaf-yellow.png" alt="bg-shape">
    </div>
    <div class="layer" id="l6">
      <img src="images/illustrations/leaf-cyan.png" alt="bg-shape">
    </div>
    <div class="layer" id="l7">
      <img src="images/illustrations/dots-group-orange.png" alt="bg-shape">
    </div>
    <div class="layer" id="l8">
      <img src="images/illustrations/leaf-pink-round.png" alt="bg-shape">
    </div>
    <div class="layer" id="l9">
      <img src="images/illustrations/leaf-cyan-2.png" alt="bg-shape">
    </div> --}}
    <!-- social icon -->
    <ul class="list-unstyled ml-5 mt-3 position-relative zindex-1">
      <li class="mb-3"><a class="text-white" href="https://themefisher.com/"><i class="ti-facebook"></i></a></li>
      <li class="mb-3"><a class="text-white" href="https://themefisher.com/"><i class="ti-instagram"></i></a></li>
      <li class="mb-3"><a class="text-white" href="https://themefisher.com/"><i class="ti-dribbble"></i></a></li>
      <li class="mb-3"><a class="text-white" href="https://themefisher.com/"><i class="ti-twitter"></i></a></li>
    </ul>
    <!-- /social icon -->
  </section>
  <!-- /hero area -->

  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto text-center">
          <p class="font-secondary paragraph-lg text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
            do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
            in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          <a href="about.html" class="btn btn-transparent">know more</a>
        </div>
      </div>
    </div>
  </section>

  <!-- skills -->
<section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-title">Skills</h2>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
          <div class="card shadow text-center">
            <div class="position-relative rounded-top progress-wrapper" data-color="#fdb157" style="background-color: rgb(253, 177, 87);">
              <div class="wave" data-progress="90%" style="bottom: 90%;"></div>
            </div>
            <div class="card-footer bg-white">
              <h4 class="card-title">Web Design (90%)</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
          <div class="card shadow text-center">
            <div class="position-relative rounded-top progress-wrapper" data-color="#9473e6" style="background-color: rgb(148, 115, 230);">
              <div class="wave" data-progress="60%" style="bottom: 60%;"></div>
            </div>
            <div class="card-footer bg-white">
              <h4 class="card-title">Logo Design (60%)</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
          <div class="card shadow text-center">
            <div class="position-relative rounded-top progress-wrapper" data-color="#bdecf6" style="background-color: rgb(189, 236, 246);">
              <div class="wave" data-progress="80%" style="bottom: 80%;"></div>
            </div>
            <div class="card-footer bg-white">
              <h4 class="card-title">After Effects (80%)</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
          <div class="card shadow text-center">
            <div class="position-relative rounded-top progress-wrapper" data-color="#ffbcaa" style="background-color: rgb(255, 188, 170);">
              <div class="wave" data-progress="70%" style="bottom: 70%;"></div>
            </div>
            <div class="card-footer bg-white">
              <h4 class="card-title">Web App (70%)</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /skills -->



@endsection
