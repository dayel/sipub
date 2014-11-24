<?php
$ConsultaDatosUsuario = "SELECT id_usuario FROM usuarios WHERE usuario = '$usr' AND clave = '$clave'";
$ResultadoUsuarios = $conectarse->query($ConsultaDatosUsuario);
$Resultados = $ResultadoUsuarios->fetch_array();
$_SESSION['id_usuario'] = $Resultados[0];
?>