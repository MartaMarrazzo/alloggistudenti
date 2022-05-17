@extends('layouts.admin')

@section('title', 'Area Admin')

@section('content')


<div>
    <div class="container-contact">
        <div class="wrap-contact">
            <form class="contact-form" id="addproduct" name="addproduct" enctype="multipart/form-data" method="post" action="{{ route('inserimento_dati')}}">
                @csrf
                <div  class="wrap-input  rs1-wrap-input">
                    <label class="label-input" for="user">User</label>
                    <input class="input" type="text" name="user" id="user" value="">
                </div>

                <div  class="wrap-input  rs1-wrap-input">
                    <label class="label-input" for="password">Password</label>
                    <input class="input" type="password" name="password" id="password" value="">
                </div>


                <div  class="wrap-input  rs1-wrap-input">
                    <label class="label-input" for="nome">Nome</label>
                    <input class="input" type="text" name="nome" id="nome" value="">
                </div>


                <div  class="wrap-input  rs1-wrap-input">
                    <label class="label-input" for="cognome">Cognome</label>
                    <input class="input" type="text" name="cognome" id="cognome" value="">
                </div>


                <div  class="wrap-input  rs1-wrap-input">
                    <label class="label-input" for="sesso">Sesso</label>
                    <input class="input" type="text" name="sesso" id="sesso" value="">
                </div>


                <div  class="wrap-input  rs1-wrap-input">
                    <label class="label-input" for="data_nascita">Data di nascita</label>
                    <input class="input" type="text" name="data_nascita" id="data_nascita" value="">
                </div>


                <div  class="wrap-input  rs1-wrap-input">
                    <label class="label-input" for="tipo">Tipo</label>
                    <input class="input" type="text" name="tipo" id="tipo" value="">
                </div>


                <div  class="wrap-input  rs1-wrap-input">
                    <label class="label-input" for="image">Immagine</label>
                    <input class="input" type="text" name="image" id="image" value="">
                </div>

                <div class="container-form-btn">                
                    <input type="submit" class="form-btn1" value="Aggiungi Prodotto">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection