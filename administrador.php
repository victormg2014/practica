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
