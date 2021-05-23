<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" >
    <link rel="stylesheet" href="{{asset('css/styley.css')}}">
    <title>Test</title>
</head>
<body>
    
        <div class="container">
       
        <div class=col-sm-12>
        <div class="box">

       <form action="" method="POST">
         @csrf

        <div class="col-xs-6">

            <div class="form-group">

                <label>@lang('home.Ism')</label>
                <input type="text" name="name" id="first_name" class="form-control"  placeholder="@lang('home.Ism')" required data-parsley-pattern="[a-zA-Z]+$" required data-parsley-length="[4,16]"  data-parsley-trigger="keyup" />
            </div>

            
          </div>

          <div class="col-xs-6">
            <div class="form-group">
                <label>Familya</label>
                <input type="text" name="famil" id="last_name" class="form-control" placeholder="familya" required data-parsley-pattern="[a-zA-Z]+$" required data-parsley-length="[4,16]" data-parsley-trigger="keyup" />
            </div>
          </div>

          <div class="form-group">
            <label for="title">Fanni tanlang</label>
            <select name="state" class="form-control" style="width:350px">
             <option value="">--- Select State ---</option>
             @foreach ($states as $key => $value)
             <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
            </select>
            </div>
         
        <div class="form-group">
          <label for="title">Mavzu:</label>
          <select name="city" class="form-control" style="width:350px">
          </select>
        </div>
            </div>


           </form>


            </div>
        </div>
    
</body>
</html>
<script type="text/javascript">
  $(document).ready(function() {
      $('select[name="fan"]').on('change', function() {
          var stateID = $(this).val();
          if(stateID) {
              $.ajax({
                  url: '/myform/ajax/'+stateID,
                  type: "GET",
                  dataType: "json",
                  success:function(data) {

                      
                      $('select[name="city"]').empty();
                      $.each(data, function(key, value) {
                          $('select[name="city"]').append('<option value="'+ key +'">'+ value +'</option>');
                      });


                  }
              });
          }else{
              $('select[name="city"]').empty();
          }
      });
  });
</script>