@extends('layouts.accedi')

@section('title', 'Annunci ')


@section('content')
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

      <div class="informazionilocatore">
      <p class = "infolocatore titolo"> locatore </p>  
      <p class="descriptionlocatore">  {{$offerta->descrizione}}</p>
      <p class="descriptionlocatore">  {{$offerta->descrizione}}</p>

      </div>
    </div>

    <div class="annunciosingolo">
      <div class="columnsections col1">
      <p class ="titoloannuncio">  {{$offerta->titolo}} </p> <br> <br> <br>
      <br> <!-- <img class="imgaffitto" src="images/affitto-stanza.jpg" alt="imgaffitto"> -->
      <p class = "imgaffitto">  </p>
      </div>

      <div class="columnsections col2">
       <p class = "description titolo"> {{$offerta->tipo}} : Descrizione</p>  
       <p class="description">  {{$offerta->descrizione}}</p>
       <p class = "description titolo"> Servizi inclusi</p>  
       <p class="description">  {{$offerta->descrizione}}</p> 
       <p class = "description titolo"> canone mensile</p>  
       <p class="description">  {{$offerta->prezzo}}</p> 
      </div>

      <div class="informazionilocatore">
      <p class = "infolocatore titolo"> locatore </p>  
      <p class="descriptionlocatore">  {{$offerta->descrizione}}</p>
      <p class="descriptionlocatore">  {{$offerta->descrizione}}</p>

      </div>
    </div>

    @endsection