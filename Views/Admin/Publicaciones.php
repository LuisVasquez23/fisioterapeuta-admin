<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Physio Specialized - Publicaciones ejercicios</title>

    <!-- Bootstrap CSS -->
    <?= BOOTSTRAPCSS ?>

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= URL ?>Public/css/style.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= URL ?>Public/img/logo-fisio.png" type="image/x-icon">

    <!-- FontAwesome -->
    <?=FontAwesome?>

    <!-- SummerNote -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

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
                <a class="nav-link " aria-current="page" href="<?=URL?>Admin/">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=URL?>Admin/Categories">Categorias</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="<?=URL?>Admin/Publicaciones">Publicaciones</a>
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
                    <li class="breadcrumb-item active" aria-current="page">Publicaciones</li>
                </ol>
            </nav>
            <div class="row mt-2">
                <div class="col-md-12">
                    <h3>Publicaciones ejercicios </h3>
                    <!-- Table categories start -->
                    <table class="table text-center table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre ejercicio</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">PDF</th>
                                <th scope="col">Categoria</th>
                                <th scope="col" colspan="2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>MÚSCULOESQUELÉTICA</td>
                                <td>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae blanditiis odit soluta possimus deserunt quas, optio porro. Perspiciatis recusandae, consequuntur ipsam unde enim dolorem! Consequatur explicabo repellendus numquam molestias culpa.
                                </td>
                                <td>
                                    <img src="<?=URL?>Public/img/cardiopulmonar.png" alt="cardiopulmonar" class="img-table">
                                </td>
                                <td>
                                    <a href="">Descargar pdf</a>
                                </td>
                                <td>
                                    lksakdlmasdk
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
                        </tbody>
                    </table>
                    <!-- Table categories end -->
                    <div class="mt-1">
                        <!-- Modal btn add start -->
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#agregarEjercicios">
                            <i class="fa-solid fa-plus"></i> Agregar publicacion
                        </button>
                        <!-- Modal btn add end -->
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Main content end -->
     <!-- Modal add category start-->
     <div class="modal fade" id="agregarEjercicios" tabindex="-1" aria-labelledby="agregarEjerciciosLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="agregarEjerciciosLabel">Agregar publicion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?=URL?>Admin/Publicaciones/Agregar" method="post" class="form" enctype="multipart/form-data" id="agregarPublicacion">
                    <!-- IMG input start-->    
                    <div class="form-group">
                        <label for="descripcion_input" class="text-muted mb-1">Nombre ejercicio</label>
                        <input type="text" name="categoria" id="categoria" class="form-control">
                    </div>
                    <!-- IMG input end-->

                    <!-- descripcion input start-->  
                    <div class="form-group">
                        <label for="descripcion_input" class="text-muted mb-1">Descripciones</label>
                        <textarea id="descripcion_input" name="descripcion" class="form-control"></textarea>
                    </div>
                    <!-- descripcion input end--> 

                    <div class="row">
                        <div class="col-md-6">
                            <!-- img input start-->
                            <div class="form-group">
                                <label for="img-ejercicio" class="text-muted">Imagen ejercicio</label>
                                <input type="file" name="img-ejercicio" id="img-ejercicio" class="form-control" accept="image/*">
                            </div>
                            <!-- img input end-->
                        </div>
                        <div class="col-md-6">
                            <!-- file input start-->
                            <div class="form-group">
                                <label for="file-ejercicio" class="text-muted">Archivos ejercicio</label>
                                <input type="file" name="file-ejercicio" id="file-ejercicio" class="form-control" multiple accept="application/pdf">
                            </div>
                            <!-- file input end-->
                        </div>
                    </div>

                
                    <!-- Category input start -->
                    <div class="form-group">
                    <label for="category" class="text-muted">Categoria: </label>
                        <select name="category" id="category" class="form-control">
                            <option value="null" selected>Selecciona una opcion</option>
                            <?php
                                foreach($data as $dato):
                            ?>
                                <option value="<?=$dato["id_category"]?>"><?=$dato["categoria_title"]?></option>
                            <?php
                                endforeach;
                            ?>
                        </select>
                    </div>
                    <!-- Category input end -->
                    <div class="form-group">
                        <input type="submit" value="Agregar" name="agregar" class="btn btn-success">
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

    <!-- SummerNote Script -->
    <script>
      $('#descripcion_input').summernote({
        placeholder: 'Descripcion',
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline' , "italic"]],
          ['para', ['ul', 'ol']],
          ['insert', ['link', 'picture', 'video']],
          ['view', [ 'codeview']]
        ]
      });
    </script>
</body>
</html>