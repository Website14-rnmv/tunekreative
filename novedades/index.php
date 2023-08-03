<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="shortcut icon" href="../image/icon-tunek.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="../js/scrollreveal.js"></script>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/novedades.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/wsp.css">
    <title>Portafolio - Tunekreative</title>
</head>

<style>
    .wid-novedades {
        outline: none;
        border: none;
    }

    .modal-body iframe {
        width: 100%;
        height: 100%;
    }

    .modal-body {
        padding: 0;
    }
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

:root {
    --var-black: #151515;
    --var-azul: #253858;
    --var-gris: #404040;
    --var-naranja: #fdba00;
    --swiper-theme-color: #fdba00 !important;
    --var-p: #d3d3d3;
}



.portada-service {
    width: 100%;
    height: 50vh;
    position: relative;
    background-image: linear-gradient(rgba(0, 22, 50, 0.784), rgba(0, 24, 54, 0.662)), url('../image/maquetado/render.jpg');
    background-position: center;
    background-size: cover;
}



.nav-pills .nav-link.active,
.nav-pills .show>.nav-link {
    color: var(--var-naranja);
    background-color: transparent;
    font-weight: 600;
    font-size: 25px;
}

.nav-link {
    color: #7a7a7a;
}

.nav-link:hover {
    color: var(--var-naranja);
}

.tab-content {
    width: 100%;
}
.tableros{
    width: 30%;
    border-right: 1px solid #f5f5f5;
    position: sticky;
    top: 320px;
}

.title-service {
    width: 20%;
    position: absolute;
    bottom: 20%;
    left: 10%;
}

.title-service h1 {
    color: white;
    font-size: 60px;
    text-shadow: 0 2px 4px black;
}

.title-service h3 {
    color: white;
    font-size: 25px;
    text-shadow: 0 2px 4px black;
    font-weight: 600;
    line-height: 0px;
}

.content-novedades {
    width: 100%;
    padding: 1% 3%;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 20px;
}

.content-tabs-all {
    width: 100%;
    padding: 5% 10%;
}

.wid-novedades {
    width: 100%;
    height: 300px;
    position: relative;
    border-radius: 2px;
}

.wid-novedades img {
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    border-radius: 2px;
    object-fit: cover;

}

.text-novedades {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    display: flex;
    align-items: flex-end;
    padding: 15px;
    background: rgb(0, 0, 3);
    background: linear-gradient(0deg, rgba(0, 0, 2, 0.604) 0%, rgba(0, 212, 255, 0) 100%);
    transition: .5s;
}

.text-novedades:hover {
    background: rgb(0, 0, 3);
    background: linear-gradient(0deg, rgb(0, 0, 2) 0%, rgba(0, 212, 255, 0) 100%);
    transition: .5s;

}

.text-novedades h3 {
    font-size: 23px;
    color: white;
    font-weight: 600;
}


@media (min-width: 768px) and (max-width: 1023px) {
    .title-service h1 {
        font-size: 35px;
    }

    .title-service h3 {
        line-height: 30px;
    }

    .ra-content {
        padding: 5%;
    }

    .title-ra h3 {
        margin-top: 5px;
        font-size: 13px;
    }

    .content-novedades {
        width: 100%;
        padding: 3% 3%;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 20px;
    }

    .content-tabs-all {
        width: 100%;
        padding: 3%;
    }

    .content-tabs {
        width: 40%;
    }

    .wid-novedades {
        width: 100%;
        height: 230px;
        position: relative;
        border-radius: 2px;
    }
}

@media (min-width: 320px) and (max-width: 767px) {
    .content-tabs-all {
        display: flex;
        flex-direction: column;
    }

    .content-tabs {
        width: 100%;
        border: 0;
        border-bottom: 1px solid #d3d3d3;
    }

    .tab-content {
        width: 100%;
    }

    .portada-service {
        background-size: cover;
        background-repeat: none;
        height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-position: right;
    }

    .title-service {
        width: 100%;
        top: 20px;
        text-align: center;
        left: 0;
        position: relative;
    }

    .title-service h1 {
        font-size: 30px;
    }

    .title-service h3 {
        font-size: 20px;
        line-height: 20px;
    }

    .content-novedades {
        width: 100%;
        padding: 3% 3%;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 10px;
    }

    .wid-novedades {
        width: 100%;
        height: 170px;
        position: relative;
        border-radius: 2px;
    }

    .text-novedades {
        padding: 10px;
    }

    .text-novedades h3 {
        font-size: 16px;
    }
    .tableros{
        position: relative;
        width: 100%;
        top: 0;
        border: 0;
        border-bottom: 1px solid #f5f5f5;
        
    }
    .content-tabs-all{
        padding: 2%;
    }
    .nav-pills .nav-link.active,
.nav-pills .show>.nav-link {
    color: var(--var-naranja);
    background-color: transparent;
    font-weight: 600;
    font-size: 20px;
}
}
</style>

