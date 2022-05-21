@extends('layouts.locatario')

@section('title', 'Annunci Locatario')


@section('content')

@isset($offerte)
<section class="cittàselezionata">
    <nav class="menu" fixed="right">
        <ul>
            <li> <a href="catalogo.html"  id ="backButton" class="back-to-previous"> </a></li>
            <li class="cittàsel"><h3 class="nomecittàselezionata">citta</h3></li>
        </ul>
    </nav>
</section>

@foreach ($offerte as $offerta)
<section class="annunci">
    <div class="annuncio">
          <div class="columnimg">
            <img class="imgaffitto" src="images/affitto-stanza.jpg" alt="imgaffitto">
          </div>
          <div class="columnimg columntext">

          <p class="titolocolonna"> {{$offerta->tipo}} :  {{$offerta->titolo}}   </p>
          <p class="testocolonna"> {{$offerta->descrizione_breve}} <br> {{$offerta->locazione}}</p>

        </div>
          <div class="columnimg columnprice">
            <p class="testocolonna"> CANONE MENSILE <br>{{$offerta->prezzo}} EURO  </p>
            <button class="dettaglibutton"> dettagli</button>
          </div>
          <div id="content"></div>
    </div>
</section>    
  @endforeach
  <!--Paginazione-->
@endisset()


          
@endsection

<!--
  @extends('layouts.accedi')

@section('title', 'Annunci')


@section('content')

@isset($offerte)
<div class="cittàselezionata">
    <nav class="menu" fixed="right">
        <ul>
            <li> <a href="catalogo.html"  id ="backButton" class="back-to-previous"> </a></li>
            <li class="cittàsel"><h3 class="nomecittàselezionata">citta</h3></li>
        </ul>
    </nav>
</div>
@endisset()


<section class="annunciefiltri">
@foreach ($offerte as $offerta)
    <div class="annuncio">
          <div class="columnimg">
            <img class="imgaffitto" src="images/affitto-stanza.jpg" alt="imgaffitto">
          </div>
          <div class=" columntext">

          <p class="titolocolonna"> {{$offerta->tipo}} :  {{$offerta->titolo}}   </p>
          <p class="testocolonna"> {{$offerta->descrizione_breve}} <br> {{$offerta->locazione}}</p>

        </div>
          <div class=" columnprice">
            <p class="testocolonna"> CANONE MENSILE <br>{{$offerta->prezzo}} EURO  </p>
            <button class="dettaglibutton"> dettagli</button>
          </div>
          <div id="content"></div>

          <div class=" columntext">

          <p class="titolocolonna"> {{$offerta->tipo}} :  {{$offerta->titolo}}   </p>
          <p class="testocolonna"> {{$offerta->descrizione_breve}} <br> {{$offerta->locazione}}</p>

        </div>
          @endforeach

    </div>


<div class="columnfilter">
  <form class="filtriformOne" id="filtri" name="filtri" enctype="multipart/form-data" method="post" action="">
    @csrf
    <label class="label-input" for="user">Indica la tua tipologia d'interesse</label> <br>
    <input name ="appartamento" class="opzione" type="checkbox" value="Appartamento"> Appartamento	 <br>
    <input name="postoletto" class="opzione" type="checkbox" value="Posto Letto	"> Posto Letto	 <br> <br>

    <label class="label-input" for="user">Budget mensile</label> <br>
    <input name ="appartamento" class="opzione" type="radio" value="Appartamento"> 150-350 EURO	 <br>
    <input name="postoletto" class="opzione" type="radio" value="Posto Letto	"> 350-550 EURO	 <br>
    <input name ="appartamento" class="opzione" type="radio" value="Appartamento"> > 550 EURO	 <br>
 <br>

    <input type="submit" class="buttonfilter" value="Cerca"><br> <br> <br>


    <label class="label-input" for="appartamento">Appartamento</label> <br>

    <label class="label-input-smaller" for="dim">Dimensione</label> <br>
    <input name="c1" type="checkbox" value=">50mq"> fino a 50mq	<br>
    <input name="c2" type="checkbox" value="150mq"> 50-150mq <br>
    <input name="c3" type="checkbox" value=">150mq"> più di 150mq	<br> <br>

    <label class="label-input-smaller" for="numstanze">Numero di stanze</label> <br>
    <input name="c1" type="checkbox" value="12"> 1-2	<br>
    <input name="c2" type="checkbox" value="34"> 3-4 <br>
    <input name="c3" type="checkbox" value=">5"> più di 4	<br> <br>

    <label class="label-input-smaller" for="numstanze">Posti letto totali</label> <br>
    <input name="c1" type="checkbox" value="12"> 1-2	<br>
    <input name="c2" type="checkbox" value="34"> 3-4 <br>
    <input name="c3" type="checkbox" value=">5"> più di 4	<br> <br>

    <label class="label-input" for="postoletto">Posto Letto</label> <br>
    <label class="label-input-smaller" for="numstanze">Posti letto per stanza</label> <br>
    <input name="c1" type="checkbox" value="12"> 1	<br>
    <input name="c2" type="checkbox" value="34"> 2 <br>
    <input name="c3" type="checkbox" value=">5"> più di 2	<br> <br>

    <label class="label-input-smaller" for="numstanze">Dimensione stanza</label> <br>
    <input name="c1" type="checkbox" value="12"> fino a 20mq	<br>
    <input name="c2" type="checkbox" value="34"> 20-40mq <br>
    <input name="c3" type="checkbox" value=">5"> più di 40mq	<br> <br>


    <label class="label-input" for="appartamento">Servizi</label> <br>
    <input name="c1" type="checkbox" value="12"> Aria condizionata	<br>
    <input name="c2" type="checkbox" value="34"> Wi-Fi <br>
    <input name="c3" type="checkbox" value="34"> Cucina <br>
    <input name="c2" type="checkbox" value="34"> Angolo studio <br>
    <input name="c2" type="checkbox" value="34"> Bagno Privato <br>
    <input name="c2" type="checkbox" value="34"> Bollette incluse <br>

    <input type="submit" class="buttonfilter" value="Cerca"><br> <br> <br>
  </form>
</div>



</section>  
@endsection
-->