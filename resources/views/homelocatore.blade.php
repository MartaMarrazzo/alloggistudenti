@extends('layouts.locatore')

@section('title', 'Home Locatore')

<!-- inizio sezione prodotti -->
@section('content')

<section class="home">
<div class="firstimagehomelocatore">
  <div class="alignment2"><b>BENVENUTO<br> <br> <br>
  <a class="buttonlocatore" href=""> Inserisci annuncio </a>
 </b>
  </div>
  </div>

</div>
</section>
<br id="cs">
  <p class="titoloo">Inserisci il tuo alloggio <img class="iconimage" src="images/products/posizione.png" alt="Logo posizione geografica"> </p>
  <div>
    <p class="whoarewetext">Aiuta centinaia di studenti a trovare l'alloggio adatto alle loro esigenze.
      <br> Utilizza la nostra piattaforma per pubblicizzare il tuo appartamento o il tuo posto letto, affidati
      a noi per avere contratti sicuri e garantiti. 
    </p>
  </div>
</section>

<section class="treimg">
  <div class="container">
    <ul class="griglia3img">
      <li><img class ="foto" src="images/products/lente.png" >
       <p class="blu">Consulta decine di annunci per <br>ogni città universitaria</p></li>
      <li><img class ="foto" src="images/products/megafono.png">
      <p class="blu">Inserisci il tuo annuncio <br> ed affitta il tuo alloggio</p></li>
      <li><img class ="foto" src="images/products/contratto.png">
      <p class="blu">Affidati a noi per contratti <br> sicuri e garantiti</p></li>
    </ul>
  </div>
</section>

<section class="recensioni">
  <style>
    * {
      box-sizing: border-box}
    .slide1, .slide2 {
      display: none}
    img {
      vertical-align: middle;
    }
    .carosello {
      max-width: 1000px;
      position: relative;
      margin: auto;
    }
    </style>
  
  <div class="carosello">
    <div class="slide1">
      <div class="rectangle ">
        <p class="rectangletext"><b>Gli studenti che si sono affidati a noi</b></p><br>
        <div>
          <p class="studenttext">Sara Climini<br>
            UNIVPM
          </p>
          <img class="student" src="images/products/studentessa.jpg" alt="Studentessa">
          <p class="studentdescription">"mi sono affidata ad ALLOGGISTUDENTI.com per
            trovare l'appartamento ideale per affrontare
            la mia vita universitaria nella città di Ancona: ne sono pienamente soddisfatta"
          </p>
          <div class="dots">
            <span class="fulldot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
          </div>
        </div>
    </div>
  </div>
  
    <div class="slide1">
      <div class="rectangle ">
        <p class="rectangletext"><b>Gli studenti che si sono affidati a noi</b></p><br>
        <div>
          <p class="studenttext">Marco Clizi<br>
            UNIBA
          </p>
          <img class="student" src="images/products/studente.jpeg" alt="Studente">
          <p class="studentdescription"> "grazie a questo sito web sono riuscito a trovare l'alloggio fatto su misura
            per me, non mi sarei aspettato di raggiungere questo risultato con un click"
          </p>
          <div class="dots">
            <span class="dot"></span>
            <span class="fulldot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
          </div>
        </div>
    </div>
    </div>
    <div class="slide1">
      <div class="rectangle ">
        <p class="rectangletext"><b>Gli studenti che si sono affidati a noi</b></p><br>
        <div>
          <p class="studenttext">Alice Maggi<br>
            SAPIENZA
          </p>
          <img class="student" src="images/products/studentessa2.webp" alt="Studentessa">
          <p class="studentdescription">"ho trovato la casa perfetta per me nel centro di Roma, ho la fermata dell'
            autobus a due passi e due simpatiche coinquiline. Tutto grazie ad ALLOGGISTUDENTI.com "
          </p>
          <div class="dots">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="fulldot"></span>
            <span class="dot"></span>
          </div>
        </div>
    </div>
    </div>
    <div class="slide1">
      <div class="rectangle ">
        <p class="rectangletext"><b>Gli studenti che si sono affidati a noi</b></p><br>
        <div>
          <p class="studenttext">Andre Laurent<br>
            ALMA MATER <br>STUDIORUM
          </p>
          <img class="student" src="images/products/studente2.webp" alt="Studente">
          <p class="studentdescription"> "grazie ad ALLOGGISTUDENTI.com, anche per uno studente erasmus come me è stato facile trovare un posto letto
            a Bologna. Ho tre coinquilini ed ho trovato un'ottima soluzione qualità-prezzo "
          </p>
          <div class="dots">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="fulldot"></span>
          </div>
        </div>
    </div>
    </div>
    <a class="prec" onclick="cambiaSlide(-1, 0)">&#10094;
    </a>
    <a class="succ" onclick="cambiaSlide(1, 0)">&#10095;
    </a>
  </div>
  <script src="reviews.js"></script>
  </section>
  

<section class="esploracittà">
  <div class="container">
    <p class="titoloo"> Visualizza annunci per città</p><br>
    <ul class="griglia">
      <li><img class ="foto" src="images/products/Ancona.jpg" alt="Ancona">
        <p class="arancione">Ancona</p><p class="arancione2">
          <a class="arancione2">Visualizza</p></a></li>
      <li><img class ="foto" src="images/products/Milano.jpg">
        <p class="arancione">Milano</p><p class="arancione2">
          <a class="arancione2">Visualizza</p></a></li>
      <li><img class ="foto" src="images/products/Roma.webp">
        <p class="arancione">Roma</p><p class="arancione2">
          <a class="arancione2">Visualizza</p></a></li>
      <li><img class ="foto" src="images/products/Bari.jpg">
        <p class="arancione">Bari</p><p class="arancione2">
          <a class="arancione2">Visualizza</p></a></li>
    </ul>
    <p><a class="tuttelecittà" href="{{ route('listacitta1') }}"><b>Tutte le città</b></a></p>


  </div>
</section>

<section id="regolamento">
  <div class="reg" > 
      <p class="regolamento1" > <b> Regolamento</b> <img class="photo" src="images/products/megafono.png" >   </p>
  </div>
  <div class="rectangle1"> 
      <p class="rectangle1text"> <b> Area Pubblica</b> </p>  
      <p class="areapubtext" > Questa è l'area pubblica del sito AlloggiStudenti. <br>
                  Al suo interno trovi tutte le informazioni generali di tuo interesse! <br> 
                  Da questa pagina potrai accedere alla tua area riservata oppure registrarti,se ancora non lo hai fatto. <br>
                  Di seguito puoi trovare una sezione dedicata alle FAQ e un'altra che illustra i nostri contatti</p>
      <p class="rectangle1text"> <b> Area Privata </b> </p> 
      <p class="areaprivtext"> Dopo esserti registrato, potrai accedere allarea riservata tramite <br> 
                  il login dove troverai i servizi a te dedicati </p>
  </div> 
</section>  

<section id="faq" class="faq-container">
  <div class="titoloo">FAQ</div>

      <h1 class="faq-page">Domanda 1</h1>
      <div class="faq-body">
          <p>Risposta</p>
      </div>
 
      <h1 class="faq-page">Domanda 2</h1>
      <div class="faq-body">
          <p>Risposta</p>
      </div>
    
      <h1 class="faq-page">Domanda 3</h1>
      <div class="faq-body">
          <p>Rispsta</p>
      </div>

      <h1 class="faq-page">Domanda 4</h1>
      <div class="faq-body">
          <p>Rispsta</p>
      </div>

      <h1 class="faq-page">Domanda 5</h1>
      <div class="faq-body">
          <p>Rispsta</p>
      </div>

<script src="faq-js.js"></script>
</section>



<section class="contacts-section" id="contatti">
  
  <div class="contactscolumn">
    <div class="imgcontactscolumn"><img class="icon-contacts" src="images/products/imgcontatti.png" alt="Icon"></div>
  </div>

  <div class="contactscolumn">
    <p class="maintext-contact"> <img class="iconimage" src="images/products/arrow.png" alt="Logo posizione geografica"> Contattaci</p>
    <p style="text-align:center"><img class="icon-contact-info" src="images/products/call.png" ></p>
    <p class="contact-info"> +39 333 7762812 </p>
    <p style="text-align:center"> <img class="icon-contact-info" src="images/products/mail.png" alt="E-mail"> </p>
    <p class="contact-info"> info@alloggistudenti.com </p>
    <p style="text-align:center"><img class="icon-contact-info" src="images/products/location.png" alt="Locazione geografica"> </p>
    <p class="contact-info"> Via Brecce Bianche 1 (AN) </p>

  </div>


</section>
<div id ="backBtn" class="back-to-top" ></div>
<script src="backbtn.js"></script>

@endsection