<?php
    require "../../dbcon.php";
    session_start();

    $curr_email = $_GET['curremail'];

    $_SESSION['curr-email'] = $curr_email;

    $sql = "SELECT username from users where email = '$curr_email'";
    $result = $conn->query($sql);
    $username1 = mysqli_fetch_all($result);

    $_SESSION['curr-username'] = $username1[0][0];


    header("Location:index.php");


?>