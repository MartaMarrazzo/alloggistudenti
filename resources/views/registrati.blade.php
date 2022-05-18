@extends('layouts.accedi')

@section('title', 'Registrati')

@section('content')


<section class="loginsection">
    <div class="titolo">REGISTRATI</div> <br>
    <div class="imgicona"><img src="images/products/iconalogin.png" alt="icona" style="width: 200px;; height:auto;" ></div> <br>   
            <form class="login-form" id="addproduct" name="addproduct" enctype="multipart/form-data" method="post" action="{{ route('inserimento_dati')}}">
                @csrf
                    <label class="label-input" for="user">User</label> <br>
                    <input class="input-field" type="text" name="user" id="user" value=""><br>

                    <label class="label-input" for="password">Password</label> <br>
                    <input class="input-field" type="password" name="password" id="password" value=""><br>

                    <label class="label-input" for="nome">Nome</label> <br>
                    <input class="input-field" type="text" name="nome" id="nome" value=""><br>

                    <label class="label-input" for="cognome">Cognome</label><br>
                    <input class="input-field" type="text" name="cognome" id="cognome" value=""><br>

                    <label class="label-input" for="sesso">Sesso</label><br>
                    <input class="input-field" type="text" name="sesso" id="sesso" value=""><br>

                    <label class="label-input" for="data_nascita">Data di nascita (AAAA-MM-GG)</label><br>
                    <input class="input-field" type="text" name="data_nascita" id="data_nascita" value=""><br>

                    <label class="label-input" for="tipo">Tipo</label><br>
                    <input class="input-field" type="text" name="tipo" id="tipo" value=""><br>

                    <label class="label-input" for="image">Immagine</label><br>
                    <input class="input-field" type="text" name="image" id="image" value=""><br>

                    <input type="submit" class="button" value="Registrati"><br>
            </form>

<br>
        <img src="images/products/Logo.png" alt="logo" style="width:30px; height:30px; " >
        <label class="bottomlogo"> ALLOGGISTUDENTI.com</p>
</secion>
@endsection