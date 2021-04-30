@extends('darslar.index')
@section('content')
    <h1 align='center'>Ma'lumot turlari</h1>
<div class='row'>
    <div class='col-sm-12 col-md-12'>
        O'zgaruvchilar har xil turdagi ma'lumotlarni saqlashi mumkin va har xil ma'lumotlar turlari har xil ishlarni bajarishi mumkin.
        
        <div class="alert alert-success" role="alert">
            <p>PHP quyidagi ma'lumotlar turlarini qo'llab-quvvatlaydi:</p>
            <ul>
                <li>IP</li>
                <li>Butun son</li>
                <li>Float (suzuvchi nuqta raqamlari - ikkilik deb ham nomlanadi)</li>
                <li>Mantiqiy</li>
                <li>Array</li>
                <li>Obyekt</li>
                <li>Null</li>
                <li>Manba</li>
            </ul>
          </div>
     <h2 align='center'>PHP butun son</h2>
     Ma'lumotlarning butun turi -2,147,483,648 va 2,147,483,647 oralig'idagi o'nlik bo'lmagan raqam
    <div class="alert alert-success" role="alert">
            <p > Butun sonlar uchun qoidalar:</p>
            <ul>
                <li>Butun son kamida bitta raqamga ega bo'lishi kerak</li>
                <li>Butun sonda o‘nli nuqta bo‘lmasligi kerak</li>
                <li>Butun son ijobiy yoki salbiy bo'lishi mumkin</li>
                <li>Butun sonlar: o'nlik (10-asos), o'n oltinchi (16-asos), sakkizli (8-tayanch) yoki ikkilik (2-asos) yozuvlarda ko'rsatilishi mumkin</li>
                
            </ul>
          </div>
    </div>
</div>
@endsection