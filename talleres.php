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
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, .6)), url("./assets/img/fotos/robotica.jpg");
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
            background-size: 200%;
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
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, .6)), url("./assets/img/fotos/robotica.jpg");
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
                font-size: 1.8em;
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
            <h1 style="color:var(--color8);font-weight:bold;">Talleres Deportivos, Culturales y Recreativos</h1>
        </div>
    </section>

    <br><br><br>

    <section class="container">
        <p>Los Talleres, Deportivos, Culturales y Recreativos son pilares
            fundamentales en la formaci??n de nuestros estudiantes.
            A trav??s de su pr??ctica, se favorece el desarrollo intelectual,
            emocional y motriz; asimismo, ayudan a construir una relaci??n activa
            de los estudiantes con su comunidad, ya que, de manera natural, estimulan
            el sentido de identificaci??n y pertenencia comunitaria y les permiten una
            mejor interacci??n con su entorno social.</p>
        <p>Lo m??s importante en todas estas actividades es que nuestros estudiantes
            puedan desarrollar su creatividad, sensibilidad, emotividad e
            imaginaci??n en un ambiente agradable.</p>
        <p>Es una gran oportunidad para descubrir sus talentos y
            habilidades o su afinidad vocacional. Es as?? como han nacido deportistas
            destacados que han estado en la selecci??n de sus colegios en v??ley, handball,
            nataci??n , futsal como tambi??n la expresi??n corporal a trav??s de la danza, banda
            sinf??nica, escultores o chef de alto prestigio.</p>

    </section>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4 hvr-float">
                <div class="card h-100 shadow border-0">
                    <div class="crop">
                        <img src="./assets/img/fotos/robotica.jpg" class="w-100">
                    </div>
                    <a href="" data-bs-toggle="modal" data-bs-target="#robotica" target="_blank">
                        <div class="card-body">
                            <h4 class="color-1">R??botica</h4>
                            <span>
                                Estimular a los participantes en el dise??o, construcci??n y programaci??n de robots, a trav??s de experiencias y aplicaciones pr??cticas.
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4 hvr-float">
                <div class="card h-100 shadow border-0">
                    <div class="crop">
                        <img src="./assets/img/fotos/escultura.jpg" class="w-100">
                    </div>
                    <a href="" data-bs-toggle="modal" data-bs-target="#escultura" target="_blank">
                        <div class="card-body">
                            <h4 class="color-1">Escultura</h4>
                            <span>
                                El taller de Escultura del colegio Alexander Fleming est?? inspirada en el desarrollo del talento de los alumnos.
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4 hvr-float">
                <div class="card h-100 shadow border-0">
                    <div class="crop">
                        <img src="./assets/img/fotos/gastronomia.jpg" class="w-100">
                    </div>
                    <a href="" data-bs-toggle="modal" data-bs-target="#gastronomia" target="_blank">
                        <div class="card-body">
                            <h4 class="color-1">Gastronom??a</h4>
                            <span>
                                Iniciar y despertar la pasi??n por el gran mundo gastron??mico a todos aquellos grandes y peque??os chef, creando de esta forma buenas bases y t??cnicas en la cocina para un ??xito total en sus presentaciones profesionales.
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
                        <img src="./assets/img/fotos/gastronomia.jpg" class="w-100">
                    </div>
                    <a href="" data-bs-toggle="modal" data-bs-target="#futsal" target="_blank">
                        <div class="card-body">
                            <h4 class="color-1">Taller de futsal</h4>
                            <span>
                                Recordemos que en esta etapa es fundamental incidir especialmente en la coordinaci??n psicomotriz, utilizando el juego como motor central en las sesiones de entrenamiento
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4 hvr-float">
                <div class="card h-100 shadow border-0">
                    <div class="crop">
                        <img src="./assets/img/fotos/voley.jpg" class="w-100">
                    </div>
                    <a href="" data-bs-toggle="modal" data-bs-target="#voley" target="_blank">
                        <div class="card-body">
                            <h4 class="color-1">Taller de Voley</h4>
                            <span>
                                El Voleibol es un juego extremadamente l??gico y racional, por lo cual ayuda a que estas habilidades y cualidades se desarrollen en los alumnos.
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4 hvr-float">
                <div class="card h-100 shadow border-0">
                    <div class="crop">
                        <img src="./assets/img/fotos/handball.jpg" class="w-100">
                    </div>
                    <a href="" data-bs-toggle="modal" data-bs-target="#handball" target="_blank">
                        <div class="card-body">
                            <h4 class="color-1">Taller de Handball</h4>
                            <span>
                                El handball en edad escolar, como todo deporte, debe de entenderse como un juego de bal??n para ni??os, porque desde esta perspectiva se integran las necesidades l??dicas del ni??o en la pr??ctica del deporte.
                            </span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-4 hvr-float">
                <div class="card h-100 shadow border-0">
                    <div class="crop">
                        <img src="./assets/img/fotos/natacion.jpg" class="w-100">
                    </div>
                    <a href="" data-bs-toggle="modal" data-bs-target="#natacion" target="_blank">
                        <div class="card-body">
                            <h4 class="color-1">Taller de Nataci??n</h4>
                            <span>
                                El taller de Nataci??n tiene como prop??sito, estimular y fortalecer el desarrollo de habilidades y destrezas que permitan el dominio y disfrute del medio acu??tico.
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4 hvr-float">
                <div class="card h-100 shadow border-0">
                    <div class="crop">
                        <img src="./assets/img/fotos/musica.jpg" class="w-100">
                    </div>
                    <a href="" data-bs-toggle="modal" data-bs-target="#musica" target="_blank">
                        <div class="card-body">
                            <h4 class="color-1">Banda de M??sica</h4>
                            <span>
                                El taller de Banda de M??sica tiene como finalidad que el alumno descubra y desarrolle sus habilidades musicales mediante la lectura de partituras y la ejecuci??n de instrumentos de viento, su capacidad auditiva, aumente su sensibilidad art??stica y acrecente su horizonte cultural.
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
                    <div class="row mx-1 py-3" style="border:2px solid red;border-radius:5px;">
                        <!--  <div class="col-lg-5 my-auto">
                            <img src="./assets/img/fotos/robotica.jpg" class="img-fluid" alt="">
                        </div> -->
                        <div class="col-lg">
                            <h2 style="color:var(--color4);font-weight:bold;">ROB??TICA</h2>
                            <p>Estimular a los participantes en el dise??o, construcci??n y programaci??n de robots, a trav??s de experiencias y aplicaciones pr??cticas.</p>
                            <h5 style="font-weight:bold;">OBJETIVO GENERAL:</h5>
                            <ul>
                                <li>Despertar la vocaci??n hacia la tecnolog??a.</li>
                                <li>Fomentar el trabajo en equipo e inter cambio de ideas.</li>
                                <li>Inculcar la importancia de los m??todos y procedimientos en el desarrollo de proyectos.</li>
                                <li>Desarrollar y fortalecer la creatividad.</li>
                            </ul>
                            <h5 style="font-weight:bold;">OBJETIVO ESPEC??FICO:</h5>
                            <ul>
                                <li>Crear en nuestra instituci??n el club de rob??tica.</li>
                            </ul>

                            <p>Costo por taller: Gratuito.</p>
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
                    <div class="row mx-1 py-3" style="border:2px solid red;border-radius:5px;">
                        <!-- <div class="col-lg-5 my-auto">
                            <img src="./assets/img/fotos/escultura.jpg" class="img-fluid" alt="">
                        </div> -->
                        <div class="col-lg">
                            <h2 style="color:var(--color4);font-weight:bold;">ESCULTURA</h2>
                            <p>El taller de Escultura del colegio Alexander Fleming est?? inspirada en el desarrollo del talento de los alumnos. En la ense??anza del que hacer escult??rico, partimos de un compromiso con el arte y la cultura, otorgando al alumno los conocimientos pertinentes para su desarrollo .El manejo de fundamentos pl??sticos como el volumen, la linea, el ritmo y el espacio, asi como la experimentaci??n con materiales diversos, desarrollar?? en el alumno la capacidad de relacionar ideas para crear sentido.</p>
                            <h5 style="font-weight:bold;">OBJETIVO GENERAL:</h5>
                            <ul>
                                <li>Reconocer diversos materiales y medios de expresi??n art??stica y aprender a utilizarlos adecuadamente.</li>
                                <li>Despertar y dinamizar la imaginaci??n y la creatividad.</li>
                                <li>Potenciar la expresi??n conceptual y emocional a trav??s de procedimientos pl??sticos.</li>
                                <li>Potenciar nuestras sensibilidades desarrollando la coordinaci??n visual y manual.</li>
                            </ul>
                            <h5 style="font-weight:bold;">OBJETIVO ESPEC??FICO:</h5>
                            <ul>
                                <li>Representar figuras en plano o volumen, combinando formas y empleando variados materiales.</li>
                                <li>Confeccionar esculturas uniendo elementos a trav??s de diferentes t??cnicas y materiales.</li>
                                <li>Modelar distintas figuras y elementos con masa, plastilina, en las que se pueda reconocer una figura.</li>
                            </ul>
                            <h5 style="font-weight:bold;">INDUMENTARIA:</h5>
                            <ul>
                                <li>Mandil de trabajo de escultura o guarda polvo institucional.</li>
                            </ul>

                            <p>Costo por taller: S/ 15.00 </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="gastronomia" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row mx-1 py-3" style="border:2px solid red;border-radius:5px;">
                        <!-- <div class="col-lg-5 my-auto">
                            <img src="./assets/img/fotos/robotica.jpg" class="img-fluid" alt="">
                        </div> -->
                        <div class="col-lg">
                            <h2 style="color:var(--color4);font-weight:bold;">GASTRONOM??A</h2>
                            <p>Iniciar y despertar la pasi??n por el gran mundo
                                gastron??mico a todos aquellos grandes y peque??os
                                chef, creando de esta forma buenas bases y t??cnicas
                                en la cocina para un ??xito total en sus presentaciones profesionales.</p>
                            <h5 style="font-weight:bold;">OBJETIVO GENERAL:</h5>
                            <ul>
                                <li>Manejo de equipos, utensilios de cocina e higiene en la cocina.</li>
                                <li>Conocimiento de materia prima Corte de vegetales y frutas.</li>
                                <li>Conocimiento de la reposter??a en general.</li>
                            </ul>
                            <h5 style="font-weight:bold;">OBJETIVO ESPEC??FICO:</h5>
                            <ul>
                                <li>Ejecutar de manera aut??noma, los distintos platillos de reposter??a, gestionando adecuadamente los recursos disponibles para adaptarlos a las peculiaridades de cada uno.</li>
                                <li>Clasificar los diferentes tipos de platillos por pa??ses seg??n los elementos y estilo empleados.</li>
                                <li>Utilizar los conocimientos te??ricos para la elaboraci??n de los platillos.</li>
                                <li>Dise??ar de manera creativa diferentes platillos y postres de Latinoam??rica.</li>
                                <li>Desarrollar aptitudes y competencias para la preparaci??n de platillos de reposter??a.</li>
                            </ul>

                            <h5 style="font-weight:bold;">INDUMENTARIA:</h5>
                            <ul>
                                <li>Mandil y gorro de gastronom??a institucional.</li>
                            </ul>

                            <p>Costo bimestral por taller: S/30.00 </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="futsal" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row mx-1 py-3" style="border:2px solid red;border-radius:5px;">
                        <!-- <div class="col-lg-5 my-auto">
                            <img src="./assets/img/fotos/robotica.jpg" class="img-fluid" alt="">
                        </div> -->
                        <div class="col-lg">
                            <h2 style="color:var(--color4);font-weight:bold;">TALLER DE FUTSAL</h2>
                            <p>Recordemos que en esta etapa es fundamental incidir especialmente
                                en la coordinaci??n psicomotriz, utilizando el juego como motor
                                central en las sesiones de entrenamiento y aplicando ejercicios
                                donde las habilidades y destrezas variadas tengan un papel relevante
                                y la velocidad de movimiento tenga especial atenci??n en el momento de
                                trabajar la iniciaci??n a la t??cnica individual basada en la familiarizaci??n
                                con el bal??n, a modo de ejercicios ??culo pie-bal??n y ??culo mano-bal??n,
                                sin dejar de lado los juegos grupales de cooperaci??n y de oposici??n y
                                la iniciaci??n a ciertas pr??cticas f??sicas para desarrollar algunas
                                capacidades condicionales concretas.</p>

                            <h5 style="font-weight:bold;">OBJETIVO ESPEC??FICO:</h5>
                            <ul>
                                <li>Mejorar las capacidades coordinativas generales
                                    en base a las habilidades y destrezas que el jugador ya posee.</li>
                                <li>Utilizar aprendizajes basados en los juegos de cooperaci??n
                                    y oposici??n, la carrera, los saltos, las recepciones,
                                    los equilibrios, los giros, los lanzamientos y combinaciones de los mismos.</li>
                                <li>Utilizar ejercicios en la coordinaci??n ??culo pie-bal??n,
                                    ??culo mano-bal??n: conducciones de bal??n, pases, recepciones,
                                    paradas, controles y disparos a porter??a.</li>
                            </ul>

                            <p>Costo por taller: Gratuito.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="voley" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row mx-1 py-3" style="border:2px solid red;border-radius:5px;">
                        <!--  <div class="col-lg-5 my-auto">
                            <img src="./assets/img/fotos/robotica.jpg" class="img-fluid" alt="">
                        </div> -->
                        <div class="col-lg">
                            <h2 style="color:var(--color4);font-weight:bold;">TALLER DE VOLEY</h2>
                            <p>El Voleibol es un juego extremadamente l??gico y racional,
                                por lo cual ayuda a que estas habilidades y cualidades
                                se desarrollen en los alumnos. Les ense??a a depender
                                del otro para ganar y a entender que uno depende de
                                los dem??s en un terreno de juego, es decir adquieren
                                habilidad para trabajar en equipo</p>
                            <h5 style="font-weight:bold;">OBJETIVO GENERAL:</h5>
                            <ul>
                                <li>Tiene como objetivo instruir al estudiante al conocimiento del deporte entregando informaci??n sobre la historia y el reglamento, familiarizar al estudiante con el Voleibol a trav??s de juegos recreativos y que el estudiante adquiera a trav??s de actividades espec??ficas los fundamentos b??sicos del Voleibol.</li>
                            </ul>
                            <h5 style="font-weight:bold;">OBJETIVO ESPECIFICO:</h5>
                            <ul>
                                <li>Promover el aprendizaje y la pr??ctica del Voleibol en los alumnos.</li>
                                <li>Colaborar con la formaci??n integral de los alumnos (tolerancia a la frustraci??n,
                                    disciplina y perseverancia) generando en ellos una filosof??a de vida.</li>
                                <li>Cuidado de la salud y del cuerpo.</li>
                                <li>Aumentar las capacidades y destrezas f??sicas.</li>
                            </ul>

                            <p>Costo por taller: Gratuito.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="handball" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row mx-1 py-3" style="border:2px solid red;border-radius:5px;">
                        <!--  <div class="col-lg-5 my-auto">
                            <img src="./assets/img/fotos/robotica.jpg" class="img-fluid" alt="">
                        </div> -->
                        <div class="col-lg">
                            <h2 style="color:var(--color4);font-weight:bold;">TALLER DE HANDBALL</h2>
                            <p>El handball en edad escolar, como todo deporte,
                                debe de entenderse como un juego de bal??n para
                                ni??os, porque desde esta perspectiva se integran
                                las necesidades l??dicas del ni??o en la pr??ctica del deporte.</p>
                            <p>Es decir, la pr??ctica del balonmano en edad escolar facilita que se transmitan al ni??o experiencias positivas que permitan que se desarrolle correctamente en distintos niveles: motor, social y educativo.</p>
                            <h5 style="font-weight:bold;">OBJETIVO GENERAL:</h5>
                            <ul>
                                <li>Promover el conocimiento de este deporte e introducirse en el ??mbito deportivo y hacer este un estilo de vida.</li>
                                <li>Desarrollar la capacidad de resolver situaciones concretas.</li>
                                <li>Desarrollar las capacidades condicionales de los alumnos
                                    (velocidad, resistencia, fuerza) a un nivel espec??fico adecuado a la edad y al peso.</li>
                                <li>Mejorar coordinativamente todas las acciones motrices
                                    de los alumnos, para lograr una mayor eficacia en el juego y su desarrollo integral.</li>
                                <li>Trabajar sobre la motivaci??n tanto a nivel individual
                                    como grupal, para lograr el gusto por el deporte y la actividad f??sica.</li>
                                <li>Conocer y dominar la l??gica del juego y los aspectos t??cnicos-t??cticos.</li>
                                <li>Conocer el reglamento del handball.</li>
                            </ul>
                            <h5 style="font-weight:bold;">OBJETIVO ESPEC??FICO:</h5>
                            <ul>
                                <li>Desarrollo de la conciencia de juego en equipo.</li>
                                <li>Mejora de la t??cnica espec??fica aplicada al deporte.</li>
                                <li>Capacidad de jugar bajo esquemas t??cticos b??sicos en ataque y defensa.</li>
                            </ul>

                            <p>Costo por taller: Gratuito.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="natacion" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row mx-1 py-3" style="border:2px solid red;border-radius:5px;">
                        <!-- <div class="col-lg-5 my-auto">
                            <img src="./assets/img/fotos/robotica.jpg" class="img-fluid" alt="">
                        </div> -->
                        <div class="col-lg">
                            <h2 style="color:var(--color4);font-weight:bold;">TALLER DE NATACI??N</h2>
                            <p>El taller de Nataci??n tiene como prop??sito,
                                estimular y fortalecer el desarrollo de
                                habilidades y destrezas que permitan el dominio
                                y disfrute del medio acu??tico.</p>
                            <h5 style="font-weight:bold;">OBJETIVO GENERAL:</h5>
                            <ul>
                                <li>Que todos nuestros alumnos sean capaces de desenvolverse con total normalidad y autonom??a en el medio acu??tico.</li>
                                <li>Desarrollar lo m??ximo posible las capacidades de nuestros alumnos en el medio acu??tico empezando por las habilidades acu??ticas para concluir con t??cnicas espec??ficas de nado.</li>
                                <li>Fomentar la necesidad de unas normas de convivencia y de respeto a los compa??eros, material, instalaciones, monitores, etc.</li>
                                <li>Crear un sentimiento de pertenencia en un grupo e inculcar valores socializadores.</li>
                                <li>Aprender h??bitos de higiene saludables.</li>
                                <li>Buscar diversi??n en la pr??ctica.</li>
                            </ul>
                            <h5 style="font-weight:bold;">OBJETIVO ESPEC??FICO:</h5>
                            <ul>
                                <li>Disfrutar durante la pr??ctica de actividad f??sica.</li>
                                <li>Incrementar el conocimiento, el control del
                                    propio cuerpo y la autoestima, a trav??s del trabajo de las habilidades motrices b??sicas en situaciones.</li>
                                <li>Adquirir h??bitos de orden, seguridad e higiene durante la pr??ctica de actividad f??sica.</li>
                                <li>Relacionarse con los dem??s con respeto,
                                    colaboraci??n y aceptaci??n de la diferencia, sea del orden que sea.</li>
                            </ul>
                            <h5 style="font-weight:bold;">INDUMENTARIA:</h5>
                            <ul>
                                <li>DAMAS: Traje de ba??o institucional, Gorro y lentes de protecci??n.</li>
                                <li>VARONES: Short de ba??o institucional, Gorro y lentes de protecci??n.</li>
                            </ul>

                            <p>Costo por taller: gratuito.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="musica" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row mx-1 py-3" style="border:2px solid red;border-radius:5px;">
                        <!--  <div class="col-lg-5 my-auto">
                            <img src="./assets/img/fotos/robotica.jpg" class="img-fluid" alt="">
                        </div> -->
                        <div class="col-lg">
                            <h2 style="color:var(--color4);font-weight:bold;">BANDA DE M??SICA</h2>
                            <p>El taller de Banda de M??sica tiene como finalidad
                                que el alumno descubra y desarrolle sus habilidades
                                musicales mediante la lectura de partituras y la ejecuci??n
                                de instrumentos de viento, su capacidad auditiva, aumente su
                                sensibilidad art??stica y acrecente su horizonte cultural.</p>
                            <p>La banda es una formaci??n de muchos m??sicos (m??s de 40) que tocan diversos tipos de instrumentos de las siguientes familias:</p>
                            <ul>
                                <li>Vientos: dividida en dos partes, de madera y de metal.</li>
                                <li>Percusi??n Tambor, cimbalos, tarola, etc.</li>
                            </ul>
                        </div>
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