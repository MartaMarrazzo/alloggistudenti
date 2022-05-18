@extends('layouts.accedi')

@section('title', 'Login')

@section('content')
<section class="loginsection">
    <div class="titolo">ACCEDI</div> <br>
    <div class="imgicona"><img src="images/products/iconalogin.png" alt="icona" style="width: 200px;; height:auto;" ></div> <br>
    <form class="login-form" id="addproduct" name="addproduct" enctype="multipart/form-data" method="post" action="{{ route('login')}}">
                @csrf
                    <label class="label-input" for="user">User</label><br>
                    <input class="input-field" type="text" name="user" id="user" value=""><br>

                    <label class="label-input" for="password">Password</label><br>
                    <input class="input-field" type="password" name="password" id="password" value=""><br>

                    <input type="submit" class="button" value="Accedi"><br>
    </form>
   <br><br>
    <nav class="label-input" > Non sei ancora registrato?</nav><br>
        <img src="images/products/Logo.png" alt="logo" style="width:30px; height:30px; " >
        <label class="bottomlogo"> ALLOGGISTUDENTI.com</p>
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
</section>


@endsection