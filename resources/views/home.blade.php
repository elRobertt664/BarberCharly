<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Screen</title>
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
<header>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand h3 fs-2 text-warning fw-bold" href="#">Barber Charly</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="text-center">
                <ul class="navbar-nav fs-6 fw-light">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{ url('/welcome') }}">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-secondary" href="{{ url('/login') }}">Acceder</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-secondary" href="#">Precios</a>
                    </li>

                  </ul>
            </div>

          </div>
        </div>
      </nav>

</header>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="d-flex align-items-center justify-content-center" style="height: 350px">
                    <div class="div">
                        <img src="https://lh3.googleusercontent.com/AWcnRZ1A40GZvOWKhQ-_KGxEgAULlthnBp_LbsaW9P09pL9Ye_cr1WNXlUyA9P4HF4aGhsGw7OibP6hlbEvNv94iJ7XLwZc26TsNdnOWyVs6IwEg3ONioLOk_1M4tsvnHW_i0nZ5bpe8II2qcZZHu5QMmiJmaXRQbPVz6NMsli_3gpAja9YFr7OQceC33-nbENEn5nkTXprL8IX36MHvPKhdvsgDE8hgYERKao0TFWEBAlgUk2NyUIyRDBm8impd-dUfdGqcwKtyK7JRu88m6Ca3FmgVNpJs-KFi11_fFCiDktCo0CeK3YjRCtUOeyyPpnGiM-BG53dUj0_MYjo5y51fzNgtqTgvhYN5SXH8lb2NCSYjmEe3cShNKoy7p5kzjYpPjRENEWDmwWM9OKjVInMHR4IJTCRtmI3apGcjUgTArsDd90D0zBGZC88tVAU3I-W6OUg_xK56VxApCXlHfz1G9Mert9Sql0orSQ5vNWMzUBFdJ9AebR-PHMdtGN8VLq6PjoB4FnvA40EHjcBKpUogA3YNZaHa9NY18yYL_SJVyXdTRuwe8g-6EpfXoN1JKJ7gsLP0X-jIVxnRegCx7KB66-fyBpOgPq_JxgWGV8Csd4QOxILvVrccTSOQz-3jBu0oUauEfKXNqfWiahudwoUwfNdAXkJTdfYTd5ydmKIiIqOZKPXmc1rnJVS38bQUqabNLeVRcQBM3_opbdwbXxvN4DWfrPusr9by3G8xU9WhoUDhlsU2ydETqeYYdeDRWLGvnm-NeDtvvvWjgK9GHIIrJUChz3be=s500-no?authuser=1" class="rounded mt-5 mb-3   logo" height="150px" style="" alt="" srcset="">
                        <p class="fs-6 text-white-50 fw-semibold">Una nueva manera de agendar tu cita</p>
                        <h1 class="fs-2 text-warning fw-bold">Consulta la disponibilidad para todo tipo de cortes <br> y barbas masculinas en Barber Charly</h1>
                        <p class="fs-5 text-white fw-light  ">Recuerda que proximamente puedes recibir las notificaciones de confirmacion directamente al celular</p>

                        <div class="d-grid gap-2 col-4 mx-auto">
                            <button class="btn btn-warning text-black fw-bold btn-lg " type="button">Reservar cita</button>
                        </div>
                    </div>

                </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
