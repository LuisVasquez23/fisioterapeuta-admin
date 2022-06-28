<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In - Physio Specialized</title>

    <!-- Bootstrap CSS -->
    <?= BOOTSTRAPCSS ?>

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= URL ?>Public/css/style.css">

</head>
<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-blue fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?= URL ?>">
                Physio <span>Specialized</span>
            </a>
        </div>
    </nav>
    <!-- Navbar end -->

    <div class="form-container mt-5">
            <form action="<?=URL?>Login/Login" method="POST" class="form login-form">
                <h1 class="form-title">Iniciar sesion</h1>
                <div class="form-group">
                    <label for="user">Usuario</label>
                    <input type="text" name="user" id="user" required class="form-control mt-1" placeholder="Ingresar usuario">
                </div>
                <div class="form-group">
                    <label for="password">Contrasenia</label>
                    <input type="password" name="password" id="password" required class="form-control mt-1" placeholder="********">
                </div>
                <?php
                    if(isset($data)):
                ?>
                    <p class="<?= $data["classes"]?>">
                        <?=$data["mensaje"]?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </p>
                <?php
                    endif;
                ?>
                <div class="form-group">
                    <input type="submit" value="Iniciar sesion" name="submit-btn" class="btn btn-success">
                </div>
            </form>
       </div>
    <!-- Bootstrap JS -->
    <?= BOOTSTRAPJS ?>

    <footer class="footer position-absolute bottom">
        <div class="container footer-container">
            <h3 class="footer-title">
                <a href="<?= URL ?>" style="color:white;text-decoration:none;">&copy; Physio <span>Specialized</span></a>
            </h3>
        </div>
    </footer>
</body>
</html>