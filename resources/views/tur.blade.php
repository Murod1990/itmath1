<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="css/rasm.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  </head>
  <body>
   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Itmath</a>
              
             
            </div>
          </nav>
    
    </div>
    <br>
    <div class="nav">

    </div>
    
    <div class="container">
        
        <div class="card mb-3" style="max-width: 800px;">
            <div class="row g-0">
              <div class="col-md-4">
                
                <img src="{{Asset('jpg/e_Pochta.jpg')}}" alt="..." with=200 height="150">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <a href=""> <h5 class="card-title">Elektron pochta haqida</h5></a>
                  <p class="card-text">Elektron pochta ochish  va uni sozlash,Google master bilan tanishish</p>
                  <p class="card-text"><small class="text-muted">oxirgi marta 3 daqiqa oldin yangilandi</small></p>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              
              
            </div>
          
          </div>



           
            <div class="card mb-3" style="max-width: 800px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{Asset('jpg/ecxel.png')}}" alt="..." with=200 height="180">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a href="">
                      <h5 class="card-title">Excel dasturi bilan ishlash</h5>  </a>
                      <p class="card-text">Excel imkonniyatlari ,funksiya bilan tanishish </p>
                      <p class="card-text"><small class="text-muted">oxirgi marta 3 daqiqa oldin yangilandi</small></p>
                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                  <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                    <th>№</th>
                    <th   align='center'>Dars mavzusi</th>
                                   
                    
                    </tr>
                    </thead>
                    @foreach($sqk as $key => $value)
                    <tbody>
                      <tr>
                        <th align='center'> {{$value->id}} </th>
                        <td> <a href="http://itmath1.uz/{{$value->mavzu_title}}">{{$value->mavzu}}</a> </td>
                       
                      </tr>
                      </tbody>
                      
                    @endforeach
                   
                      
                  
                  </table>
                  {{ $sqk ->links() }}
    
                </div>
              </div>

              <div class="card mb-3" style="max-width: 800px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{Asset('jpg/c++.png')}}" alt="..." with=200 height="180" >
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a href="">
                      <h5 class="card-title">C++ Dasturlash tili bo'yicha qo'llanma</h5>  </a>
                      <p class="card-text">Ushbu qo'llanmada 200 dan ortiq misol va masalar mavjud dasrslik ustoz Qudurat Abdurahimovning qo'llanmalari</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                  <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                    <th>№</th>
                    <th   align='center'>Dars mavzusi</th>
                                   
                    
                    </tr>
                    </thead>
                    @foreach($sqc as $key => $vale)
                    <tbody>
                      <tr>
                        <th align='center'> {{$vale->id}} </th>
                        <td> <a href="http://itmath1.uz/{{$vale->mavzu_title}}">{{$vale->mavzu}}</a> </td>
                       
                      </tr>
                      </tbody>
                      
                    @endforeach
                   
                      
                  
                  </table>
                  {{ $sqc ->links() }}
                </div>
              </div>

              <div class="card mb-3" style="max-width: 800px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{Asset('jpg/pyton.png')}}" alt="..." with=200 height="180" >
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a href="">
                      <h5 class="card-title">Pyton dasturalsh tili dasrliklari</h5>  </a>
                      <p class="card-text">Ushbu qo'llama Pyton dasturalsh tilini o'rganuvchilarga bag'ishlanadi</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <table class="table table-striped table-bordered">
                      <thead>
                      <tr>
                      <th>№</th>
                      <th   align='center'>Dars mavzusi</th>
                                     
                      
                      </tr>
                      </thead>
                      @foreach($sqd as $key => $val)
                      <tbody>
                        <tr>
                          <th align='center'> {{$val->id}} </th>
                          <td> <a href="http://itmath1.uz/{{$val->mavzu_title}}">{{$val->mavzu}}</a> </td>
                         
                        </tr>
                        </tbody>
                        
                      @endforeach
                     
                        
                    
                    </table>
                    {{ $sqd ->links() }}
                  </div>
                </div>
              </div>
     

            

    </div>
 
  

  


  </body>
</html>