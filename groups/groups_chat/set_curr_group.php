<?php
    require "../../dbcon.php";
    session_start();

    $curr_groupcode = $_GET['currcode'];

    $_SESSION['curr-groupcode'] = $curr_groupcode;

    $sql = "SELECT group_name from groups where group_code = '$curr_groupcode'";
    $result = $conn->query($sql);
    $groupname1 = mysqli_fetch_all($result);

    $_SESSION['curr-groupname'] = $groupname1[0][0];


    header("Location:index.php");


?>