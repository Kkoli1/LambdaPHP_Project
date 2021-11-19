<?php 

$servername = "localhost";
$username = "malldb";
$password = "1234";
$db = "malldb";

$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
    die ("Connection failed: ".mysqli_connect_error());
}

?>