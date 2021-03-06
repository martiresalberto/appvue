<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <meta name="csrf-token" content="{{ csrf_token() }}">
     
    <title>Share</title>

    <link rel="stylesheet" href="/css/app.css">
    
    <style>
    
    .btn-round{
       border-radius: 17px;
     }
    </style>

</head>
<body>

      <!-- Main content -->
      <div id="app">
                
        
        @include('layouts.home.partials.nav')

        @yield('content')

    
      </div>
      <!-- /.content -->
    

    
    <!-- REQUIRED SCRIPTS -->
    
    <!-- jQuery -->
    <script src="/js/app.js"></script>
    
    </body>
</html>