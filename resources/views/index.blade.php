<!DOCTYPE html>
<html lang="en">
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Itmath</title>
  <meta name="description" content="Itmath.uz sayti">

  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  

  <style> 
  span[id='kod']
  {
    background-color: #00458A; /* Green */
  border: none;
  color: white;
  padding: 25px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
  cursor:pointer;
  }
  h1[id='kodi']
  {
    text-align: center; 
    color: rgb(0, 0, 0);
  }
  p[id='kode']
  {
    font-size: 25px;
  }
  </style>
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================

</head>

<body>

<!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <!-- ======= Header ======= -->
  
  <header id="header" class="d-flex flex-column justify-content-center">
    
    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="/begines" class="nav-link scrollto active"><i class="bx bxs-like bx-tada"></i> <span  >@lang('home.Darslar')</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-book"></i> <span>@lang('home.Biz haqimizda')</span></a></li>
  
        
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>@lang("home.Bog'lanish")</span></a></li>
        <li><a href="/home" class="nav-link scrollto"><i class="bx bx-lock"></i> <span>@lang('home.Tizimga kirish')</span></a></li>

        <li><a href="locale/uz" class="nav-link scrollto"> <span>UZ</span></a></li>
        <li><a href="locale/en" class="nav-link scrollto"> <span>RU</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom" data-aos-delay="100">
      <h1 id='kodi' > @lang("home.Yuksak maqsad sari vaqtingizni ayamang vaqt shundoq ham o'tib ketadi")</h1>
      <p id='kode' >@lang('home.Darslar') : <span id='kod' class="typed" data-typed-items=" @lang('home.PHP dasturlash tili...'), @lang('home.SQl tili...'), Laravel framework..., @lang('home.Turli yangiliklar')"></span></p>
      <div class="social-links">
        <a href="https://t.me/JonsM90" class="telegram" title='telegram'><i class="bx bxl-telegram"></i></a>
        <a href="#" class="facebook" title='facebook'><i class="bx bxl-facebook"></i></a>
        <a href="https://www.youtube.com/channel/UCPKOext57RMQ0JtR_anoRGw" class="youtube" title='youtube'><i class="bx bxl-youtube"></i></a>
      
      </div>
      
    </div>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>@lang('home.Biz haqimizda')</h2>
          <p>Siz ushbu saytga tashrif buyurdingizmi demak sizda dasturlash bo'lgan qiziqish mavjud biz sizning bilimlaringizni o'stirishga yordam beramiz</p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="assets/img/er.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>Web dasturlash &amp; Ma'lumotlar bazasi bilan ishlash.</h3>
            <p class="fst-italic">
              Bilim olishning erta-yu kechi yo'q. Dasturalshni nimadan o'rganishni boshlasam ekan  deb o'ylab turibsizmi  unda biz sizga yordam beramiz
              dasturalashni o'rganishda qo'yiladigan asosiy talablar quyidagicha :
            </p>
            <div class="row">
              
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Sabir</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Chet tililarini bilish(Rus tili va Ingliz tili)</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>O'rganishda har xil dasturalsh tillarini aralashtirmaslik </span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Har doim yangi texnalogiyani o'rganish</span></li>
                

                  </ul>
                <a href='/welcome'>Welcomga o'tish </a>
              </div>
            </div>
            
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Faktlar</h2>
          <p>Mavjuv qo'llanmalar soni va Foydalanuvchilar soni.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Foydalanuvchi</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Qo'lanmalar</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p>Viedo darslar</p>
            </div>
          </div>

       

        </div>

      </div>
    </section><!-- End Facts Section -->

    

   


   
    <!-- ======= Testimonials Section ======= -->
  

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Bog'lanish</h2>
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Buxoro viloyai Vobkent tumani</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>jonsrasulov@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>tel:</h4>
                <p>+998914463802</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
               

            <form action="/sendmail" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  @if (Session::get('success'))
                <div class="alert alert-primary" role="alert">
                {{Session::get('success')}}
                </div>
                @endif
                {{ csrf_field() }}
                  <input type="text" name="name" class="form-control" id="name" placeholder="Ismingiz" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Maqsad" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Xabar..." required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">iltimos kuting</div>
                <div class="error-message"></div>
                <div class="sent-message">Xabaringiz jo'natildi!</div>
              </div>
              <div class="text-center"><button type="submit">Jo'natish</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>