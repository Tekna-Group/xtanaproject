<!DOCTYPE html>
<html  lang="en"  dir="ltr" data-bs-theme="light" data-color-theme="Green_Theme" data-layout="vertical">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Required meta tags -->
        <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="{{asset('images/icon.png')}}" />

    <!-- Core Css -->
    <link rel="stylesheet" href="{{asset('design/assets/css/styles.css')}}" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <style>
        .slick-prev:before, .slick-next:before { 
            color:green !important;
        }
      .slick-track
      {
        margin-left:0px !important;
      }
        .renz {
          transition: filter 0.3s ease, color 0.3s ease;
        }
        .renz:hover {
          filter: grayscale(1) brightness(0) contrast(100%);
        }
        .filter-green:hover {
          filter: grayscale(100%) brightness(0%);
        }

            .move-up {
                margin-top: -25px; /* Adjust the negative value to move the icon up */
                margin-left: -80px; /* Adjust the negative value to move the icon up */
            }
            .move-left {
                margin-top: -40px; /* Adjust the negative value to move the icon up */
                margin-left: 40px; /* Adjust the negative value to move the icon up */
            }
            .green-icon {
              filter: invert(30%) sepia(60%) saturate(500%) hue-rotate(120deg);

            }
            .filter-rgb {
              /* filter: grayscale(100%) brightness(0%) saturate(120%) contrast(121%); */
              opacity: 0.3 !important;
          }
          .filter-rgb:hover {
              /* filter: grayscale(100%) brightness(0%) saturate(120%) contrast(121%); */
              opacity: 1 !important;
              filter: grayscale(1) brightness(0) contrast(100%);
          }
          .font{
            font-size:15px;
          }

          /* Default (large screens) */
    body {
        font-size: 18px;
    }

    /* Small screens (Mobile) */
    @media (max-width: 480px) {
      .font {
            font-size: 8px;  /* Even smaller font size for small screens */
            
        }
        
    }

    /* Medium screens (Tablets) */
    @media (max-width: 768px) {
      .font {
            font-size: 12px;  /* Smaller font size for medium screens */
        }

      
    }

    /* Larger tablets / small laptops */
    @media (max-width: 1024px) {
      .move-up {
                margin-top: -25px; /* Adjust the negative value to move the icon up */
                margin-left: -20px; /* Adjust the negative value to move the icon up */
            }
      
    }
    .chat-list {
  height: 200px; /* Ensure height is set */
  overflow-y: auto; /* Enables scrolling */
}

    /* Large screens (Desktops and bigger) */



    /* For screens with a minimum width of 768px (medium to large screens) */


</style>
<style>
  .loader {
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background: url("{{ asset('/images/loader.gif') }}") 50% 50% no-repeat white;
      opacity: .8;
      background-size: 120px 120px;
  }
</style>
    <!-- <title>Spike Bootstrap Admin</title> -->
</head>
<body>
  <div id="loader" style="display:none;" class="loader">
  </div>
    <div class="preloader">
        <img
          src="{{asset('design/assets/images/logos/loader.svg')}}"
          alt="loader"
          class="lds-ripple img-fluid"
        />
      </div>
      <div id="main-wrapper" class="p-0 bg-white">
        <div
          class="auth-login position-relative overflow-hidden d-flex align-items-center justify-content-center px-7 px-xxl-0 rounded-3 h-n20"
        >
          <div class="auth-login-shape position-relative w-100">
            <div
              class="auth-login-wrapper card mb-0 container position-relative z-1 h-100 max-h-900"
              data-simplebar
            >
              <div class="card-body ">
                <a href="#" class="" target='_blank'>
                  <img
                    src="{{asset('xtana/XTANA_LOGO.svg')}}"
                    class="light-logo mb-3 mt-2"
                    alt="Logo-Dark"
                    style='width:250px;'
                  />
                 
                </a>
                <div
                  class="row align-items-center justify-content-around pt-6 pb-5"
                >
                  
                  <div class="col-lg-12 col-xl-12">
                  @yield('content')
                  </div>
                </div>
              </div>
            </div>
           
          </div>
        </div>
        <div class="light-transparent sidebartoggler"></div>
      </div>
    {{-- <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div> --}}
  
    <script src="{{asset('design/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('design/assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
    <script src="{{asset('design/assets/js/theme/app.init.js')}}"></script>
    <script src="{{asset('design/assets/js/theme/theme.js')}}"></script>
    <script src="{{asset('design/assets/js/theme/app.min.js')}}"></script>
    <script src="{{asset('design/assets/js/theme/sidebarmenu.js')}}"></script>
    <script src="{{asset('design/assets/js/theme/feather.min.js')}}"></script>
    {{-- <script >
        window.onload = function() {
            var userImage = document.getElementById("light-layout");
            userImage.click();
        };
    </script> --}}
    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $('.variable-width  ').slick({
            arrows: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            arrows: true,
            
            responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
      }
    },
    {
      breakpoint: 720,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
            });
            function show() {
            document.getElementById("loader").style.display = "block";
        }
        </script>
    @include('sweetalert::alert')
</body>
</html>
