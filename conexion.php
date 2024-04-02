<?php
$server = "localhost";
$usuario = "root";
$pw = "";
$bd = "appviajes";
$link = mysqli_connect($server, $usuario, $pw, $bd);
if (!$link){
    echo "ERROR EN LA BASE DE DATOS";
}
?>