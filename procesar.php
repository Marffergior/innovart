<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $mensaje = $_POST['mensaje'];

  // Aquí puedes agregar la lógica para enviar el correo electrónico o almacenar los datos en una base de datos

  // Ejemplo de envío de correo electrónico usando la función mail()
  $destinatario = 'marffergior@gmail.com';
  $asunto = 'Nuevo mensaje de contacto';
  $contenido = "Nombre: $nombre\n";
  $contenido .= "Email: $email\n";
  $contenido .= "Mensaje: $mensaje\n";

  mail($destinatario, $asunto, $contenido);

  // Redirigir a una página de éxito o mostrar un mensaje de éxito en la misma página
  header('Location: contacto-exito.html');
  exit();
}
?>
