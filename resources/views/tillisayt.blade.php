<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Ko'p tilli sayt qilish</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
   
   <style>

        h4
        {
           color:darkslategrey;
           width: 350px;
           height: 50px;
           background-color: rgb(255, 255, 255);
           font-weight: bold;
           position: relative;
           animation: mymove 15s infinite;
       }
       
       h1[id=kode]{
          text-shadow: 6px 6px 12px rgb(245, 194, 27);
       }
       
       #koier {animation-timing-function: linear;}
        @keyframes mymove {
         from {left: 100px;}
         to {left: 50px;}
        
       }
      
       </style>



</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
<div class="container">
    <div class=row>
        <div class=col-sm-12>
            <h1 id='kode'> Laravelda ko'p tilli  sayt yoki dastur loyihasi </h1>

        
<h4>Ishning rejasi</h4>
<ul>
    <li>1.Laravel frameworkni yuklab olamiz</li>
    <li>2.index faylini sozlaymiz</li>
    <li>3.Middleware yaratamiz</li>
    <li>4.Kernel faylda middlewareni qo'shamiz</li>
    <li>5.web faylda Route yaratamiz</li>
    <li>6.Resources/lang papkani ichida papkalarni yaratib olamiz</li>
</ul>
</div>
<div class= 'col-sm-8'>
    <h4>1.Laravel framework yuklash</h4>
Laravel framework yuklash  uchun biz Laravel.com sayti kirib yuklashimiz mumkin, biz
windows oparatsion tizimda Composer orqali o'rnatishni ko'rib chiqamiz.
<p> Composerda quyidagi buyruq satrini kiriting:<code class="w3-codespan"> composer create-project laravel/laravel <i>loyiha nomi</i>  </code> </p>


<div class="ratio ratio-16x9">
    <iframe src="https://www.youtube.com/watch?v=xntKvaHRuJQ" title="YouTube video" allowfullscreen></iframe>
  </div>


<p>Yukalash tugallangandan so'ng quyidagi buyruq orqali yaratgan loyihamizni ko'rishimiz mumkin</p>
<code class="w3-codespan"> cd loyiha nomi </code><br>
<code class="w3-codespan"> php artisan serve </code> <p>Sizda quyidagicha buyriq satri chiqadi <code class="w3-codespan">http://127.0.0.1:8000</code> shu buyruq satrini nusxalab olamiz va brauzerga qo'yamiz </p>

    <h4>2.Index faylni sozlash</h4>
     Index faylning bosh qismida quyidagi kodni yozamiz </p>

    <div class="card bg-dark text-white">
    <img src="{{Asset('jpg/lang.png')}}" class="card-img" alt="...">
    <div class="card-img-overlay"> 
    </div>
    </div>
 Tilni almashtirish uchun ikkita tugma xususiyat yaratamiz 
 <textarea name="" id="" cols="50" rows="7">

    
    <a href="locale/uz" class="dropdown-item"> <span>UZ</span></a>
    <a href="locale/en" class="dropdown-item"> <span>RU</span></a>

 </textarea>
 
<h4>3.Middleware yaratamiz</h4>
<code class="w3-codespan">php artisan make:middleware nomi</code>
<p>Middleware quyidagicha functionda session yaratamiz </p>
<div class="card bg-dark text-white">
    <img src="{{Asset('jpg/midlewer.png')}}" class="card-img" alt="...">
    <div class="card-img-overlay">
     
    </div>
  </div>
<h4>4.Kernel faylda middlewareni qo'shamiz</h4>
<div class="card bg-dark text-white">
    <img src="{{Asset('jpg/ker.png')}}" class="card-img" alt="...">
    <div class="card-img-overlay">
     
    </div>
  </div>

  <h4> 5.Web faylda Route yaratamiz</h4>

<div class="card bg-dark text-white">
    <img src="{{Asset('jpg/webq.png')}}" class="card-img" alt="...">
    <div class="card-img-overlay">
     
    </div>
  </div>

  <h4> 6.Resources/lang papkani ichida papkalarni yaratib olamiz </h4>

Laravel frameworkning odatiy tili papchasi en bo'ladi en papka ichida home.php faylda quyidagicha tarjimalarni kiritamiz
<div class="card bg-dark text-white">
    <img src="{{Asset('jpg/tarjima.png')}}" class="card-img" alt="...">
    <div class="card-img-overlay">
     
    </div>
  </div>
 endi tarjima qilishni boshladik har bir tarjimalar oldidan lang('category.Salom men tarjoma qilindim')

</div>
    </div>

</div>


</body>
</html>