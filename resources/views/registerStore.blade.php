@extends ('app')
@section('head')
    <link rel="stylesheet" href="css/login.css">
@endsection
@section('container')
    <div class="container contenedor">
    <section class="">
        <article class="miTaller col-10 col-sm-10 col-md-10 col-lg-10 col-xl-6" >
            <p class="sosnuevo">Mi Local</p>
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="parrwhite">Nombre</label>
                    <input  class="input2" type="text" name="storeName" value="">
                </div>
                <div class="form-group">
                    <label class="parrwhite"for="exampleFormControlSelect1">Barrio</label>
                    <select class="form-control input2" id="exampleFormControlSelect1">
                        @foreach(neighborhoods as neighborhood)
                        <option class="parrblack" value=""> </option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="parrwhite">Dirección</label>
                    <input class="input2" type="text" name="storeAdress" value="">
                </div>
                <div class="form-group">
                    <label class="parrwhite" for="exampleFormControlTextarea1">Descripción</label>
                    <textarea class="form-control input2" name="descripcionTaller" id="exampleFormControlTextarea1" rows="3"></textarea>

                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFileLang" lang="es" name="foto">
                    <label class=" selec custom-file-label" 	for="customFileLang">Imagen</label><p class="text-warning error_foto">
                        <br>
                        <br>

                </div>
                <button type="submit" class="subir" name="reg">Subir</button>
            </form>
        </article>
    </section>
    </div>
@endsection
