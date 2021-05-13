@extends('darslar.index')
@section('content')
<h1 align='center'>PHP string funktsiyalari</h1>
 
     
     <code class="w3-codespan"> <b>strlen ()</b></code>   - Ushbu funksiya  satr uzunligini aniqlash uchun ishlatiladi <br>
      Ishlatilishi: strlen('Salom dunyo')  satr uzunligi 11 ta belgidan iborat<br>
      <code class="w3-codespan"> <b>str_word_count () </b></code> - Stringdagi so'zlarni hisoblash uchun ishlatiladi <br>
     <code class="w3-codespan"> <b>strrev () </b> </code> - Stringni teskari yo'naltirish misol: <br>
<code class="w3-codespan"><b> strpos ()</b></code>   - satr ichidagi matnni qidirish <br>
 Ishlatilishi: strpos ('Salom dunyo',dunyo) <br>
 <code class="w3-codespan"> <b>str_replace () </b> </code>  - satr ichidagi matnni almashtirish <br>
 Ishlatilishi:  <code class="w3-codespan">str_replace </code> ("dunyo", "go'zal", "Salom Dunyo"); // natija  Salom Dunyo! <br>
 <code class="w3-codespan"> <b>ucfirst </b> </code> - Shartga ko'ra satrdagi birinchi belgini kattasiga almashtiradi <br>
 <code class="w3-codespan"> <b>ucwords </b> </code> - Funksiya satr tarkibidagi har bir so'zning  birinchi belgisini kattasiga almashtiradi <br> 

 
    <code class="w3-codespan"> <b>trim ()</b></code> Funksiya satrni ikkala tomonidan barcha bo'sh joylarni o'chiradi
    bundan tashqari \n,\r,\t,v\,i\ maxsus belgilarni o'chiradi <br>
    <code class="w3-codespan"> <b>ltrim ()</b></code> funksiyasi barcha bo'sh joylarni maxsus belgilarni satrning o'ng tomonidan o'chiradi <br>
    <code class="w3-codespan"> <b>Chop ()</b></code> Funksiyasi berilgan sartdan yakunlovchi belgilar va yangi qatorlarni o'chiradi <br>
    <code class="w3-codespan"> <b>str_pad ()</b></code>  Funksiyasi berilgan starni ketma-ketlig bilan to'ldiradi <br>
    <code class="w3-codespan"> <b>strtolower()</b></code> Funksiyasi satrdagi barcha alifbo belgilarini kattasidan kichikiga almashtiradi <br> 
    <code class="w3-codespan"> <b>strtoupper()</b></code> Funksiyasi berilgan satrdigi belgilarni kichikidan kattasiga almashtiradi <br>

PHP da belgilarni bekor qilish uchun maxsus belgilangan ikkita funksiya mavjud.Ixtiyoriy satrni malumotlar bazasiga yozish uchun 
avval ularni <code class="w3-codespan"> <b>AddSlashes()</b></code> funksiya yordamida taxrirlash lozim
@endsection