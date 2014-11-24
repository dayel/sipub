<?php
session_start();
unset($_SESSION);
session_cache_expire();
session_destroy();
session_unset();
header ("Expires: Thu, 27 Mar 1980 23:59:00 GMT");
header ("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
session_start();
$_SESSION['iniciar'] = md5("omnes generationes");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Padrón de Beneficiarios</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css" media="screen">
<link rel="stylesheet" href="css/bootswatch.min.css">
</head>
<body>
<div class="container">
Padron de Beneficiarios
<hr>
<div class="well">
<form role="form" name="login_form" id="login_form" action="validar.php" method="post">
<div class="form-group input-group has-success">
<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
<input type="text" class="form-control" placeholder="Usuario" name="usuario" id="usuario">
</div>
<div class="form-group input-group has-success">
<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
<input type="password" class="form-control" placeholder="Clave de Acceso" name="clave" id="clave">
</div>                                       
<button type="button" class="btn btn-success" onclick="validar();" >
<span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;Ingresar
</button>
</form>
</div>
</div>
<script src="js/validar_login.js"></script>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootswatch.js"></script>
</body>
</html>