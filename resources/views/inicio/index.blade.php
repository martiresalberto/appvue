@extends('layouts.home.master')



@section('content')

<div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
      <div class="col-md-5">
        <div>
          <h2>
            TE DAMOS LA BIENVENIDA A LA RED SHARE AQUI PODRAS COMPARTIR TUS EXPERIENCIAS
         </h2>
          
        </div>
      </div>
      <div class="col-md-7">
          <div class="graphic">
              <img src="/img/social3.png" width="500" alt="">
          </div>
      </div>
    </div>
  </div>

 
<div class="container h-100 mt-5">
    <div class="jumbotron row h-100 justify-content-center align-items-center">
        <div class="col-md-7">
          <h1>Comparte tus experiencias con millones de personas</h1>
        </div>
        <div class="col-md-5">  
            <a class="nav-link btn btn-outline-primary" href="{{ route('register') }}">Unete ahora</a>
        </div>   
    </div>
</div>


<div class="container h-100 mt-5">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-md-6">
        <div>
            <img src="/img/social4.png" width="300" alt="">
        </div>
    </div>
    <div class="col-md-6">
        <div>
            <img src="/img/social10.png" width="400" alt="">
        </div>
    </div>
  </div>
</div>


@endsection