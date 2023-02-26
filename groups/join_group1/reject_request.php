<?php

session_start();

require "../../dbcon.php";

$semail = $_SESSION['email'];
$femail = $_GET['reject_email'];


$sql = "DELETE from requests where (req_email1 = '$femail') and (req_email2 = '$semail')";
$result = $conn->query($sql);


header("Location:index.php");


?>