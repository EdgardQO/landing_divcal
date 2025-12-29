<?php
session_start();

function back_with_error($msg) {
  $_SESSION['flash_error'] = $msg;
  header("Location: ../index.php#contacto");
  exit;
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
  back_with_error("Acceso inválido.");
}

if (empty($_POST["csrf"]) || empty($_SESSION["csrf"]) || !hash_equals($_SESSION["csrf"], $_POST["csrf"])) {
  back_with_error("Token inválido. Recarga la página e intenta otra vez.");
}

$nombre   = trim($_POST["nombre"] ?? "");
$empresa  = trim($_POST["empresa"] ?? "");
$email    = trim($_POST["email"] ?? "");
$telefono = trim($_POST["telefono"] ?? "");
$mensaje  = trim($_POST["mensaje"] ?? "");

if ($nombre === "" || $empresa === "" || $email === "" || $telefono === "" || $mensaje === "") {
  back_with_error("Completa todos los campos.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  back_with_error("Email inválido.");
}

/*
  OPCIÓN A: Guardar en archivo (simple)
*/
$line = date("Y-m-d H:i:s") . " | $nombre | $empresa | $email | $telefono | " . str_replace(["\n","\r"], " ", $mensaje) . PHP_EOL;
file_put_contents(__DIR__ . "/../contactos.txt", $line, FILE_APPEND);

/*
  OPCIÓN B: Enviar correo (si tu servidor lo permite)
  $to = "tuemail@tudominio.com";
  $subject = "Nuevo contacto - Landing";
  $body = "Nombre: $nombre\nEmpresa: $empresa\nEmail: $email\nTel: $telefono\n\nMensaje:\n$mensaje";
  @mail($to, $subject, $body);
*/

header("Location: ../gracias.php");
exit;
