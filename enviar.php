<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$mensaje = $_POST['mensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$numDestinatarios = $_POST['num_destinatarios'];// Obtén la lista de destinatarios desde el formulario
    if ($numDestinatarios > 0) {
        $destinatarios = '';  
        for ($i = 1; $i <= $numDestinatarios; $i++) {
            $destinatario = $_POST['destinatario' . $i];
                if (!empty($destinatario)) {
                    $destinatarios .= $destinatario . ', ';
            }
        }   
        $destinatarios = rtrim($destinatarios, ', '); // Eliminar la última coma
        $asunto = 'Mensaje de mi sitio web';
        mail($destinatarios, $asunto, utf8_decode($mensaje), $header); // Enviar el mensaje a todos los destinatarios
        header("Location: email.php");
} 
    else {
         echo "Especifique destinatarios";
    }
?>