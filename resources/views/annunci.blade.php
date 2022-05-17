@extends('layouts.public')

@section('title', 'Home')

<!-- inizio sezione prodotti -->
@section('content')

<section class="cittàselezionata">
    <nav class="menu" fixed="right">
        <ul>
            <li> <a href="catalogo.html"  id ="backButton" class="back-to-previous"> </a></li>
            <li class="cittàsel"><h3 class="nomecittàselezionata"> Modena </h3></li>
        </ul>
    </nav>
</section>

<section class="annunci">
    <div class="annuncio">
          <div class="columnimg">
        <img class="imgaffitto" src="img/affitto-stanza.jpg" alt="imgaffitto">
          </div>
          <div class="columnimg columntext">
            <p class="titolocolonna">appartamento</p>
            <p class="testocolonna">  4 camere, 2 bagni, max 5 inquilini</p>

          </div>
          <div class="columnimg columnprice">
            <p class="titolocolonna">affitto</p>
            <p class="testocolonna">600 € </p>
            <button class="dettaglibutton"> dettagli</button>
        </div>
    </div>
    <div class="annuncio">
        <div class="columnimg">
      <img class="imgaffitto" src="img/affitto-stanza.jpg" alt="imgaffitto">
        </div>
        <div class="columnimg columntext">
          <p class="titolocolonna">appartamento</p>
          <p class="testocolonna">  4 camere, 2 bagni, max 5 inquilini</p>

        </div>
        <div class="columnimg columnprice">
          <p class="titolocolonna">affitto</p>
          <p class="testocolonna">600 € </p>
          <button class="dettaglibutton"> dettagli</button>
        </div>
    </div> 
    <div class="annuncio">
        <div class="columnimg">
      <img class="imgaffitto" src="img/affitto-stanza.jpg" alt="imgaffitto">
        </div>
        <div class="columnimg columntext">
          <p class="titolocolonna">appartamento</p>
          <p class="testocolonna">  4 camere, 2 bagni, max 5 inquilini</p>

        </div>
        <div class="columnimg columnprice">
          <p class="titolocolonna">affitto</p>
          <p class="testocolonna">600 € </p>
          <button class="dettaglibutton"> dettagli</button>
        </div>
    </div>

   
</section>

@endsection