<body>
    <header class="header">
        <nav class="menu opacidadAnimation_2000">
            <div class="logo">
                <img src="../image/logo-tunek-mas-colores-2.png" alt="">
            </div>
            <div class="anclas">
                <a href="../index.html">Inicio</a>
                <a href="../servicios/">Servicios</a>
                <a href="../RA/">Realidad Aumentada</a>
                <a href="../novedades/">Novedades</a>
                <a href="../contacto/">Contacto</a>
            </div>
            <div class="redes-top">
                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
                <a href=""><i class="fa-brands fa-tiktok"></i></a>
            </div>
            <div class="btn-bar">
                <i class="fa-solid fa-bars"></i>
            </div>
        </nav>
    </header>

    <div class="portada-service opacidadAnimation">
        <div class="title-service">
            <h1>Portafolio</h1>
        </div>
    </div>
    <div class="content-tabs-all d-flex align-items-start">
        <div class="tableros nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Animación 3D paneles</button>
            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Animación personajes</button>
            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Arquitectura modelado</button>

        </div>
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                <div class="content-novedades">
                    <?php
                    include("../controller/conexion.php");
                    $consulta = "SELECT * FROM paneles";
                    $result = mysqli_query($conexion, $consulta); //consultamos
                    while ($row = mysqli_fetch_array($result)) {
                    ?>

                        <button href="#" class="wid-novedades" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['id']; ?>">
                            <img src="../image/novedades/<?php echo $row['imagen']; ?>" alt="">
                            <div class="text-novedades">
                                <h3>
                                    <?php echo $row['nombre']; ?>
                                </h3>
                            </div>
                        </button>
                        <!-- Button trigger modal -->

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"> <?php echo $row['nombre']; ?></h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo $row['link_video']; ?>
                                    </div>

                                </div>
                            </div>
                        </div>

                    <?php
                    }
                    ?>

                </div>
            </div>
            <!--PANELES-->
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                <div class="content-novedades">
                    <?php
                    include("../controller/conexion.php");
                    $consulta = "SELECT * FROM personajes";
                    $result = mysqli_query($conexion, $consulta); //consultamos
                    while ($row = mysqli_fetch_array($result)) {
                    ?>

                        <button href="#" class="wid-novedades" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2<?php echo $row['id']; ?>">
                            <img src="../image/novedades/<?php echo $row['imagen']; ?>" alt="">
                            <div class="text-novedades">
                                <h3>
                                    <?php echo $row['nombre']; ?>
                                </h3>
                            </div>
                        </button>
                        <!-- Button trigger modal -->

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal2<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel2"> <?php echo $row['nombre']; ?></h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo $row['link_video']; ?>
                                    </div>

                                </div>
                            </div>
                        </div>

                    <?php
                    }
                    ?>

                </div>
            </div>
            <!--PERSONAJES-->

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                <div class="content-novedades">
                    <?php
                    include("../controller/conexion.php");
                    $consulta = "SELECT * FROM arquitectura";
                    $result = mysqli_query($conexion, $consulta); //consultamos
                    while ($row = mysqli_fetch_array($result)) {
                    ?>

                        <button href="#" class="wid-novedades" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal3<?php echo $row['id']; ?>">
                            <img src="../image/novedades/<?php echo $row['imagen']; ?>" alt="">
                            <div class="text-novedades">
                                <h3>
                                    <?php echo $row['nombre']; ?>
                                </h3>
                            </div>
                        </button>
                        <!-- Button trigger modal -->

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal3<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel3"> <?php echo $row['nombre']; ?></h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo $row['link_video']; ?>
                                    </div>

                                </div>
                            </div>
                        </div>

                    <?php
                    }
                    ?>

                </div>
            </div>
             <!--ARQUITECTURA-->
        </div>
    </div>
    </div>

    <div class="cabezas opacidadAnimation">
        <div class="btn-cabezas">
            <a href="">Texto aquí</a>
        </div>
    </div>


    <!-- wpp-btn-mobile -->
    <div class="btn-wsp">
        <a target="_blank" href="https://wa.link/a97uen"><img src="../image/whatsapp.png" alt="" srcset=""></a>
    </div>
    <!-- wpp-btn-mobile -->

    <footer>
        <div class="find">
            <div class="logo-foot">
                <img src="../image/logo-tunek-mas-coloresD.png" alt="">
            </div>
            <div class="text-foot">
                <p>Modelados en 3D Con una combinación de talento artístico y habilidades técnicas, damos vida a
                    historias únicas y emocionantes a través de la animación.</p>
                <span>© 2023 Tunekreative All rights reserved.</span>
            </div>
        </div>
        <div class="enlaces-rapidos">
            <h3>Enlaces rápidos</h3>
            <a href="../index.html">Incio</a>
            <a href="../servicios/">Servicios</a>
            <a href="../RA/">Realidad aumentada</a>
            <a href="../novedades/">Novedades</a>
            <a href="../contacto/">Contacto</a>
        </div>
        <div class="enlaces-rapidos">
            <h3>Contacto</h3>
            <div class="contact-foot">
                <span>Correo:</span>
                <a href="mailto:tunekstudio25@gmail.com">tunekstudio25@gmail.com</a>
            </div>
            <div class="contact-foot">
                <span>Teléfono:</span>
                <a href="tel:957343955">+51 957 343 955</a>
            </div>
        </div>
        <div class="redes-foot">
            <h3>Síguenos en:</h3>
            <div class="icon-red-foot">
                <a target="_blank" href="https://www.facebook.com/TunekayaCreaty"><i class="fa-brands fa-facebook-f"></i></a>
                <a target="_blank" href="https://www.instagram.com/__tunek__/"><i class="fa-brands fa-instagram"></i></a>
                <a target="_blank" href="https://www.tiktok.com/@tunek_"><i class="fa-brands fa-tiktok"></i></a>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="../js/swipper.js"></script>
    <script src="../js/nav.js"></script>
    <script src="../js/animateScroll.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>