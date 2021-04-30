@extends('darslar.index')
@section('content') 
<div class='col-sm-12'> 
<h2 align='center'>PHP o'zgaruvchilarini yaratish (e'lon qilish)</h2>
<div class="w3-code notranslate htmlHigh">

    <div class="alert alert-secondary" role="alert">
        PHP da o'zgaruvchi $ belgidan boshlanadi , so'ngra o'zgaruvchining nomi:
        <br>
        &lt;?php<br>
        $txt = &quot;Salom Dunyo!&quot;;<br>
        $x = 5;<br>$y = 10.5;<br>
        ?&gt;
        </div>
      </div>
      Yuqoridagi gaplar bajarilgandan so'ng, o'zgaruvchi $txt qiymatni Salom Dunyo!, o'zgaruvchi $x qiymatni 5 va o'zgaruvchan $yqiymatni ushlab turadi 10.5. <br>


      <b> Izoh:</b> O'zgaruvchiga matn qiymatini tayinlaganingizda, qiymat atrofida tirnoq qo'ying.
      <br>
      <b> Izoh:</b> Boshqa dasturlash tillaridan farqli o'laroq, PHP da o'zgaruvchini e'lon qilish uchun buyruq yo'q. Siz unga birinchi marta qiymat berishingiz bilan yaratiladi.
    
     <h3>PHP o'zgaruvchilari</h3> 

     <div class="alert alert-secondary" role="alert">
      O'zgaruvchi qisqa nomga (x va y kabi) yoki tavsiflovchi ismga (yosh, ism, total_volume) ega bo'lishi mumkin.
      <br>
<ul>
     <p> PHP o'zgaruvchilari uchun qoidalar: </p>
      <li>O'zgaruvchi ism harf yoki pastki chiziq belgisi bilan boshlanishi kerak</li>
      <li>O'zgaruvchi ism raqam bilan boshlana olmaydi</li>
      <li>O'zgaruvchi nom faqat alfa-raqamli belgilar va pastki chiziqlarni o'z ichiga olishi mumkin (Az, 0-9 va _)</li>
      <li>O'zgaruvchi nomlar katta-kichik ( $ageva $AGE ikki xil o'zgaruvchidir)</li>
      
 </ul>
     </div>

        <h4 align='center'>O'zgaruvchilarni Chiqazish</h4> 
        <div class="alert alert-secondary" role="alert">
            PHP da o'zgaruvchi $ belgidan boshlanadi , so'ngra o'zgaruvchining nomi:
            <br>
            &lt;?php<br>
            $txt = &quot;Salom Dunyo!&quot;;<br>
            $x = 5;<br>$y = 10.5;<br>
            echo " $txt ";<br>
            ?&gt;

           
              </div>
<h4>Misol:</h4>
              <div class="alert alert-secondary" role="alert">
              
                <div class="w3-code htmlHigh notranslate">
                    &lt;?php<br>
                    $txt = &quot;W3Schools.com&quot;;<br>
                     echo &quot;I love &quot; . $txt . &quot;!&quot;;<br>?&gt;
                    </div>
            
              </div>



          </div>
          
          

@endsection