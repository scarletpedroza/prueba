<?php

if (isset($_POST['asunto']) && !empty($_POST['asunto']) && 
	isset($_POST['mensaje']) && !empty($_POST['mensaje'])) {
	
	$destino = "scarnir@hotmail.com";
	$desde = "From: ". "Curso PHP";
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];
	mail($destino, $asunto, $mensaje, $desde);

	echo "Correo enviado";

} else {
	echo "Problemas al enviar el correo";
}


?>