<?php 
session_start();
$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <title>Reset Password</title>
</head>
<body>
    <!--Navigation Menu-->
    <nav>      
            <ul> 
                <li><a href="homepage.php">Home</a></li>
                <li><a href="profile.php">Profile</a></li>  
                <li><a href="profile.php" class="active">Reset Password</a></li>  
                <li><a href="logout.php">Logout</a></li>     
            </ul>
        </nav>
    <img class="wave" src="img/wave.png" alt="">
    <div class="container">
        <div class="img">
            <img src="img/personalization.svg" alt="">
        </div>
        <div class="login-container">
            <form action="processreset.php" method="POST">
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>     
                    <div>
                        <h5>Password</h5>
                        <input class="input" type="password" name="password">
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>     
                    <div>
                        <h5>New Password</h5>
                        <input class="input" type="password" name="new">
                    </div>
                </div>  
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>     
                    <div>
                        <h5>Confirm New Password</h5>
                        <input class="input" type="password" name="confirm">
                    </div>
                </div>                                                            
                <input type="submit" class="btn" value="Reset Password">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
