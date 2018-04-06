<?php
session_start();
if ($_SESSION['nombre'] != null){
?>
<html>
<head>
<link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="caja">
<h1>Bienvenido usuario</h1><p/>
<a href="comprobar.php">Volver</a>
</body>
</html>
<?php
}
else {
header("location:index.php");
};
?>
</div>
