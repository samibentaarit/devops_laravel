@extends('layouts.layoutf')

@section('content')
<!-- about breadcrumb -->
<section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-2">
        <h2 class="title">About Us</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> About </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
  <!-- /about-6-->
  <section class="w3l-cta4 py-5">
      <div class="container py-lg-5">
        <div class="ab-section text-center">
          <h6 class="sub-title">About Us</h6>
          <h3 class="hny-title">Travel to make memories all around the world.</h3>
          <p class="py-3 mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum labore sed, veniam nisi sunt laboriosam ducimus, odio
            aspernatur fugiat minima blanditiis dignissimos.</p>
            <a href="services.html" class="btn btn-style btn-primary">Read More</a>
        </div>
        <div class="row mt-5">
          <div class="col-md-9 mx-auto">
            <img src="{{ Vite::asset('resources/assetsf/images/banner3.jpg') }}" class="img-fluid" alt="">
          </div>
        </div>
      </div>
  </section>
  <!-- //about-6-->
   <!-- /content-6-->
   <section class="w3l-content-6 py-5">
    <div class="container py-lg-5">
      <div class="row">
        <div class="col-lg-6 content-6-left pr-lg-5">
          <h6 class="sub-title">Why Choose Us</h6>
          <h3 class="hny-title">Life begins at the end of your comfort zone.</h3>
        </div>
        <div class="col-lg-6 content-6-right mt-lg-0 mt-4">
          <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum labore sed, veniam nisi sunt laboriosam ducimus, odio
            aspernatur fugiat minima blanditiis dignissimos.</p>
            <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum labore sed, veniam nisi sunt laboriosam ducimus, odio
              aspernatur fugiat minima blanditiis dignissimos.</p>
              <a href="services.html" class="btn btn-style btn-primary mt-4">Read More</a>
        </div>
      </div>
    </div>
</section>
<!-- //content-6-->
<section class="w3l-grids1">
  <div class="hny-three-grids py-5">
    <div class="container py-lg-5">
      <div class="row">
        <div class="col-md-4 col-sm-6 mt-0 grids5-info">

          <a href="#url"><img src="{{ Vite::asset('resources/assetsf/images/g1.jpg') }}" class="img-fluid" alt=""></a>
          <h5>Lorem</h5>
          <h4><a href="#url">Investor Relations</a></h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam esse? dolores impedit doloremque.</p>
        </div>
        <div class="col-md-4 col-sm-6 mt-sm-0 mt-5 grids5-info">
          <a href="#url"><img src="{{ Vite::asset('resources/assetsf/images/g2.jpg') }}" class="img-fluid" alt=""></a>
          <h5>Lorem</h5>
          <h4><a href="#url">
            Partner With Care</a></h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam esse? dolores impedit doloremque.</p>
        </div>
        <div class="col-md-4 col-sm-6 mt-md-0 mt-5 grids5-info">
          <a href="#url"><img src="{{ Vite::asset('resources/assetsf/images/g3.jpg') }}" class="img-fluid" alt=""></a>
          <h5>Lorem</h5>
          <h4><a href="#url">Customer Care</a></h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam esse? dolores impedit doloremque.</p>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- stats -->
  <section class="w3l-statshny py-5" id="stats">
    <div class="container py-lg-5 py-md-4">
      <div class="w3-stats-inner-info">
        <div class="row">
          <div class="col-lg-4 col-6 stats_info counter_grid text-left">
            <span class="fa fa-smile-o"></span>
            <p class="counter">1730</p>
            <h4>Happy Customers</h4>
          </div>
          <div class="col-lg-4 col-6 stats_info counter_grid1 text-left">
            <span class="fa fa-users"></span>
            <p class="counter">730</p>
            <h4>Custom Products</h4>
          </div>
          <div class="col-lg-4 col-6 stats_info counter_grid mt-lg-0 mt-5 text-left">
            <span class="fa fa-database"></span>
            <p class="counter">30</p>
            <h4>branches</h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //stats -->
  <!-- team -->
  <section class="w3l-team" id="team">
    <div class="team-block py-5">
      <div class="container py-lg-5">
        <div class="title-content text-center mb-lg-3 mb-4">
          <h6 class="sub-title">Our team</h6>
          <h3 class="hny-title">Meet our Guides</h3>
        </div>
        <div class="row">
          <div class="col-lg-3 col-6 mt-lg-5 mt-4">
            <div class="box16">
              <a href="#url"><img src="{{ Vite::asset('resources/assetsf/images/team1.jpg') }}" alt="" class="img-fluid" /></a>
              <div class="box-content">
                <h3 class="title"><a href="#url">Alexander</a></h3>
                <span class="post">Description</span>
                <ul class="social">
                  <li>
                    <a href="#" class="facebook">
                      <span class="fa fa-facebook-f"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <span class="fa fa-twitter"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6 mt-lg-5 mt-4">
            <div class="box16">
              <a href="#url"><img src="{{ Vite::asset('resources/assetsf/images/team2.jpg') }}" alt="" class="img-fluid" /></a>
              <div class="box-content">
                <h3 class="title"><a href="#url">Victoria</a></h3>
                <span class="post">Description</span>
                <ul class="social">
                  <li>
                    <a href="#" class="facebook">
                      <span class="fa fa-facebook-f"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <span class="fa fa-twitter"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6 mt-lg-5 mt-4">
            <div class="box16">
              <a href="#url"><img src="{{ Vite::asset('resources/assetsf/images/team3.jpg') }}" alt="" class="img-fluid" /></a>
              <div class="box-content">
                <h3 class="title"><a href="#url">Smith roy</a></h3>
                <span class="post">Description</a></span>
                <ul class="social">
                  <li>
                    <a href="#" class="facebook">
                      <span class="fa fa-facebook-f"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <span class="fa fa-twitter"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6 mt-lg-5 mt-4">
            <div class="box16">
              <a href="#url"><img src="{{ Vite::asset('resources/assetsf/images/team4.jpg') }}" alt="" class="img-fluid" /></a>
              <div class="box-content">
                <h3 class="title"><a href="#url">Johnson</a></h3>
                <span class="post">Description</a></span>
                <ul class="social">
                  <li>
                    <a href="#" class="facebook">
                      <span class="fa fa-facebook-f"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <span class="fa fa-twitter"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //team -->




@endsection
@section('scripts')
    @parent
    <script>
        // Scripts spécifiques au dashboard
       alert("Dashboard script loaded");
    </script>
@endsection
