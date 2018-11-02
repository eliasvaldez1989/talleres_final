@extends('app')
@section('head')
    <link rel="stylesheet" href="css/login.css">
@endsection
@section('container')
    <div class="container contenedor">
        <section class="">
            <article class="singup col-10 col-sm-10 col-md-10 col-lg-10 col-xl-6" >
                <p class="sosnuevo">¿Sos nuevo?</p>
                <form method="post" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="parrwhite ">Nombre</label>
                        <input type="text" name="name" value="{{old('name')}}">
                        @foreach ($errors->get('name') as $message)
                        <p class="text-warning">{{ $message }}</p>
                         @endforeach
                    </div>
                    <div class="form-group">
                        <label class="parrwhite">Mail</label>
                        <input type="text" name="email" value="{{old('email')}}">
                        @foreach ($errors->get('email') as $message)
                            <p class="text-warning">{{ $message }}</p>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <label class="parrwhite">Contraseña</label>
                        <input type="password" name="password">
                        @foreach ($errors->get('password') as $message)
                            <p class="text-warning">{{ $message }}</p>
                        @endforeach
                    <div class="form-group">
                        <label class="parrwhite"> Repetir Contraseña</label>
                        <input type="password" name="password_confirmation"><p class="text-warning"></p>
                    </div>
                    <button type="submit" class="crear_cuenta" name="reg">Crear cuenta</button>
                </form>
            </article>
        </section>
        <section class="">
            <article class="login col-10 col-sm-10 col-md-10 col-lg-10 col-xl-6">
                <p class="text2">Inicia sesión</p>
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label class="parrblack">Email</label>
                        <input type="text" name="email" value="{{old('email')}}">
                        @foreach ($errors->get('email') as $message)
                            <p class="text-warning">{{ $message }}</p>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <label class="parrblack">Contraseña</label>
                        <input type="password" name="password" >
                        @foreach ($errors->login->get('password') as $message)
                            <p class="text-warning">{{ $message }}</p>
                        @endforeach
                    </div>
                    <div class="form-group">
                        Recordar
                        <input type="checkbox" name="recordar">
                    </div>
                    <div>
                        <button type="submit" class="logueate" name="log">Logueate</button>
                    </div>
                </form>
            </article>
        </section>
        <div class="logo_texto" >
            <p class="tenesun">Tenes un taller? Asociate <a href="asociate.php">aca</a></p>
        </div>
@endsection
