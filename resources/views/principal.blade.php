<!doctype html>
<html lang="en">

<head>
    <title>Principal</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js"
        integrity="sha512-zO8oeHCxetPn1Hd9PdDleg5Tw1bAaP0YmNvPY8CwcRyUk7d7/+nyElmFrB6f7vg4f7Fv4sui1mcep8RIEShczg=="
        crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <!--
        Componenete de jetstream
            ubicacion:
                resources/views/navigation-menu.blade.php
    -->
    <x-app-layout>
    </x-app-layout>

    <!--
        Componenete de livewire
            ubicacion:
        /resources/views/layouts/progress-bar.blade.php
    -->
    @include('layouts.progress-bar')


    <div style="display: flex; justify-content: space-between; margin: 1rem 20rem;">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Total</th>

                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <th scope="row">Descarga</th>
                        <td>{{$ptotal}} MT descargas</td>

                    </tr>
                    <tr>
                        <th scope="row">Unidad</th>
                        <td>{{$unidades}} verificadas</td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>


<!--Grafica-->
<div class="card" style="width: 30rem;">
    <div class="card-body">
        <h5 class="card-title">GRAFICA</h5>
        <canvas id="myChart" width="400" height="400"></canvas>
    </div>
</div>


</div>

<div style="margin-left: 55rem; margin-top: 10rem;">
<!--Boton de reporte-->
<a href="/pdf" class="btn btn-info">Generar reporte</a>

</div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <!--Grafica-->
    <script>
        $(function(){
            var datas = [{{$centro}},{{$norte}},{{$sur}},{{$este}},{{$oeste}}];
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {

                type: 'bar',
            data: {
                labels: ['centro','norte','sur','este','oeste'],
                datasets: [{
                    label: 'Descargas totales por destinos' ,
                    data: datas,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        })
    })
    </script>

</body>

</html>
