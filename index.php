<?php
session_start();

if ($_SESSION["nombre"] == null){
?>

<html>
<head>
</head>
<body>
<h1>Login</h1><p/>
<form action="comprobar.php" method="post">
<table>
<tr><td>Usuario: </td><td><input type="text" name="usuario" required/></td></tr>
<tr><td>Contrase&ntilde;a: </td><td><input type="password" name="contraseña" required/>
</table>
<input type="submit"/>
</form>
</body>
</html>
<?php
}
else {
header("location:comprobar.php");
};
