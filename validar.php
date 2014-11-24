<?php
//primeramente se valida que la nformación venga del formulario que debe ser
//y no de un formulario externo o ajeno al sitio
ini_set("display_errors",'1');
session_start();
$url_falsa = md5(rand());
if($_SESSION['iniciar'] != md5("omnes generationes"))
{
  session_destroy();
  header("location: $url_falsa");
  exit();
}
//validamos los datos llegados del formulario
//para evitar un sql-injection
$padron = array('%',' ','.','!','@',':',';','$','#');
$usr = $_POST['usuario'];
for($x=0;$x<strlen($usr);$x=$x+1){
$char = substr($x,1);
for($z=0;$z<count($padron);$z =$z+1){
   if($char == $padron[$z]){
  session_destroy();
  header("location: $url_falsa");
  exit();
   } 
}
}
unset($_SESSION['iniciar']);
unset($padron);
unset($url_falsa);
//se liberan variables que ya no se van a usar en este punto
//se revisa que el usuario este registrado en el sistema
//cargamos la conexion a la base de datos en modo consulta
require_once 'seguridad/conexion.php';
$usr_bd = 'root';
$cve_bd = 'tr15t4n14';
$con = new conexiones;
$conectarse = $con->conectar($usr_bd,$cve_bd) ;
//hacemos llamada al arcivo login.php que es el que nos indica si esta o no logueado el usuario
require_once 'seguridad/login.php';
?>