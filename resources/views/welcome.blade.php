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
    * {
        background-color: #8b00 !important;
    }
</style>
<nav class="navbar navbar-expand-lg bg-dark text-white">
    <div class="container-fluid ">
        <a class="navbar-brand" href="#">
            <img src="https://lh3.googleusercontent.com/AWcnRZ1A40GZvOWKhQ-_KGxEgAULlthnBp_LbsaW9P09pL9Ye_cr1WNXlUyA9P4HF4aGhsGw7OibP6hlbEvNv94iJ7XLwZc26TsNdnOWyVs6IwEg3ONioLOk_1M4tsvnHW_i0nZ5bpe8II2qcZZHu5QMmiJmaXRQbPVz6NMsli_3gpAja9YFr7OQceC33-nbENEn5nkTXprL8IX36MHvPKhdvsgDE8hgYERKao0TFWEBAlgUk2NyUIyRDBm8impd-dUfdGqcwKtyK7JRu88m6Ca3FmgVNpJs-KFi11_fFCiDktCo0CeK3YjRCtUOeyyPpnGiM-BG53dUj0_MYjo5y51fzNgtqTgvhYN5SXH8lb2NCSYjmEe3cShNKoy7p5kzjYpPjRENEWDmwWM9OKjVInMHR4IJTCRtmI3apGcjUgTArsDd90D0zBGZC88tVAU3I-W6OUg_xK56VxApCXlHfz1G9Mert9Sql0orSQ5vNWMzUBFdJ9AebR-PHMdtGN8VLq6PjoB4FnvA40EHjcBKpUogA3YNZaHa9NY18yYL_SJVyXdTRuwe8g-6EpfXoN1JKJ7gsLP0X-jIVxnRegCx7KB66-fyBpOgPq_JxgWGV8Csd4QOxILvVrccTSOQz-3jBu0oUauEfKXNqfWiahudwoUwfNdAXkJTdfYTd5ydmKIiIqOZKPXmc1rnJVS38bQUqabNLeVRcQBM3_opbdwbXxvN4DWfrPusr9by3G8xU9WhoUDhlsU2ydETqeYYdeDRWLGvnm-NeDtvvvWjgK9GHIIrJUChz3be=s500-no?authuser=1" alt=""
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
