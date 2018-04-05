<?php
session_start();
if ($_SESSION["nombre"] == null) {
echo $_SESSION["nombre"];
$db = new mysqli("localhost","root","","usuarios");
$query = "SELECT * FROM usuarios WHERE usuario='".$_POST['usuario']."' AND clave='".$_POST['contraseña']."'";
$sql = $db->query($query);
$n = $sql->num_rows;
if($n > 0){
$_SESSION["nombre"] = $_POST['usuario'];
header("location:comprobar.php");
} else {
echo "Usuario o contrase&ntilde;a incorrectos";
}
mysql_close($enlace);
}
else {
echo "Usuario: " . $_SESSION["nombre"];
?>
<p/>Acceder a: <a href="administrador.php"> Administrador </a>
<br/>Acceder a: <a href="usuario.php"> Usuario </a>
<?php
echo "<p/><a href='desconectar.php'>Cerrar Sesion</a>";
};
?>
