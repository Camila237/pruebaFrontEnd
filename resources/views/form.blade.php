<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Formulario | Automóviles Mercedes-Benz</title>
        
        <!--Boostrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

        <!--styles-->
        <link rel="stylesheet" href="{{ asset('css/styles.scss') }}" />

    </head>
    <body>
        <div class="d-flex bg-black border-bottom pb-2">
            <div class="col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 py-3">
                <img src="/Images/imgLogo_navbar.jpg" class="img-fluid" onclick="window.location='{{ url("/") }}'">
            </div>
            <div class="col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-1 col-xs-1">
            </div>
            <form action="/automovil/formulario" method="POST" class="justify-content-center col-lg-5 col-md-5 col-sm-10 col-xs-10 my-4">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nombre">
                        Nombre del Automóvil:
                    </label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del automóvil">
                </div>
                <div class="form-group">
                    <label for="descripcion">
                        Descripción del Automóvil:
                    </label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese la descripción del automóvil">
                </div>
                <div class="form-group">
                    <label for="imagen">
                        Imagen del Automóvil
                    </label>
                    <br/>
                    <input type="file" class="form-control-file" id="imagen" name="imagen" aria-describedby="imageHelp" >
                    <br/>
                    <small id="imageHelp" class="form-text text-muted">
                        La imagen no puede superar los 3GB
                    </small>
                </div>
                <div class="text-center">
                <button type="submit" class="btn btn-secondary mt-3">Guardar</button>
                </div>
            </form>
            <div class="col-lg-3 col-md-3 col-sm-1 col-xs-1"></div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    </body>
</html>
