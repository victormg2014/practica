<?php
session_start();

if ($_SESSION["nombre"] == null){
?>

<html>
<head>
<link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="caja">
<h1 style="margin: 0; ">Login</h1><p/>
<form action="comprobar.php" method="post">
<table>
<tr><td>Usuario: </td><td><input type="text" name="usuario" required/></td></tr>
<tr><td>Contrase&ntilde;a: </td><td><input type="password" name="contraseña" required/>
</table>
<input type="submit" value="Acceder"/>
</form>
</div>
</body>
</html>
<?php
}
else {
header("location:comprobar.php");
};
