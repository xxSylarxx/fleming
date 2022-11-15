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
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, .6)), url("./assets/img/fotos/portada_general_interna.jpg");
            /* background-image: url("./assets/img/portada-all-1.png"); */
            background-size: 100%;
            /*   background-position: center; */
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

        /* Estilo slider swiper */
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            /* display: flex; */
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .swiper {
            margin-left: auto;
            margin-right: auto;
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

        /* Estilo de boton portada */
        .cssbuttons-io-button {
            background: var(--color1);
            color: white;
            font-family: inherit;
            padding: 0.35em;
            padding-left: 1.2em;
            font-size: 17px;
            font-weight: 500;
            border-radius: 0.9em;
            border: none;
            letter-spacing: 0.05em;
            display: flex;
            align-items: center;
            box-shadow: inset 0 0 1.6em -0.6em var(--color2);
            overflow: hidden;
            position: relative;
            height: 2.8em;
            padding-right: 3.3em;
        }

        .cssbuttons-io-button .icon {
            background: white;
            margin-left: 1em;
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 2.2em;
            width: 2.2em;
            border-radius: 0.7em;
            box-shadow: 0.1em 0.1em 0.6em 0.2em var(--color1);
            right: 0.3em;
            transition: all 0.3s;
        }

        .cssbuttons-io-button:hover .icon {
            width: calc(100% - 0.6em);
        }

        .cssbuttons-io-button .icon svg {
            width: 1.1em;
            transition: transform 0.3s;
            color: var(--color1);
        }

        .cssbuttons-io-button:hover .icon svg {
            transform: translateX(0.1em);
        }

        .cssbuttons-io-button:active .icon {
            transform: scale(0.95);
        }


        @media only screen and (max-width: 650px) {
            #portada {
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, .6)), url("./assets/img/fotos/portada_general_interna.jpg");
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

            #div-hubslider {
                padding-bottom: 20rem;
                padding-top: 7rem;
            }
        }
    </style>

    <section class="container-fluid px-0" id="portada">
        <div class="container px-3">
            <ol class="breadcrumb text-white" style="font-size: 16px;">
                <li class="breadcrumb-item"><a href="./" style="color:var(--color8);">Inicio</a></li>
                <li class="breadcrumb-item"><a href="" style="color:var(--color8);">Admisión</a></li>
            </ol>
            <h1>Admisión</h1>
        </div>
    </section>



    <br><br><br>

    <section class="container" id="metodologia">
        <h1 class="mb-3" style="color:var(--color1);font-weight:bold;text-align:center;">Proceso</h1>
        <br>

        <div class="row justify-content-between align-items-center">
            <div class="col-md px-lg-4">
                <h5 class="mb-3" style="color:black;font-weight:bold;text-align:start;">Recepción de la familia interesada.</h5>
                <p>La encargada de Admisión recibe a las familias interesadas,
                    les brinda información, los acompaña en una visita guiada por
                    las instalaciones del colegio y resuelve cualquier duda que
                    puedan tener, de manera que las familias estén en capacidad de
                    elegir la institución educativa para sus hijos con conocimiento y
                    que ellos determinen si ésta se ajusta a sus necesidades. La encargada
                    de Admisión toma nota de los datos personales de los postulantes, padres
                    y apoderados. En esta primera entrevista se determina si el postulante
                    será estudiante Regular, Transeúnte o Visitante. La encargada de Admisión
                    da a conocer la información económica vigente, la documentación requerida,
                    criterio de edad al 31 de marzo, pago por proceso de admisión, entre otros.
                    Luego se programan las fechas de evaluación y las citas con las jefas de Nivel.
                    Un día antes de las citas programadas, la encargada de Admisión envía un correo
                    electrónico recordándoles a los padres sobre su cita de admisión.</p>
            </div>
            <!-- <div class="col-md-6 px-lg-4 d-flex justify-content-center">
            <img src="./assets/img/fotos/metodologia1.jpg" class="rounded shadow" width="90%">
            </div> -->
        </div>
        <br>
        <br>
    </section>

    <br>
    <h1 class="mb-3" style="color:var(--color1);font-weight:bold;text-align:center;">Requisitos</h1>
    <br>


    <div class="container">
        <h5 class="mb-3" style="color:black;font-weight:bold;text-align:start;">Documentación Solicitada</h5>
        <br>

        <div class="row">

            <div class="col-lg-6 my-auto">
                <div class="row d-flex justify-content-between">
                    <p>Una vez que los postulantes inician el proceso de admisión
                        deberán presentar la siguiente documentación:</p>
                    <br>
                    <div class="col-md-12  my-auto text-justify px-4">
                        <section class="d-flex list  ">
                            <span style="color:var(--color2);"><i class="fas fa-check-double"></i></span>
                            <span class="ms-3">04 fotos tamaño carné y 01 foto familiar tamaño jumbo (sin lentes de sol).</span>
                        </section>
                        <section class="d-flex list  ">
                            <span style="color:var(--color2);"><i class="fas fa-check-double"></i></span>
                            <span class="ms-3 my-auto">Copia del Acta o Partida de Nacimiento del postulante.</span>
                        </section>
                        <section class="d-flex list ">
                            <span style="color:var(--color2);"><i class="fas fa-check-double"></i></span>
                            <span class="ms-3">Copia de DNI (pasaporte o carné de extranjería) del postulante.</span>
                        </section>
                        <section class="d-flex list ">
                            <span style="color:var(--color2);"><i class="fas fa-check-double"></i></span>
                            <span class="ms-3">Copia de la cartilla de vacunas (no obligatorio vacunas COVID).</span>
                        </section>
                        <section class="d-flex list">
                            <span style="color:var(--color2);"><i class="fas fa-check-double"></i></span>
                            <span class="ms-3">Copia del DNI (pasaporte o carné de extranjería) de ambos padres del postulante.</span>
                        </section>

                    </div>


                </div>
                <br>
                <p>Una vez que el postulante sea admitido se deberá presentar la siguiente documentación emitida por el colegio de procedencia:</p>
                <div class="row d-flex justify-content-between">
                    <div class="col-md  my-auto text-justify px-4">
                        <section class="d-flex list  ">
                            <span style="color:var(--color2);"><i class="fas fa-check-double"></i></span>
                            <span class="ms-3">Ficha Única de Matrícula.</span>
                        </section>
                        <section class="d-flex list  ">
                            <span style="color:var(--color2);"><i class="fas fa-check-double"></i></span>
                            <span class="ms-3 my-auto">Certificado oficial de estudios.</span>
                        </section>
                    </div>


                </div>
            </div>
            <div id="div-hubslider" class="col-lg-6">
                <div class="hub-slider">
                    <div class="hub-slider-slides">
                        <ul>
                            <li><img src="./assets/img/fotos/admision1.jpg" class="crop shadow-sm"></li>
                            <li><img src="./assets/img/fotos/admision2.jpg" class="crop shadow-sm"></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br>
    <br>
    <section>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-5">
                    <center><a href="https://alexanderfleming.cubicol.pe/visitante/registro-interesados" target="_blank">
                        <button class="cssbuttons-io-button"> Inscríbete Aquí
                            <div class="icon">
                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
                                </svg>
                            </div>
                        </button>
                    </a></center>
                </div>
            </div>
        </div>
    </section>
    <br><br><br>
    <br>
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
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
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