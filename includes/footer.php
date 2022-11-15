<style>
    #footer {
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, .8)), url("./assets/img/fotos/patio.jpg");
        background-size: 100%;
        background-position: center;
        color: white;
    }

    /* Estilo de Flotantes */
    .topcontrol {
        position: fixed;
        bottom: 5px;
        right: 5px;
        opacity: 0.8;
        cursor: pointer;
        z-index: 100;
        background: #333333;
        width: 50px;
        height: 50px;
        /* border-radius: 50%; */
        padding-top: 6px;
        padding-left: 13px;
        border: 2px solid white;
        color: white;
    }

    .topcontrol:hover {
        color: white;
    }

    .topcontrol2 {
        position: fixed;
        bottom: 50px;
        right: 18px;
        opacity: 0.8;
        cursor: pointer;
        z-index: 100;
        background: #00D553;
        width: 50px;
        height: 50px;
        padding-top: 4px;
        padding-left: 8px;
        /* border: 2px solid white; */
        border-radius: 50%;
        transition: all 3 ease-in-out;
    }

    .topcontrol2:hover {
        transform: scale(1.08);
    }

    .topcontrol2 i {
        color: white;
        margin-top: 2px;
        margin-left: 2px;
    }

    .topcontrol3 {
        position: fixed;
        bottom: 112px;
        right: 18px;
        opacity: 0.8;
        cursor: pointer;
        z-index: 100;
        background-color: rgb(31, 202, 216, 1);
        width: 50px;
        height: 50px;
        padding-top: 4px;
        padding-left: 8px;
        /* border: 2px solid white; */
        border-radius: 50%;
        transition: all 3 ease-in-out;
    }

    .topcontrol3 img {
        height: 32px;
        width: 30px;
        margin-top: 5px;
        margin-left: 2px;
    }

    .topcontrol3:hover {
        transform: scale(1.08);
    }

    .topcontrol4 {
        position: fixed;
        bottom: 50px;
        right: 95%;
        opacity: 0.8;
        cursor: pointer;
        z-index: 100;
        background-color: #000;
        width: 50px;
        height: 50px;
        padding-top: 4px;
        padding-left: 8px;
        /* border: 2px solid white; */
        border-radius: 50%;
        transition: all 3 ease-in-out;
    }

    .topcontrol4 img {
        height: 32px;
        width: 30px;
        margin-top: 5px;
        margin-left: 2px;
    }

    .topcontrol4:hover {
        transform: scale(1.08);
    }

    .topcontrol5 {
        position: fixed;
        bottom: 112px;
        right: 95%;
        opacity: 0.8;
        cursor: pointer;
        z-index: 100;
        background-color: rgb(255, 255, 255, 1);
        width: 50px;
        height: 50px;
        padding-top: 4px;
        padding-left: 8px;
        /* border: 2px solid white; */
        border-radius: 50%;
        transition: all 3 ease-in-out;
    }

    .topcontrol5 img {
        height: 28px;
        width: 32px;
        margin-top: 7px;
        margin-left: 2px;
    }

    .topcontrol5:hover {
        transform: scale(1.08);
    }

    .topcontrol6 {
        position: fixed;
        bottom: 176px;
        right: 95%;
        opacity: 0.8;
        cursor: pointer;
        z-index: 100;
        background-color: #f22224;
        width: 50px;
        height: 50px;
        padding-top: 4px;
        padding-left: 8px;
        /* border: 2px solid white; */
        border-radius: 50%;
        transition: all 3 ease-in-out;
    }

    .topcontrol6 img {
        height: 26px;
        width: 33px;
        margin-top: 8px;
        margin-left: 1px;
    }

    .topcontrol6:hover {
        transform: scale(1.08);
    }

    .topcontrol7 {
        position: fixed;
        bottom: 236px;
        right: 95%;
        opacity: 0.8;
        cursor: pointer;
        z-index: 100;
        background-color: #3b5998;
        width: 50px;
        height: 50px;
        padding-top: 4px;
        padding-left: 8px;
        /* border: 2px solid white; */
        border-radius: 50%;
        transition: all 3 ease-in-out;
    }

    .topcontrol7 img {
        height: 33px;
        width: 23px;
        margin-top: 5px;
        margin-left: 5px;
    }

    .topcontrol7:hover {
        transform: scale(1.08);
    }

    /* Estilo de plus en redes */
    #btn-mas {
        display: none;
    }

    .contain {
        position: fixed;
        bottom: 172px;
        right: 16px;
        z-index: 10;
    }

    .redes a,
    .btn-mas label {
        display: block;
        text-decoration: none;
       
        color: #fff;
        width: 55px;
        height: 55px;
        line-height: 55px;
        text-align: center;
        border-radius: 50%;
        box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.4);
        transition: all 500ms ease;
        z-index: 100;

    }

    .redes a:hover {
        background: #fff;
        color: var(--color2);
    }

    .redes a {
        margin-bottom: -15px;
        opacity: 0;
        visibility: hidden;
    }

    #btn-mas:checked~.redes a {
        margin-bottom: 10px;
        opacity: 1;
        visibility: visible;
    }

    .btn-mas label {
        cursor: pointer;
        background: var(--color2);
        font-size: 23px;
    }

    #btn-mas:checked~.btn-mas label {
        transform: rotate(135deg);
        font-size: 25px;
    }
    .contain{
        display:none;
    }

    @media only screen and (max-width: 450px) {

        
        .topcontrol4,
        .topcontrol4,
        .topcontrol5,
        .topcontrol6,
        .topcontrol7 {
            display: none;
        }

        .contain{
        display:block;
    }
    }
