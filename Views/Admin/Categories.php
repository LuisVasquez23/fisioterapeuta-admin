<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Physio Specialized - Categorias</title>

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
    <!-- Main content start -->
    <main>
        <div class="container mt-3">
            <nav aria-label="breadcrumb" class="bread-dashboard">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=URL?>Admin">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Categorias</li>
                </ol>
            </nav>
            <div class="row mt-2">
                <div class="col-md-12">
                    <h3>Categorias </h3>
                    <!-- Table categories start -->
                    <table class="table text-center table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre categoria</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Color header</th>
                                <th scope="col" colspan="2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($data as $category):
                            ?>
                                <tr>
                                    <th scope="row"><?=$category["id_category"]?></th>
                                    <td><?=$category["categoria_title"]?></td>
                                    <td>
                                        <img src="<?=$category["imagen"]?>" alt="<?=$category["categoria_title"]?>-img" class="img-table">
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm" style="background: <?=$category["color_head_tittle"]?>; color:white;" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                                            <?=$category["color_head_tittle"]?>
                                        </button>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-primary btn-sm">
                                                <i class="fa-solid fa-pencil"></i>
                                            </button>
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                                endforeach;
                            ?>
                        </tbody>
                    </table>
                    <!-- Table categories end -->
                    <div class="mt-1">
                        <!-- Modal btn add start -->
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#agregarCategoria">
                            <i class="fa-solid fa-plus"></i> Agregar categoria
                        </button>
                        <!-- Modal btn add end -->
                    </div>
                </div>
            </div>
        </div>
        
    </main>
    <!-- Main content end -->

    <!-- Modal add category start-->
    <div class="modal fade" id="agregarCategoria" tabindex="-1" aria-labelledby="agregarCategoriaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="agregarCategoriaLabel">Agregar categoria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" class="form">
                    <div class="form-group">
                        <label for="descripcion_input" class="text-muted">Nombre categoria</label>
                        <input type="text" name="categoria" id="categoria" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="descripcion_input" class="text-muted">Contenido</label>
                        <textarea name="descripcion" id="descripcion_input" class="form-control">
                        </textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
    <!-- Modal add category end-->

    <!-- Bootstrap JS -->
    <?= BOOTSTRAPJS ?>
</body>
</html>