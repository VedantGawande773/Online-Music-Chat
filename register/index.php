<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <style>
        a{
            text-decoration: none;
        }
        

        .box-footer {
            color: #43F0BC;
            width: 30vw;
            height: 15vh;
            display : flex;
            align-items: center;
            justify-content : center;
        }
        .box-footer h4{
            color: #43F0BC;
            font-weight : 500;
        }

    </style>
    <script src='main.js'></script>
</head>
<body>
    <div class="container flex">
        <div class="box">
            <div class="box-header flex">
                <h2>REGISTER</h2>
            </div>
            <form action="register.php" method = "POST">
                <div class="box-content">

                    <div class="form-field">
                        <div class="form-title">
                            <p>Username</p>
                        </div>
                        <div class="form-input">
                            <input type="text" name="username" id="username" placeholder="Enter Username" autocomplete="off">
                        </div>
                    </div>
                    
                    <div class="form-field">
                        <div class="form-title">
                            <p>Email</p>
                        </div>
                        <div class="form-input">
                            <input type="text" name="email" id="email" placeholder="Enter Email" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-field">
                        <div class="form-title">
                            <p>Password</p>
                        </div>
                        <div class="form-input">
                            <input type="password" name="password" id="password" placeholder="Enter Password" autocomplete="off">
                        </div>
                    </div>

                    

                    <div class="flex">
                        <input type="submit" value="Signup" class="form-submit" name="signup">
                    </div>

                </div>
            </form>
            <div class="box-footer">
                <a href="../login/index.php"><h4>Already Registered ? Click Here</h4></a>
            </div>
            
        </div>
    </div>
</body>
</html>