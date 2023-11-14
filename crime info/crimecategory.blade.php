
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Jagoron</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('import/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('import/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('import/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('import/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('import/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('import/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('import/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('import/assets/css/main.css')}}" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Header ======= -->
  <!--<section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section> <!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="{{URL::to ('homepage')}}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        
        <img src="{{asset('import/assets/img/logo1.png')}}" alt="" width="150px"> 
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{URL::to ('homepage')}}">Home</a></li>
          <li><a href="./query/index.php">Query</a></li>
          <li class="dropdown"><a href="#"><span>Law & Crime</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Crime information</a></li>
              <li><a href="law_category.php">Law information</a></li>
              <!--<li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>-->
            </ul>
          </li>
          <li><a href="appointment.php">Appointment</a></li>
          <li class="dropdown"><a href="#"><span>Contact Officials</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="lawyer_info.php">Lawyers information</a></li>
              <li><a href="BD_police_info.php">BD Police information</a></li>
            </ul>
           
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <!--<section id="hero" class="hero">
    <!--<div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>YOU ARE THE KEY, TO YOUR SAFETY.</h2>
          <p> We believe that safety is a shared responsibility and we strive to facilitate social involvement in crime prevention, by providing a safe and secure platform for knowing and understanding proper crime related issues.</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <!--<a href="#about" class="btn-get-started">Get Started</a>-->
            <!--<a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>-->
          <!--</div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/Red-Circle.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <!--<div class="icon-boxes position-relative">
      <!--<div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-easel"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Lorem Ipsum</a></h4>
            </div>
          </div><!--End Icon Box -->

          <!--<div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gem"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Sed ut perspiciatis</a></h4>
            </div>
          </div><!--End Icon Box -->

          <!--<div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Magni Dolores</a></h4>
            </div>
          </div><!--End Icon Box -->

          <!--<div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-command"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Nemo Enim</a></h4>
            </div>
          </div><!--End Icon Box -->

        <!--</div>
      </div>
    </div>

    </div>
  </section>-->
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about main container-fluid">
      <div class="section-header">
        <h3><u>Crime Category</u></h3>
      </div>
      <!-- <div class="container">
      <div class="row">
        <div class="col-sm-15">
      <div class="container" data-aos="fade-up">
        <div class="card" style="width: 25rem; height: 35rem;">
          <img class="card-img-top" src="..." alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>
          <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
          </div>
        </div>
        </div>
          </div>
          
        
          <div class="col-sm-15">
        <div class="container" data-aos="fade-up">
          <div class="card" style="width: 25rem; height: 35rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Vestibulum at eros</li>
            </ul>
            <div class="card-body">
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
          </div>
            </div>
          </div> 
        </div>-->
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
              <div class="card h-100">
                <span class="overflow-hidden" style="height: 45vh;">
                  <img class="card-img-top" src="./import/assets/img/women_and_child.jpg" alt="Card image cap"></span>
                <div class="card-body">
                  <h5 class="card-title">Women and Children</h5>
                  <p class="card-text">Violence against women and girls is one of the world’s most prevalent human rights violations,taking place every day,many times over,in every corner of the globe.It has serious short- and long-term physical, economic and psychological consequences on women and girls, preventing their full and equal participation in society.</p>
                </div>
                <div class="card-body">
                  <a href="{{URL::to ('womenchildcrimeinfo')}}" class="btn btn-danger" role="button">Learn more</a>
                </div>
              </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <span class="overflow-hidden" style="height: 45vh;">
              <img class="card-img-top" src="./import/assets/img/cyber_crime.png" alt="Card image cap"></span>
              <div class="card-body">
                <h5 class="card-title">Cyber Crime</h5>
                <p class="card-text">Cybercrime is criminal activity that either targets or uses a computer, a computer network or a networked device. Most cybercrime is committed by cybercriminals or hackers who want to make money. However, occasionally cybercrime aims to damage computers or networks for reasons other than profit. These could be political or personal.</p>
              </div>
            
              <div class="card-body">
                <a href="{{URL::to ('cybercrime')}}" class="btn btn-danger" role="button">Learn more</a>
                
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <span class="overflow-hidden" style="height: 45vh;">
              <img class="card-img-top" src="./import/assets/img/Robbery.jpg" alt="Card image cap"></span>
              <div class="card-body">
                <h5 class="card-title">Theft and Robbery</h5>
                <p class="card-text">The crime of theft is as old as the concept of private property. Theft is an offense against a property where the offender takes the property of another person without that person’s consent. Generally, theft can only be done against the movable property because movable property can be taken away from one place to another.</p>
              </div>
              <div class="card-body">
                <a href="{{URL::to ('theftrobbery')}}" class="btn btn-danger" role="button">Learn more</a>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End About Us Section -->
    


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('import/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('import/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('import/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('import/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('import/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('import/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('import/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('import/assets/js/main.js')}}"></script>

</body>

</html>
