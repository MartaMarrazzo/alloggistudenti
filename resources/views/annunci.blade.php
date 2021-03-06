@extends('layouts.accedi')

@section('title', 'Annunci ')


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
          <p> <a class="dettaglibutton" href="{{ route('dettagliAnnuncio', [$offerta->id]) }}"> dettagli </a></p>
          </div>
          <div id="content"></div>
    </div>

   
</section>    
  @endforeach
  <!--Paginazione
    <button class="dettaglibutton" 
    <p><a class="tuttelecittà" href="{{ route('listacitta1') }}"><b>Tutte le città</b></a></p>
-->
@endisset()
          
@endsection