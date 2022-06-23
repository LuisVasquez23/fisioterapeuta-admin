<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Physio Specialized - CARDIOPULMONAR</title>

    <!-- Bootstrap CSS -->
    <?= BOOTSTRAPCSS ?>

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= URL ?>Public/css/style.css">

    <!-- FontAwesome -->
    <?= FontAwesome ?>
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-blue fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                Physio <span>Specialized</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#home">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#categories">CATEGORIAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#about">ACERCA DE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#contact">CONTACTO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->
    <!-- Content start -->
    <main>
        <section class="section category__section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h3 class="home__title">
                        CARDIOPULMONAR
                        </h3>
                    </div>
                   
                </div>
            </div>
        </section>
        <section class="section" id="categories">
            <div class="container">
                <h2 class="section__title">Ejercicios</h2>
                <div class="card__container_Ejerc">
                    <!-- Primer card -->
                    <div class="card__categoriaE">
                        <div class="card__titleE">
                            columna lumbar
                        </div>
                        <div class="card__Textbody">
                            <p>
                                <span>
                                    <strong>Descripción:</strong>
                                </span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius amet quod cum eligendi, libero dolores. Fugiat aut alias placeat amet quasi excepturi! Assumenda officia accusamus reprehenderit qui, blanditiis quia excepturi?
                            </p>

                        </div>
                        <div class="card__footer text-start">
                            <a href="#" class="btn btn-link">Descargar</a>
                        </div>
                    </div>

                    <!-- Segunda carta -->
                    <div class="card__categoriaE">
                        <div class="card__titleE">
                            cadera
                        </div>
                        <div class="card__Textbody">
                            <p>
                                <span>
                                    <strong>Descripción:</strong>
                                </span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius amet quod cum eligendi, libero dolores. Fugiat aut alias placeat amet quasi excepturi! Assumenda officia accusamus reprehenderit qui, blanditiis quia excepturi?
                            </p>

                        </div>
                        <div class="card__footer text-start">
                            <a href="#" class="btn btn-link">Descargar</a>
                        </div>
                    </div>
                 
                </div>
            </div>
        </section>     
    </main>


    <!-- Bootstrap JS -->
    <?= BOOTSTRAPJS ?>
    <footer class="footer">
        <div class="container footer-container">
            <h3 class="footer-title">
                &copy; Physio <span>Specialized</span>
            </h3>
        </div>
    </footer>
   
</body>

</html>