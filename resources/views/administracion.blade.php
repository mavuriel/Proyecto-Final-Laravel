<!doctype html>
<html lang="en">

<head>
    @livewireStyles
    <title>Bascula</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style>
        .contenedor {
            padding: 1rem 20rem 1rem 20rem;
            display: flex;
            justify-content: center;
            align-self: center;
            align-content: center;
        }


        .pd {
            padding: 1rem 1rem;
        }

        .cont {
            padding: 1rem 5rem 0rem 5rem;
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
        <h1>Información báscula</h1>
    </div>

    @include('layouts.alert-success')

    @include('layouts.progress-bar')


    <div class="cont">
        <a class=" btn btn-success" href="/agrega" role="button">Ingresar Nuevo Artículo</a>
    </div>


    <div>
        @livewire('prueba-componente')
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <script>
        var s = document.getElementById('hecho').style;
            s.opacity = 1;
            (function fade(){(s.opacity-=.1)<0?s.display="none":setTimeout(fade,100)})();
    </script>
    @livewireScripts
</body>

</html>
