@extends('layouts.accedi')

@section('title', 'Login')

@section('content')
<section class="loginsection">
    <div class="titolo">ACCEDI</div> <br>
    <div class="imgicona"><img src="images/products/iconalogin.png" alt="icona" style="width: 200px;; height:auto;" ></div> <br>
    <form class="contact-form" id="addproduct" name="addproduct" enctype="multipart/form-data" method="post" action="{{ route('login')}}">
                @csrf
                <div  class="wrap-input  rs1-wrap-input">
                    <label class="label-input" for="user">User</label>
                    <input class="input" type="text" name="user" id="user" value="">
                </div>

                <div  class="wrap-input  rs1-wrap-input">
                    <label class="label-input" for="password">Password</label>
                    <input class="input" type="password" name="password" id="password" value="">
                </div>

                <div class="container-form-btn">                
                    <input type="submit" class="form-btn1" value="Accedi">
                </div>
    </form>
   
    <!-- <div class="login-form">
        <form name="login-form">
            <label class="input-label">Username</label><br>
            <input class="input-field" type="text" placeholder="Username" required><br>
            <label class="input-label">Password</label><br>
            <input class="input-field" type="text" placeholder="Password" required><br>
            <button class="button">accedi</button><br>
        </form>
        <br><br>
        <nav class="input-label" > Non sei ancora registrato?</nav><br>
        <img src="images/products/Logo.png" alt="logo" style="width:30px; height:30px; " >
        <label class="bottomlogo"> ALLOGGISTUDENTI.com</p>
    </div>-->


@endsection