<?php
$nombre = $_POST['usuario'];
$pass = $_POST['contraseña'];
$db = new mysqli("localhost","root","","usuarios");
$query = "insert into usuarios.usuarios (usuario, clave) values ('$nombre',$pass)";
$sql = $db->query($query);
?>
<html>
Usuario añadido
</html>