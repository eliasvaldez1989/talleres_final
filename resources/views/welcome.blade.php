@extends('app')

@section('head')

    <link rel="stylesheet" href="css/index.css">

@endsection

@section('container')

<body >

<header>

    <nav class="container">

        <div>

            <img src="#" alt="Logo">

        </div>

    </nav>

</header>

<div class="container">

    <div class="textoUno">

        <h1 class="tit">¿Necesitas un taller para tu auto?</h1>

    </div>

    <br>

    <div class="boton bot border">

        <a href="/login" > <p class="text">Ingresa</p></a>

    </div>

    <div class="logo_texto" >

        <img src="img/talleres.png" alt="" class="imag">

        <p class="tenesun">Tenes un taller? ¡Asociate <a href="registerStore">aca!</a></p>

    </div>

</div>

</div>

</body>

@endsection

