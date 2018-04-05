<?php
session_start();
if ($_SESSION['nombre'] == 'admin'){
?>
<html>
<body>
<h1>Pagina administracion</h1><p/>
<a href="comprobar.php">Volver</a>
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
