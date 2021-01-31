<!doctype html>
<html lang="en">

<head>
    @livewireStyles
    <title>Modulo administrativo</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style>
        .contenedor {
            padding: 2rem 20rem 1rem 20rem;
            display: flex;
            justify-content: center;
            align-self: center;
            align-content: center;
        }


        .pd {
            padding: 1rem 1rem;
        }

        .cont {
            padding: 1rem 5rem;
            display: flex;
            justify-content: center;
        }

        .center {
            padding: 1rem 5rem 1rem 5rem;
            display: flex;
            justify-content: center;
            align-self: center;
        }

        .just {
            padding: 0.5rem 2rem 0rem 2rem;
        }

        table tr {
            text-align: center;
        }
    </style>
</head>

<body>

    <x-app-layout>
    </x-app-layout>

    <div class="center">
        <h1>Administración</h1>
    </div>

    @include('layouts.alert-success')

    <div class="cont">
        <a class=" btn btn-success" style="margin:0.5rem;" href="/agrega" role="button">Ingresar Nuevo Artículo</a>
        <a class=" btn btn-success" style="margin:0.5rem;" href="/redirectnew" role="button">Añadir datos de
            báscula/agencia</a>
    </div>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Matrícula</th>
                <th>Conductor</th>
                <th>Destino</th>
                <th>Tara</th>
                <th>Báscula</th>
                <th>Peso Total</th>
                <th></th>
            </tr>
        </thead>

        @foreach($entregas as $e)
        <tr>
            <td>
                <p>{{$e->id}}</p>
            </td>
            <td>
                <p>{{$e->matricula}}</p>
            </td>
            <td>
                <p>{{$e->conductor}}</p>
            </td>
            <td>
                <p>{{$e->destino}}</p>
            </td>
            <td>
                <p>{{$e->tara}}</p>
            </td>
            <td>
                <p>{{$e->bascula}}</p>
            </td>
            <td>
                <p>{{$e->pesototal}}</p>
            </td>
            <td>


                <a id="eliminar" class="btn btn-danger" href="/elimina/{{$e->id}}">Eliminar</a>

                <a class="btn btn-outline-warning" href="/edita/{{$e->id}}">Editar</a>
            </td>

        </tr>
        @endforeach

    </table>



    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Báscula</th>
                <th scope="col">Agencia</th>
            </tr>
        </thead>

        <tbody>
            @foreach($datosact as $d)
            <tr>
                <td>{{$d->bascula}}</td>
                <td>{{$d->agencia}}</td>
            </tr>
            @endforeach


        </tbody>
    </table>

    <div style="display: flex; justify-content: center;">
        {{$entregas->links()}}
    </div>

    <script>
        var s = document.getElementById('hecho').style;
            s.opacity = 1;
            (function fade(){(s.opacity-=.1)<0?s.display="none":setTimeout(fade,100)})();
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

</body>

</html>
