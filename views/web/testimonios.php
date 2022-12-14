<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pivotHome['nombre'] ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="shortcut icon" href="<?php echo WEBURL ?>/assets/img/icons/escudo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/web.css">
</head>

<body>

    <script async src="<?php echo WEBURL ?>/assets/js/popper.min.js"></script>
    <script async src="<?php echo WEBURL ?>/assets/js/bootstrap.min.js"></script>

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

    <?php include_once 'includes/header.php' ?>

    <style>
        #portada {
            background-image: url(/assets/img/portada-all-1.png);
            background-size: 100%;
            color: white;
            padding-top: 2em;
            height: 240px;
        }

        #portada .breadcrumb-item::before {
            color: white;
        }

        #portada h1 {
            font-size: 2.5em;
            margin-top: .9em;
        }

        @media only screen and (max-width: 650px) {
            #portada {
                background-image: url(/assets/img/portada-sm-1.png);
                background-size: 100% 100%;
                height: 160px;
                padding-top: 1.5em;
            }

            #portada h1 {
                font-size: 2.1em;
            }
        }
    </style>

    <section class="container-fluid px-0" id="portada">
        <div class="container px-3">
            <ol class="breadcrumb text-white" style="font-size: 16px;">
                <li class="breadcrumb-item text-white"><a href="/" class="text-white">Inicio</a></li>
                <li class="breadcrumb-item text-white"><a href="" class="text-white">Quienes somos</a></li>
                <li class="breadcrumb-item text-white" aria-current="page">Testimonios</li>
            </ol>
            <h1>Testimonios</h1>
        </div>
    </section>

    <br><br><br>

    <section class="container-fluid">
        <div id="carouselTestimonios" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row pt-3">
                            <div class="col px-4">
                                <div class="card shadow text-center border-0" style="padding: 2em 3em;">
                                    <br>
                                    <div class="mx-auto">
                                        <img src="/assets/img/fotos/foto_angie_cajachagua.png" width="180" height="180">
                                    </div>
                                    <br>
                                    <p style="line-height: 2;">???Para m??, estudiar en el colegio YMCA Abraham Valdelomar significa diversi??n y libertad, porque todo lo que he vivido y vivo en este colegio me traen hermosos y felices recuerdos llenos de satisfacci??n. En este lugar, he conocido a mi segunda familia con la que sin darme cuenta descubro mis capacidades, as?? como la pasi??n por el deporte. Nada se compara a mi colegio.???</p>
                                    <h4 class="text-warning my-3">Angie Cajachagua Vilca (14) Estudiante de 3er grado de secundaria</h4>
                                    <p class="text-info">Presidenta del Club Interact 2020 -2021, miembro del Club de Debate y concursante de Splash, en el que ha presentado un proyecto denominado Cuid??ndonos para vivir, con el fin de ayudar a las personas a crear h??bitos saludables.</p>
                                </div>
                            </div>
                        </div>
                        <br><br>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row pt-3">
                            <div class="col px-4">
                                <div class="card shadow text-center border-0" style="padding: 2em 3em;">
                                    <br>
                                    <div class="mx-auto">
                                        <img src="/assets/img/fotos/testiomonio_02.png" width="180" height="180">
                                    </div>
                                    <br>
                                    <p style="line-height: 2;">???Puedo afirmar, sin temor a equivocarme, que los mejores a??os de mi vida los pas?? en el Valdelomar. A mis mejores amigos los conoc?? tambi??n en el colegio. Lo m??s importante, sin embargo, fue ser formado con valores y liderazgo que me prepararon, desde aquella ??poca, para los retos del mundo de hoy.???</p>
                                    <h4 class="text-warning my-3">Diego Armando Morales Lozada, Prom. 2006</h4>
                                    <p class="text-info">Abogado por la USMP, profesor de alem??n, Vocal del Consejo Directivo de YMCA.</p>
                                </div>
                            </div>
                        </div>
                        <br><br>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row pt-3">
                            <div class="col px-4">
                                <div class="card shadow text-center border-0" style="padding: 2em 3em;">
                                    <br>
                                    <div class="mx-auto">
                                        <img src="/assets/img/fotos/testiomonio_03.png" width="180" height="180">
                                    </div>
                                    <br>
                                    <p style="line-height: 2;">???El primer paso es el m??s dif??cil y mi colegio me dio la fuerza, el ??nimo y la curiosidad para avanzar en el mundo acad??mico y luchar contra el facilismo y la necedad que impera en nuestros tiempos. Dentro de mis progresos, est?? el nombre de mi antigua casa de estudios y de sus profesores quienes, en armon??a con el pensamiento de Manuel Gonz??lez Prada, me ense??aron que se puede derramar algo de alegr??a en tanta tristeza; algo de elevaci??n en tanta ridiculez; y algo de limpieza en tanta porquer??a???.</p>
                                    <h4 class="text-warning my-3">Gonzalo Castro Uchima, Prom. 2012</h4>
                                    <p class="text-info">A punto de graduarse de m??dico, Externo de Cirug??a del Hospital Grau y de Medicina Interna del Hospital Dos de Mayo, Miembro de SOCIEM UPC, Docente del ??rea de gastroenterolog??a CPA-SOCIEM, Investigador del ??rea pediatr??a CPC/CPPC-SOCIEM, Expositor en la Conferencia de gastroenterolog??a en la Universidad de Valpara??so (octubre, 2020), Traductor de franc??s, ingl??s y portugu??s.</p>
                                </div>
                            </div>
                        </div>
                        <br><br>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row pt-3">
                            <div class="col px-4">
                                <div class="card shadow text-center border-0" style="padding: 2em 3em;">
                                    <br>
                                    <div class="mx-auto">
                                        <img src="/assets/img/fotos/testiomonio_04.png" width="180" height="180">
                                    </div>
                                    <br>
                                    <p style="line-height: 2;">???Estudiar en el Abraham Valdelomar me dio la oportunidad de fortalecer aspectos claves de mi desarrollo personal mediante experiencias vivenciales como el intercambio estudiantil y los programas de emprendimiento. As?? tambi??n, los diversos talleres y actividades extracurriculares enriquecieron mi aprendizaje, y me permitieron descubrir y explorar nuevas habilidades.???</p>
                                    <h4 class="text-warning my-3">Sebasti??n Mu??oz (21), Prom. 2015</h4>
                                    <p class="text-info">Alumno del 10mo. ciclo de la carrera de Comunicaci??n e Imagen Empresarial en la UPC, 1er puesto en su carrera, fue becado por su universidad y se fue de intercambio a Espa??a.</p>
                                </div>
                            </div>
                        </div>
                        <br><br>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row pt-3">
                            <div class="col px-4">
                                <div class="card shadow text-center border-0" style="padding: 2em 3em;">
                                    <br>
                                    <div class="mx-auto">
                                        <img src="/assets/img/fotos/testimonios_05.jpg" width="180" height="180">
                                    </div>
                                    <br>
                                    <p style="line-height: 2;">???El colegio Abraham Valdelomar de la YMCA Per?? ha logrado que mis hijos sean j??venes independientes, defensores de la justicia, con principios de respeto a sus semejantes y la naturaleza, as?? como tolerantes; con un pensamiento cr??tico, basado en las ense??anzas de nuestro Se??or Jesucristo. Han sido formados como j??venes integrando Mente, Esp??ritu y Cuerpo para ser personas ??tiles a la sociedad.???</p>
                                    <h4 class="text-warning my-3">Cecilia Gonz??lez de Mariscal</h4>
                                    <p class="text-info">Madre de familia de dos exalumnos.</p>
                                </div>
                            </div>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselTestimonios" data-bs-slide="prev" style="margin-left: -4em;">
                <span class="text-info fs-1"><i class="fas fa-chevron-circle-left"></i></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselTestimonios" data-bs-slide="next" style="margin-right: -4em;">
                <span class="text-info fs-1"><i class="fas fa-chevron-circle-right"></i></span>
            </button>
        </div>
    </section>

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

</body>

</html>