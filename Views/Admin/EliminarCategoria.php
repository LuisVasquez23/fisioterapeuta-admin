<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Categoria - Physio Specialized</title>

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
                <a class="nav-link" aria-current="page" href="<?=URL?>Admin/">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?=URL?>Admin/Categories">Categorias</a>
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
      <!-- Contenido start -->
      <div class="container mt-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 text-center">
                <h2>Esta seguro en eliminar la categoria "<?=$data[0]["categoria_title"]?>" ?</h2>
                <form action="<?=URL?>Admin/Categories/EliminarCategoria/" method="post">

                    <div class="form-group">
                        <input type="text" name="id_categoria" id="id_categoria" value="<?=$data[0]["id_category"]?>" hidden>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Eliminar" name="eliminar" class="btn btn-danger" style="margin-right:10px">
                        <a href="<?=URL?>Admin/Categories/">Regresar</a>
                    </div>
            
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <!-- Contenido end -->
    <!-- Bootstrap JS -->
    <?= BOOTSTRAPJS ?>
</body>
</html>