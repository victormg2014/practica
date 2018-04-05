<?php
$db = new mysqli("localhost","root","","usuarios");
$query = "SELECT * FROM usuarios WHERE usuario='".$_POST['usuario']."' AND clave='".$_POST['contraseña']."'";
$sql = $db->query($query);
$n = $sql->num_rows;
if($n > 0){
echo "Loggeado";
} else {
echo "Incorrect username or password";
}
mysql_close($enlace);
?>
