<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Ethio-Chef</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/detail.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/mini.css" rel="stylesheet">
 

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
  
<main>

 <section>
  
<div class="container mt-4">
  <div class="row">
    <div class="col-md-8">
      <div class="conatiner">
        <h1> Scrambled Chick pea</h1>
      </div>
      <div class="card">
        
        <img src="assets/img/menu/menu-item-2.png" class="card-img-top" alt="Blog Image">
        <div class="card-body">
          <h2 class="card-title"> Menu time</h2>
          
          <p class="card-text"> BreakFast</p>
          <p class="card-text"> Lunch</p>
          <p class="card-text"> Dinner</p>
          <hr>
          <p class="card-text">
            <div class="row">
                <div class="col-md-6">
                  <h4>Ingredients</h4>
                  <ol>
                    <li>6 (15-ounce) cans garbanzo beans, drained and rinsed</li>
                    <li>1/4 cup coconut oil</li>
                    <li>1 medium onion, diced</li>
                    <li>2 medium red bell peppers, cored, seeded, and diced</li>
                    <li>2 1/2 teaspoons ground cumin</li>
                    <li>2 teaspoons ground turmeric</li>
                    <li>1 teaspoon garlic powder (no salt)</li>
                    <li>1 teaspoon kosher salt</li>
                    <li>6 cups baby spinach, coarsely chopped</li>
                    <li>6 regular-sized pita breads, halved to form half moons</li>
                  </ol>
                </div>
                <div class="col-md-6">
                    <h4>Steps</h4>
                    <ol>
                      <li>Add half of the chickpeas to a food processor fitted with the blade attachment and pulse until broken down but not puréed. (Alternatively, place in a large bowl and mash with a fork.) Set aside.</li>
                      <li>Heat the coconut oil in a 12-inch (or larger), high-sided skillet over medium heat until shimmering. Add the onions, stir to coat with the oil, and cook until soft, 4 to 5 minutes. Stir in the bell peppers, cumin, turmeric, garlic powder, and salt, and cook until the peppers are tender, about 4 minutes.</li>
                     <!-- Add more steps here -->
                    </ol>
                  </div>
                </div>
                  <div class="d-flex justify-content-center ">
                    <div class="d-flex justify-content-center flex-column gap-2">
                    <div class="flex-item " >
                      <h1>{{ __('messages.share_with_friends') }}</h1>
                      </div>
                    <div class="flex-item " >
                     
                     <button class="btn-outline-info"><i class="bi bi-facebook"></i></button> 
                     <button class="btn-outline-danger"><i class="bi bi-twitter"></i></button> 
                     <button class="btn-outline-info"><i class="bi bi-telegram"></i></button> 
                     <button class="btn-outline-danger"> <i class="bi bi-instagram"></i></button>  
                        
                        
                       

                      </div>
                      </div>
                   </div>


          </p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="conatiner">
        <h4 class="mb-3">{{ __('messages.Related_recipes') }}</h4>
      </div>
      <div class="card">
       
        <div class="card-body">
          <form class="mb-4">
          <br>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="{{ __('messages.search_res') }}">
             
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">{{ __('messages.search') }}</button>
              </div>
            </div>
          </form>

      
          <div class="list-group">
            <div class="d-flex flex-column gap-3">
              <div class="d-flex flex-wrap flex-row gap-5">
                <img class="flex-item" src="assets/img/menu/menu-item-2.png" alt="Post Image">
           
                <div class="d-flex flex-wrap flex-column gap-2">
                  <h5 class="mb-1">Rainbow Fruit Salad</h5>
                  <a href="#" class="card-link">{{ __('messages.Cook-Now') }}</a>
                </div>
              </div>
              <div class="d-flex flex-column gap-3">
                <div class="d-flex flex-wrap flex-row gap-5">
                  <img class="flex-item" src="assets/img/menu/menu-item-3.png" alt="Post Image">
             
                  <div class="d-flex flex-wrap flex-column gap-2">
                    <h5 class="mb-1">Scrambled Chick pea</h5>
                    <a href="#" class="card-link">{{ __('messages.Cook-Now') }}</a>
                  </div>
                </div>
                <div class="d-flex flex-column gap-3">
                  <div class="d-flex flex-wrap flex-row gap-5">
                    <img class="flex-item" src="assets/img/menu/menu-item-4.png" alt="Post Image">
               
                    <div class="d-flex flex-wrap flex-column gap-2">
                      <h5 class="mb-1">Rainbow Fruit Salad</h5>
                      <a href="#" class="card-link">{{ __('messages.Cook-Now') }}</a>
                    </div>
                  </div>
            
             
              </div>
             
              
             
            <!-- Add more recent posts here -->
          </div>
          <nav aria-label="Recent Posts Navigation">
            <ul class="pagination justify-content-center mt-4">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">{{ __('messages.Previous') }}</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">{{ __('messages.Next') }}</a>
                  </li>        
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
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