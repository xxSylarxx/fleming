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
            font-size: 2.6em;
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
                <li class="breadcrumb-item text-white"><a href="" class="text-white">Propuesta Educativa</a></li>
                <li class="breadcrumb-item text-white" aria-current="page">Dpto. Psicopedag??gico</li>
            </ol>
            <h1>Dpto. Psicopedag??gico</h1>
        </div>
    </section>

    <br><br><br>

    <section class="container">
        <div class="row justify-content-between">
            <div class="col-md-5 text-justify my-auto">
                <p>
                    Contamos con un equipo de psic??logas altamente calificadas, especializadas en psicolog??a educativa y con amplia experiencia. Su trabajo coordinado, con el personal docente y las familias, busca que cada estudiante logre su equilibrio psicoemocional y se desarrolle de manera integral. Desplegamos un programa de prevenci??n, promoci??n, detecci??n, orientaci??n y seguimiento de estudiantes, padres de familia y docentes.
                </p>
                <p>
                    Su intervenci??n en la tutor??a y el aprendizaje es estrat??gica. Sus funciones est??n centradas en las siguientes acciones:
                </p>
            </div>
            <div class="col-md-6">
                <img src="/assets/img/fotos/educacion-a-distancia.jpg" class="shadow rounded" width="100%" height="380" style="object-fit: cover;">
            </div>
        </div>
        <br><br>
        <div class="row mt-4">
            <div class="col-md">
                <div class="d-flex flex-row">
                    <p class="text-info me-3"><i class="fa fa-check-circle" aria-hidden="true"></i></p>
                    <p class="s1">
                        Asesoramiento de la acci??n tutorial
                    </p>
                </div>
                <div class="d-flex flex-row">
                    <p class="text-info me-3"><i class="fa fa-check-circle" aria-hidden="true"></i></p>
                    <p class="s1">
                        Monitoreo de la adaptaci??n al entorno escolar
                    </p>
                </div>
                <div class="d-flex flex-row">
                    <p class="text-info me-3"><i class="fa fa-check-circle" aria-hidden="true"></i></p>
                    <p class="s1">
                        Orientaci??n a los estudiantes
                    </p>
                </div>
                <div class="d-flex flex-row">
                    <p class="text-info me-3"><i class="fa fa-check-circle" aria-hidden="true"></i></p>
                    <p class="s1">
                        Orientaci??n y consejer??a a los padres de familia a trav??s de reuniones individuales y el aula virtual para padres
                    </p>
                </div>
                <div class="d-flex flex-row">
                    <p class="text-info me-3"><i class="fa fa-check-circle" aria-hidden="true"></i></p>
                    <p class="s1">
                        Evaluaci??n referencial de los estudiantes derivados
                    </p>
                </div>
                <div class="d-flex flex-row">
                    <p class="text-info me-3"><i class="fa fa-check-circle" aria-hidden="true"></i></p>
                    <p class="s1">
                        Seguimiento del abordaje externo de los estudiantes derivados
                    </p>
                </div>
            </div>
            <div class="col-md">
                <div class="d-flex flex-row">
                    <p class="text-info me-3"><i class="fa fa-check-circle" aria-hidden="true"></i></p>
                    <p class="s1">
                        Asesoramiento a los docentes en el seguimiento de los estudiantes derivados
                    </p>
                </div>
                <div class="d-flex flex-row">
                    <p class="text-info me-3"><i class="fa fa-check-circle" aria-hidden="true"></i></p>
                    <p class="s1">
                        Monitoreo en el cumplimiento de los compromisos de las familias en relaci??n al desarrollo integral de los estudiantes
                    </p>
                </div>
                <div class="d-flex flex-row">
                    <p class="text-info me-3"><i class="fa fa-check-circle" aria-hidden="true"></i></p>
                    <p class="s1">
                        Evaluaci??n grupal de acuerdo a las caracter??sticas del aula
                    </p>
                </div>
                <div class="d-flex flex-row">
                    <p class="text-info me-3"><i class="fa fa-check-circle" aria-hidden="true"></i></p>
                    <p class="s1">
                        Elaboraci??n y evaluaci??n de programas de intervenci??n individual y grupal
                    </p>
                </div>
                <div class="d-flex flex-row">
                    <p class="text-info me-3"><i class="fa fa-check-circle" aria-hidden="true"></i></p>
                    <p class="s1">
                        Elaboraci??n y ejecuci??n del programa de orientaci??n vocacional
                    </p>
                </div>
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