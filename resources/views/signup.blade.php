@extends('layouts.layoutf')

@section('content')
<section class="vh-100" style="padding-top: 200px; padding-bottom: 500px; margin-left:150px;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0"></span>

        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem; margin-left: 100px;">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; text-align: center;"></h3>



            <div class="row">
              <div class="col-md-6">
                <div data-mdb-input-init class="form-outline mb-2">
                  <label class="form-label" for="firstname">First Name</label>
                  <input type="text" id="firstname" class="form-control form-control-lg" />
                </div>
              </div>

              <div class="col-md-6">
                <div data-mdb-input-init class="form-outline mb-2">
                  <label class="form-label" for="lastname">Last Name</label>
                  <input type="text" id="lastname" class="form-control form-control-lg" />
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-6">
                <div data-mdb-input-init class="form-outline mb-2">
                  <label class="form-label" for="firstname">Phone number </label>
                  <input type="text" id="firstname" class="form-control form-control-lg" />
                </div>
              </div>

              <div class="col-md-6">
                <div data-mdb-input-init class="form-outline mb-2">
                  <label class="form-label" for="lastname">CIN</label>
                  <input type="text" id="lastname" class="form-control form-control-lg" />
                </div>
              </div>
            </div>
            <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label" for="email">Email Address</label>
              <input type="email" id="email" class="form-control form-control-lg" />
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label" for="password">Password</label>
              <input type="password" id="password" class="form-control form-control-lg" />
            </div>

            <div class="pt-1 mb-4">
              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-lg btn-block" type="button">Sign up</button>
            </div>



          </form>

        </div>

      </div>

      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="{{ Vite::asset('resources/assetsf/images/banner1.jpg') }}"
          class="img-fluid" alt="Login image"
          style="width: 80%; height: 500px; object-fit: cover; object-position: left; margin-left: -70px; margin-top: -40px;">
      </div>

    </div>
  </div>
</section>
@endsection

@section('scripts')
    @parent
    <script>
        // Scripts spécifiques au dashboard
        alert("Dashboard script loaded");
    </script>
@endsection
