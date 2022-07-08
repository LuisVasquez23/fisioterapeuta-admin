<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>

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
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <?php
                    if (isset($_GET["categoria"])):
                ?>
                <h2>Actulizar Categoria</h2>
                <form action="<?=URL?>Admin/Categories/ActualizarCategoria/Actualizar" method="post" class="form" enctype="multipart/form-data">
                    <!-- Category id start -->
                    <div class="form-group">
                        <label for="descripcion_input" class="text-muted">Id categoria</label>
                        <input type="text" name="id_categoria" id="id_categoria" class="form-control" required readonly value="<?=$_GET["categoria"]?>">
                    </div>
                    <!-- Category id end -->
                    <!-- Category name start -->
                    <div class="form-group">
                        <label for="descripcion_input" class="text-muted">Nombre categoria</label>
                        <input type="text" name="categoria" id="categoria" class="form-control" required value="<?=$data[0]["categoria_title"]?>">
                    </div>
                    <!-- Category name end -->
                    <!-- Category image start -->
                    <div class="form-group">
                        <label for="img-ejercicio" class="text-muted">Imagen ejercicio</label>
                        <input type="file" name="img-ejercicio" id="img-ejercicio" class="form-control" accept="image/*"  />
                    </div>
                    <!-- Category image end -->
                    
                    <!-- Category image default start -->
                    <div class="form-group">
                        <input type="text" name="img-ejercicio_def" class="form-control" value="<?=$data[0]["imagen"]?>" hidden />
                    </div>
                    <!-- Category image default end -->

                    <!-- Category color header-card start -->
                    <div class="form-group">
                        <label for="color-head" class="text-muted">Color del encabezado</label>
                        <br/>
                        <input type="color" name="color-head" id="color-head" required value="<?=$data[0]["color_head_tittle"]?>">
                    </div>
                    <!-- Category color header-card end -->
                    <div class="form-group">
                        <input type="submit" value="Actualizar" name="Actualizar" class="btn btn-success">
                    </div>
                </form>
                <?php
                    else:
                    ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error</strong> No hay datos para actualizar. 
                        <a href="<?=URL?>Admin/Categories"> Regresar</a>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                    endif;
                ?>
            </div>
        </div>
    </div>
    <!-- Contenido end -->
    <!-- Bootstrap JS -->
    <?= BOOTSTRAPJS ?>
</body>
</html>