@extends('darslar.index')
@section('content')
<h1 align='center'>Asosiy PHP sintaksis</h1>
<div>PHP-skriptni hujjatning istalgan joyiga joylashtirish mumkin.</div> 

<div>PHP-skript quyidagi bilan boshlanadi</div> 
<br>

<textarea name="" id="" cols="30" rows="18">
    Quyidagi script orasida yoziladi
    <?php

echo" <?php       ?> ";
    ?>
    
    PHP fayllari uchun standart kengaytma " .php" dir.
    PHP fayli odatda HTML teglarini va ba'zi bir PHP skript kodlarini o'z ichiga oladi.
    Masalan:
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <?php

echo" <?php  Salom Dunyo      ?> ";
    ?>
    </body>
    </html>
</textarea>
<h2 align='center'>PHP-dagi sharhlar</h2>
 <div>PHP kodidagi izoh - bu dasturning bir qismi sifatida bajarilmaydigan satr. Uning yagona maqsadi
    - kodni ko'rib chiqadigan kishi tomonidan o'qish</div> 
  
    <h4>Izohlardan quyidagilar uchun foydalanish mumkin:  </h4><ul>
        <li>Boshqalar sizning kodingizni tushunishiga imkon bering</li>
        <li>Qilgan ishlaringizni eslang - Ko'pgina dasturchilar bir-ikki yildan so'ng o'z ishlariga qaytishni boshdan kechirdilar va nima qilganlarini qayta ko'rib chiqishlari kerak edi. 
            Izohlar sizga kodni yozishda nimani o'ylaganingizni eslatishi mumkin</li>
        
    </ul>
    <textarea name="" id="" cols="30" rows="14">
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
        </head>
        <body>
            <?php
// This is a single-line comment

# This is also a single-line comment

echo" <?php   // Bu yerda izoh satri   ";
?>
        </body>
        </html>
    </textarea>
    <audio controls>
               
        <source src="horse.ogg" type="audio/ogg">
        <source src="{{Asset('mp3/1.mp3')}}" type="audio/mpeg">
      
      </audio>
@endsection