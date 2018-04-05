<?php
// Start the session

$nombre = $_POST['usuario'];
echo $nombre;
// Set session variables
if ($nombre != null){
session_start();
echo "Sesion iniciada";
};

?>
