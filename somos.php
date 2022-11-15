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
        }
    </style>

    <section class="container-fluid px-0" id="portada">
        <div class="container px-3">
            <ol class="breadcrumb text-white" style="font-size: 16px;">
                <li class="breadcrumb-item"><a href="./" style="color:var(--color8);">Inicio</a></li>
                <li class="breadcrumb-item"><a href="" style="color:var(--color8);">Nosotros</a></li>
            </ol>
            <h1>Presentación</h1>
        </div>
    </section>

    <br><br><br>
    <section id="bienvenido">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="card  shadow">
                        <div class="card-body text-justify" style="padding: 6%;">
                            <div class="row ">

                                <h1 class="mb-3" style="text-align:center;">Bienvenidos</h1>
                            </div>

                            <br>
                            <br>
                            <p>
                                El Colegio Alexander Fleming es un colegio mixto con una excelente educación integral y con una valiosa experiencia acumulada por 30 años en los que va preparando a cientos de niños jóvenes para enfrentar las exigencias académicas del mundo actual y de promover su desarrollo personal y un pensamiento autónomo. 
                            </p>

                            <p>
                                Nuestro proyecto educativo propicia que nuestros alumnos disfruten de su aprendizaje y sientan satisfacción al vencer dificultades y ver reconocidos sus logros. Todo ello nos ha permitido forjar un entorno educativo diferente, en el que nuestros alumnos descubren una buena amistad en sus compañeros, se sienten contentos y sostenidos ya que nuestra política de antibullying es muy efectiva. 
                            </p>
                            <p>
                                En un ambiente general de respeto, nuestro proyecto educativo Fleming logra dejar huella en nuestros estudiantes mediante experiencias significativas que apuntan a “tocar, mover y mudar sus corazones”; por lo tanto, garantiza cambios duraderos en la conducta y en el desarrollo intelectual. Para nosotros, es fundamental revalorar la pedagogía que busca unir la razón y los afectos. 
                            </p>
                            <p>
                                Finalmente, nuestro proyecto educativo que es innovador, exigente y efectivo ha permitido lograr que nuestros alumnos ingresen en su totalidad a las principales Universidades de nuestra ciudad y de Lima obteniendo los primeros puestos en las carreras de Medicina, Ing. Minas, Ing. Civil, Ing. Sistemas, Derecho, etc. y estamos seguros que si se unen a nuestro colegio también lograrán cumplir con ver a sus hijos realizados y sobre todo ser personas de bien.  
                            </p>
                            <p>Con el deseo de servirles les invito a ser parte de nuestra familia Fleming.  </p>
                            <br>
                            <p>Fraternalmente,  </p>
                            <br>
                            <div style="display:flex;justify-content:center;">
                                <img src="./assets/img/fotos/director.jpg" class="rounded shadow-sm" width="38%">
                            </div>
                            <br>
                            <p class="text-center" style="font-family: 'Dancing Script', cursive;">
                                <b style="font-size:1.6rem;color:var(--color4);">Hno. Román Suclla Lazo </b>
                            </p>
                            <p class="text-center">
                                <b>Director</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

</body>

</html>