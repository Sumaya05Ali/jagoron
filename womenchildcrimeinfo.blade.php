
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
        <img src="{{asset('import/assets/img/logo1.png')}}" alt="" width="200px"> 
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{URL::to ('homepage')}}">Home</a></li>
          <li><a href="./query/index.php">Query</a></li>
          <li class="dropdown"><a href="#"><span>Law & Crime</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="crime_category.php">Crime information</a></li>
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

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="card border border-dark">
          <div class="card-header border border-dark"><b><p align="center">
            KEY TERMS</p></b>
          </div>
          <div class="card-body">
            <blockquote class="blockquote mb-0">
              <p><b>Gender-based violence</b><br>

                Gender-based violence (GBV) refers to harmful acts directed at an individual or a group of individuals based on their gender. It is rooted in gender inequality, the abuse of power and harmful norms. The term is primarily used to underscore the fact that structural, gender-based power differentials place women and girls at risk for multiple forms of violence. While women and girls suffer disproportionately from GBV, men and boys can also be targeted. The term is also sometimes used to describe targeted violence against LGBTQI+ populations, when referencing violence related to norms of masculinity/femininity and/or gender norms.
              </p><hr><b>Violence against women and girls</b><br>
              <p>Violence against women and girls is defined as any act of gender-based violence that results in, or is likely to result in, physical, sexual or mental harm or suffering to women and girls, including threats of such acts, coercion or arbitrary deprivation of liberty, whether occurring in public or in private life. Violence against women and girls encompasses, but is not limited to, physical, sexual and psychological violence occurring in the family or within the general community, and perpetrated or condoned by the State.
              </p><hr>
              <p><b>Survivor of violence</b><br>
                The term survivor of violence refers to any person who has experienced sexual or gender-based violence. It is similar in meaning to “victim”, but is generally preferred because it implies resilience.
              </p><hr>
              <p><b>Consent</b><br>
                No means No. Yes means Yes. Consent is an agreement between participants to engage in sexual activity or enter into marriage. It must be freely and actively given and cannot be provided by someone who is under the influence of drugs or alcohol or by someone underage. Consent is specific, meaning that consent to one act does not imply consent to any others, and reversible, meaning that it may be revoked at any time.</p>
            </blockquote>
          </div>
        </div>
      </div>
      
      <div class="container" data-aos="fade-up">
        <div class="card border border-dark">
          <div class="card-header border border-dark"><b><p align="center">
            TYPES OF VIOLENCE AGAINST WOMEN<br>
            </p></b>
          </div>
          <div class="card-body">
            <blockquote class="blockquote mb-0">
              <p><b>* Domestic Violence
              </b> <br>
              Domestic violence, also called domestic abuse or intimate partner violence, is any pattern of behavior that is used to gain or maintain power and control over an intimate partner. It encompasses all physical, sexual, emotional, economic and psychological actions or threats of actions that influence another person. This is one of the most common forms of violence experienced by women globally.</p><br>
            <br><p><b>* Economic Violence</b><br>
          	Economic violence involves making or attempting to make a person financially dependent by maintaining total control over financial resources, withholding access to money, and/or forbidding attendance at school or employment.
            </p><br><br>
            <p><b>
              * Psychological Violence
            </b><br>
          	Psychological violence involves causing fear by intimidation; threatening physical harm to self, partner or children; destruction of pets and property; “mind games”; or forcing   isolation from friends, family, school and/or work.
          </p><br><br>
          <p><b>* Emotional Violence
          </b><br>
          Emotional violence includes undermining a person's sense of self-worth through constant criticism; belittling one's abilities; name-calling or other verbal abuse; damaging a partner's relationship with the children; or not letting a partner see friends and family.
        </p><br><br>
        <p><b>	* Physical Violence
        </b><br>
      	Physical violence involves hurting or trying to hurt a partner by hitting, kicking, burning, grabbing, pinching, shoving, slapping, hair-pulling, biting, denying medical care or forcing alcohol and/or drug use, or using other physical force. It may include property damage.
         </p><br><br>
         <p><b>	* Sexual Violence
        </b><br>
        Sexual violence involves forcing a partner to take part in a sex act when the partner does not consent.
      </p><br>

            </blockquote>
          </div>
        </div>
      </div>
      <br>
     

    </section><!-- End About Us Section -->


<footer align="center">Copyright (c) 2023 by team Jagoron. </footer>
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