<?php

session_start();
require "../dbcon.php";


$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '".$email."'";

$result = $conn->query($sql);

if($result){
    
    $row_cnt = mysqli_num_rows($result);

    if($row_cnt > 0)
    {
        while($row = $result->fetch_assoc())
        {
            if($password == $row['password']){

                $_SESSION["email"] = $row['email'];
                $_SESSION["username"] = $row['username'];
                $_SESSION["password"] = $row['password'];

                header("Location:../index.php");

            }
    
            else{
                echo"Wrong Password Try Again";
            }       
        }
    }

    else {
        echo "Email not Registered";
    }
    
}
else{
    die("Error while Login");
}


?>