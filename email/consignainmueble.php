<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_POST) {
    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $mensaje = $_POST['mensaje'];
    $ciudad = $_POST['ciudad'];
    $transaccion = $_POST['transaccion'];
    $inmueble = $_POST['tipo_inm'];
    $valor = $_POST['valor'];
    $area = $_POST['area'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
}

$mail = new PHPMailer(true);

try{
    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->CharSet = 'UTF-8';
    $mail->Username = 'masivoinmobiliarias@gmail.com';
    $mail->Password = 'dexcon2019@';

    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    // Mensaje para enviar
    
    $mail->isHTML(true);
    $mail->setFrom('GomezyAsociados@GomezyAsociados.com', 'GomezyAsociados@GomezyAsociados.com');

    /* $mail->addAddress('wdsp9898@gmail.com');
    $mail->addAddress('ceo@dexcondigital.com');
    $mail->addAddress('gestion@dexcondigital.com'); */

    $mail->Subject='Mensaje desde la pagina web de Inmobiliaria Gomes y Asociados sección Servicios';
    $mail->Body = '<span>Hola, '.$nombre.' quiere recibir información sobre como conisgnar un inmueble.</span>
                    <h4>Sus datos de contacto son:</h4>
                    <ul>
                        <li>Correo: '.$email.'</li>
                        <li>Telefono: '.$telefono.'</li>
                        <li>Ciudad: '.$ciudad.'</li>
                        <li>Dirección: '.$direccion.'</li>
                        <li>Quiere consignar su inmueble en: '.$transaccion.'</li>
                        <li>Tipo de inmueble: '.$inmueble.'</li>
                        <li>Valor: '.$valor.'</li>
                        <li>Area: '.$area.'</li>
                        <li>Mensaje: '.$mensaje.'</li>
                    </ul>
    ';
    $mail->send();
    echo "<script language='javascript'>
    alert('Mensaje enviado, muchas gracias.');
        window.location.href='.././servicios.php'
         </script>";
  

}catch(Exception $e){
    echo 'algo salio mal' , $e->getMessage();
}
?>