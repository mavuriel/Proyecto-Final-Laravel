<!doctype html>
<html lang="en">

<head>
    @livewireStyles
    <title>Registro trailer</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .contenedor {
            padding: 20rem 5rem;
            display: flex;
            justify-content: center;
            align-self: center;
        }

        .titu {
            text-align: center;
            text-decoration: underline;
        }

        .centrar {
            display: flex;
            justify-content: center;
        }

        .btn {
            margin-right: 20px;
        }
    </style>

</head>

<body>

    @if(Session::has ('dato_agregado'))
    <div id="hecho" class="alert alert-success" data-dismiss="alert">
        {{Session::get ('dato_agregado')}}
    </div>
    @endif



    <div class="contenedor">
        <div class="card" style="width: 50rem;">
            <div class="card-body">
                <h3 class="titu">Registro de control externo</h3>
                <form method="post" action="{{route('new.adm')}}">
                    @csrf
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Bascula</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="a_bascula"
                                placeholder="Ingresa dato de bascula" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Agencia</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="a_agencia"
                                placeholder="Ingresa dato de agencia" required>
                        </div>
                    </div>


                    <div class="centrar">
                        <button type="submit" class="btn btn-outline-primary">Agregar</button>
                        <a class="btn btn-warning" href="/moduloadmin" role="button">Regresar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        var s = document.getElementById('hecho').style;
            s.opacity = 1;
            (function fade(){(s.opacity-=.1)<0?s.display="none":setTimeout(fade,100)})();
    </script>
    @livewireScripts
</body>

</html>
