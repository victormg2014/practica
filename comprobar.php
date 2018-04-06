<link rel="stylesheet" href="estilos.css">
<?php
session_start();
echo "<div class='caja'>";
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
echo "<a class='grande'>Usuario o contrase&ntilde;a incorrectos</a>";
echo "<p/><a href='index.php'>Volver a intentar</a>";
}
mysql_close($enlace);
}
else {
echo "<table><tr><td>Usuario: </td><td>" . $_SESSION["nombre"] . "</td></tr>";
?>
<tr><td></td><td><a href="administrador.php"> Administrador </a></td></tr>
<tr><td></td><td><a href="usuario.php"> Usuario </a></td></tr>
<?php
echo "<tr><td><a href='desconectar.php'>Cerrar Sesion</a></td><td></td></tr></table>";
};
?>
</div>
