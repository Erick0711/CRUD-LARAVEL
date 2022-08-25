<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registros</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="container w-100 vh-100 d-flex justify-content-center align-items-center flex-column"> 
        <h1>REGISTROS</h1>
        <div class="container-fluid d-flex justify-content-between align-items-center flex-row">
        <form action="{{route('registro')}}" method="GET">
            <div class="row">
                <div class="col-md-8">
                    <input type="text" name="texto" class="form-control" value="{{$texto}}">
                </div>
                <div class="col-md-4">
                    <input type="submit" name="buscar" class="btn btn-primary" value="Buscar">
                </div>
            </div>
        </form>
        <a href="{{route('registro.create')}}"><i class='bx bx-user-plus bx-lg'></i></a>   
    </div>

        <table class="table table-bordered table-striped  text-center mt-2">
            <thead class="thead-dark text-white">
                <tr>
                    <th>ID</th>
                    <th>CODIGO</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>PAIS</th>
                    <th>NIVEL DE EQUIPO</th>
                    <th>CORREO</th>
                    <th>ACCIÓN</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                @if ($usuario->estado == 1)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->codigo }}</td>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->apellido }}</td>
                    <td>{{ $usuario->pais }}</td>
                    <td>{{ $usuario->nivel_de_equipo }}</td>
                    <td>{{ $usuario->correo }}</td>
                    <td class="w-25">
                        <form action="{{route('registro.destroy',$usuario->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                        <a href="{{route('registro.edit',$usuario->id)}}" class="btn btn-warning"><i class='bx bxs-edit'></i></a>
                        <button type="submit" class="btn btn-danger"><i class='bx bxs-trash-alt'></i></button>
                    </form>
                    </td>
                </tr>
                @endif
                 
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $usuarios->appends(['texto'=>$texto]) }}
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

</body>

</html>
