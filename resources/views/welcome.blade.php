<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barber Charly</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<style>
    body {
        background: url('https://fondosmil.com/fondo/64240.jpg') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;
    }

        @media (min-height: 768px) {
            .logo{
                margin-top: 200px !important;
                height: 100px;
            }
        }

</style>
<nav class="navbar navbar-expand-lg bg-dark text-white">
    <div class="container-fluid ">
        <a class="navbar-brand h3 fs-2 text-warning fw-bold" href="{{ url('/home') }}">Barber Charly</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
    <div class="container bg-dark text-white text-center mt-5 rounded ">
        <div class="row">
            <div class="col-12 ">
                <h1 class="fw-bold fs-2 mt-3">Lista de citas general</h1>
                <div class="row align-items-start m-3">
                    <div class="col">
                        <button class="btn btn-sm btn-warning text-white " data-bs-toggle="modal" data-bs-target="#exampleModal">Nueva cita</button>
                    </div>
                    <div class="col">

                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success btn-sm" type="submit" >Search</button>

                          </form>
                    </div>
                  </div>

                <table class="table text-white">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Completado</th>

                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($citas as $cita)
                        <tr>
                            <th scope="row">{{ $cita->id }}</th>

                            <td>{{ $cita->nombre }}</td>
                            <td>{{ $cita->fecha }}</td>
                            <td>{{ $cita->hora }}</td>
                            <td> <p>${{ $cita->precio }}</p> </td>
                            <td>
                                <input type="radio" class="btn-check" name="options-outlined" id="success-outlined"
                                    autocomplete="off" checked>
                                <a class="btn btn-outline-success" for="success-outlined" data-bs-toggle="modal" data-bs-target="#exampleModal1">Completar</a>
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
    <form action="{{ route('citas.update', $cita->id)}}" method="post">
        @csrf @method('PATCH')
        <div class="form-group row">
            <label for="inputPrecio" class="col-sm-2 col-form-label">Precio</label>
            <div class="col-sm-10">
              <input name="precio"  class="form-control" id="Precio" value="">
            </div>
          </div>
          <a type="button" class="btn btn-primary">Save changes</a>
    </form>

    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Cita terminada</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('citas.update', $cita->id)}}" method="post">
                    @csrf @method('PATCH')
                    <div class="form-group row">
                        <label for="inputPrecio" class="col-sm-2 col-form-label">Precio</label>
                        <div class="col-sm-10">
                          <input name="precio"  class="form-control" id="inputPuertas" value="$">
                        </div>
                      </div>
                      <button type="button" class="btn btn-primary">Save changes</button>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
          </div>
        </div>
      </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
          <div class="modal-content bg-black text-white">
            <div class="modal-header text-center">
              <h5 class="modal-title  " id="exampleModalLabel">Ingresa los datos de la nueva cita</h5>
              <button type="button" class="btn-close bg-white"  data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/guardar" class="m-3" method="POST">
                    @csrf
                    <div class="form-group row">
                      <label for="inputvehiculo" class="col-sm-2 col-form-label mt-3">Nombre </label>
                      <div class="col-sm-10 mt-3">
                        <input name="vehiculo" type="text" class="form-control" id="inputvehiculo" placeholder="Nombre completo">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputmodelo" class="col-sm-2 col-form-label mt-3">Fecha</label>
                      <div class="col-sm-10 mt-3">
                        <input name="modelo" type="date" class="form-control" id="inputmodelo" placeholder="Fecha">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputmodelo" class="col-sm-2 col-form-labe mt-3">Hora</label>
                        <div class="col-sm-10 mt-3">
                          <input name="modelo1" type="time" class="form-control" id="inputmodelo" placeholder="Fecha">
                        </div>
                      </div>
                    <div class="form-group row">
                      <label for="inputPuertas" class="col-sm-2 col-form-label"></label>
                      <div class="col-sm-10">
                        <input name="puertas"  class="form-control" id="inputPuertas" type="hidden" value="0">
                      </div>
                    </div>
                    <div class="form-group row hidden">
                        <div class="col-sm-10">
                          <input name="completado" class="form-control " type="hidden" id="inputPuertas" value="0">
                        </div>
                      </div>
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <div class="d-grid gap-2 offset-4">
                            <button class="btn btn-warning" type="button">Agregar cita</button>

                          </div>
                      </div>
                    </div>
                  </form>
            </div>

          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
