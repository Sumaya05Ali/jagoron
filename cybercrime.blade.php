<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Jagoron</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{asset('import/assets/img/favicon.png')}}" rel="icon">
  <link href="{asset('import/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

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

  <!-- =======================================================
  * Template Name: Impact
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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
        
        <img src="{{ asset('import/assets/img/logo1.png') }}" alt="" width="150px"> 
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{URL::to ('homepage')}}">Home</a></li>
          <li><a href="./query/index.php">Query</a></li>
          <li class="dropdown"><a href="info"><span>Law & Crime</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{URL::to ('crimecategory')}}">Crime information</a></li>
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
    <section id="info" class="about">
      <div class="container" data-aos="fade-up">
        <div class="card border border-dark">
          <div class="card-header border border-dark"><b><p align="center">
            WHAT IS CYBER CRIME?
            </p></b>
          </div>
          <div class="card-body">
            <blockquote class="blockquote mb-0">
              <p>

                Cybercrime is criminal activity that either targets or uses a computer, a computer network or a networked device. Most cybercrime is committed by cybercriminals or hackers who want to make money. However, occasionally cybercrime aims to damage computers or networks for reasons other than profit. These could be political or personal.
                Cybercrime can be carried out by individuals or organizations. Some cybercriminals are organized, use advanced techniques and are highly technically skilled. Others are novice hackers.
                </p>
            </blockquote>
          </div>
        </div>
      </div>
      
      <div class="container" data-aos="fade-up">
        <div class="card border border-dark">
          <div class="card-header border border-dark"><b><p align="center">
            WHAT ARE THE TYPES OF CYBER CRIME?</p></b>
          </div>
          <div class="card-body">
            <blockquote class="blockquote mb-0">
              <p>
                1) Email and internet fraud.<br>
                2) Identity fraud (where personal information is stolen and used).<br>
                3) Theft of financial or card payment data.<br>
                4) Theft and sale of corporate data.<br>
                5) Cyberextortion (demanding money to prevent a threatened attack).<br>
                6) Ransomware attacks (a type of cyberextortion).<br>
                7) Cryptojacking (where hackers mine cryptocurrency using resources they do not own).<br>
                8) Cyberespionage (where hackers access government or company data).<br>
                9) Interfering with systems in a way that compromises a network.<br>
                10) Infringing copyright.<br>
                11) Illegal gambling.<br>
                12) Selling illegal items online.<br>
                13) Soliciting, producing, or possessing child pornography.<br><br>
                Cybercriminals that target computers may infect them with malware to damage devices or stop them working. They may also use malware to delete or steal data. Or cybercriminals may stop users from using a website or network or prevent a business providing a software service to its customers, which is called a Denial-of-Service (DoS) attack.
              <br><br>
              Cybercrime that uses computers to commit other crimes may involve using computers or networks to spread malware, illegal information or illegal images.
            <br><br>
            Cybercriminals are often doing both at once. They may target computers with viruses first and then use them to spread malware to other machines or throughout a network. Some jurisdictions recognize a third category of cybercrime which is where a computer is used as an accessory to crime. An example of this is using a computer to store stolen data.
          </p>
            </blockquote>
          </div>
        </div>
      </div>
      
      <div class="container" data-aos="fade-up">
        <div class="card border border-dark">
          <div class="card-header border border-dark"><b><p align="center">
            THESE ARE SOME EXAMPLES OF CYBER CRIME</b>
          </div>
          <div class="card-body">
            <blockquote class="blockquote mb-0">
              <p><b>1) Malware Attacks:
              </b> <br>
              A malware attack is where a computer system or network is infected with a computer virus or other type of malware. A computer compromised by malware could be used by cybercriminals for several purposes. These include stealing confidential data, using the computer to carry out other criminal acts, or causing damage to data.
            <br><br>
            A famous example of a malware attack was the WannaCry ransomware attack, a global cybercrime committed in May 2017. WannaCry is a type of ransomware, malware used to extort money by holding the victim’s data or device to ransom. The ransomware targeted a vulnerability in computers running Microsoft Windows.
           <br><br>
           When the WannaCry ransomware attack hit, 230,000 computers were affected across 150 countries. Users were locked out of their files and sent a message demanding that they pay a Bitcoin ransom to regain access.
           <br><br>
           Worldwide, the WannaCry cybercrime is estimated to have caused $4 billion in financial losses. To this day, the attack stands out for its sheer size and impact.
          <br><br>
          <b>	2) Phishing:
          </b> <br>
          A phishing campaign is when spam emails, or other forms of communication, are sent with the intention of tricking recipients into doing something that undermines their security. Phishing campaign messages may contain infected attachments or links to malicious sites, or they may ask the receiver to respond with confidential information.
         <br><br>
         A famous example of a phishing scam took place during the World Cup in 2018. According to our report, 2018 Fraud World Cup , the World Cup phishing scam involved emails that were sent to football fans. These spam emails tried to entice fans with fake free trips to Moscow, where the World Cup was being hosted. People who opened and clicked on the links contained in these emails had their personal data stolen. 
        <br><br>
      Another type of phishing campaign is known as spear-phishing. These are targeted phishing campaigns which try to trick specific individuals into jeopardizing the security of the organization they work for.
	     <br><br>
       Unlike mass phishing campaigns, which are very general in style, spear-phishing messages are typically crafted to look like messages from a trusted source. For example, they are made to look like they have come from the CEO or the IT manager. They may not contain any visual clues that they are fake.
     <br><br>
     <b>	3) Distributed DoS attacks:
    </b><br>
    Distributed DoS attacks (DDoS) are a type of cybercrime attack that cybercriminals use to bring down a system or network. Sometimes connected IoT (Internet of Things) devices are used to launch DDoS attacks.
    <br><br>
    A DDoS attack overwhelms a system by using one of the standard communication protocols it uses to spam the system with connection requests. Cybercriminals who are carrying out cyberextortion may use the threat of a DDoS attack to demand money. Alternatively, a DDoS may be used as a distraction tactic while another type of cybercrime takes place.
    <br><br>
    A famous example of this type of attack is the 2017 DDoS attack on the UK National Lottery website. This brought the lottery’s website and mobile app offline, preventing UK citizens from playing. The reason behind the attack remains unknown, however, it is suspected that the attack was an attempt to blackmail the National Lottery.
    <br>
	          </p>
            </blockquote>
          </div>
        </div>
      </div>

    </section><!-- End About Us Section -->

    <footer align="center">Copyright (c) 2023 by team Jagoron. </footer>


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('import/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('import/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('import/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('import/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset('import/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('import/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('import/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('import/assets/js/main.js') }}"></script>

</body>

</html>