<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Itmath||dasr</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link href={{Asset('css/dars.css')}}  rel="stylesheet">
    
  </head>
  <body>
 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

   
@if(Auth::user()->name)

<div class='sidebar' >
  <div class='text'>It<span style="color:rgb(241, 120, 120)">M</span>ath</div>
  <div class='text'>darslari !</div>
<ul>

<li>
<div style='color:rgb(225, 231, 224)'>  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-person" viewBox="0 0 16 16">
    <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5v2z"/>
  </svg>  
{{ Auth::user()->name }}

 

</div>
<a href="#">Algoritimlar</a>
</li>
<li>

  <a href="#1" style='color:rgb(21, 255, 0)'  class='feat-btn'>   PHP darslari  </a>
  <ul class='feat-show'> 

  <li><a href="/phpr001">PHP Tarixi</a></li>
  <li><a href="/php0457">PHP kirish </a></li>
  <li><a href="/sintaksis">PHP sintaksis</a></li>
  <li><a href={{Asset('vrable')}}>PHP-da o'zgaruvchilar </a></li>
  <li><a href={{Asset('malumot-turlari')}}>Ma'lumot turlari</a></li>
  <li><a href={{Asset('Satrlar-1')}}>PHP satrlar</a></li>
  <li><a href="else-if"> Elseif</a></li>
  <li><a href="{{Asset('swicht-swicht')}}">swicht operatori</a></li>
  <li><a href="{{Asset('for-for')}}">Takrorlash operatorilari</a></li>
  <li><a href="{{Asset('Break-brek')}}"> break-Continue</a></li>
  <li><a href="{{Asset('include-include')}}"> include-require</a></li>
  <li><a href="{{Asset('function-function')}}"> Funcsiyalar</a></li>
  
</ul>
</li>
<li>
  <a href="#" class='serv-btn' style='color:rgb(21, 255, 0)' >Sql Dars  </a>
<ul class='serv-show'> 
  <li><a href="select-cese">Sql kirish</a></li>
  <li><a href="2-4"> Sql select</a></li>
  <li><a href="2_4" title="insert, update, delete,NULL">Sql Insert</a></li>
  
</ul>



<li>
  <a href="#" class='ser-btn' style='color:rgb(21, 255, 0)'>Laravel dars  </a>
<ul class='ser-show'> 
  <li><a href="#">Laravel haqida</a></li>
  <li><a href="#">Disectop</a></li>
  <li><a href="#">Migration</a></li>
</ul>
</li>


 <li><a href="#"> PHP kitobi </i></a></li>
 <li><a href="#"> SQL kitobi</a></li>
 <li><a href="https://laravel.com/">Laravel.com</a></li>

   Python va C++ turli
<li >

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
</li>
</ul>




</div>
<div class="container">
<div class='row'>

@yield('content')


</div>     
</body>
<script>

$('.feat-btn').click(function(){
$('div ul.feat-show').toggleClass("show");
});
$('.serv-btn').click(function(){
$('div ul.serv-show').toggleClass("sho");
});
$('.ser-btn').click(function(){
$('div ul.ser-show').toggleClass("sh");
});


</script>
@else
 <h2>Sahifa topilmadi xato kodi 402</h2>
@endif
   
    

</html>
