<?php

session_start();

require "../../dbcon.php";


$femail = $_POST['femail'];
$semail = $_SESSION['email'];

$sql = "SELECT * from users where email = '$femail'";

$result = mysqli_query($conn,$sql);
$rnum = mysqli_num_rows($result);

if($rnum == 1){

    $sql = "SELECT * from requests where (req_email1 = '$semail') and (req_email2 = '$femail')";
    $result = mysqli_query($conn,$sql);
    $rnum = mysqli_num_rows($result);

    if($rnum == 0){
        $sql = "INSERT into requests(req_email1,req_email2) VALUES ('$semail','$femail')";
        $result = mysqli_query($conn,$sql);

        header('Location:index.php');
        echo '<script type ="text/JavaScript">';  
        echo 'alert(" Welcome to JavaTpoint !!!! ")';  
        echo '</script>';  

    }
    else{
        echo "Already sent req";
    }
}
else{
    echo "user not found";
}



?>