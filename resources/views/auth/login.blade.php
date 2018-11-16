@extends('app')

@section('head')

    <link rel="stylesheet" href="css/login.css">

@endsection

@section('container')
    <div class="container contenedor">

        <section class="">

            <article class="singup col-10 col-sm-10 col-md-10 col-lg-10 col-xl-6" >

                <p class="sosnuevo">¿Sos nuevo?</p>

                <form method="post" action="{{ route('register') }}" class="needs-validation registerUser" novalidate enctype="multipart/form-data">

                    @csrf

                    <div class="form-group">

                        <label class="parrwhite" for="validationCustom1">Nombre</label>

                        <input type="text" name="name" id="validationCustom1" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"  value="{{old('name')}}" required>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group">

                        <label class="parrwhite">Mail</label>

                        <input type="text" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{old('email')}}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif


                    </div>

                    <div class="form-group">

                        <label class="parrwhite">Contraseña</label>

                        <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group">

                        <label class="parrwhite"> Repetir Contraseña</label>

                        <input type="password" name="password_confirmation" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" required><p class="text-warning"></p>

                    </div>

                    <button type="submit" class="crear_cuenta" name="reg">Crear cuenta</button>

                </form>

            </article>

        </section>

        <section class="">

            <article class="login col-10 col-sm-10 col-md-10 col-lg-10 col-xl-6">

                <p class="text2">Inicia sesión</p>

                <form method="post" action="{{ route('login') }}" class="needs-validation" >

                    @csrf

                    <div class="form-group">

                        <label class="parrblack">Email</label>

                        <input type="text" name="mail" class="form-control{{ $errors->has('mail') ? ' is-invalid' : '' }}" value="{{old('email')}}">

                        @if ($errors->has('mail'))
                            <span class="invalid-feedback" role="">
                                        <strong>{{ $errors->first('mail') }}</strong>
                                    </span>
                        @endif

                    </div>

                    <div class="form-group">

                        <label class="parrblack">Contraseña</label>

                        <input type="password" class="form-control{{ $errors->has('passwordL') ? ' is-invalid' : '' }}" name="passwordL" >

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

            <p class="tenesun">Tenes un taller? Asociate <a href="/registerStore">aca</a></p>

        </div>

@endsection
