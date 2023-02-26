<?php

session_start();

require "../../dbcon.php";

$semail = $_SESSION['email'];
$femail = $_GET['accept_email'];


$sql = "INSERT into friends(friend_email1,friend_email2) VALUES('$semail','$femail')";
$result = $conn->query($sql);

$sql = "INSERT into friends(friend_email1,friend_email2) VALUES('$femail','$semail')";
$result = $conn->query($sql);


$sql = "DELETE from requests where (req_email1 = '$femail') and (req_email2 = '$semail')";
$result = $conn->query($sql);


header("Location:index.php");


?>