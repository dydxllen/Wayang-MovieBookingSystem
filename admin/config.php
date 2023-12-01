<?php

$host = "sql310.byethost12.com";
$username = "b12_33360586";
$db = "b12_33360586_cinema";
$pass = "friedchicken2254";

$conn = new mysqli($host,$username, $pass, $db) OR DIE("DIE" .mysqli_error());

if(mysqli_connect_errno()){
	echo "It is not connectiong". mysqli_connect_error();
}
global $conn;
?>