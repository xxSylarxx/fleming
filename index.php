<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio Fleming</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="shortcut icon" href="./assets/img/icons/escudo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/web.css">
    <link rel="stylesheet" href="./assets/css/card-animation.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <!-- carrousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script async src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>

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

    <?php include_once 'includes/header.php'; ?>


    <script>
        // adaptar altura de cabecera
        var height = document.getElementById('header').clientHeight;
        document.getElementById('header-top').style.marginTop = height + "px";
    </script>
    <!-- ventana emergente admin -->

    <style>
        div.bann-lema {
            position: absolute;
            width: 39.9%;
            padding-left: 2em;
            padding-right: 2em;
            background-color: rgba(243, 243, 243, 0.5);
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #section-slider {

            margin-top: -12px;
        }

        #section-slider .texto-encima {

            z-index: 10;
        }

        #img-banner {
            object-fit: cover;
            filter: brightness(60%);
        }

        .div-banner {
            padding-left: 10rem;
            position: absolute;
            display: flex;
            justify-content: start;
            align-items: flex-end;
            height: 100%;
            padding-bottom: 10%;
        }

        .tittle-banner1 {
            font-family: 'Nunito-Bold', sans-serif;
            font-size: 3.5rem;
            color: white;
            position: relative;
            font-weight: bold;
        }

        .tittle-banner2 {
            color: white;

            font-weight: 900;
        }


        #boton {
            background-color: var(--color6);
        }

        /* Estilo para scroll en bienvenidos */
        .scroll {
            overflow-y: auto;
            height: 320px;

        }

        .scroll::-webkit-scrollbar {
            background-color: var(--color12);
            width: 5px;
            border-radius: 6px;
        }

        .scroll::-webkit-scrollbar-thumb {

            background-color: var(--color1);
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

        #lema {
            background: linear-gradient(rgba(0, 0, 0, 0.5) 100%, #ffff 10%, #ffff 50%),
                url('./assets/img/fotos/lema.jpg');

            background-size: 100%;
            background-position: top;
            background-attachment: fixed;
            background-repeat: no-repeat;



        }

        #lema span {
            /* font-family: 'Archivo Black', sans-serif; */
            font-family: 'Nunito-Bold', sans-serif;
            padding-top: 10rem;
            padding-bottom: 10rem;
            display: flex;
            align-content: center;
            justify-content: center;
            font-size: 5rem;
            color: white;
            font-weight: 900;

        }

        #noticias .card .news {
            position: absolute;
            top: 20px;
            left: -16px;
            border-radius: 5px;
            padding: 4px 12px;
            background-color: var(--color1);
            color: white;
            font-size: 14px;
            font-weight: bold;


            transform: translateY(-5%);

        }

        #noticias div.card {
            transition: .3s;


        }

        #noticias div.card:hover {
            transform: scale(1.06);
        }

        #noticias .card .detalle {

            text-overflow: ellipsis;

            display: -webkit-box;

            -webkit-line-clamp: 2;

            -webkit-box-orient: vertical;

            overflow: hidden;

            text-align: justify;

            font-size: 17px;

            color: #747474;

            line-height: 1.6;

        }

        #noticias img {
            object-fit: cover;
        }

        #reconocimientos .card .message {

            position: absolute;

            margin-top: 110px;

            height: 0px;

            background-color: rgba(0, 0, 0, .7);

            width: 100%;

            display: flex;

            flex-direction: row;

            align-items: center;

            justify-content: center;

            color: white;

            font-weight: bold;

            opacity: 0;

            transition: all .3s ease-in-out;

        }



        #reconocimientos .card:hover .message {

            opacity: 1;

            height: 50px;

        }

        .modal-content {
            width: 60% !important;
        }

        .modal-dialog {
            display: flex;
            justify-content: center;
        }

        /* Estilo para el swiper slider vertical */
        .swiper {
            width: 100%;
            height: 300px;
            margin-top: -90px;
        }

        .swiper-slide {
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

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @media only screen and (max-width: 450px) {

            #lema {
                background: linear-gradient(rgba(0, 0, 0, 0.5) 100%, #ffff 10%, #ffff 50%),
                    url('./assets/img/fotos/lema.jpg');

                background-size: 100%;
                background-position: top;
                background-attachment: none;
                background-repeat: no-repeat;
                height: 200px;



            }

            #lema span {
                padding-top: 5rem;
                font-size: 1.3rem;

            }


            .div-banner {
                padding-left: 4.5rem;
                position: absolute;
                display: flex;
                justify-content: start;
                align-items: flex-end;
                height: 100%;
                padding-bottom: 80%;
            }

            .tittle-banner1 {
                font-size: 1.3rem;
            }


            .swiper {
                z-index: -2;
            }

            .swiper p {
                display: none;
            }

            .swiper-slide img {
                height: 80px;
            }

            #boton {
                background-color: var(--color6);
            }

            #p-slider-reconocimientos {
                margin-bottom: 7rem;
            }
        }
    </style>


    <section id="section-slider">
        <div id="carouselExampleIndicators" class="carousel slide pointer-event" data-bs-ride="carousel">

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="container div-banner">
                        <div class="texto-encima">
                            <h2 class="tittle-banner1">Bienvenidos al colegio <br>Alexander Fleming</h2>
                            <p style="color:white;">??Te educamos para la vida!</p>
                            <br>
                            <div class="row d-flex justify-content-start">
                                <div class="col-lg-6 py-2">
                                    <a href="./admision.php">
                                        <button class="cssbuttons-io-button"> Admisi??n
                                            <div class="icon">
                                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
                                                </svg>
                                            </div>
                                        </button>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <img src="./assets/img/banner/demo_banner1.jpg" class="d-block crop w-100" style="height:100vh;" id="img-banner">
                </div>
                <div class="carousel-item">
                    <div class="container div-banner">
                        <div class="texto-encima">
                            <h2 class="tittle-banner1">Bienvenidos al colegio <br>Alexander Fleming</h2>
                            <p style="color:white; font-size:2rem;">??Te educamos para la vida!</p>
                            <br>
                            <div class="row d-flex justify-content-start">
                                <div class="col-lg-6 py-2">
                                    <a href="./admision.php">
                                        <button class="cssbuttons-io-button"> Admisi??n
                                            <div class="icon">
                                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
                                                </svg>
                                            </div>
                                        </button>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <img src="./assets/img/banner/demo_banner2.png" class="d-block crop w-100" style="height:100vh;" id="img-banner">
                </div>
                <div class="carousel-item">
                    <div class="container div-banner">
                        <div class="texto-encima">
                            <h2 class="tittle-banner1">Bienvenidos al colegio <br>Alexander Fleming</h2>
                            <p style="color:white;font-size:2rem;">??Te educamos para la vida!</p>
                            <br>
                            <div class="row d-flex justify-content-start">
                                <div class="col-lg-6 py-2">
                                    <a href="./admision.php">
                                        <button class="cssbuttons-io-button"> Admisi??n
                                            <div class="icon">
                                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
                                                </svg>
                                            </div>
                                        </button>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <img src="./assets/img/banner/demo_banner3.jpg" class="d-block crop w-100" style="height:100vh;" id="img-banner">
                </div>
                <div class="carousel-item">
                    <div class="container div-banner">
                        <div class="texto-encima">
                            <h2 class="tittle-banner1">Bienvenidos al colegio <br>Alexander Fleming</h2>
                            <p style="color:white;font-size:2rem;">??Te educamos para la vida!</p>
                            <br>
                            <div class="row d-flex justify-content-start">
                                <div class="col-lg-6 py-2">
                                    <a href="./admision.php">
                                        <button class="cssbuttons-io-button"> Admisi??n
                                            <div class="icon">
                                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
                                                </svg>
                                            </div>
                                        </button>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <img src="./assets/img/banner/demo_banner4.jpg" class="d-block crop w-100" style="height:100vh;" id="img-banner">
                </div>
                <div class="carousel-item">
                    <div class="container div-banner">
                        <div class="texto-encima">
                            <h2 class="tittle-banner1">Bienvenidos al colegio <br>Alexander Fleming</h2>
                            <p style="color:white;">??Te educamos para la vida!</p>
                            <br>
                            <div class="row d-flex justify-content-start">
                                <div class="col-lg-6 py-2">
                                    <a href="./admision.php">
                                        <button class="cssbuttons-io-button"> Admisi??n
                                            <div class="icon">
                                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
                                                </svg>
                                            </div>
                                        </button>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <img src="./assets/img/banner/demo_banner5.jpg" class="d-block crop w-100" style="height:100vh;" id="img-banner">
                </div>
                <div class="carousel-item">
                    <div class="container div-banner">
                        <div class="texto-encima">
                            <h2 class="tittle-banner1">Bienvenidos al colegio <br>Alexander Fleming</h2>
                            <p style="color:white;">??Te educamos para la vida!</p>
                            <br>
                            <div class="row d-flex justify-content-start">
                                <div class="col-lg-6 py-2">
                                    <a href="./admision.php">
                                        <button class="cssbuttons-io-button"> Admisi??n
                                            <div class="icon">
                                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
                                                </svg>
                                            </div>
                                        </button>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <img src="./assets/img/banner/demo_banner6.jpg" class="d-block crop w-100" style="height:100vh;" id="img-banner">
                </div>
                <div class="carousel-item">
                    <div class="container div-banner">
                        <div class="texto-encima">
                            <h2 class="tittle-banner1">Bienvenidos al colegio <br>Alexander Fleming</h2>
                            <p style="color:white;">??Te educamos para la vida!</p>
                            <br>
                            <div class="row d-flex justify-content-start">
                                <div class="col-lg-6 py-2">
                                    <a href="./admision.php">
                                        <button class="cssbuttons-io-button"> Admisi??n
                                            <div class="icon">
                                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
                                                </svg>
                                            </div>
                                        </button>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <img src="./assets/img/banner/demo_banner7.jpg" class="d-block crop w-100" style="height:100vh;" id="img-banner">
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!--  <video src="./public/videos/video_prueba.mp4" controls height="100%" width="100%"></video> -->

    </section>

    <br><br><br><br>

    <section class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6 my-2 scroll">
                <h1 class="mb-3">BIENVENIDOS</h1>
                <p style="line-height: 2; text-align: justify;">
                    A nombre de toda la Instituci??n Educativa queremos darte la bienvenida a nuestro colegio; donde encontrar??s un ambiente muy familiar para todos los integrantes.
                </p>
                <p style="line-height: 2; text-align: justify;">
                    Nosotros tenemos una premisa muy clara; si nuestros
                    alumnos est??n contentos entonces aprender??n de una
                    forma que no olvidar??n las competencias recibidas en
                    sus diferentes cursos. La f??rmula es muy sencilla, si
                    los alumnos est??n contentos los pap??s tambi??n lo estar??n. </p>
                <p style="line-height: 2; text-align: justify;">
                    A nombre de toda la Instituci??n Educativa
                    queremos darte la bienvenida a nuestro colegio;
                    donde encontrar??s un ambiente muy familiar para todos los integrantes.
                </p>
                <p style="line-height: 2; text-align: justify;">Por eso nuestro compromiso con cada uno de ustedes es que
                    encuentren un ambiente agradable y de mucho afecto entre
                    sus maestros y compa??eros que permitir??n una permanencia inolvidable. </p>
                <p style="line-height: 2; text-align: justify;">Tenemos la certeza que en nuestro hogar no se d?? el bullying y predomine el respeto
                    y la tolerancia entre todos los miembros de la comunidad porque tenemos una cultura preventiva y formativa </p>
                <p style="line-height: 2; text-align: justify;">Finalmente queremos decirte que al ser parte de la familia Fleming ser??s parte de un equipo ganador </p>
                <p>Fraternalmente, </p>
                <p style="font-weight:bold;">Hno. Rom??n Suclla Lazo </p>
                <p style="font-weight:bold;">Director</p>
                <!--  <div class="text-center">
                    <button id="boton" class="btn text-white fw-bold px-4" onclick="location.href = 'nosotros'">Ver m??s</button>
                </div> -->
            </div>
            <div class="col-lg-6 my-2">
                <center><img id="imageborder" src="./assets/img/fotos/admision1.jpg" class="img-fluid" width="80%" alt=""></center>
            </div>
        </div>
    </section>
    <br><br><br><br>
    <section class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <h1><span>PROPUESTA EDUCATIVA</span></h1>
            </div>
        </div>
        <div class="row pt-1">
            <div class="col-md-4 my-2">
                <div class="card card-8 stacked--down-right" style="border: 0;">
                    <img src="./assets/img/fotos/portada_inicial.jpg" width="100%" height="300" style="border-radius: 10px; object-fit: cover;">
                </div>
                <br>
                <p style="padding:0px 15px 0px 15px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-align: justify;">En nivel Inicial se imparte una educaci??n integral basada
                    en la axiolog??a moderna acorde con los avances cient??ficos
                    y tecnol??gicos para que nuestros estudiantes de 3 a??os,
                    4 a??os y 5 a??os sean ni??os y ni??as creativos e innovadores.</p>
                <div class="text-center">
                    <a class="btn btn-warning" href="./inicial.php">Inicial</a>
                </div>
            </div>
            <div class="col-md-4 my-2">
                <div class="card card-8 stacked--down-right" style="border: 0;">
                    <img src="./assets/img/fotos/portada_primaria.jpg" width="100%" height="300" style="border-radius: 10px; object-fit: cover;">
                </div>
                <br>
                <p style="padding:0px 15px 0px 15px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-align: justify;">Nuestros alumnos de Nivel Primaria reciben una
                    formaci??n integral que hace de ellos ni??os l??deres, luchadores y emprendedores,
                    con una visi??n cr??tica, objetiva e independiente ante los obst??culos que pudieran present??rseles.</p>
                <div class="text-center">
                    <a class="btn btn-warning" href="./primaria.php">Primaria</a>
                </div>
            </div>
            <div class="col-md-4 my-2">
                <div class="card card-8 stacked--down-right" style="border: 0;">
                    <img src="./assets/img/fotos/portada_secundaria.jpg" width="100%" height="300" style="border-radius: 10px; object-fit: cover;">
                </div>
                <br>
                <p style="padding:0px 15px 0px 15px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-align: justify;">En los momentos actuales nuestra sociedad exige una
                    Educaci??n de calidad en donde se plantee con claridad criterios de secuencialidad en el
                    desarrollo de competencias, capacidades,valores y actitudes acordes al desarrollo del estudiante.</p>
                <div class="text-center">
                    <a class="btn btn-warning" href="./secundaria.php">Secundaria</a>
                </div>
            </div>
        </div>
    </section>
    <br><br><br><br>
    <section id="lema">
        <span>"Te Educamos para la Vida"</span>
    </section>

    <br><br><br><br>
    <section id="noticias">
        <div class="container">
            <div class="row mb-4">
                <div class="col text-start">
                    <h1><span>NOTICIAS</span></h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row" style="padding-left:8%;padding-right:8%;">
                <div class="col-md-4 px-3 my-3">
                    <a href="view.php?id=4">
                        <div class="card shadow-sm h-100" style="background: rgb(248, 248, 248);">
                            <span class="news">Comunicados</span>
                            <img src="./assets/img/galeria/portada_boletin2023.jpg" width="100%" height="300">

                            <div class="card-body">

                                <h5 class="fw-bold text-uppercase" style="font-size: 18px;color:var(--color9);">Bolet??n Informativo 2023</h5>

                                <div class="detalle">
                                    Bolet??n Informativo 2023
                                </div>

                            </div>

                            <div class="card-footer text-info" style="background: transparent; font-size: 16px;">
                                <i class="fas fa-calendar-alt" aria-hidden="true"></i>

                                <span class="ms-2">18-11-2022</span>

                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-md-4 px-3 my-3">
                    <a href="view.php?id=1">
                        <div class="card shadow-sm h-100" style="background: rgb(248, 248, 248);">
                            <span class="news">Comunicados</span>
                            <img src="./assets/img/galeria/comunicado1.jpg" width="100%" height="300">

                            <div class="card-body">

                                <h5 class="fw-bold text-uppercase" style="font-size: 18px;color:var(--color9);">Bienvenidos al IV Bimestre</h5>

                                <div class="detalle">

                                    Bienvenidos al IV Bimestre.
                                </div>

                            </div>

                            <div class="card-footer text-info" style="background: transparent; font-size: 16px;">
                                <i class="fas fa-calendar-alt" aria-hidden="true"></i>

                                <span class="ms-2">17-10-2022</span>

                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-md-4 px-3 my-3">
                    <a href="view3.php?id=2">
                        <div class="card shadow-sm h-100" style="background: rgb(248, 248, 248);">
                            <span class="news">Noticias</span>
                            <img src="./assets/img/galeria/noticia1.jpg" width="100%" height="300">

                            <div class="card-body">

                                <h5 class="fw-bold text-uppercase" style="font-size: 18px;color:var(--color9);">Alimentaci??n Saludable</h5>

                                <div class="detalle">
                                    En el colegio Alexander Fleming, incentivamos las buenas pr??cticas de ???Alimentaci??n Saludable???; es por eso que el d??a de hoy nuestras maestras del nivel inicial hacen entender la importancia de una alimentaci??n saludable a trav??s de la animaci??n.
                                </div>

                            </div>

                            <div class="card-footer text-info" style="background: transparent; font-size: 16px;">
                                <i class="fas fa-calendar-alt" aria-hidden="true"></i>

                                <span class="ms-2">17-10-2022</span>

                            </div>

                        </div>
                    </a>
                </div>
                <!-- <div class="col-md-4 px-3 my-3">
                    <a href="view2.php?id=3">
                        <div class="card shadow-sm h-100" style="background: rgb(248, 248, 248);">
                            <span class="news">Eventos</span>
                            <img src="./assets/img/galeria/evento1.jpg" width="100%" height="300">

                            <div class="card-body">

                                <h5 class="fw-bold text-uppercase" style="font-size: 18px;color:var(--color9);"> PROCESO DE ADMISI??N 2023</h5>

                                <div class="detalle">

                                    Proceso de Admisi??n 2023
                                </div>

                            </div>

                            <div class="card-footer text-info" style="background: transparent; font-size: 16px;">
                                <i class="fas fa-calendar-alt" aria-hidden="true"></i>

                                <span class="ms-2">17-10-2022</span>

                            </div>

                        </div>
                    </a>
                </div> -->
            </div>
        </div>
    </section>

    <br><br><br>
    <section id="reconocimientos">
        <div class="container">
            <div class="row mb-4">
                <div class="col text-start">
                    <h1><span>RECONOCIMIENTOS</span></h1>
                </div>
            </div>
            <div class="row d-flex justify-content-around">
                <div class="col-md-4 my-4 px-4">
                    <div class="card border-0 shadow h-100">
                        <div class="message">
                            <a href="" data-bs-toggle="modal" data-bs-target="#modalaviso1" target="_blank" class="text-white">VER M??S &nbsp; <i class="fas fa-arrow-alt-circle-right"></i></a>
                        </div>
                        <img src="./assets/img/fotos/reconocimiento1.jpg" class="rounded" width="100%" height="370" style="object-fit:cover;">
                    </div>
                </div>
                <div class="col-md-4 my-4 px-4">
                    <div class="card border-0 shadow h-100">
                        <div class="message">
                            <a href="" data-bs-toggle="modal" data-bs-target="#modalaviso2" target="_blank" class="text-white">VER M??S &nbsp; <i class="fas fa-arrow-alt-circle-right"></i></a>
                        </div>
                        <img src="./assets/img/fotos/reconocimiento2.jpg" class="rounded" width="100%" height="370">
                    </div>
                </div>

            </div>
        </div>
        <div class="modal fade" id="modalaviso1" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-body">
                        <center><img src="./assets/img/fotos/reconocimiento1.jpg" class="rounded" width="100%"></center>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalaviso2" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-body">
                        <img src="./assets/img/fotos/reconocimiento2.jpg" class="rounded" width="100%">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br><br>
    <div class="w-100" style="padding-top: 4%; padding-bottom: 2%;">
        <div class="container">
            <div class="row">
                <div class="col-xl h-100 col-sm text-center my-auto">
                    <h1><span>CONVENIOS</span></h1>
                    <p id="p-slider-reconocimientos">Con el fin de brindar mayores beneficios y facilidades,
                        contamos con diversos convenios exclusivos para nuestros estudiantes.</p>
                </div>
            </div>
            <div class="row owl-carousel mx-0" id="owl-one">
                <div class="col  justify-content-center align-content-center">
                    <img src="./assets/img/fotos/universidad.png">
                </div>
                <div class="col justify-content-center align-content-center">
                    <img src="./assets/img/fotos/ucsm.png">
                </div>
                <div class="col justify-content-center align-content-center">
                    <img src="./assets/img/fotos/office365.png">
                </div>
                <div class="col justify-content-center align-content-center">
                    <img src="./assets/img/fotos/zoom.png">
                </div>
                <div class="col justify-content-center align-content-center">
                    <img src="./assets/img/fotos/tinkercad.png">
                </div>
            </div>
        </div>
        <br><br><br>
    </div>
    <br><br><br>


    <?php include_once 'includes/footer.php'; ?>

    <script>
        const enviarCorreo = (e) => {
            e.preventDefault();
            let form = new FormData(document.getElementById("form-contacto"));
            fetch('/admin/email/contacto', {
                method: "POST",
                body: form
            }).then(function(res) {
                return res.text();
            }).then(function(res) {
                alert(res);
                e.target.reset();
            });
        };
    </script>
    <script>
        setTimeout(() => {
            let loader = document.getElementById('pre-load');
            loader.style.opacity = '0';
            setTimeout(() => {
                loader.style.display = 'none';
            }, 500);
        }, 2700);
    </script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            direction: "vertical",
            /*  pagination: {
                 el: ".swiper-pagination",
                 clickable: true,

             }, */
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });
    </script>
    <!-- Script para carousel automatico -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        let owlone = $('#owl-one');
        let owltwo = $('#owl-two');

        owlone.owlCarousel({
            loop: true,
            margin: 50,
            nav: false,
            autoplay: true,
            autoplayTimeout: 2000,
            dots: false,
            responsive: {
                0: {
                    items: 1,
                },
                800: {
                    items: 2,
                },
                1000: {
                    items: 5,
                },
            },
        });

        owltwo.owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            autoplay: true,
            autoplayTimeout: 4000,
            dots: false,
            responsive: {
                0: {
                    items: 1,
                },
                800: {
                    items: 2,
                },
                1000: {
                    items: 3,
                },
            },
        });
    </script>


</body>

</html>