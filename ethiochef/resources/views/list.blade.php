
<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Ethio-Chef</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
      <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">


  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


  <!-- Template Main CSS File -->

  <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/mini.css') }}">
  

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
      
       <img src="assets/img/logo.png" alt="">
        <h1>{{__('messages.logo')}}<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
            <li><a href="{{ route('login') }}">{{__('messages.Home')}}</a></li>
          <li class="dropdown"><a href="#"><span>{{__('messages.Catagories')}}</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Habesha dishes/ባህላዊ ምግቦች/nyaataa aadaa</a></li>
              <li><a href="#">European dish/የውጭ  ምግቦች/nyaataa biyya ala</a></li>
              <li><a href="#">Juice, Smoothie, Shake/ጭማቂ/cunfaa</a></li>
              <li><a href="#">Pizza & Burger/ፒዛ እና በርገር/pizaa fi burgeerii</a></li>
              <li><a href="#">Kukis &Chips/ኩኪስ እና ችፕስ/chipsiif kukisii</a></li>
              <li><a href="#">Fasting Foods/የፆም ምግቦች/nyaataa tsoomii</a></li>
              
            </ul>
          </li>
        
          
        </ul>
      </nav><!-- .navbar -->
     
        <div class="search-bar">
            <span class="search-icon">
              <i class="bi bi-search"></i>
            </span>
            <input type="text" class="form-control" placeholder="{{ __('messages.search_res') }}">
        </div>

     
        <select class="lang" onchange="location = this.value;">
            <option value=""> {{ App::getLocale() }}</option>
            <option value="{{ route('set.locale', ['locale' => 'en']) }}">English</option>
            <option value="{{ route('set.locale', ['locale' => 'am']) }}">Amharic</option>
            <option value="{{ route('set.locale', ['locale' => 'om']) }}">Oromiffa</option>
        </select>
        <div class="dropdown">
          <button class="dropbtn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i  class="bi bi-gear-fill"></i>
         </button>
          <div class="dropdown-content">
         
            <a class="dropdown-item" href="{{route('logout')}}">{{ __('messages.logout') }}</a>
                  <a class="dropdown-item" href="#">{{ __('messages.unsubscribe') }}</a>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#termsModal">{{ __('messages.terms') }}</a>
          </div>
        </div>  
        
        
         

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
<!-- Modal -->
<div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="termsModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="termsModalLabel">Terms and Conditions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Insert your terms and conditions content here -->
        Terms and conditions content goes here...
        <!-- Provided content in multiple languages -->
        "Information we collect
        ...
        ምዝገባ
        ..."
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero-search d-flex align-items-center section-bg">
    <div class="container">
        <div class="hero-content">
            <h1>{{ __('messages.list_hero') }}</h1>
            <p>{{ __('messages.list_hero_small') }}</p>
            <div class="search-bar">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="{{ __('messages.search_recepe') }}">
                    <div class="input-group-append">
                        <button id="search-btn" class="search-btn" type="button">{{ __('messages.search') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Section -->

  <main id="main">
<!-- ======= Recepe Section ======= -->

<section id="recipes" class="recipes">
 
  <div id="menu" class="menu-main pad-top-100 pad-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              
                <div class="tab-menu">
                    <div class="slider slider-nav ">
                        <div class="tab-title-menu active">
                            <h2> {{ __('messages.STARTERS') }}</h2>
                            <p> <i class="icons"><img src="{{ asset('assets/img/gallery/starter.png') }}" alt="" srcset=""></i> </p>
                        </div>
                        <div class="tab-title-menu ">
                            <h2>{{ __('messages.MAIN') }}</h2>
                            <p> <i class="icons"><img src="{{ asset('assets/img/gallery/main.png') }}" alt="" srcset=""></i> </p>
                      
                        </div>
                        <div class="tab-title-menu">
                            <h2>{{ __('messages.DESERTS') }}</h2>
                            <p> <i class="icons"><img src="{{ asset('assets/img/gallery/desert.png') }}" alt="" srcset=""></i> </p>
                      
                        </div>
                        <div class="tab-title-menu">
                            <h2>{{ __('messages.DRINKS') }}</h2>
                            <p> <i class="icons"><img src="{{ asset('assets/img/gallery/drink.png') }}" alt="" srcset=""></i> </p>
                      
                        </div>
                    </div>

                      <div class="container">
                        <div class="row h-100">
                          <div class="col-lg-7 mx-auto text-center mb-6">
                            <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3"><br></h5>
                          </div>
                        </div>
                        <div class="row gx-2">
                          <a href="{{route('cook', ['id' => 45, 'name' => "piza-hub"]);}}">  
                            <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
                                <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100" src="{{ asset('assets/img/gallery/burger.png') }}" alt="..." />
                                  <div class="card-img-overlay ps-0"><span class="badge bg-danger p-2 ms-3"><i class="bi bi-egg-fried"></i><span class="fs-0">{{ __('messages.New') }}</span></span><span class="badge bg-primary ms-2 me-1 p-2"><i class="bi bi-stopwatch"></i><span class="fs-0">{{ __('messages.Fast') }}</span></span></div>
                                  <div class="card-body ps-0">
                                    <div class="d-flex align-items-center mb-3"><img class="img-icon" src="{{ asset('assets/img/chef.png') }}" alt="" />
                                      <div class="flex-1 ms-3">
                                        <h5 class="mb-0 ">{{ __('messages.pizza-hub') }}</h5><span class="text-primary fs--1 me-1"><i class="bi bi-star-fill"></i></span><span class="mb-0 text-primary">46</span>
                                      </div>
                                    </div>
                                    <span class="badge bg-soft-danger p-2"><span class="fw-bold fs-1 text-danger">{{ __('messages.Cook-Now') }}</span></span>
                                 </div>
                                </div>
                              </a> 
                              </div>
                             
                              <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
                                <a href="{{route('cook', ['id' => 45, 'name' => "piza-hub"]);}}">  
                                <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100" src="{{ asset('assets/img/gallery/burger.png') }}" alt="..." />
                                  <div class="card-img-overlay ps-0"><span class="badge bg-danger p-2 ms-3"><i class="bi bi-egg-fried"></i><span class="fs-0">{{ __('messages.New') }}</span></span><span class="badge bg-primary ms-2 me-1 p-2"><i class="bi bi-stopwatch"></i><span class="fs-0">{{ __('messages.Fast') }}</span></span></div>
                                  <div class="card-body ps-0">
                                    <div class="d-flex align-items-center mb-3"><img class="img-icon" src="{{ asset('assets/img/chef.png') }}" alt="" />
                                      <div class="flex-1 ms-3">
                                        <h5 class="mb-0 ">{{ __('messages.pizza-hub') }}</h5><span class="text-primary fs--1 me-1"><i class="bi bi-star-fill"></i></span><span class="mb-0 text-primary">46</span>
                                      </div>
                                    </div><span class="badge bg-soft-danger p-2"><span class="fw-bold fs-1 text-danger">{{ __('messages.Cook-Now') }}</span></span>
                                  </div>
                                </div>
                              </a>
                              </div>
                              <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
                                <a href="{{route('cook', ['id' => 45, 'name' => "piza-hub"]);}}">  
                                <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100" src="{{ asset('assets/img/gallery/burger.png') }}" alt="..." />
                                  <div class="card-img-overlay ps-0"><span class="badge bg-danger p-2 ms-3"><i class="bi bi-egg-fried"></i><span class="fs-0">{{ __('messages.New') }}</span></span><span class="badge bg-primary ms-2 me-1 p-2"><i class="bi bi-stopwatch"></i><span class="fs-0">{{ __('messages.Fast') }}</span></span></div>
                                  <div class="card-body ps-0">
                                    <div class="d-flex align-items-center mb-3"><img class="img-icon" src="{{ asset('assets/img/chef.png') }}" alt="" />
                                      <div class="flex-1 ms-3">
                                        <h5 class="mb-0 ">{{ __('messages.pizza-hub') }}</h5><span class="text-primary fs--1 me-1"><i class="bi bi-star-fill"></i></span><span class="mb-0 text-primary">46</span>
                                      </div>
                                    </div><span class="badge bg-soft-danger p-2"><span class="fw-bold fs-1 text-danger">{{ __('messages.Cook-Now') }}</span></span>
                                  </div>
                                </div>
                              </a>
                              </div>
                              <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
                                <a href="{{route('cook', ['id' => 45, 'name' => "piza-hub"]);}}">  
                                <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100" src="{{ asset('assets/img/gallery/burger.png') }}" alt="..." />
                                  <div class="card-img-overlay ps-0"><span class="badge bg-danger p-2 ms-3"><i class="bi bi-egg-fried"></i><span class="fs-0">{{ __('messages.New') }}</span></span><span class="badge bg-primary ms-2 me-1 p-2"><i class="bi bi-stopwatch"></i><span class="fs-0">{{ __('messages.Fast') }}</span></span></div>
                                  <div class="card-body ps-0">
                                    <div class="d-flex align-items-center mb-3"><img class="img-icon" src="{{ asset('assets/img/chef.png') }}" alt="" />
                                      <div class="flex-1 ms-3">
                                        <h5 class="mb-0 ">{{ __('messages.pizza-hub') }}</h5><span class="text-primary fs--1 me-1"><i class="bi bi-star-fill"></i></span><span class="mb-0 text-primary">46</span>
                                      </div>
                                    </div><span class="badge bg-soft-danger p-2"><span class="fw-bold fs-1 text-danger">{{ __('messages.Cook-Now') }}</span></span>
                                  </div>
                                </div>
                              </a>
                              </div>
                          
                         
                         
                         
                      </div>
                      <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                          <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">{{ __('messages.Previous') }}</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">{{ __('messages.Next') }}</a>
                          </li>
                        </ul>
                      </nav>
                                          
                      </div>
                  
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end menu -->
</section>
 

   
    
    <section class="py-0">
      <div class="bg-holder" style="background-image:url(assets/img/gallery/cta-two-bg.png);background-position:center;background-size:cover;">
        <div class="container">
          <div class="row flex-center">
            <div class="col-xxl-9 py-7 text-center">
              <h1 class="fw-bold mb-4 text-white fs-6">{{__('messages.footer-hero')}}</h1>
            </div>
          </div>
        </div>
      </div>
      <!--/.bg-holder-->

     
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              A108 Adam Street <br>
             Addis Ababa, Ethiopia<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +251 900 0000<br>
              <strong>Email:</strong> info@EthioChef.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat: 11AM</strong> - 23PM<br>
              Sunday: Closed
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Ethio-Chef</span></strong>. All Rights Reserved
      </div>
      
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
      $(document).ready(function() {
          $('#loginTab').click(function() {
              $('#loginForm').show();
              $('#registerForm').hide();
              $(this).addClass('active');
              $('#registerTab').removeClass('active');
          });

          $('#registerTab').click(function() {
              $('#loginForm').hide();
              $('#registerForm').show();
              $(this).addClass('active');
              $('#loginTab').removeClass('active');
          });

          $('#switchToRegister').click(function(event) {
              event.preventDefault();
              $('#loginForm').hide();
              $('#registerForm').show();
              $('#registerTab').addClass('active');
              $('#loginTab').removeClass('active');
          });

          $('#switchToLogin').click(function(event) {
              event.preventDefault();
              $('#registerForm').hide();
              $('#loginForm').show();
              $('#loginTab').addClass('active');
              $('#registerTab').removeClass('active');
          });
      });
  </script>
    <script>
      // JavaScript code for initializing the Bootstrap dropdown
      $(document).ready(function() {
          $('.dropdown-toggle').dropdown();
      });
  </script>
   <script>
    $(document).ready(function() {
        $('.tab-title-menu').click(function() {
            $('.tab-title-menu').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>
</body>

</html>