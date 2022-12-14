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
            background-color: var(--color12);
            width: 5px;
            border-radius: 6px;
        }

        .scroll::-webkit-scrollbar-thumb {

            background-color: var(--color1);
        }

        /* Estilo para scroll en bienvenidos */
        .scroll2 {
            direction: rtl;
            overflow-y: auto;
            height: 320px;

        }

        .scroll2::-webkit-scrollbar {
            background-color: var(--color12);
            width: 5px;
            border-radius: 6px;
        }

        .scroll2::-webkit-scrollbar-thumb {

            background-color: var(--color1);
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

            #visitas .swiper-slide img {
            display: block;
            width: 90%;
            height: 70%;
            object-fit: cover;
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
            <h1 style="color:var(--color8);font-weight:bold;">Servicios</h1>
        </div>
    </section>



    <br><br><br>
    <section class="container" id="metodologia">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6 px-lg-4 scroll">
                <h2 style="color:var(--color1);font-weight:bold;">Departamento Psicopedag??gico</h2>
                <br>
                <p>
                    Contamos con un equipo de psic??logos
                    educacionales y especialistas de
                    Aprendizaje y/o Lenguaje, cuya finalidad es
                    asesorar y apoyar en el desarrollo integral
                    de nuestros estudiantes.
                </p>
                <p>
                    Planteamos talleres preventivos
                    que responden a nuestra propuesta de
                    tolerancia cero sobre el bullying y
                    nuestra tarea de velar por la seguridad,
                    bienestar y protecci??n de nuestros ni??os,
                    a trav??s de actividades y campa??as, donde
                    los alumnos adquieren recursos y estrategias para hacer
                    frente a situaciones de riesgo, poniendo en pr??ctica su
                    comunicaci??n asertiva y su capacidad para tomar buenas decisiones.
                </p>
                <p>El Departamento mantiene una comunicaci??n directa con los
                    tutores que aplican un programa de acompa??amiento a
                    trav??s de una tutor??a individual y grupal, espacio donde
                    nuestros alumnos desarrollan habilidades socioemocionales,
                    principalmente, su autonom??a, tolerancia, empat??a, y logren
                    sobreponerse a situaciones l??mites como las que hoy estamos
                    viviendo en el mundo, a ra??z de esta pandemia. </p>
                <p>Nuestros padres cuentan con un espacio formativo, donde reciben
                    orientaciones para entender, apoyar y comprender a sus hijos, as??
                    como, compartir sus inquietudes, sentimientos y pensamientos con otros
                    padres, a trav??s de nuestras escuelas de padres. </p>
            </div>
            <div class="col-md-6 px-lg-4 d-flex justify-content-center">
                <img id="imageborder" src="./assets/img/fotos/pedagogico.jpg" class="" width="90%">
            </div>
        </div>
        <br>
        <br>
        <div  id="visitas" class="row justify-content-between align-items-center">
            <div class="col-md-6 px-lg-4 d-flex justify-content-center">
                <div class="swiper mySwiper " id="imageborder">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img  src="./assets/img/fotos/alimentacion_saludable.jpg" class="" alt=""></div>
                        <div class="swiper-slide"><img  src="./assets/img/fotos/alimentacion_saludable2.jpg" class="" alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="col-md-6 px-lg-4 scroll2">
                <h2 style="color:var(--color1);font-weight:bold;">Comedor de Alimentaci??n Saludable</h2>
                <br>
                <p>
                    Una alimentaci??n es adecuada y
                    suficiente cuando sus comidas son elaboradas
                    con alimentos nutritivos, preferentemente en
                    estado natural o con procesamiento m??nimo. Por
                    lo que debe ser variada, en cantidades suficientes
                    e inocuos. Esto con el fin de que aporten la energ??a
                    y todos los nutrientes esenciales que cada persona
                    necesita para mantenerse saludable, permiti??ndole
                    tener una mejor atenci??n en sus horas de clases.
                    Todos los meses enviamos a nuestros padres de familia
                    el men?? correspondiente con el visto bueno de la nutricionista de la instituci??n.
                </p>
                <p>
                    Por otro lado, son tambi??n espacios educativos
                    que promueven el desarrollo de aprendizajes
                    relacionados con pr??cticas de estilos de vida
                    saludables, como el lavado de manos, el consumo
                    de agua segura, la promoci??n de la actividad f??sica,
                    y revalorando el consumo de productos locales, de
                    estaci??n, inocuos y de alto valor nutritivo. As??
                    como la apreciaci??n de la cultura, la convivencia
                    y el reforzamiento de v??nculos.</p>
            </div>

        </div>
        <br>
        <br>
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6 px-lg-4">
                <h2 style="color:var(--color1);font-weight:bold;">T??pico</h2>
                <br>
                <p>
                    Contamos con un ambiente para atender las urgencias que se susciten,
                    de manera efectiva e inmediata dentro del plantel. El mismo que se
                    encuentra equipado con una camilla, un biombo, un coche de curaciones,
                    l??mpara, balanza, tallimetro, escritorio y vitrina. Adem??s de contar con
                    material de auxilio y botiqu??n de primera l??nea. Todo ello a cargo de un
                    profesional de salud al servicio de los alumnos.
                </p>
            </div>
            <div class="col-md-6 px-lg-4 d-flex justify-content-center">
                <img id="imageborder" src="./assets/img/fotos/topico1.jpg" class="" width="90%">
            </div>
        </div>
        <br>
        <br>
        <br>
        <div id="visitas" class="row d-flex justify-content-between align-items-center">
            <div class="col-md-6 px-lg-4 d-flex justify-content-center ">
                <div class="swiper mySwiper" id="imageborder">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="./assets/img/fotos/visita1.jpg" class="rounded shadow" alt=""></div>
                        <div class="swiper-slide"><img src="./assets/img/fotos/visita2.jpg" class="rounded shadow" alt=""></div>
                        <div class="swiper-slide"><img src="./assets/img/fotos/visita3.jpg" class="rounded shadow" alt=""></div>
                        <div class="swiper-slide"><img src="./assets/img/fotos/visita4.jpg" class="rounded shadow" alt=""></div>
                        <div class="swiper-slide"><img src="./assets/img/fotos/visita5.jpg" class="rounded shadow" alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="col-md-6 px-lg-4 my-auto">
                <h2 style="color:var(--color1);font-weight:bold;">Visitas de Estudio</h2>
                <br>
                <p>??Qu?? aprendizajes logran los estudiantes y docentes con las visitas de estudio? Cuando el docente anuncia en el sal??n de clases que pr??ximamente se har?? una visita de estudio a un determinado lugar, inmediatamente se genera en los estudiantes mucho entusiasmo, alegr??a, curiosidad y expectativa, por conocer este nuevo espacio. Esta movilizaci??n de emociones juega a favor de lo que significa mirar el entorno como recurso para aprender ciencias naturales, porque se genera una serie de interrogantes que encienden la llama de la curiosidad y de la cultura investigativa. </p>
            </div>
        </div>

    </section>
    <br>
    <br>
    <br>
    <section class="container">
        <div class="row">

            <br>
        </div>
        <div class="row justify-content-between">
            <h2 style="color:var(--color1);font-weight:bold;text-align:center;">Piscina Educativa</h2>
            <br>
            <br>
            <p>Nuestro servicio en las clases de educaci??n f??sica
                como tambi??n en los talleres deportivos permite
                que nuestros alumnos trabajen las siguientes
                capacidades. </p>
            <br>
            <br>
            <br>
            <br>
            <div class="col-md-5 mb-4 text-justify">
                <br>
                <div class="accordion" id="accordionExample">
                    <ul class="timeline">
                        <li>
                            <div class="accordion-item border-0">
                                Aprender comportamientos de higiene y salud muy necesarios en el d??a a d??a.
                            </div>
                        </li>
                        <li>
                            <div class="accordion-item border-0">
                                Desarrollar la autoestima a trav??s de la valoraci??n y la aceptaci??n de nuestro cuerpo.
                            </div>
                        </li>
                        <li>
                            <div class="accordion-item border-0">
                                Mejorar la postura corporal.
                            </div>
                        </li>
                        <li>
                            <div class="accordion-item border-0">
                                Desarrollar la psicomotricidad.
                            </div>
                        </li>
                        <li>
                            <div class="accordion-item border-0">
                                Resolver problemas que requieran tener un dominio en patrones motrices b??sicos.
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 pt-3" style="margin-bottom: 25rem;">
                <div class="hub-slider">
                    <div class="hub-slider-slides">
                        <ul>
                            <li><img src="./assets/img/fotos/piscina1.jpg" class="crop shadow-sm"></li>
                            <li><img src="./assets/img/fotos/piscina2.jpg" class="crop shadow-sm"></li>
                            <li><img src="./assets/img/fotos/piscina3.jpg" class="crop shadow-sm"></li>
                            <li><img src="./assets/img/fotos/piscina4.jpg" class="crop shadow-sm"></li>
                            <li><img src="./assets/img/fotos/piscina5.jpg" class="crop shadow-sm"></li>
                        </ul>
                    </div>
                    </d </div>
    </section>
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