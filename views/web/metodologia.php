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
        p {
            line-height: 2;
        }

        #portada {
            background-image: url(/assets/img/portada-all-2.png);
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

        button.accordion-button {
            font-family: 'Nunito-Bold';
        }

        button.accordion-button::after,
        button.accordion-button:not(.collapsed)::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
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
                <li class="breadcrumb-item text-white"><a href="" class="text-white">Propuesta Educativa</a></li>
                <li class="breadcrumb-item text-white" aria-current="page">Metodolog??a YMCA</li>
            </ol>
            <h1>Metodolog??a YMCA</h1>
        </div>
    </section>

    <br><br><br>

    <section class="container">
        <div class="row my-4">
            <div class="col-md">
                <h2 class="text-info">METODOLOG??A DE PROYECTOS YMCA</h2>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-md-5 text-justify mb-3">
                <p>
                    Nuestra metodolog??a de proyectos YMCA (MPY) emplea estrategias l??dicas, el aprendizaje experiencial, el estudio de casos, el trabajo de equipo y el uso de la matriz de marco l??gico
                </p>
                <p>
                    Los estudiantes inician sus proyectos analizando e interpretando una problem??tica real de su contexto; de acuerdo a su edad, intereses y capacidades. Desde temprana edad, los estudiantes trabajan de manera colaborativa, aplican lo que van aprendiendo y eval??an el proceso y los resultados.
                </p>
                <p>
                    Sus habilidades blandas y duras son trabajadas de manera sostenida y simult??nea, y van consolidando el logro de competencias de manera integral, convirti??ndose en agentes de cambio.
                </p>
            </div>
            <div class="col-md-6 py-4">
                <img src="/assets/img/fotos/metodologia.jpg" class="rounded shadow" width="100%">
            </div>
        </div>
    </section>

    <br><br><br>

    <section class="container">
        <div class="row my-2">
            <div class="col text-end">
                <img src="/assets/img/icons/IMAG_1.png" width="60">
            </div>
            <div class="col-5 text-center">
                <h3 class="text-info" style="margin-top: 11px;">FUNDAMENTOS PEDAG??GICOS</h3>
            </div>
            <div class="col text-start">
                <img src="/assets/img/icons/IMAG_2.png" width="60">
            </div>
        </div>
        <div class="accordion pt-3">
            <div class="row">
                <div class="col-md-4 my-3">
                    <div class="accordion-item bg-info">
                        <button class="accordion-button collapsed bg-info text-white py-4" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                            PEDAGOG??A PERSONALIZADA
                        </button>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body text-justify text-white">
                                Formamos a los estudiantes de manera integral, considerando todas las dimensiones de la persona: cognitiva, socioemocional, moral, f??sica y espiritual. Cada estudiante es respetado, valorado y reconocido desde su singularidad y su potencial. Nuestra tutor??a personalizada brinda acompa??amiento permanente. Los docentes aplican estrategias de ense??anza de acuerdo a los ritmos y estilos de aprendizaje de los estudiantes, promoviendo un clima saludable y una disciplina formativa que se fundamenta en el amor y la firmeza
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="accordion-item bg-warning">
                        <button class="accordion-button collapsed bg-warning text-white py-4" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            PENSAMIENTO CR??TICO Y CREATIVO
                        </button>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body text-justify text-white">
                                Los estudiantes van desarrollando competencias de manera articulada desde cada espacio y actividad de aprendizaje: identifican los conocimientos, capacidades y habilidades que deben poner en juego en cada situaci??n; analizan e interpretan la realidad de manera objetiva; investigan de manera consistente, para tomar decisiones. Son preparados para responder de manera cr??tica y creativa a las necesidades y problem??ticas que afrontan en su vida diaria personal y social, desde un marco ??tico-cristiano.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="accordion-item bg-info h-100">
                        <button class="accordion-button collapsed bg-info text-white py-4" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            APRENDIZAJE BASADO EN PROYECTOS
                        </button>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body text-justify text-white">
                                Los proyectos que desarrollan los estudiantes tienen como punto de partida una problem??tica real del contexto familiar o social. Proponen y construyen soluciones en un proceso formativo que consolida el logro de las competencias. Los estudiantes trabajan de manera colaborativa, afirman sus valores y afianzan sus habilidades duras y blandas.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br><br>

    <section class="container">
        <div class="row">
            <div class="col-md text-center">
                <h2 class="text-info mb-4">EVALUACI??N</h2>
                <p>
                    La evaluaci??n es permanente, integral y da cuenta del progreso de las competencias de cada estudiante. Aplicamos criterios, procedimientos e instrumentos diferenciados. La retroalimentaci??n es un proceso permanente que asegura la metacognici??n en los estudiantes, empoder??ndolos con estrategias para la investigaci??n y el autoaprendizaje.
                </p>
            </div>
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