<!DOCTYPE html5>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>AprendAqui</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="{{asset('/vendors/bootstrap/css/bootstrap.min.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('vendors/fontawesome-free-5.8.1-web/fontawesome-free-5.8.1-web/css/all.css')}}">
  <link rel="stylesheet" href="{{asset('/vendors/bootstrap/css/animate.css')}}">
  <link rel="stylesheet" href="{{asset('/vendors/bootstrap/css/cursor.css')}}">
  <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
  
 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&family=Lobster&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="{{asset('/css/index-style.css')}}"/>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-expand-sm navbar-light bg-light ">
            <a class="navbar-brand h1 logo" href="/">AprendAqui</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false" aria-controls="main-navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse w-100 justify-content-end" id="main-navbar" >
                <ul class="navbar-nav ">
                    <li class="nav-item"><a class="nav-link " href="/">Início</a></li>
                    <li class="nav-item"><a class="nav-link " href="/">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link " href="/">Professores</a></li>
                    <li class="nav-item"><button type="button" class="btn btn-outline-info ">Dar aulas</button></li>
                </ul>
            </div>
           
        </nav>
    </header>

    <main>
        <div class="container-flex">
            <div class="row m-0">
                <section id="banner">
                    <img src="{{asset('/images/banner-1-1.jpg')}}" class="img-fluid" alt="Imagem responsiva">
                    <form action="" method="">
                    <input type="text"  placeholder="O que você quer aprender?">
                        <button class="btn btn-info" type="submit"></button>
                    </form>
                
                    
                    
                </section>
            </div>
        </div>
    </main>



    <footer>
    </footer>





 

  <script src="{{asset('vendors/jquery/js/jquery.min.js')}}"></script>
  <script src="{{asset('vendors/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('vendors/bootstrap/js/wow.min.js')}}"></script>
  <script src="{{asset('js/index.js')}}"></script>

</body>
</html>





