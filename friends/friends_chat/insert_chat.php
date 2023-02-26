<?php
    require "../../dbcon.php";
    session_start();

    $chatmsg = $_POST['msg-data'];
    $sender_email = $_SESSION['email'];
    $receiver_email = $_SESSION['curr-email'];

    $INSERT = "INSERT into chats(sender_email,receiver_email,msg_text) values('$sender_email','$receiver_email','$chatmsg')";
    $RESULT = $conn->query($INSERT);
    header("Location:index.php");



?>