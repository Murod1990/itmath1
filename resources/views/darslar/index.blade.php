<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,800,900,1000" rel="stylesheet">

    <title>Dars</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!--
Ramayana CSS Template
https://templatemo.com/tm-529-ramayana
-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

      <!-- Main -->
        <div id="main">
          <div class="inner">

            <!-- Header -->
            <header id="header">
              <div class="logo">
                <a href="index.html">Itmath</a>
              </div>
            </header>

            <!-- Banner -->
            <section class="main-banner">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                       @yield('content')
                  </div>
                </div>
              </div>
            </section>

            <!-- Services -->
            <section class="services">
              <div class="container-fluid">
                <div class="row">



     

              
                  
                  
                  
                </div>
              </div>
            </section>

            <!-- Top Image -->
            

            <!-- Left Image -->
            

            <!-- Right Image -->
          

          </div>
        </div>

      <!-- Sidebar -->
        <div id="sidebar">

          <div class="inner">

            <!-- Search Box -->
            <section id="search" class="alt">
              <form method="get" action="#">
                <input type="text" name="search" id="search" placeholder="Qidir..." />
              </form>
            </section>
              
            <!-- Menu -->
            <nav id="menu">
              <ul>
                {{ Auth::user()->name }}
              
                
                <li>
                  <span class="opener">PHP darslari</span>
                  <ul>
                    <li><a href="/phpr001">PHP Tarixi</a></li>
                    <li><a href="/php0457">PHP kirish</a></li>
                    <li><a href="/sintaksis">PHP sintaksis</a></li>
                    <li><a href="{{Asset('vrable')}}">PHP-da o'zgaruvchilar</a></li>
                    <li><a href="{{Asset('malumot-turlari')}}">Ma'lumot turlari</a></li>
                    <li><a href="{{Asset('Satrlar-1')}}">PHP satrlar</a></li>
                    <li><a href=""></a></li>
                  </ul>
                </li>
                <li>
                  <span class="opener">MYSQl baza bilan ishlash</span>
                  <ul>
                    <li><a href="select-cese">Mysqlga kirish</a></li>
                    <li><a href="2-4">Sql select</a></li>
                    <li><a href="2_4">Sql insert</a></li>
                  </ul>
                </li>
                <li>
                    <span class="opener">Laravel</span>
                    <ul>
                      <li><a href="#">Laravel bilan tanishish</a></li>
                      <li><a href="#">Migration</a></li>
                      <li><a href="#">Ma'lumotlar bazasi bilan ishlash</a></li>
                    </ul>
                  </li>
                    <a href="/loyi">Laravel loyihalar </a>
                


                <div class="" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                    </svg>  {{ __( 'Chiqish') }}
                  </a>
                  
              
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
              </ul>
            </nav>

            <!-- Featured Posts -->
            <div class="featured-posts">
              <div class="heading">
                <h2>PHP&Laravel</h2>
              </div>
              <div class="owl-carousel owl-theme">
                <a href="#">
                  <div class="featured-item">
                    <img src="assets/images/featured_post_01.jpg" alt="featured one">
                   
                  </div>
                </a>
                <a href="#">
                  <div class="featured-item">
                    <img src="assets/images/featured_post_01.jpg" alt="featured two">
                    <p>Donec a scelerisque massa. Aliquam non iaculis quam. Duis arcu turpis.</p>
                  </div>
                </a>
                
              </div>
            </div>

            <!-- Footer -->
        

          </div>
        </div>

    </div>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/transition.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/custom.js"></script>
</body>


  </body>

</html>
