<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="container  w-100 min-vh-100 d-flex justify-content-center align-items-center flex-column">
        <h1>EDITAR USUARIO</h1>
        <form action="{{route('registro.update',$usuario->id)}}" method="post">
            @csrf
            @method('PUT')
        <div class="row">
            <div class="col-md-2">
                <div class="mb-3">
                    <input type="hidden" name="txt_id" id="txt_id" class="form-control" value="{{$usuario->id}}"
                        aria-describedby="helpId">
                </div>
            </div>
            <div class="col-md-10">
                <div class="mb-3">
                </div>
            </div>
            <div class="col-md-6">
            <div class="mb-3">
                <small id="helpId" class="text-muted">Nombre</small>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{$usuario->nombre}}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <small id="helpId" class="text-muted">Apellido</small>
                <input type="text" name="apellido" id="apellido" class="form-control" value="{{$usuario->apellido}}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <small id="helpId" class="text-muted">Pais</small>
                <input type="text" name="pais" id="pais" class="form-control" value="{{$usuario->pais}}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <small id="helpId" class="text-muted">Nivel de equipo</small>
                <input type="text" name="nivel_de_equipo" id="nivel_de_equipo" class="form-control" value="{{$usuario->nivel_de_equipo}}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <small id="helpId" class="text-muted">Correo</small>
                <input type="text" name="correo" id="correo" class="form-control" value="{{$usuario->correo}}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <small id="helpId" class="text-muted">Codigo</small>
                <input type="text" name="codigo" id="codigo" class="form-control" value="{{$usuario->codigo}}">
            </div>
        </div>

        <div class="col-md-12">
            <div class="mb-3">
                <input type="submit" class="btn btn-success btn-block" value="Guardar">
            </div>
        </div>
        </div>
    </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

</body>

</html>
