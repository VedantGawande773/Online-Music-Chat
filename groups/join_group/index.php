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
                    <h1>Groups</h1>
                    <div class="after_login">Hi, Sahil Kangane</div>
                </div>

                <div class="container2 flex">
                    <div class="box">
                        <div class="box-header flex">
                            <h2>JOIN GROUPS</h2>
                        </div>
                        <form action="join_group.php" method = "POST">
                            <div class="box-content">
            
                                <div class="form-field">
                                    <div class="form-title">
                                        <p>GROUP CODE</p>
                                    </div>
                                    <div class="form-input">
                                        <input type="text" name="groupcode" id="groupcode" placeholder="Enter Group Code" autocomplete="off">
                                    </div>
                                </div>
            
                                <div class="flex">
                                    <input type="submit" value="Send" class="form-submit" name="send">
                                </div>
            
                            </div>
                        </form>
                        <div class="box-footer">
            
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