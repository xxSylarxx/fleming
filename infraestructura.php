<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio Fleming</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="shortcut icon" href="./assets/img/icons/escudo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/web.css">
    <!-- Estilos de slider wiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
</head>

<body>

    <script async src="./assets/js/popper.min.js"></script>
    <script async src="./assets/js/bootstrap.min.js"></script>

    <div id="pre-load">
        <div id="circle">
            <div class="loader">
                <div class="loader2">
                    <div class="loader">
                        <div class="loader2">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once 'includes/header2.php' ?>

    <style>
        #portada {
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, .6)), url("./assets/img/fotos/infra7.jpg");
            /* background-image: url("./assets/img/portada-all-1.png"); */
            background-size: 100%;
              background-position: center;
            color: white;
            padding-top: 7rem;
            padding-bottom: 4rem;
            height: 350px;

        }


        #portada .breadcrumb-item::before {
            color: white;
            font-weight: bold;
        }

        #portada h1 {
            color: var(--color8);
            font-weight: bold;
            font-size: 2.5em;
            margin-top: .9em;
        }

        /* Estilo para el swiper slider vertical */
        /*   .swiper {
            width: 100%;
            height: 300px;
            margin-top: -90px;
        }  */

        /* .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        } */

        /* .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        } */

        /* Swiper de visitas de estudio */
        #visitas .swiper {
            width: 100%;
            height: 350px;
        }

        #visitas .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        #visitas .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        #visitas .swiper-pagination-bullet {
            width: 20px;
            height: 20px;
            text-align: center;
            line-height: 20px;
            font-size: 12px;
            color: #000;
            opacity: 1;
            background: rgba(0, 0, 0, 0.5);
        }

        #visitas .swiper-pagination-bullet-active {
            color: #fff;
            background: var(--color11);
        }

        #metodologia p {
            text-align: justify;
        }

        /* Estilos de slider con sombras */
        .hub-slider {
            position: relative
        }

        .hub-slider ul {
            list-style: none
        }

        .hub-slider ul li {
            width: 100%;
            height: 360px;
            background: #fdda7b;
            color: #fff;
            line-height: 360px;
            text-align: center;
            position: absolute;
            border-radius: 8px;
            left: 0;
            top: 0;
            padding: 4px 2%
        }

        .hub-slider ul li>img.crop {
            width: 100%;
            height: 320px;
            object-fit: cover;
            border-radius: 8px
        }

        .hub-slider-controls {
            position: absolute;
            right: 0;
            top: 0;
            z-index: 1000
        }

        .hub-slider-arrow {
            width: 40px;
            height: 40px;
            border: none;
            background: #2ebd75;
            color: #fff;
            font-weight: 700
        }

        /* Estilos de li en psicina */
        /* Estilos de perfiles */
        ul.timeline {
            list-style-type: none;
            position: relative;
        }

        ul.timeline:before {
            content: ' ';
            background: #d4d9df;
            display: inline-block;
            position: absolute;
            left: 29px;
            width: 2px;
            height: 100%;
            z-index: 400;
        }

        ul.timeline>li {
            margin: 25px 0;
            padding-left: 20px;
        }

        ul.timeline>li:before {
            content: ' ';
            background: white;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            border: 3px solid var(--color3);
            left: 19px;
            width: 23px;
            height: 23px;
            z-index: 400;
        }

        /* Estilo para scroll en bienvenidos */
        .scroll {
            overflow-y: auto;
            height: 320px;

        }

        .scroll::-webkit-scrollbar {
            background-color: transparent;
            width: 5px;
            border-radius: 6px;
        }

        .scroll::-webkit-scrollbar-thumb {

            background-color: transparent;
        }

        /* Estilos de los cards de talleres */
        .card {
            transition: .6s ease-out;

        }

        .card .card-body {
            display: inline-block;
            background: linear-gradient(to left, white 50%, var(--color11) 50%) right;
            background-size: 500%;
            transition: .5s ease-out;
            text-align: center;
        }

        .card:hover {
            transform: translateY(-20px);
        }

        .crop {
            height: 210px;
            max-height: 210px;
        }

        .crop>img {
            height: 210px;
            object-fit: cover;
        }

        .card:hover .card-body {
            background-position: left;
        }

        .card-body span {
            text-overflow: ellipsis;
            display: -webkit-box; 
            -webkit-line-clamp: 3; 
            -webkit-box-orient: vertical;
           overflow: hidden; 
            text-decoration: none;
            color: black;
            /*  text-align: justify;

            font-size: 17px;

            color: #747474;

            line-height: 1.6; */

        }

        .color-1 {
            color: var(--color3);
            font-weight: bold;
        }


        @media only screen and (max-width: 650px) {
            #portada {
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, .6)), url("./assets/img/fotos/infra7.jpg");
                /* background-image: url("./assets/img/portada-all-1.png"); */
                background-size: 150%;
                /*   background-position: center; */
                background-repeat: no-repeat;
                color: white;
                padding-top: 3rem;
                padding-bottom: 2rem;
                height: 240px;

            }

            #portada h1 {
                font-size: 2.1em;
            }
        }
    </style>

    <section class="container-fluid px-0" id="portada">
        <div class="container px-3">
            <ol class="breadcrumb text-white" style="font-size: 16px;">
                <li class="breadcrumb-item"><a href="./" style="color:var(--color8);">Inicio</a></li>
                <li class="breadcrumb-item"><a href="" style="color:var(--color8);">Nosotros</a></li>
                <li class="breadcrumb-item" aria-current="page" style="color:var(--color8);">Propuesta Educativa</li>
            </ol>
            <h1 style="color:var(--color8);font-weight:bold;">Infraestructura</h1>
        </div>
    </section>


    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4 hvr-float">
                <div class="card h-100 shadow border-0">
                    <div class="crop">
                        <img src="./assets/img/fotos/infra1.jpg" class="w-100">
                    </div>
                    <a href="" data-bs-toggle="modal" data-bs-target="#robotica" target="_blank">
                        <div class="card-body">
                            <!-- <h4 class="color-1">Róbotica</h4> -->
                            <span>
                                Galería del nivel inicial con sus respectivos trabajos en su día.
                                <br><br>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4 hvr-float">
                <div class="card h-100 shadow border-0">
                    <div class="crop">
                        <img src="./assets/img/fotos/infra2.jpg" class="w-100">
                    </div>
                    <a href="" data-bs-toggle="modal" data-bs-target="#escultura" target="_blank">
                        <div class="card-body">
                            <!-- <h4 class="color-1">Escultura</h4> -->
                            <span>
                                Nuestros alumnos cumplen con los protocolos contra el COVID –
                                Lavado de manos, al ingresar a nuestro colegio.
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4 hvr-float">
                <div class="card h-100 shadow border-0">
                    <div class="crop">
                        <img src="./assets/img/fotos/infra3.jpg" class="w-100">
                    </div>
                    <a href="" data-bs-toggle="modal" data-bs-target="#gastronomia" target="_blank">
                        <div class="card-body w-100">
                            <!-- <h4 class="color-1">Escultura</h4> -->
                            <span>
                               &nbsp;&nbsp;&nbsp;&nbsp;
                                Pasillo de ingreso al nivel inicial 
                              
                              
                                <br><br><br>
                                
                            </span>
                           
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-md-4 mb-4 hvr-float">
                <div class="card h-100 shadow border-0">
                    <div class="crop">
                        <img src="./assets/img/fotos/infra4.jpg" class="w-100">
                    </div>
                    <a href="" data-bs-toggle="modal" data-bs-target="#futsal" target="_blank">
                        <div class="card-body">
                            <!-- <h4 class="color-1">Taller de futsal</h4> -->
                            <span >
                                Alumnos desarrollando sus clases de Educación Física.
                                <br><br>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4 hvr-float">
                <div class="card h-100 shadow border-0">
                    <div class="crop">
                        <img src="./assets/img/fotos/infra5.jpg" class="w-100">
                    </div>
                    <a href="" data-bs-toggle="modal" data-bs-target="#voley" target="_blank">
                        <div class="card-body">
                            <!-- <h4 class="color-1">Taller de Voley</h4> -->
                            <span >
                                Desplazamiento de nuestros alumnos del nivel secundario, de
                                manera segura y con mucha autonomía.
                                <br>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4 hvr-float">
                <div class="card h-100 shadow border-0">
                    <div class="crop">
                        <img src="./assets/img/fotos/infra6.jpg" class="w-100">
                    </div>
                    <a href="" data-bs-toggle="modal" data-bs-target="#handball" target="_blank">
                        <div class="card-body">
                           <!--  <h4 class="color-1">Taller de Handball</h4> -->
                            <span>
                                Momento de descanso de nuestros alumnos del nivel secundario.
                                <br><br>
                            </span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-4 hvr-float">
                <div class="card h-100 shadow border-0">
                    <div class="crop">
                        <img src="./assets/img/fotos/infra7.jpg" class="w-100">
                    </div>
                    <a href="" data-bs-toggle="modal" data-bs-target="#natacion" target="_blank">
                        <div class="card-body">
                           <!--  <h4 class="color-1">Taller de Natación</h4> -->
                            <span>
                                Taller de natación; dirigido a todos los alumnos de los tres niveles.
                                <br><br>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4 hvr-float">
                <div class="card h-100 shadow border-0">
                    <div class="crop">
                        <img src="./assets/img/fotos/infra8.jpg" class="w-100">
                    </div>
                    <a href="" data-bs-toggle="modal" data-bs-target="#musica" target="_blank">
                        <div class="card-body">
                            <!-- <h4 class="color-1">Banda de Música</h4> -->
                            <span>
                                Alumnos del primer año de secundaria, participando de su clase de
                                matemática.
                                <br><br>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="robotica" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                   
                         <div class="col-lg my-auto">
                            <img src="./assets/img/fotos/infra1.jpg" class="img-fluid" alt="">
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="escultura" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                <div class="col-lg my-auto">
                            <img src="./assets/img/fotos/infra2.jpg" class="img-fluid" alt="">
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="gastronomia" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                <div class="col-lg my-auto">
                            <img src="./assets/img/fotos/infra3.jpg" class="img-fluid" alt="">
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="futsal" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                <div class="col-lg my-auto">
                            <img src="./assets/img/fotos/infra4.jpg" class="img-fluid" alt="">
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="voley" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                <div class="col-lg my-auto">
                            <img src="./assets/img/fotos/infra5.jpg" class="img-fluid" alt="">
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="handball" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                <div class="col-lg my-auto">
                            <img src="./assets/img/fotos/infra6.jpg" class="img-fluid" alt="">
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="natacion" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                <div class="col-lg my-auto">
                            <img src="./assets/img/fotos/infra7.jpg" class="img-fluid" alt="">
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="musica" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                <div class="col-lg my-auto">
                            <img src="./assets/img/fotos/infra8.jpg" class="img-fluid" alt="">
                        </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br>
    <br><br><br>

    <?php include_once 'includes/footer.php' ?>

    <script>
        setTimeout(() => {
            let loader = document.getElementById('pre-load');
            loader.style.opacity = '0';
            setTimeout(() => {
                loader.style.display = 'none';
            }, 500);
        }, 2200);
    </script>

    <!-- Script para Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/hubslider.min.js"></script>
    <script>
        $('.hub-slider-slides ul').hubSlider({
            selector: $('li'),
            button: {
                next: $('.hub-slider-arrow_next'),
                prev: $('.hub-slider-arrow_prev')
            },
            transition: '0.9s',
            startOffset: 30,
            auto: true,
            time: 3 // secondly
        });
        setTimeout(() => {
            let loader = document.getElementById('pre-load');
            loader.style.opacity = '0';
            setTimeout(() => {
                loader.style.display = 'none';
            }, 500);
        }, 2200);
    </script>
</body>

</html>