<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Physio Specialized - Dashboard</title>

    <!-- Bootstrap CSS -->
    <?= BOOTSTRAPCSS ?>

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= URL ?>Public/css/style.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= URL ?>Public/img/logo-fisio.png" type="image/x-icon">

    <!-- FontAwesome -->
    <?=FontAwesome?>
</head>
<body>
    <!-- Navbar start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
                <a class="navbar-brand" href="<?= URL ?>">
                    Physio <span>Specialized</span>
                </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?=URL?>Admin/">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=URL?>Admin/Categories">Categorias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=URL?>Admin/Publicaciones">Publicaciones</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="<?=URL?>Admin/index/Logout">Cerrar sesion</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?=URL?>Admin/Reset-password">Cambiar contrasenia</a>
                        </li>
                    </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->
    <main>
        <div class="container mt-3">
        <h3>Bienvenido, <?=$_SESSION['username']?></h3>
        <div aria-label="breadcrumb" class="bread-dashboard">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </div>
            <div class="row mt-5 justify-content-md-center">
                 <!-- 1 card -->
                <div class="col-md-4">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Categorias</div>
                        <div class="card-body text-center">
                            <p class="card-text">
                                <span class="card-number">
                                    10
                                </span>
                            </p>
                            <h5 class="card-title">Categorias creada</h5>
                        </div>
                    </div>
                </div>

                <!-- 2 card -->
                <div class="col-md-4">
                    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                        <div class="card-header">Publicaciones</div>
                        <div class="card-body text-center">
                            <p class="card-text">
                                <span class="card-number">
                                    30
                                </span>
                            </p>
                            <h5 class="card-title">Publicaciones creada</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
     <!-- Bootstrap JS -->
     <?= BOOTSTRAPJS ?>
</body>
</html>