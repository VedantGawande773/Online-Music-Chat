<?php
session_start();

$semail = $_SESSION['email'];
$susername = $_SESSION['username'];
require "../dbcon.php";



$sql = "SELECT friend_email2 from friends where friend_email1 = '$semail' ";
$result = $conn->query($sql);
$cnt_friends = mysqli_num_rows($result);

$sql = "SELECT group_code from group_members where gemail = '$semail' ";
$result = $conn->query($sql);
$cnt_groups = mysqli_num_rows($result);

// $sql = "SELECT friend_email2 from friends where friend_email1 = '$semail' ";
// $result = $conn->query($sql);
$cnt_songs = 19;
 
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
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <style>
        body{
            overflow : hidden;
        }

        .topbar{
            justify-content:space-between;
            margin-bottom : -2vw;
        }

        .topbar h1{
            font-size  : 2.2vw;
        }

        .pp-name{
            color : aqua;
            margin-right : 2vw;
            font-weight : 300;
            font-size  : 1.5vw;
        }

        .profile-container{
            width: 30vw;
            height: 70vh;
            background-color: hsl(240, 11%, 15%);
            margin-left : 2vw;
            margin-top : 2vw;
            border-radius : 1vw;
            padding : 3vw 0vw;
        }
        .prof-pic{
            width: 20vw;
            height: 20vw;
            background-color: aqua;
            border-radius : 12vw;
            margin : 0 5vw;
            font-size : 8vw;
            font-weight : 600;
            color :hsl(240, 11%, 10%);
        }


        .prof-details{
            width: 30vw;
            display : flex;
            align-items: center;
            justify-content : center;
            flex-direction  : column;
            font-size : 1.8vw;
            font-weight : 500;
            margin-top : 2vw;
            color : #fff;
        }


        .prof-stats-container{
            width: 20vw;
            height: 70vh;
            background-color: hsl(240, 11%, 15%);
            margin-left : 2vw;
            margin-top : 2vw;
            border-radius : 1vw;
        }


        .stats-details{
            width: 20vw;
            display : flex;
            align-items: center;
            justify-content : center;
            font-size : 1.8vw;
            font-weight : 600;
            margin-top : 2vw;
            color : #fff;
        }

        .stats-box{
            width: 20vw;
            height : 55vh;
            display : flex;
            align-items: center;
            justify-content : center;
            flex-direction  : column;
            color : #fff;
            margin-top : 1vw;
        }

        .stats { 
            width: 16vw;
            height : 18vh;
            background: aqua;
            margin-top : 2vh;
            border-radius: 1vw;
            flex-direction : column;
            color : hsl(240, 11%, 10%);
        }

        .stats-count{
            font-size : 2.5vw;
            font-weight : 600;
        }
        .stats-title{
            font-size : 1.5vw;
            font-weight : 500;
        }


        .prof-fav-container{
            width: 28vw;
            height: 70vh;
            background-color: hsl(240, 11%, 15%);
            margin-left : 2vw;
            margin-top : 2vw;
            border-radius : 1vw;
            margin-right : 2vw;
        }


    </style>
    <script src='main.js'></script>
</head>
<body>
    <div class="container">

        <div class="topContent flex">
            
            <div class="leftSidebar">

                <div class="logo">

                </div>

                <div class="sidebarMenu">

                    <a href="">
                        <div class="menu-item  flex">
                            <div class="menu-icon">
                                
                            </div>
                            <div class="menu-title flex">
                                Home
                            </div>
                        </div>
                    </a>

                    <a href="profile/">
                        <div class="menu-item flex">
                            <div class="menu-icon">
                                
                            </div>
                            <div class="menu-title active flex">
                                Profile
                            </div>
                        </div>
                    </a>
                    
                    <a href="favourites/">
                        <div class="menu-item flex">
                            <div class="menu-icon">
                                
                            </div>
                            <div class="menu-title flex">
                                Favourites
                            </div>
                        </div>
                    </a>

                    <a href="friends/">
                        <div class="menu-item flex">
                            <div class="menu-icon">
                                
                            </div>
                            <div class="menu-title flex">
                                Friends
                            </div>
                        </div>
                    </a>
                    <a href="groups/">    
                        <div class="menu-item flex">
                            <div class="menu-icon">
                                
                            </div>
                            <div class="menu-title flex">
                                Groups
                            </div>
                        </div>
                    </a>

                    <a href="credits/">
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
                <div class="flex topbar">
                    <h1>Profile</h1>
                    <h3 class="pp-name"> <?php echo "Hi, ".$_SESSION['username'];?></h3>
                </div>
                
                <div class="prof-container flex">    
                    <div class="profile-container">
                        <div class="prof-pic flex">
                            <?php echo strtoupper($semail[0]);?>
                        </div>
                        <div class="prof-details">
                            <?php echo" 
                            <div>".$susername."</div>
                            <div>".$semail."</div>
                            ";?>

                        </div>
                    </div>


                    <div class="prof-stats-container">
                        <div class="stats-details">
                            STATS
                        </div>

                        <div class="stats-box">
                            <div class="stats flex">

                                <div class="stats-count"><?php echo $cnt_friends;?></div>
                                <div class="stats-title">FRIENDS</div>

                            </div>
                            <div class="stats flex">

                                <div class="stats-count"><?php echo $cnt_groups;?></div>
                                <div class="stats-title">GROUPS</div>

                            </div>
                            <div class="stats flex">

                                <div class="stats-count"><?php echo $cnt_songs;?></div>
                                <div class="stats-title">PLAYLIST</div>

                            </div>
                                                            

                        </div>
                    </div>

                </div>

                




                

            </div>

        </div>
        
        <div class="bottomContent flex">
            
            <div class="song_poster" id="song_poster">
                <img src="../poster/1.png" alt="">
            </div>

            <div class="song_details flex">
                <div class="song_title" id="song_name">Despacito</div>
                <div class="song_subtitle" id="song_artist">Luis Fonsi</div>
            </div>

            <div class="song_controls flex">
                <div class="song_button" onclick="song_pause()">
                    <img src="../icon/play.png" alt="">
                </div>
                <div class="song_button" onclick="song_repeat()">
                    <img src="../icon/repeat.png" alt="">
                </div>
                <div class="song_button" onclick="song_skip()">
                    <img src="../icon/skip.png" alt="">
                </div>
            </div>

            <div class="song_bar">

            </div>

        </div>

    </div>
    <script>

        var data = <?php echo json_encode($data) ?>;


        var curr = 1;
        var song_mp3 = new Audio('songs/1.mp3');
        var song_poster;
        var song_name;
        var song_artist;
        var isPlaying = false;

        function song_play(song_id){
            song_mp3.pause();
            curr = song_id;
            isPlaying = true;
            song_mp3 = new Audio('songs/'+ curr +'.mp3');
            song_mp3.play();
            song_poster = document.querySelector('#song_poster');
            song_poster.innerHTML = '<img src="poster/'+curr+'.png">';
            song_name = document.querySelector('#song_name');
            song_name.innerHTML = data[curr - 1][1];
            song_artist = document.querySelector('#song_artist');
            song_artist.innerHTML = data[curr - 1][2];
        }

        function song_pause(){
            if(isPlaying == false){
                song_mp3.play();
                isPlaying = true;
            }
            else{
                song_mp3.pause();
                isPlaying = false;
            }
        }

        function song_repeat(){
            song_mp3.pause();
            song_mp3.currentTime = 0;
            song_mp3.play();
        }


        function song_skip(){
            song_mp3.pause();
            song_mp3.currentTime += 5;
            song_mp3.play();
        }


    </script>
 
</body>
</html>