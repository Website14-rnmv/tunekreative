<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../image/icon-tunek.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="../js/scrollreveal.js"></script>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/novedades.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/wsp.css">
    <title>Realidad aumentada - Tunekreative</title>
</head>

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
            <h1>Novedades</h1>
        </div>
    </div>
    <div class="content-novedades">
        <?php
        include("../controller/conexion.php");
        $consulta = "SELECT * FROM novedades";
        $result = mysqli_query($conexion, $consulta); //consultamos
        while ($row = mysqli_fetch_array($result)) {
        ?>

            <a href="#" class="wid-novedades">
                <img src="../image/novedades/<?php echo $row['imagen']; ?>" alt="">
                <div class="text-novedades">
                    <h3><?php echo $row['nombre']; ?></h3>
                </div>
            </a>

        <?php
        }
        ?>

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
                <a href="">usuario@gmail.com</a>
            </div>
            <div class="contact-foot">
                <span>Teléfono:</span>
                <a href="">+51 597 899 566</a>
            </div>
        </div>
        <div class="redes-foot">
            <h3>Síguenos en:</h3>
            <div class="icon-red-foot">
                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
                <a href=""><i class="fa-brands fa-tiktok"></i></a>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="../js/swipper.js"></script>
    <script src="../js/nav.js"></script>
    <script src="../js/animateScroll.js"></script>
    <script>
        function encender_1() {
            var image_change = document.getElementById('change_img');

            if (image_change.className = 'swiper-slide-thumb-active') {
                image_change.src = "../image/maquetado/f319390328-removebg-preview.png";
            } else {
                alert("error");
            }
        }

        function encender_2() {
            var image_change = document.getElementById('change_img');

            if (image_change.className = 'swiper-slide-thumb-active') {
                image_change.src = "../image/maquetado/personaje.png";
            } else {
                alert("error");
            }
        }

        function encender_3() {
            var image_change = document.getElementById('change_img');

            if (image_change.className = 'swiper-slide-thumb-active') {
                image_change.src = "../image/maquetado/f320880328-removebg-preview.png";
            } else {
                alert("error");
            }
        }
    </script>
</body>

</html>