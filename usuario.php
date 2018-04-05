<?php
session_start();
if ($_SESSION['nombre'] != null){
?>
<html>
<body>
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
