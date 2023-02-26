<?php

    session_start();
    require "dbcon.php";
    $sql = "SELECT * FROM songs";
    $result = mysqli_query($conn,$sql);
    $data = mysqli_fetch_all($result);
    $rnum = mysqli_num_rows($result);


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
                            <div class="menu-title active flex">
                                Home
                            </div>
                        </div>
                    </a>

                    <a href="profile/">
                        <div class="menu-item flex">
                            <div class="menu-icon">
                                
                            </div>
                            <div class="menu-title flex">
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
                    <h1>Play Songs</h1>
                    <h3 class="pp-name"> <?php echo "Hi, ".$_SESSION['username'];?></h3>
                </div>
                

                <div class="song_squarebox flex">
                    
                    <div class="song_square" onclick="song_play(1)">
                        <div class="song_square_poster">
                            <img src="poster/1.png">
                        </div>
                        <div class="song_square_title flex">
                            Despacito
                        </div>
                    </div>

                    <div class="song_square" onclick="song_play(2)">
                        <div class="song_square_poster">
                            <img src="poster/2.png">
                        </div>
                        <div class="song_square_title flex">
                            Shape of You
                        </div>
                    </div>

                    <div class="song_square" onclick="song_play(3)">
                        <div class="song_square_poster">
                            <img src="poster/3.png">
                        </div>
                        <div class="song_square_title flex">
                            See you Again
                        </div>
                    </div>

                    <div class="song_square" onclick="song_play(4)">
                        <div class="song_square_poster">
                            <img src="poster/4.png">
                        </div>
                        <div class="song_square_title flex">
                            UpTown Funk
                        </div>
                    </div>
                    
                    <div class="song_square" onclick="song_play(5)">
                        <div class="song_square_poster">
                            <img src="poster/5.png">
                        </div>
                        <div class="song_square_title flex">
                            Gangnam Style
                        </div>
                    </div>

                    <div class="song_square" onclick="song_play(6)">
                        <div class="song_square_poster">
                            <img src="poster/6.png">
                        </div>
                        <div class="song_square_title flex">
                            Sugar
                        </div>
                    </div>

                </div>

                <div class="song_rectbox flex">

                    <div class="song_rect_col flex">
                        <div class="song_rect flex" onclick="song_play(7)">
                            <div class="song_rect_poster">
                                <img src="poster/7.png">
                            </div>
                            <div class="song_rect_details">
                                <div class="song_rect_title">Roar</div>
                                <div class="song_rect_subtitle">Katy Perry</div>
                            </div>
                        </div>
                        <div class="song_rect flex" onclick="song_play(8)">
                            <div class="song_rect_poster">
                                <img src="poster/8.png">
                            </div>
                            <div class="song_rect_details">
                                <div class="song_rect_title">Sorry</div>
                                <div class="song_rect_subtitle">Justin Bieber</div>
                            </div>
                        </div>
                        <div class="song_rect flex" onclick="song_play(9)">
                            <div class="song_rect_poster">
                                <img src="poster/9.png">
                            </div>
                            <div class="song_rect_details">
                                <div class="song_rect_title">Thinking Out Loud</div>
                                <div class="song_rect_subtitle">Ed Sheeran</div>
                            </div>
                        </div>
                        <div class="song_rect flex" onclick="song_play(10)">
                            <div class="song_rect_poster">
                                <img src="poster/10.png">
                            </div>
                            <div class="song_rect_details">
                                <div class="song_rect_title">Perfect</div>
                                <div class="song_rect_subtitle">Ed Sheeran</div>
                            </div>
                        </div>   
                    </div>

                    <div class="song_rect_col flex">
                        <div class="song_rect flex" onclick="song_play(11)">
                            <div class="song_rect_poster">
                                <img src="poster/11.png">
                            </div>
                            <div class="song_rect_details">
                                <div class="song_rect_title">Faded</div>
                                <div class="song_rect_subtitle">Alan Walker</div>
                            </div>
                        </div>
                        <div class="song_rect flex" onclick="song_play(12)">
                            <div class="song_rect_poster">
                                <img src="poster/12.png">
                            </div>
                            <div class="song_rect_details">
                                <div class="song_rect_title">Girls Like You</div>
                                <div class="song_rect_subtitle">Maroon 5</div>
                            </div>
                        </div>
                        <div class="song_rect flex" onclick="song_play(13)">
                            <div class="song_rect_poster">
                                <img src="poster/13.png">
                            </div>
                            <div class="song_rect_details">
                                <div class="song_rect_title">Lean On</div>
                                <div class="song_rect_subtitle">Major Lazer</div>
                            </div>
                        </div>
                        <div class="song_rect flex" onclick="song_play(14)">
                            <div class="song_rect_poster">
                                <img src="poster/14.png">
                            </div>
                            <div class="song_rect_details">
                                <div class="song_rect_title">Waka Waka</div>
                                <div class="song_rect_subtitle">Shakira</div>
                            </div>
                        </div>   
                    </div>

                    <div class="song_rect_col flex">
                        <div class="song_rect flex" onclick="song_play(15)">
                            <div class="song_rect_poster">
                                <img src="poster/15.png">
                            </div>
                            <div class="song_rect_details">
                                <div class="song_rect_title">Mi Gente</div>
                                <div class="song_rect_subtitle">J Balvin</div>
                            </div>
                        </div>
                        <div class="song_rect flex" onclick="song_play(16)">
                            <div class="song_rect_poster">
                                <img src="poster/16.png">
                            </div>
                            <div class="song_rect_details">
                                <div class="song_rect_title">Havana</div>
                                <div class="song_rect_subtitle">Camila Cabello</div>
                            </div>
                        </div>
                        <div class="song_rect flex" onclick="song_play(17)">
                            <div class="song_rect_poster">
                                <img src="poster/17.png">
                            </div>
                            <div class="song_rect_details">
                                <div class="song_rect_title">Senorita</div>
                                <div class="song_rect_subtitle">Camila Cabello</div>
                            </div>
                        </div>
                        <div class="song_rect flex" onclick="song_play(18)">
                            <div class="song_rect_poster">
                                <img src="poster/18.png">
                            </div>
                            <div class="song_rect_details">
                                <div class="song_rect_title">Memories</div>
                                <div class="song_rect_subtitle">Maroon 5</div>
                            </div>
                        </div>   
                    </div>

                    <div class="song_rect_col flex">
                        <div class="song_rect flex" onclick="song_play(19)">
                            <div class="song_rect_poster">
                                <img src="poster/19.png">
                            </div>
                            <div class="song_rect_details">
                                <div class="song_rect_title">On My Way</div>
                                <div class="song_rect_subtitle">Alan Walker</div>
                            </div>
                        </div>
                        <div class="song_rect flex" onclick="song_play(20)">
                            <div class="song_rect_poster">
                                <img src="poster/20.png">
                            </div>
                            <div class="song_rect_details">
                                <div class="song_rect_title">Echame La Culpa</div>
                                <div class="song_rect_subtitle">Camila Cabello</div>
                            </div>
                        </div>
                        <div class="song_rect flex" onclick="song_play(21)">
                            <div class="song_rect_poster">
                                <img src="poster/21.png">
                            </div>
                            <div class="song_rect_details">
                                <div class="song_rect_title">Night Changes</div>
                                <div class="song_rect_subtitle">One Direction</div>
                            </div>
                        </div>
                        <div class="song_rect flex" onclick="song_play(22)">
                            <div class="song_rect_poster">
                                <img src="poster/22.png">
                            </div>
                            <div class="song_rect_details">
                                <div class="song_rect_title">Steal My Girl</div>
                                <div class="song_rect_subtitle">One Direction</div>
                            </div>
                        </div>   
                    </div>

                    

                    

                </div>
                




                

            </div>

        </div>
        
        <div class="bottomContent flex">
            
            <div class="song_poster" id="song_poster">
                <img src="poster/1.png" alt="">
            </div>

            <div class="song_details flex">
                <div class="song_title" id="song_name">Despacito</div>
                <div class="song_subtitle" id="song_artist">Luis Fonsi</div>
            </div>

            <div class="song_controls flex">
                <div class="song_button" onclick="song_pause()">
                    <img src="icon/play.png" alt="">
                </div>
                <div class="song_button" onclick="song_repeat()">
                    <img src="icon/repeat.png" alt="">
                </div>
                <div class="song_button" onclick="song_skip()">
                    <img src="icon/skip.png" alt="">
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