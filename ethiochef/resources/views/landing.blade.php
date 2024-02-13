
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
 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
      
       <img src="{{ asset('assets/img/logo.png') }}" alt="">
        <h1>{{__('messages.logo')}}<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('login') }}">{{__('messages.Home')}}</a></li>
          <li><a href="#recipes"> {{__('messages.Recipe')}}</a> </li>
          <li><a href="#about"> {{__('messages.About')}}</a></li>
          <li><a href="#contact"> {{__('messages.Contact')}}</a></li>
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
   
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">{{ __('messages.welcome') }}</h2>
         <div class="container mt-5">
            <div class="logincard card">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                           <a class="nav-link active" id="loginTab" href="#"><i class="bi bi-box-arrow-in-right"></i>  {{ __('messages.loginbtn') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="registerTab" href="#"><i class="bi bi-dash-square-fill"></i> {{ __('messages.Register') }}</a>
                        </li>
                    </ul>
                </div>
               
                <div class="card-body">
                    <form id="loginForm">
                        <div class="form-group">
                         <div class="input">
                          <i class="bi bi-telephone-fill"></i> <input type="tel" class="form-control" minlength="10" maxlength="10" name="phone" id="loginPhoneNumber" placeholder="09*******">
                       
                         </div>
                        </div>
                        <div id="LoginErrorMessage" style="display: none" class="alert alert-danger"></div>
                        <button id="loginBtn" type="button" class="btn btn-primary">{{ __('messages.loginbtn') }}</button>
                        <p>{{ __('messages.noaccount') }} <a href="#" id="switchToRegister">{{ __('messages.toreg') }}</a></p>
                    </form>
                    <form id="registerForm" style="display: none;">
                        <div class="form-group">
                          <div class="input">
                            <i class="bi bi-telephone-fill"></i> <input id="phoneNumber" name="phone" type="tel" minlength="10" maxlength="10" class="form-control" id="loginPhoneNumber" placeholder="09*******">
                         
                           </div> 
                       </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="termsCheckbox">
                            <label class="form-check-label" for="termsCheckbox">{{ __('messages.agree') }} <a href="#">{{ __('messages.terms') }}</a></label>
                        </div>
                      
                        <button id="registerButton" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#otpModal">{{ __('messages.Register') }}</button>
                        <p>{{ __('messages.haveaccount') }} <a href="#" id="switchToLogin">{{ __('messages.tologin') }}</a></p>
                    </form>
                </div>
            </div>
        </div>
        <div>

        </div>
       
        <div class="modal fade"   id="otpModal" tabindex="-1" aria-labelledby="otpModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div  class="modal-content" >
                    <div class="modal-header">
                        <h5 class="modal-title" id="otpModalLabel">{{__('messages.Enter_OTP_Code')}}</h5>
                        <button type="button"  class="btn-close closeButton" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="otpForm">
                            <div class="mb-3">
                                <label for="otpCode" class="form-label">{{__('messages.OTP_Code')}}</label>
                                <input type="text" class="form-control" id="otpCode" name="otp" required>
                                <input type="hidden" id="otpPhoneNumber" name="phone">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                      <div id="errorMessage" class="alert alert-danger"></div>
                        <button type="button" class="btn btn-secondary closeButton" data-bs-dismiss="modal">{{__('messages.close')}}</button>
                        <button type="button" class="btn btn-primary" id="verifyOTPButton">{{__('messages.Verify_OTP')}}</button>
                    </div>
                </div>
            </div>
        
      </div>

        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="{{ asset('assets/img/hero-img.png') }}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">
<!-- ======= Recepe Section ======= -->

<section id="recipes" class="recipes">
 
  <div id="menu" class="menu-main pad-top-100 pad-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2 class="block-title text-center"> 
                        {{ __('messages.featuredRecipe') }} 
      </h2>
                 </div>
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
                          <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
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
                          </div>
                       

                              <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
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
                          </div>
                          <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
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
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
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
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
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
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
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
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
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
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
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
                        </div>
                      </div>
                      </div>
                  
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end menu -->
</section>

   
    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="zoom-out">
    <div class="row justify-content-center g-0">
      <div class="col-xl-9">
        <div class="col-lg-6 text-center mx-auto mb-3 mb-md-5 mt-4">
          <h5 class="fw-bold text-danger fs-3 fs-lg-5 lh-sm my-6"> </h5>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-3 mb-6">
            <div class="text-center"><img class="shadow-icon" src="{{ asset('assets/img/cutlery.png') }}" height="112" alt="...">
              <h5 class="mt-4 fw-bold">100</h5>
              <p class="mb-md-0">{{__('messages.total_food_recipes')}}</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 mb-6">
            <div class="text-center"><img class="shadow-icon" src="{{ asset('assets/img/menu.png') }}" height="112" alt="...">
              <h5 class="mt-4 fw-bold">10</h5>
              <p class="mb-md-0">{{__('messages.recipes_categories')}}</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 mb-6">
            <div class="text-center"><img class="shadow-icon" src="{{ asset('assets/img/man.png') }}" height="112" alt="...">
              <h5 class="mt-4 fw-bold">10</h5>
              <p class="mb-md-0">{{__('messages.total_happy_customers')}}</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 mb-6">
            <div class="text-center"><img class="shadow-icon" src="{{ asset('assets/img/pot.png') }}" height="112" alt="...">
              <h5 class="mt-4 fw-bold">10</h5>
              <p class="mb-md-0">{{__('messages.our_chefs')}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </section><!-- End Stats Counter Section -->

    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>{{__('messages.about_us')}}</h2>
          <p>{{__('messages.learn_more_about_us')}} <span>{{__('messages.about_us')}}</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/hero-img.png') }}") ;" data-aos="fade-up" data-aos-delay="150">
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                {{__('messages.about_us_description')}}
             </p>
           
            </div>
          </div>
        </div>

      </div>
    </section>
         
  <!-- End About Section -->
   
   

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Need Help? <span>Contact Us</span></p>
        </div>


        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <p>A108 Adam Street,Ethiopia, NY 535022</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>contact@EthioChef.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+251 900 0000</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div><strong>Mon-Sat:</strong> 11AM - 23PM;
                  <strong>Sunday:</strong> Closed
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form><!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->
    <section class="py-0">
      <div class="bg-holder" style="background-image:url('{{ asset('assets/img/gallery/cta-two-bg.png') }}');background-position:center;background-size:cover;">
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
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js')}}"></script>
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
    $(document).ready(function() {
        $('.tab-title-menu').click(function() {
            $('.tab-title-menu').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>
<script src="assets/js/axios.js"></script>

<script>
      document.getElementsByClassName('closeButton')[0].addEventListener('click', function() {
       
        const errorMessage = document.getElementById('errorMessage');
                    errorMessage.innerText = '';
      });
      //loginBtn

    document.getElementById('loginBtn').addEventListener('click', function() {
        const form = document.getElementById('loginForm');
        const formData = new FormData(form);
        const jsonData = {};

        formData.forEach((value, key) => {
            jsonData[key] = value;
        });

        axios.post('{{ route('authUser') }}', jsonData)
            .then(response => {
              if (response.data.status === 'false') {
               
                    const errorMessage = document.getElementById('LoginErrorMessage');
                    errorMessage.style.display="block";
                    errorMessage.innerText = '{{__('messages.invalid_credentials')}}';
                }else{
                  window.location.href = '{{ route('login') }}';
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });
         
    document.getElementById('registerButton').addEventListener('click', function() {
      const otpPhoneNumber=document.getElementById('otpPhoneNumber');
      const phoneNumber=document.getElementById('phoneNumber');
     otpPhoneNumber.setAttribute('value',phoneNumber.value);
        const form = document.getElementById('registerForm');
        const formData = new FormData(form);
        const jsonData = {};

        formData.forEach((value, key) => {
            jsonData[key] = value;
        });

        axios.post('{{ route('register') }}', jsonData)
            .then(response => {
              if (response.data.status === 'false') {
               
                    const errorMessage = document.getElementById('errorMessage');
                    errorMessage.innerText = '{{__('messages.errorMessage_2')}}';
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });
    document.getElementById('verifyOTPButton').addEventListener('click', function() {
        const form = document.getElementById('otpForm');
        const formData = new FormData(form);
        const jsonData = {};

        formData.forEach((value, key) => {
            jsonData[key] = value;
        });

        axios.post('{{ route('verifyOtp') }}', jsonData)
            .then(response => {
              if (response.data.status === true) {
                    // Redirect to home page on successful OTP verification
                    window.location.href = '{{ route('login') }}';
                   
                } else {
                    // Show error message for invalid OTP 
                     errorMessage = document.getElementById('errorMessage');
                    errorMessage.innerText = '{{__('messages.invalid_otp')}}';
                }
            })
            .catch(error => {
              errorMessage = document.getElementById('errorMessage');
                    errorMessage.innerText ='{{__('messages.invalid_otp')}}';
            });
    });
</script>

</body>

</html>

