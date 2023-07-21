
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$nom = $_POST["txtNombre"];
$ape = $_POST["txtApellido"];
$tel = $_POST["txtTel"];
$correo = $_POST["txtCorreo"];
$desp = $_POST["txtDescripcion"];

include("../controller/conexion.php");

$insertar = "INSERT INTO contacto (nombre, apellidos, telefono, correo, despcripcion) 
VALUES ('$nom','$ape','$tel','$correo','$desp')";
$resultado = mysqli_query($conexion, $insertar);

if ($resultado) {

   $mail = new PHPMailer(true);

   try {


      $mail->IsSMTP();
      $mail->SMTPAuth   = false;
      $mail->Port       = 80;
      $mail->Host       = "mail.tunekreative.com";
      $mail->Username   = "soporte@tunekreative.com";
      $mail->Password   = "0lDPVotNH[Yq";

      $mail->isSendmail();

      $mail->From       = "soporte@tunekreative.com";
      $mail->FromName   = "Tunekreative";
      $mail->AddAddress('ronaldomv14@gmail.com', '');
      $mail->WordWrap   = 80;

      //Content
      $mail->isHTML(true);  //Set email format to HTML
      $mail->Subject = 'Formulario de contacto';
      $mail->Body    = utf8_decode('
           
           <head>
           <meta charset="UTF-8">
           <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
          <link
          href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
          rel="stylesheet"> 
          <title>Document</title>
       </head>
       <style>
       
           *{
               margin: 0;
               padding: 0;
               box-sizing: border-box;
              font-family: "Open Sans", sans-serif;

           }
           
       </style>
       
       <table style="width: 100%; padding:0 25%; background-color: rgb(241, 241, 241);">
       <br>
       <tr style="margin:15px 0; width:100%; text-align:center;">
       <td style="width: 100%; background-color: white; padding: 3%;"><img width="150px" src="https://tunekreative.com/avance2/image/logo-tunek-mas-colores-2.png" alt=""></td>
       </tr>
       <tr>
       <td style="width: 100%; background-color: white; padding: 3%;"><h2 style="text-align: center;">¡Nuevo Lead!</h2></td>
       </tr>
       <tr>
       <td style="width: 100%; background-color: white; padding: 3%; ">
           <p style="text-align: center; font-weight:400;"><b>Nombre: </b> ' . utf8_decode($nom) . '</p>
           <p style="text-align: center; font-weight:400;"><b>Apellido: </b> ' . utf8_decode($ape) . '</p>
           <p style="text-align: center; font-weight:400;"><b>Teléfono: </b> ' . utf8_decode($tel) . '</p>
           <p style="text-align: center; font-weight:400;"><b>Correo: </b> ' . utf8_decode($correo) . '</p>
           <p style="text-align: center; font-weight:400;"><b>Mensaje: </b> ' . utf8_decode($desp) . '</p>
       </td>
       </tr>
       
       <br>
       
       </table>


           ');
      $mail->AltBody = utf8_decode("Tunekreative");

      if ($mail->send()) {
         include("index.php");
         echo "
   
   <script>
       Swal.fire({
         title: '¡Enviado!',
         text: 'Tu solicitud de contacto ha sido enviada.',
         imageUrl: '../image/logo-tunek-mas-colores-2.png',
         imageWidth: 300,
         imageHeight: 60,
         imageAlt: 'Custom image',
         showConfirmButton: false,
         timer: 3000,
         backdrop: `
         rgba(0, 0, 0, 0.762)   
       `
      })
   </script>

   ";
      } else {

         include("index.php");

         echo "
   
   <script>
       Swal.fire({
         title: '¡Ops!',
         text: 'No se pudo enviar el mensaje, intentelo de nuevo.',
         imageUrl: '../image/logo-tunek-mas-colores-2.png',
         imageWidth: 300,
         imageHeight: 60,
         imageAlt: 'Custom image',
         showConfirmButton: false,
         timer: 3000,
         backdrop: `
         rgba(0, 0, 0, 0.762)   
       `
      })
   </script>

   ";
      }
   } catch (Exception $e) {
      include("index.php");

      echo "
   
   <script>
       Swal.fire({
         title: '¡Ops!',
         text: 'No se pudo enviar el mensaje, intentelo de nuevo.',
         imageUrl: '../image/logo-tunek-mas-colores-2.png',
         imageWidth: 300,
         imageHeight: 60,
         imageAlt: 'Custom image',
         showConfirmButton: false,
         timer: 3000,
         backdrop: `
         rgba(0, 0, 0, 0.762)   
       `
      })
   </script>

   ";
   }
} else {
   include("index.php");

   echo "
   
   <script>
       Swal.fire({
         title: '¡Ops!',
         text: 'No se pudo enviar el mensaje, intentelo de nuevo.',
         imageUrl: '../image/logo-tunek-mas-colores-2.png',
         imageWidth: 300,
         imageHeight: 60,
         imageAlt: 'Custom image',
         showConfirmButton: false,
         timer: 3000,
         backdrop: `
         rgba(0, 0, 0, 0.762)   
       `
      })
   </script>

   ";
}

?>