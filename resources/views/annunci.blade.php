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
          <p> <a class="dettaglibutton" href="{{ route('listacitta1') }}"> dettagli </a></p>
          </div>
          <div id="content"></div>
    </div>

    <div class="annunciosingolo">
      <div class="columnsections col1">
      <p class ="titoloannuncio">  {{$offerta->titolo}} </p> <br> <br> <br>
      <br> <!-- <img class="imgaffitto" src="images/affitto-stanza.jpg" alt="imgaffitto"> -->
      <p class = "imgaffitto">  </p>
      </div>

      <div class="columnsections col2">
       <p class = "description titolo"> {{$offerta->tipo}} </p>  
       <ul class ="ann">
        <li>
         <p> <a class="annuncibutton" href="{{ route('listacitta1') }}"> Opziona </a></p>
         </li>
         <li>
         <p> <a class="annuncibutton" href="{{ route('listacitta1') }}"> Contatta </a></p>
         </li>
        </ul>
       <p class = "description titolo"> Descrizione</p>  
       <p class="description">  {{$offerta->descrizione}}</p>
       <p class = "description titolo"> Servizi inclusi</p>  
       <p class="description">  {{$offerta->descrizione}}</p> 
       <p class = "description titolo"> canone mensile</p>  
       <p class="description">  {{$offerta->prezzo}}</p> 

  
      
      
      </div>
    </div>
</section>    
  @endforeach
  <!--Paginazione
    <button class="dettaglibutton" 
    <p><a class="tuttelecittà" href="{{ route('listacitta1') }}"><b>Tutte le città</b></a></p>
-->
@endisset()
          
@endsection