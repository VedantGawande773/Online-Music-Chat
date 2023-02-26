<?php
    require "../../dbcon.php";
    session_start();

    $chatmsg = $_POST['msg-data'];
    $sender_email = $_SESSION['email'];
    $group_code = $_SESSION['curr-groupcode'];


    $INSERT = "INSERT into group_chats(sender_email,group_code,msg_text) values('$sender_email','$group_code','$chatmsg')";
    $RESULT = $conn->query($INSERT);
    header("Location:index.php");



?>