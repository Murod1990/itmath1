<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Itmath</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link href='css/dars.css'  rel="stylesheet">
    
  </head>
  <body>
 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->


     <div class='sidebar' >
                <div class='text'>It<span style="color:rgb(241, 120, 120)">M</span>ath</div>
                <div class='text'>darslari</div>
             <ul>
              <li>
              <a href="#">Algoritimlar</a>
              </li>
              <li>
        
              
        
                <a href="#1" style='color:rgb(21, 255, 0)'  class='feat-btn'>   PHP darslari  </a>
                <ul class='feat-show'> 

                <li><a href="/phpone">Echo funsiya</a></li>
                <li><a href="/php-ozgar">O'zgaruvchilar</a></li>
                <li><a href="PHP-massiv">Massivlar</a></li>
                <li><a href={{Asset('Arifmetik')}}>Arifmetik amallar</a></li>
                <li><a href={{Asset('mantiq-mantiq')}}>Mantiqiy binar amallar</a></li>
                <li><a href="if-operatori">If operatori</a></li>
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
                <li><a href="#">Mash2-2</a></li>
                <li><a href="#">Mash2-3</a></li>
                <li><a href="#">Mash2-4</a></li>
              </ul>
              </li>
        
        
               <li><a href="#"> PHP kitobi </i></a></li>
               <li><a href="#">SQL kitobi</a></li>
               <li><a href="#">Laravel qo'llanma</a></li>
           
            
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
</html>