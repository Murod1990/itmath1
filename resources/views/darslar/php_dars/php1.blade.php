@extends('darslar.index')
@section('content')

    
<h1 id='hw' align='center'></h1>
    <p id ='n'></p>
    <h4 id='nk' align='center'></h4>
    <p id='yoe'></p>

    <p>PHP texnologiyasi Perl, Microsoft ning Active Server Pages(ASP),
        Java Server Pages(JSP) va Allaire Cold Fusion texnologiyalariga raqib bo'la oladi va MySQL M BBT bilan birgalikda funksional, d in amik WEB saytlarni yarata oladi</p>
    <h6>Serverlar</h6>
    <li>Denver</li>
    <li>Open server</li>
    <li>va hokazo</li>
        <h6>Dasturoy taminot</h6>
     <li> Phpdesigner</li>
     <li>Phpstrom</li>
     <li>Visual Studio code</li>
     <li> va boshqalar</li>
    <script> 

        document.getElementById('n').innerHTML="PHP texnologiyasi Rasmus Ledorf (Rasmus Lerdorf) tomonidan  1994-yilning kuz oylarida yaratilgan  PHP texnologiyasining birinchi versiyasi Perl da yozilgan bo'lib, CGI obolochka sifatida bo'lgan. PHP texnologiyasi yaratilganiga uncha ko'p vaqt bo'lmasdan, 1995-yilning ortalariga kelib esa forma yordamida m'alumotlar bilan ishlovchi Form Interpreter (FI) qo'shildi. Bu versiya ma’lumotlar bazasi bilan ishlay oldi, ya’ni m SQL ni qollay oldi. 1998-yili shu texnologiyaning avvalgilariga qaraganda mukammalroq va qaytadan yozilgan PHP3 versiyasi yaratildi. Shundan s'ong PHP dunyo bo'yicha yanada ommalashib ketdi hozirda  PHP 8 versiyasi yaratiladi"
        document.getElementById('nk').innerHTML="Ma’lumotlar bazasi bilan integratsiyasi."
        document.getElementById('hw').innerHTML="PHP ning yaralilish tarixi"
        document.getElementById('yoe').innerHTML="PHP bir qancha ma’lumotlar bazasini boshqarish tizim lari bilan aloqa o'rnata oladi. U MySQL ga qo'shimcha ravishda PostrgeSQL, mSQL, Oracle, dbm, Hyperware, Informix, Interbase'va Sybaselar bilan ham bog‘lana oladi"
        
       
        
        </script>
@endsection