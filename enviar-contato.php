<?php

$name = $_POST["name"];	
$email = $_POST["email"];
$messagem = $_POST["messagem"];
$emailbody="";

$emailbody=$emailbody . "Nome :" . $name ."\n";
$emailbody=$emailbody . "Email :" . $email ."\n";
$emailbody=$emailbody . "Messagem: " . $messagem ."\n";

header("Location: contato-obrigado.php");
?>