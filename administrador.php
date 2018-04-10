<?php
session_start();
if ($_SESSION['nombre'] == 'admin'){
?>
<html>
<head>
<link rel="stylesheet" href="estilos.css">
</head>
	<body>
		<div class="caja">
		<h1>Pagina administracion</h1><p/>
			<form action="añadir.php" method="post">
			<h2>Añadir usuarios</h2>
				<table>
					<tr><td>Usuario: </td><td><input type="text" name="usuario" required/></td></tr>
					<tr><td>Contraseña: </td><td><input type="password" name="contraseña" required/>
				</table>
				<input type="submit" value="Aceptar"/>
			</form>
		<a href="comprobar.php">Volver</a>
		</div>
	</body>
</html>
<?php
} elseif ($_SESSION['nombre'] == null){
header("location:index.php");
}
else {
header("location:comprobar.php");
};
?>
