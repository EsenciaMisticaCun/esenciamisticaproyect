<?php

  $nombre = $_POST['nombre'];
  $asunto = $_POST['asunto'];
  $mensaje = $_POST['mensaje'];
  $contacto = $_POST['contacto'];
  $email = $_POST['email'];
  $horario = $_POST['horario'];
  
  
   $from = $email;
   $to = 'esenciamisticacun@gmail.com';
   $message = $mensaje . "\n\nSolicito para la fecha: " . $horario . "\n\nEl servicio de: " . $asunto . "\n\nAtentamente: " . $nombre . "\nContacto: " . $contacto;
   $headers = "From: $email";
  
  mail($to, $asunto, $message, $headers);
  echo "<script>alert('Le llamaremos para agendar su cita, ¡GRACIAS!')</script>";
  echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";
  
  
?>