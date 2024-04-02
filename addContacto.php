<?php

include("conexion.php");
$name=$_POST["name"];
$lastName=$_POST["lastName"];
$email=$_POST["email"];
$adress=$_POST["adress"];
$city=$_POST["city"];
$state=$_POST["state"];
$zip=$_POST["zip"];
$query = "INSERT INTO contact (Nname, LastName, Email, Adress, City, Sstate, Zip) VALUES('$name','$lastName','$email','$adress','$city','$state','$zip')";
mysqli_query($link,$query);
header('location:index.html');
echo $query;
?>