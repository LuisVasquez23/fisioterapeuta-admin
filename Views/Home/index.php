<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCode - Desarrolla tus ideas al maximo </title>

    <!-- Bootstrap CSS -->
    <?= BOOTSTRAPCSS ?>

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= URL ?>Public/css/style.css">
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
                        <a class="nav-link active" aria-current="page" href="#home">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#categories">CATEGORIAS</a>
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
        <section class="section home__section" id="home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h3 class="home__title">
                            MENS SANA
                            <span>IN CORPORE</span>
                            SANO
                        </h3>
                    </div>
                    <div class="col-lg-4 btn-section">
                        <a href="#categories" class="btn btn-success">Ejercicios</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="section" id="categories">
            <div class="container">
                <h2 class="section__title">CATEGORIAS</h2>
                <p class="categoria__p">
                    Espacio diseñado especialmente para que tengas acceso a guias de ejercicio terapéutico, infovideos y más. Pensando siempre en lo mejor para ti.
                </p>

                <div class="card-container">
                    <!-- Primer card -->
                    <div class="card__categoria">
                        <div class="card__title">
                            MÚSCULOESQUELÉTICA
                        </div>
                        <div class="card__body">
                            <img src="<?= URL ?>Public/img/musculoesquelita.jpg" class="card-img" alt="">

                        </div>
                        <div class="card__footer text-end">
                            <a href="#" class="btn btn-link">Ver ejercicios</a>
                        </div>
                    </div>

                    <!-- Segunda carta -->
                    <div class="card__categoria">
                        <div class="card__title">
                            MÚSCULOESQUELÉTICA
                        </div>
                        <div class="card__body">
                            <img src="<?= URL ?>Public/img/musculoesquelita.jpg" class="card-img" alt="">

                        </div>
                        <div class="card__footer text-end">
                            <a href="#" class="btn btn-link">Ver ejercicios</a>
                        </div>
                    </div>

                    <!-- Tercera carta -->
                    <div class="card__categoria">
                        <div class="card__title">
                            MÚSCULOESQUELÉTICA
                        </div>
                        <div class="card__body">
                            <img src="<?= URL ?>Public/img/musculoesquelita.jpg" class="card-img" alt="">

                        </div>
                        <div class="card__footer text-end">
                            <a href="#" class="btn btn-link">Ver ejercicios</a>
                        </div>
                    </div>
                    <!-- Cuarta carta -->
                    <div class="card__categoria">
                        <div class="card__title">
                            MÚSCULOESQUELÉTICA
                        </div>
                        <div class="card__body">
                            <img src="<?= URL ?>Public/img/musculoesquelita.jpg" class="card-img" alt="">

                        </div>
                        <div class="card__footer text-end">
                            <a href="#" class="btn btn-link">Ver ejercicios</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section about__section" id="about">
            <div class="container">
                <h2 class="section__title">ACERCA DE</h2>
                <div class="row about_content">
                    <div class="col-md-5">
                        <p>
                            Physio Specialized ofrece servicios de Terapia física y Ocupacional personalizado para cada diagnóstico.
                        </p>
                        <p>
                            Como clínica de rehabilitación nos capacitamos y actualizamos constante para ofrecerte las mejores opciones para tu rehabilitación.
                        </p>
                        <p>
                            Nuestra meta escencial llevar tu recuperación al siguiente nivel para que vuelvas a tu actividades de la vida laboral, deportiva o escolar con calidad.
                        </p>

                    </div>
                    <div class="col-md-7">
                        <img src="<?= URL ?>Public/img/logo-fisio.png" class="img" alt="Logo">
                    </div>
                </div>
            </div>
        </section>
        <section class="section" id="contact">
            <div class="container contact-container">
                <div class="contact_section">
                    <h2 class="section__title">CONTACTO</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-form pt-5">
                            <form action="" method="post" class="form">
                                <div class="form-group">
                                    <input type="text" name="asunto" id="asuntoInput" class="form-control" placeholder="Asunto">
                                </div>
                                <div class="form-group">
                                    <textarea name="mensaje" id="mensajeInput" class="form-control" placeholder="Mensaje" ></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </section>
    </main>


    <!-- Bootstrap JS -->
    <?= BOOTSTRAPJS ?>
</body>

</html>