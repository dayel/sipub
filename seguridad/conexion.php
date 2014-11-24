<?php
//conexion utilizando un usuario que solo realiza consultas
class conexiones {
protected $DireccionBd = "localhost";
protected $NombreBd = "padron_beneficiarios";
protected $conexion;
function conectar($u,$c) {
//dependiendo del usuario ($u) y su clave ($c)
//mysql dara el perfil y permisos sobre la base de datos
      $this->conexion = new mysqli();
      $this->conexion->connect($this->DireccionBd, $u, $c, $this->NombreBd);
/*
 Las 2 lineas de arriba se pueden resumir en:
 $conexion = @new mysqli($server, $username, $password, $database);
*/
if ($this->conexion->connect_error) //verificamos si hubo un error al conectar
{
 header("location: index.php?mensaje=0");
 exit();
}
  //si no existe error regresa la conexion 
     return($this->conexion);
}
}
?>