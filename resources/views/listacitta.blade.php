@extends('layouts.accedi')

@section('title', 'Lista Città')

@section('content')
<section class="catalogo">
<div class="container">
    <p class="titolo"> Esplora in base alla tua città</p><br>
    <ul class="griglia">    
        @foreach ($topCities as $citta)
       <li> 
           <div class="foto">
               <img src="{{ $citta->image }}">
           </div>
         
        <p class="arancione"> {{ $citta->name }} </p>
       <p class="blu">{{ $citta->numeroannunci }}</span>
        <p class="arancione2"> <a class="blu" href="{{ route('showAnnuncio', [$citta->name])}}" >Visualizza</p></a></li>
        @endforeach
    </ul>
</div>
</section>
@endsection