</style>
<footer class="container-fluid px-0" id="footer">
    <br>
    <div class="container py-1">
        <div class="row justify-content-between">
            <div class="col-md-5 my-2">
                <h2 class="text-white fw-bold">Contáctenos</h2>
                <!-- <a href="https://api.whatsapp.com/send?phone=51976760791" target="_blank">
                    <button class="btn btn-warning text-white my-3 fw-bold">Comunícate ahora &nbsp;<i class="fab fa-whatsapp"></i></button>
                </a> -->
                <div class="d-flex text-white my-3" style="align-items: center;">
                    <span style="width: 10px; text-align: center;font-family: 'Mulish', sans-serif;"><i class="far fa-envelope"></i></span>
                    <span class="ms-4">colegio@alexanderfleming.edu.pe</span>
                </div>
                <div class="d-flex text-white my-3" style="align-items: center;">
                    <span style="width: 10px; text-align: center;"><i class="fas fa-phone-alt"></i></span>
                    <span class="ms-4">
                        054202602</span>
                    <span>&nbsp;&nbsp;-&nbsp;&nbsp;</span>
                    <span style="width: 10px; text-align: center;"><i class="fas fa-mobile-alt"></i></span>
                    <span class="ms-3">976760791</span>
                </div>
                <div class="d-flex text-white my-3" style="align-items: center;">
                    <a href="https://goo.gl/maps/hJPiZxtgMu5FxTYD6" target="_blank">
                        <span style="width: 10px; text-align: center;"><i class="fas fa-map-marker-alt"></i></span>
                        <span class="ms-4">Urb. Orquídeas B7 ASVEA, CERCADO – AREQUIPA</span>
                    </a>
                </div>
                <div class="d-flex text-white my-3" style="align-items: center;">
                    <span style="width: 10px; text-align: center;font-family: 'Mulish', sans-serif;"><i class="far fa-clock"></i></span>
                    <span class="ms-4">Horario de atención:</span>
                </div>
                <div class="d-flex text-white my-3" style="align-items: center;">

                    <span class="ms-4">&nbsp;&nbsp;&nbsp;8:30am – 3:00pm </span>
                </div>
                <br>
                <a href="#" target="_blank" class="text-white">
                    <img src="./assets/img/icons/book_reclamo.png" height="42">
                    <span>Libro de reclamaciones</span>
                </a>
            </div>
            <div class="col-md-6 my-2">
                <h2 class="text-white fw-bold">
                    Envíanos tu consulta
                </h2>
                <form class="form-group" id="form-contacto">
                    <input type="text" class="form-control my-3" name="nombre" placeholder="Ingrese nombre" required="">
                    <input type="text" class="form-control my-3" name="correo" placeholder="Ingrese email" required="">
                    <textarea class="form-control mb-4" rows="4" name="consulta" placeholder="Escribe tu consulta ..." required=""></textarea>
                    <button class="btn btn-warning text-white" type="submit">Enviar <i class="fas fa-chevron-circle-right"></i></button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <div class="barinf">
        <span>Colegio Alexander Fleming © 2022</span>
        <a href="https://cubicol.pe" class="ms-auto">Desarrollado por Sensoft Solutions</a>
    </div>
    <div class="topcontrol2">
        <a href="https://wa.me/#" target="_blank">
            <span>
                <i class="fab fa-whatsapp fa-2x"></i>
            </span>
        </a>
    </div>
    <div class="topcontrol3">
        <a href="https://alexanderfleming.cubicol.pe/principal/login" target="_blank">

            <img src="./assets/img/icons/cubo.png" alt="">

        </a>
    </div>
    <div class="topcontrol4">
        <a href="https://www.tiktok.com/@alexanderfleming365" target="_blank">

            <img src="./assets/img/icons/tiktok.png" alt="">

        </a>
    </div>
    <div class="topcontrol5">
        <a href="https://twitter.com/ALEXAND35242444" target="_blank">

            <img src="./assets/img/icons/twitter.png" alt="">

        </a>
    </div>
    <div class="topcontrol6">
        <a href="https://www.youtube.com/channel/UCpXDS48W4KXTdld0qaDmCuA " target="_blank">

            <img src="./assets/img/icons/youtube.png" alt="">

        </a>
    </div>
    <div class="topcontrol7">
        <a href="https://web.facebook.com/colegioalexanderfleming" target="_blank">

            <img src="./assets/img/icons/facebook.png" alt="">

        </a>
    </div>


    <div class="contain">
        <input type="checkbox" id="btn-mas">
        <div class="redes">
            <a href="https://www.facebook.com/colegioalexanderfleming?_rdc=1&_rdr" style=" background: #3b5998;" class="fa fa-facebook" target="_blank"></a>
            <a href="https://www.youtube.com/channel/UCpXDS48W4KXTdld0qaDmCuA" style=" background: #f22224;"class="fa fa-youtube" target="_blank"></a>
            <a href="https://twitter.com/ALEXAND35242444" class="fa fa-twitter" style=" background: #00acee;" target="_blank"></a>
            <a href="https://www.tiktok.com/@alexanderfleming365" class="fab fa-tiktok" style=" background: black;" target="_blank"></a>
        </div>
        <div class="btn-mas">
            <label for="btn-mas" class="fa fa-plus"></label>
        </div>
    </div>

</footer>
<!-- Para llamar a los iconos -->
<script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
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