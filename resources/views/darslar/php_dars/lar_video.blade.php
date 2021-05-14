
@extends('darslar.index')
@section('content')
    
<h3 align='center'>Mavjud qo'llanmalar ro'yxati</h3>
<table class="table table-striped table-bordered">
  <thead>
  <tr>
  <th>№</th>
  <th   align='center'>Dars mavzusi</th>
  <th   align='center'>Video</th>
  <th   align='center'>Dastur Kod</th>
  
  </tr>
  </thead>
  @foreach($seach as $key => $value)
  <tbody>
    <tr>
      <th align='center'> {{$value->id}} </th>
      <td> <a href="http://itmath1.uz/{{$value->mavzu_title}}">{{$value->mavzu}}</a> </td>
      <td> <a href="https://www.youtube.com/{{$value->video_title}}"> {{$value->Video}} </a> </td>
      <td align='center' > <a href="https://github.com/Murod1990/{{$value->kod_title}}">{{$value->kod}}</a> </td>
    </tr>
    </tbody>
    
  @endforeach
 
    

</table>
{{ $seach ->links() }}
@endsection