<?php

$name = $_POST['name'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$formcontent="
    Nombre: $name\n
    E-mail: $email\n
    Asunto: $asunto\n
    Mensaje: $mensaje
";

$recipient = "julivitalee@gmail.com";

$subject = "Consulta vía web Kucevi SRL";

$header = "From: $email \r\n";
$header .= "Content-Type: text/plain; charset=UTF-8";
mail($recipient, $subject, $formcontent, $header) or die("Error!");
header("Location: index.html");

?>