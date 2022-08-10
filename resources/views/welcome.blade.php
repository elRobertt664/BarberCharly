<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barber Charly</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<style>
    * {
        background-color: #8b00 !important;
    }
</style>
<nav class="navbar navbar-expand-lg bg-dark text-white">
    <div class="container-fluid ">
        <a class="navbar-brand" href="#">
            <img src="https://img.freepik.com/vector-premium/barber-shop-polo_7433-50.jpg?w=2000" alt=""
                width="120" height="85" class="d-inline-block align-text-top">

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <div class="navbar-nav ">
                <a class="nav-link active text-white" aria-current="page" href="#">Inicio</a>
                <a class="nav-link text-white" href="#">Nueva cita</a>
                <a class="nav-link text-white" href="#">Precios</a>
            </div>
        </div>
    </div>
</nav>

<body>
    <div class="container bg-dark text-white text-center">
        <div class="row">
            <div class="col-12">
                <h1>Lista de citas general</h1>

                <table class="table text-white">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Fecha y Hora</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Completado</th>

                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($citas as $cita)
                        <tr>
                            <th scope="row">{{ $cita->id }}</th>

                            <td>{{ $cita->nombre }}</td>
                            <td>{{ $cita->fecha_hora }}</td>
                            <td>{{ $cita->precio }}</td>
                            <td>
                                <input type="radio" class="btn-check" name="options-outlined" id="success-outlined"
                                    autocomplete="off" checked>
                                <label class="btn btn-outline-success" for="success-outlined">Completar</label>
                            </td>

                        </tr>
                        @endforeach
                        <tr>
                            <th scope="row">TOTAL</th>
                            <td colspan="2">$$</td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>



    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
