<?php

$servername = "localhost";
$username = "ejmkzbae_gg";
$password = "26494151";
$dbname = "ejmkzbae_gg";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn) {

die(" PROBLEM WITH CONNECTION : " . mysqli_connect_error());

}
  
?>