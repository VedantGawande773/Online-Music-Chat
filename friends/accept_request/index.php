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
    <link rel='stylesheet' type='text/css' media='screen' href='../main.css'>

    <script src='main.js'></script>
</head>
<body>
    <style>

        .accept_box{
            margin : 2vw 15vw;
            max-height : 34vw;
            overflow-y : auto;
            
        }

        ::-webkit-scrollbar{
            width: 0px;
        }


    </style>

    <div class="container">

        <div class="topContent flex">
            
            <div class="leftSidebar">

                <div class="logo">

                </div>

                <div class="sidebarMenu">

                    <a href="index.html">
                        <div class="menu-item  flex">
                            <div class="menu-icon">
                                
                            </div>
                            <div class="menu-title flex">
                                Home
                            </div>
                        </div>
                    </a>

                    <a href="profile.html">
                        <div class="menu-item flex">
                            <div class="menu-icon">
                                
                            </div>
                            <div class="menu-title flex">
                                Profile
                            </div>
                        </div>
                    </a>
                    
                    <a href="favourites.html">
                        <div class="menu-item flex">
                            <div class="menu-icon">
                                
                            </div>
                            <div class="menu-title flex">
                                Favourites
                            </div>
                        </div>
                    </a>

                    <a href="friends.html">
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
                <div class="navbar flex">
                    <h1>Friends</h1>
                    <div class="after_login">Hi, Sahil Kangane</div>
                </div>

                <div class = "accept_box">
                    
                <?php

                    require "../../dbcon.php";

                    $semail = $_SESSION['email'];

                    $sql = "SELECT * from requests where requests.req_email2 = '$semail'";
                    $result = mysqli_query($conn,$sql);
                    $rnum = mysqli_num_rows($result);
                    $data = mysqli_fetch_all($result);

                    for($i=0;$i<$rnum;$i++){
                        $curr_email =  $data[$i][0];
                        $sql = "SELECT * from users where email = '$curr_email'";
                        $result = mysqli_query($conn,$sql);
                        $data2 = mysqli_fetch_array($result);


                        echo '

                        <style>
                        
                        
                        .accept_bar{
                            width: 50vw;
                            height: 8vw;
                            background-color: #212429;
                            justify-content:space-between;
                            color : #fff;
                            border-radius : 0.5vw;
                            margin : 0.5vw 0vw;
                        }
                        
                        input{
                            border: none;
                        }
                        
                        .accept-btn{
                            width: 8vw;
                            height: 6vw;
                            background-color: #19191F;
                            color : #43F0BC;
                            justify-content: center;
                            margin: 0 1vw;
                            border-radius : 0.5vw;
                        }
                        
                        .reject-btn{
                            width: 8vw;
                            height: 6vw;
                            background-color: #0E0F12;
                            justify-content: center;
                            margin: 0 1vw;
                            border-radius : 0.5vw;
                            color : #FFF;
                        }
                        
                        .accept_details{
                            margin: 0 2vw;
                        }
                        </style>

                        <div class="accept_bar flex">
                            <div class="accept_details">
                                <div class="accept_title" ><h3>'.$data2[2].'</h3></div></a>
                                <div class="accept_email"><h4>'.$data2[1].'</h4></div>
                            </div>
                            <div class="btns flex">
                                <a href="accept_request.php?accept_email='.$data2[1].'"><div class="accept-btn flex">ACCEPT</div></a> 
                                <a href="reject_request.php?reject_email='.$data2[1].'"><div class="reject-btn flex">REJECT</div></a> 
                            </div>
                        </div>
                        ';
                    }
                    ?>
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