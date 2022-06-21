<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store503 - Error 404</title>

    <?= BOOTSTRAPCSS ?>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= URL ?>">Store503</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= URL ?>">Regresar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h3 class="display-1 mt-5">
                    Error 404
                </h3>
                <p class="text-muted">
                    Esta pagina no ha sido encontrada
                </p>
                <a href="<?= URL ?>" class="btn btn-link">Regresar</a>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <?= BOOTSTRAPJS ?>
</body>

</html>