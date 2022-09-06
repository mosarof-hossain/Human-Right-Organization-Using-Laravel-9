<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OHP-Bangladesh</title>

    @include('include.style')
    
</head>
<body>
      <!--headerNav start-->
        @include('include.headerNav')
      <!--headerNav end-->
      
      <div class="container">
        @yield('content')
      </div>

      <!--footer Start-->
      @include('include.footer')
      <!--footer Start-->

      <!--scripting file-->
      @include('include.script')
</body>
</html>