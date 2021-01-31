<!doctype html>
<html lang="en">

<head>
    <title>Editar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .contenedor {
            padding: 10rem 5rem;
            display: flex;
            justify-content: center;
            align-self: center;
        }

        .titu {
            text-align: center;

        }

        .centrar {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
            margin-right: 20px;
        }

        .btn {
            margin-right: 20px;
        }
    </style>
</head>

<body>
    @if(Session::has('dato_act'))
    <div id="hecho" class="alert alert-success" data-dismiss="alert">
        {{Session::get('dato_act')}}
    </div>

    @endif
    <div class="contenedor">
        <div class="card" style="width: 50rem;">
            <div class="card-body">
                <h3 class="titu text-info">Editar</h3>
                <form method="post" action="{{route('act.trailer')}}">
                    @csrf
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">#</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="idedit" value="{{$t->id}}"
                                readonly="readonly" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Matricula</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="a_matricula" value="{{$t->matricula}}"required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Conductor</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="a_aconductor" value="{{$t->conductor}}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Destino</label>
                        <input class="form-control col-1 col-form-label" style="margin-left: 1rem;" type="text" placeholder="{{$t->destino}}" readonly>
                        <div class="col-8" style="margin-left: 3rem;">
                            <select class="form-control" name="a_destino">
                                <option value="centro">Centro</option>
                                <option value="norte">Norte</option>
                                <option value="sur">Sur</option>
                                <option value="este">Este</option>
                                <option value="oeste">Oeste</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Tara</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="a_tara" value="{{$t->tara}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Bascula</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="a_bascula" value="{{$t->bascula}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Peso total</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="a_pesototal" value="{{$t->pesototal}}" required>
                        </div>
                    </div>
                    <div class="centrar">
                        <button type="submit" class="btn btn-outline-danger" value="Modificar">Modificar</button>
                        <a class="btn btn-outline-warning" href="/administracion" role="button">Regresar</a>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
