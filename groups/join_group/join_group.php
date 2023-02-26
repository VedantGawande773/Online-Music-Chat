<?php

session_start();

require "../../dbcon.php";


$groupcode = $_POST['groupcode'];
$semail = $_SESSION['email'];

$sql = "SELECT * from groups where group_code = '$groupcode'";

$result = mysqli_query($conn,$sql);
$rnum = mysqli_num_rows($result);

if($rnum == 1){

    $sql = "SELECT * from group_members where (gemail = '$semail') and (group_code = '$groupcode')";
    $result = mysqli_query($conn,$sql);
    $rnum = mysqli_num_rows($result);

    if($rnum == 0){
        $sql = "INSERT into group_members(gemail,group_code) VALUES ('$semail','$groupcode')";
        $result = mysqli_query($conn,$sql);

        header('Location:index.php');
       

    }
    else{
        echo "Already Joined Group";
    }
}
else{
    echo "Group Not Found";
}



?>