<?php

session_start();

require "../../dbcon.php";

$semail = $_SESSION['email'];

$groupcode = $_POST['groupcode'];
$groupname = $_POST['groupname'];


$sql = "SELECT * from groups where group_code = '$groupcode'";
$result = $conn->query($sql);
$rnum = mysqli_num_rows($result);

if($rnum == 0)
{
    $insert = "INSERT into groups(group_code,group_name) VALUES('$groupcode','$groupname')";
    $result = $conn->query($insert);
}

header("Location:index.php");



?>