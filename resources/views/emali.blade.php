<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel||email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<style>

body{

   background: rgb(216, 238, 229);
}
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
  to {left: 150px;}
 
}
</style>


</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
<div class="container">
    <div class=row>
        <div id='kodi' class=col-sm-12>
            <h1 id='kode'>Laravel loyiha orqali elektron pochtaga xabar yuborish</h1>
             
               Ushbu dastur kodi orqali biz laravel ilovadan elektron pochtaga xabar yuborishni ko'rib chiqamiz


        </div>

 
     <h3 id='koier'>Ishning rejasi </h4> 
     <ul>
     <li> 1) Laravel framework yuklab olamiz</li>
     
     <li> 2) Viewda faylda  Forma yaratamiz </li>
     <li> 3) Yangi Controller yaratamiz </li>
     <li> 4) Routeda yo'l beramiz</li>
     <li> 5) Mail function yaratamiz </li>
     <li> 6) Viewda yangi fayl yaratamiz  </li>
     <li> 7) .env faylni sozlaymiz  </li>
     </ul>
     <div class = 'col-sm-8'>
<h4>1. Laravel framework yuklash</h4>
Laravel framework yuklash  uchun biz Laravel.com sayti kirib yuklashimiz mumkin, biz
windows oparatsion tizimda Composer orqali o'rnatishni ko'rib chiqamiz.
<p> Composerda quyidagi buyruq satrini kiriting:  <code class="w3-codespan"> composer create-project laravel/laravel <i>loyiha nomi</i>  </code> </p>

<p>Yukalash tugallangandan so'ng quyidagi buyruq orqali yaratgan loyihamizni ko'rishimiz mumkin</p>
<code class="w3-codespan"> cd loyiha nomi </code><br>
<code class="w3-codespan"> php artisan serve </code> <p>Sizda quyidagicha buyriq satri chiqadi <code class="w3-codespan">http://127.0.0.1:8000</code> shu buyruq satrini nushalab olamiz va brauzerga qo'yamiz </p>
<div class="ratio ratio-16x9">
   <iframe src="https://www.youtube.com/embed/hr2qkpdTEEI" title="YouTube video" allowfullscreen></iframe>
 </div>

<h4>2.Viewda yangi fayl va forma yaratamiz </h4> 

<div class="card bg-dark text-white">
   <img src="{{Asset('jpg/form.png')}}" class="card-img" alt="...">
   <div class="card-img-overlay">
    
   </div>
 </div>



<h4>3.Yangi controller yaratamiz </h4>
<p>Yangi controller yaratamiz va controllerga quyidagi kodlari yozamiz</p>
<div class="card bg-dark text-white">
   <img src="{{Asset('jpg/mail_controller.png')}}" class="card-img" alt="...">
   <div class="card-img-overlay">
    
   </div>
 </div>


<h4> 4.Routeda yo'l beramiz </h4>
<p> Routeda Quyidagicha yo'l beramiz</p>
<code class="w3-codespan">Route::post('/sendmail','MailController@build');</code>
<h4> 5.Mail funksiyasi yaratamiz </h4>
  Composerda quyidagicha buyruq beramiz <code class="w3-codespan">php artisan make:mail SendMail </code>
  <p>SendMail.php fayli paydo bo'ladi va quyidagi kodlarni faylaga yozamiz</p>
  
  <div class="card bg-dark text-white">
   <img src="{{Asset('jpg/send_mail.png')}}" class="card-img" alt="...">
   <div class="card-img-overlay">
    
   </div>
 </div>
  
  
  <h4>6.Viewda yangi fayl yaratamiz email uchun</h4>
  <p>Yangi faylda  quyidagi kodlarni yozamiz</p>

  <div class="card bg-dark text-white">
   <img src="{{Asset('jpg/email_blade.png')}}" class="card-img" alt="...">
   <div class="card-img-overlay">
    
   </div>
 </div>

<h4>7.env faylda MAILni sozlaymiz</h4> 
<p>.env faylni sozlashda  ko'rsatmalar</p>
<ul>
   <li> <code class="w3-codespan"> MAIL_HOST</code> - bunda siz qanday email pochtadan foydalanasiz shu yoziladi</li>
   <li><code class="w3-codespan"> MAIL_PORT </code> - bunda elektron pochtaning kiruvchi va chiquvchi portlari mavjud </li>
   <p>Kiruvchi port (SMTP) kod 465 , chiquvchi port (IMAP) kod-993 </p>
   <li> <code class="w3-codespan">MAIL_ENCRYPTION </code>- Tavsiya etiladi - SSL</li>
   Bundan tashqari siz elektron pochtansizni so'zlash talab etiladi   <a href="https://accounts.google.com/b/0/UnlockCaptcha">faolashtirish</a> 
</ul> 
<div class="card bg-dark text-white">
   <img src="{{Asset('jpg/env.png')}}" class="card-img" alt="...">
   <div class="card-img-overlay">
    
   </div>
 </div>

</div>
<div class='col-sm-4 col-md-4'>
   <h2 align='center'>Menning tajribam </h2>
              <p>
               Men so'ngi 2 yildan ichida Laravel,PHP,javascript,Bootstrap,CSS3,Mysql 
               texnalogiyalari bilan ishlab keliyabman agar siz men  bilan ishlamoqchi bo'lsangiz 
               quyidagi aloqa vositalari bilan bog'lanishingiz mumkin
              </p>
              <p> <strong> Tel: +998914463802 </strong></p>
              <p><strong>E mail: jonsrasulov@gmail.com </strong></p>
</div>



</div>

</div>


</body>
</html>