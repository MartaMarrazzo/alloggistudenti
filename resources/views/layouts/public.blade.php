<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('css/homestyle.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('css/annunci.css') }}" >



        <title>AlloggiStudenti | @yield('title', 'Catalogo')</title>
      
    </head>

    <body>
        <header class="header">
        <div class="header-container">
        <div class="logo"><img class="logoimmagine" src="images/products/Logo.png" alt="Logo"></div>
        <div class="name">ALLOGGISTUDENTI.com</div>
        <nav class="menu" fixed="right">
        @include('layouts/_navpublic')
        </nav>
  </div>
</header>


            <!-- end #menu -->
            
                        @yield('content')
         
            <!-- end #content -->
<footer class="footer">
    <div class="footer-container">
      
    </div>
  </footer>
            <!-- end #footer -->
    </body>
</html>