<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "musicplayer";

$conn = new mysqli($host,$dbUsername,$dbPassword,$dbName);

if(mysqli_connect_error()){

    die("Connection Error");

}
?>