<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Main Page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <script src='main.js'></script>
</head>
<body>
    <link rel='stylesheet' type='text/css' media='screen' href='../main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <style>
        form{
            height : 12vh;
            gap : 2vh;
        }
        .chat-inputbox input{
            width: 36vw;
            height: 10vh;
            background-color: hsl(218, 11%, 30%);
            border-radius : 0.5vw;
            border : none;
            color : #fff;
            outline : none;
            letter-spacing : inherit;

        }

        #send-btn {
            width : 10vw;
        }

        #msg-data {
            padding-left : 1vw;
        }


        input:hover{
            color : #fff;
            letter-spacing : inherit;
        }

        .msg{
            width: 30vw;
            font-size: 0.85vw;
            background-color: hsl(218, 11%, 15%);
            color : #cfcfcf;
            padding: 0.5vw 1.5vw;
            margin: 1.5vw 1.5vw;
            box-shadow: 0px 0px 1vw rgb(59, 59, 59);

        }

        .msg-text{
            font-size: 1.1vw;
            font-weight: 400;
        }
        
        .msg-left{
            border-radius: 1vw 1vw 1vw 0px;
        }

        .msg-right{
            border-radius: 1vw 1vw 0px 1vw;
            margin-left: 18.5vw;
        }


    </style>


    <div class="container">

        <div class="topContent flex">
            
            <div class="leftSidebar">

                <div class="logo">

                </div>

                <div class="sidebarMenu">

                    <a href="index.php">
                        <div class="menu-item  flex">
                            <div class="menu-icon">
                                
                            </div>
                            <div class="menu-title flex">
                                Home
                            </div>
                        </div>
                    </a>

                    <a href="profile.php">
                        <div class="menu-item flex">
                            <div class="menu-icon">
                                
                            </div>
                            <div class="menu-title flex">
                                Profile
                            </div>
                        </div>
                    </a>
                    
                    <a href="favourites.php">
                        <div class="menu-item flex">
                            <div class="menu-icon">
                                
                            </div>
                            <div class="menu-title flex">
                                Favourites
                            </div>
                        </div>
                    </a>

                    <a href="friends/index.php">
                        <div class="menu-item flex">
                            <div class="menu-icon">
                                
                            </div>
                            <div class="menu-title active flex">
                                Friends
                            </div>
                        </div>
                    </a>
                    <a href="groups.html">    
                        <div class="menu-item flex">
                            <div class="menu-icon">
                                
                            </div>
                            <div class="menu-title flex">
                                Groups
                            </div>
                        </div>
                    </a>

                    <a href="credits.html">
                        <div class="menu-item flex">
                            <div class="menu-icon">
                                
                            </div>
                            <div class="menu-title flex">
                                Credits
                            </div>
                        </div>
                    </a>

                </div>

                

            </div>

            <div class="mainContent">


                <div class="chatbox-container flex">
                    <div class="chatbox-left">

                        <div class="chatbox-title flex">
                            <div class= "flex">
                                <div class="chatbox-title-pp">

                                </div>
                                <div class="chatbox-title-name flex">
                                    Sahil Kangane
                                </div> 
                            </div>
                            <div class="chatbox-title-logout flex">
                                Logout
                            </div>
                        </div>

                        <div class="chats-box">

                            <?php

                                require "../../dbcon.php";

                                $semail = $_SESSION['email'];

                                $sql = "SELECT * from groups where group_code IN (SELECT group_code from group_members where gemail = '$semail')";
                                $result = $conn->query($sql);
                                $chat_data = mysqli_fetch_all($result);
                                $rnum = mysqli_num_rows($result);


                                for($i=0;$i < $rnum;$i++){
                                    echo '
                                    <a href="set_curr_group.php?currcode='.$chat_data[$i][0].'">
                                    <div class="chats-title flex">
                                        <div class= "flex">
                                            <div class="chats-title-pp">

                                            </div>
                                            <div class="chats-title-name flex">
                                                '.$chat_data[$i][1].'
                                            </div> 
                                        </div>
                                        <div class="chats-available">
                                            
                                        </div>
                                    </div>
                                    </a>
                                    
                                    ';
                                }
                            
                            ?>
                        </div>



                    </div>
                    <div class="chatbox-right">
                        
                        <div class="chat-area">

                            <?php
                                          
                                $semail = $_SESSION['email'];
                                $susername = $_SESSION['username'];
                                $curr_groupcode = $_SESSION['curr-groupcode'];
                                $curr_groupname = $_SESSION['curr-groupname'];


                                $sql = "SELECT * from group_chats where group_code = '$curr_groupcode'";
                                $result = $conn->query($sql);
                                $rnum = mysqli_num_rows($result);
                                $data_msg  = mysqli_fetch_all($result);


                                for($i = 0;$i < $rnum;$i++)
                                {
                                    if($data_msg[$i][0] != $semail)
                                    {
                                        $curr_email = $data_msg[$i][0];
                                        $sql = "SELECT username from users where email = '$curr_email'";
                                        $result = $conn->query($sql);
                                        $data1 = mysqli_fetch_all($result);
                                        $curr_username = $data1[0][0];

                                        echo '
                                        <div class="msg msg-left">
                                        <div class="msg-header flex">
                                            <div class="sender-name">'.$curr_username.'</div>
                                            <div class="msg-date">'.$data_msg[$i][3].'</div>
                                        </div>
                                        <div class="msg-text">'.$data_msg[$i][2].'</div>
                                        </div>
                                        
                                        ';
                                    }


                                    else
                                    {
                                        echo '
                                        <div class="msg msg-right">
                                        <div class="msg-header flex">
                                            <div class="sender-name">'.$susername.'</div>
                                            <div class="msg-date">'.$data_msg[$i][3].'</div>
                                        </div>
                                        <div class="msg-text">'.$data_msg[$i][2].'</div>
                                        </div>
                                        
                                        ';

                                    }
                                   
                                }

                            ?>

                        </div>
                        
                        <div class="chat-inputbox">
                            <form action="insert_chat.php" method="post" class = "flex">
                                <input type="text" name="msg-data" id="msg-data" autocomplete="off">
                               <input type="submit" value="SEND" id= "send-btn">
                            </form>                
                        
                        </div>




                    </div>

                </div>



                

            </div>

        </div>
        
        <div class="bottomContent flex">
            
            <div class="song_poster" id="song_poster">
                <img src="../../poster/1.png" alt="">
            </div>

            <div class="song_details flex">
                <div class="song_title" id="song_name">Despacito</div>
                <div class="song_subtitle" id="song_artist">Luis Fonsi</div>
            </div>

            <div class="song_controls flex">
                <div class="song_button flex" onclick="song_pause()">
                    <img src="../../icon/play.png">
                </div>
                <div class="song_button flex" onclick="song_repeat()">
                    <img src="../../icon/repeat.png">
                </div>
                <div class="song_button flex" onclick="song_skip()">
                    <img src="../../icon/skip.png">
                </div>
            </div>

            <div class="song_bar">

            </div>

        </div>

    </div>

    <script src='../../main.js'></script>
 
</body>
</html>