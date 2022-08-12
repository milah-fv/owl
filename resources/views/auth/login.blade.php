
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css" ></style>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('app_assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('app_assets/img/favicon.png')}}">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('app_assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('app_assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('app_assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('app_assets/css/soft-ui-dashboard.css?v=1.0.3') }}" rel="stylesheet" /> 
    <link rel="stylesheet" type="text/css" href="{{ asset('app_assets/css/app.css') }}">
    <title>Ingresar</title>     
</head>

<body class="">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Bienvenido</h3>
                  <p class="mb-0">Ingresa tu email y contraseña</p>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <label>Email</label>
                    <div class="mb-3">
                      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" aria-label="Email" id="email" aria-describedby="email-addon" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <label>Contraseña</label>
                    <div class="mb-3">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" aria-label="Password" aria-describedby="password-addon" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                             @enderror
                    </div>
                   
                    <div class="text-center">
                      <button  type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Ingresar</button>
                           <!-- @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                             -->
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('{{ asset('app_assets/img/curved-images/curved6.jpg') }}')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  
  <!--   Core JS Files   -->
    

    <script src="{{ asset('app_assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('app_assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('app_assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('app_assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('app_assets/js/plugins/chartjs.min.js') }}"></script>
    
    
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('app_assets/js/soft-ui-dashboard.min.js?v=1.0.3') }}"></script>
    <script type="text/javascript" src="{{ asset('app_assets/js/app.js') }}"></script>

</body>

</html>
