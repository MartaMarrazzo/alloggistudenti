@extends('layouts.accedi')

@section('title', 'Annunci')

<!-- inizio sezione prodotti -->
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
            <img class="imgaffitto" src="images/products/affitto-stanza.jpg" alt="imgaffitto">
          </div>
          <div class="columnimg columntext">
            <p class="titolocolonna">{{$offerta->tipo}}</p>
            <p class="testocolonna"> {{$offerta->locazione}}</p>
          </div>
          <div id="content"></div>
    </div>
</section>    
  @endforeach
  <!--Paginazione-->
@endisset()


          
@endsection