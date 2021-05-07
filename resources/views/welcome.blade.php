<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Itmath||Sohalar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
 
  <!-- Favicons -->
  
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyResume - v4.1.0
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body style="background: rgba(255, 255, 255, 0.979)">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row">

          <div class=" col-sm-8 col-lg-8">
        
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{Asset('jpg/e_Pochta.jpg')}}" class="card-img-top border border-warning" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{Asset('jpg/goog_master.jpg')}}" class="card-img-top border border-warning" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{Asset('jpg/add google.jpg')}}" class="card-img-top border border-warning" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <div class="portfolio-details-slider swiper-container">

                <br>

                <h3 align='center'>Mavjud qo'llanmalar ro'yxati</h3>
                <table class="table table-striped table-bordered">
                  <thead>
                  <tr>
                  <th>№</th>
                  <th   align='center'>Dars mavzusi</th>
                  <th  align='center'>Video</th>
                  <th  align='center'>Dastur Kod</th>
                  
                  </tr>
                  </thead>
                  @foreach($seach as $key => $value)
                  <tbody>
                    <tr>
                      <th align='center'> {{$value->id}} </th>
                      <td> <a href="http://itmath1.uz/{{$value->mavzu_title}}">{{$value->mavzu}}</a> </td>
                      <td> <a href="https://www.youtube.com/{{$value->video_title}}"> {{$value->Video}} </a> </td>
                      <td align='center' > <a href="https://github.com/Murod1990/{{$value->kod_title}}">{{$value->kod}}</a> </td>
                    </tr>
                    </tbody>
                    
                  @endforeach
                 
                  
    
                
                </table>
               {{ $seach ->links() }}
              
              <div class="swiper-wrapper align-items-center">
                <div class="card" style="width: 19rem;">
                 <a href=""><img src="{{Asset('jpg/e_Pochta.jpg')}}" class="card-img-top"  alt="..."></a> 
                  <div class="card-body">
                    <p class="card-text">Gmail elektron pochta   </p>
                  </div>
                </div> 
                &amp;
                <div class="card" style="width: 19rem;">
                 <a href=""><img src="{{Asset('jpg/goog_master.jpg')}}" class="card-img-top" alt="..."></a> 
                  <div class="card-body">
                    <p class="card-text">Google Search Sayt xaritasi </p>
                  </div>
                </div>
                &amp;
                <div class="card" style="width: 19rem;">
                   <a href=""><img src="{{Asset('jpg/add google.jpg')}}" class="card-img-top" alt="..."></a> 
                   <div class="card-body">
                     <p class="card-text">Add Google nima  </p>
                   </div>
                 </div>
                
              </div>
             

            </div>
           
            <br>
       
              
          </div>
          
          <div class="col-sm-4 col-lg-4">
            <div class="portfolio-info">
              <h3>Itmath</h3>
              <ul>
                <li><strong>Onlayn</strong>: Dasturlash kursalari</li>
               
                <li><strong>Tasischi</strong>:Rasulov Murodjon </li>
                <li><strong>Buxoro</strong>: <a href="https://itmath.uz/">www.Itmath.uz</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2 align='center'>Menning tajribam </h2>
              <p>
               Men so'ngi 2 yildan ichida Laravel,PHP,javascript,Bootstrap,CSS3,Mysql 
               texnalogiyalari bilan ishlab keliyabman agar siz men  bilan ishlamoqchi bo'lsangiz 
               quyidagi aloqa vositalari bilan bog'lanishingiz mumkin
              </p>
              <p> <strong> Tel: +998914463802 </strong></p>
              <p><strong>E mail: jonsrasulov@gmail.com </strong></p>
            </div>
            <div class="portfolio-info">
              <h3>Loyihalar ro'yxati</h3>
              <ul>
                <li><strong>Onlayn test tizimi</strong>: PHP,Ajax,javascript,MYSQL </li>
                
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

 <!-- End #main -->

 
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

  
  <script src="assets/js/main.js"></script>

</body>

</html>

