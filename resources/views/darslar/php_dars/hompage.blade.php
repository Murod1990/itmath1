@extends('darslar.index')
@section('content')
 <h1 align='center'>Siz allaqachon bilishingiz kerak bo'lgan narsalar</h1>
<h4>Davom etishdan oldin siz quyidagilar haqida asosiy tushunchaga ega bo'lishingiz kerak:</h4>

<ul>
    <li>HTML</li>
    <li>CSS</li>
    <li>JavaScript</li>
</ul>

<h4>PHP nima?</h4>
<ul>
    <li>PHP - bu "PHP: gipermatnli protsessor" ning qisqartmasi.</li>
    <li>PHP keng qo'llaniladigan, ochiq kodli skript tilidir</li>
    <li>PHP-skriptlar serverda bajariladi</li>
    <li>PHP-ni yuklab olish va ulardan foydalanish bepul</li>
</ul>
<div class="alert alert-warning" role="alert">
   <h4>PHP - bu ajoyib va ​​ommabop til!</h4> 
 <ul>
     <li>Internetdagi eng katta bloglash tizimining (WordPress) yadrosi bo'lish uchun bu juda kuchli!</li>
     <li>Eng katta ijtimoiy tarmoqni (Facebook) boshqarish uchun juda chuqur!</li>
     <li>Bundan tashqari, boshlang'ichning birinchi server tomoni tili bo'lish juda oson!</li>
 </ul>

    
  </div>
  <h4> PHP fayli nima?</h4>
  <ul>
      <li>PHP fayllari matn, HTML, CSS, JavaScript va PHP kodlarini o'z ichiga olishi mumkin</li>
      <li> PHP-kod serverda bajariladi va natijada brauzerga oddiy HTML sifatida qaytariladi</li>
      <li>PHP fayllarining kengaytmasi " .php"</li>
</ul>

<div class="alert alert-warning" role="alert">
    <h4>PHP nima qilishi mumkin?</h4>
    <ul>

        <li>PHP dinamik sahifa tarkibini yaratishi mumkin</li>
        <li>PHP serverda fayllarni yaratishi, ochishi, o'qishi, yozishi, o'chirishi va yopishi mumkin</li>
        <li>PHP shakl ma'lumotlarini to'plashi mumkin</li>
        <li>PHP cookies fayllarini yuborishi va qabul qilishi mumkin</li>
        <li>PHP ma'lumotlar bazangizdagi ma'lumotlarni qo'shishi, o'chirishi va o'zgartirishi mumkin</li>
        <li>PHP foydalanuvchiga kirishni boshqarish uchun ishlatilishi mumkin</li>
        <li>PHP ma'lumotlarni shifrlashi mumkin</li>
    </ul>
  </div>
  
<ul>
    <h4>Nima uchun PHP?</h4>
    <li>PHP turli platformalarda ishlaydi (Windows, Linux, Unix, Mac OS X va boshqalar).</li>
    <li>PHP bugungi kunda ishlatiladigan deyarli barcha serverlarga (Apache, IIS va boshqalar) mos keladi.</li>
    <li>PHP ma'lumotlar bazalarining keng doirasini qo'llab-quvvatlaydi</li>
    <li>PHP bepul. Uni PHP rasmiy manbasidan yuklab oling: <samp size=20> www.php.net</samp></li>
    <li>PHP-ni o'rganish oson va server tomonida samarali ishlaydi</li>

</ul>
<audio controls>
               
    <source src="horse.ogg" type="audio/ogg">
    <source src="{{Asset('mp3/1.mp3')}}" type="audio/mpeg">
  
  </audio>


@endsection