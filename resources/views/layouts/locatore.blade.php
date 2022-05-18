<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('css/homestyle.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('css/annunci.css') }}" >

        <title>LaProj2 | @yield('title', 'Home Locatore')</title>
    </head>

    <body>
        <header class="header">
        <div class="header-container">
        <div class="logo"><img class="logoimmagine" src="images/products/Logo.png" alt="Logo"></div>
        <div class="name">ALLOGGISTUDENTI.com</div>
        <nav class="menu" fixed="right">
        @include('layouts/_navlocatore')
        </nav>
  </div>
</header>


            <!-- end #menu -->
            
                        @yield('content')
         
            <!-- end #content -->
<footer class="footer">
    <div class="row footer-container">
      <div class="column">
        <h3 class="footer-header"><img class="fcc-footer-logo" src="images/products/Logo-removebg-preview.png" alt="Logo">ALLOGGISTUDENTI.com</h3>
        <p class="footer-support-text">We are an independent local community and study group.</p>
      </div>
      <div class="column column-2">
        <h2 class="small-footer-header">website</h2>
        <p class="footer-support-text">
          <a class="footer-link" href="#cs" target="_self" >Chi siamo</a>
        </p>
        <p class="footer-support-text">
          <a class="footer-link" href="#regolamento" target="_self">Regolamento</a>
        </p>
        <p class="footer-support-text">
          <a class="footer-link" href="#faq" target="_self">F.A.Q.</a>
        </p>
        <p class="footer-support-text">
            <a class="footer-link" href="#contatti" target="_self">Contatti</a>
          </p>
      </div>
      <div class="column column-3">
        <h2 class="small-footer-header">privacy</h2>
        <p class="footer-support-text">
          <a class="footer-link" href="" target="_blank">Privacy Policy</a>
        </p>
        <p class="footer-support-text">
          <a class="footer-link" href="" target="_blank">Privacy Policy Form</a>
        </p>
        <p class="footer-support-text">
          <a class="footer-link" href="" target="_blank">Cookie Policy</a>
        </p>
        <p class="footer-support-text">
            <a class="footer-link" href="" target="_blank">Aiuto & Supporto</a>
          </p>
      </div>
    </div>
    <div class="bottomFooter">2022 Copyright ALLOGGISTUDENTI.com</div>
  </footer>
            <!-- end #footer -->
    </body>
</html>