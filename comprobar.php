<?php
session_start();
if ($_SESSION["nombre"] == null) {
echo $_SESSION["nombre"];
$db = new mysqli("localhost","root","","usuarios");
$query = "SELECT * FROM usuarios WHERE usuario='".$_POST['usuario']."' AND clave='".$_POST['contraseña']."'";
$sql = $db->query($query);
$n = $sql->num_rows;
if($n > 0){
$_SESSION["nombre"] = "prueba";
header("location:comprobar.php");
} else {
echo "Usuario o contraseña incorrectos";
}
mysql_close($enlace);
}
else {
echo "Has iniciado sesion <p/><a href='desconectar.php'>Cerrar Sesion</a>";
};
?>
