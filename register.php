<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <title>Register</title>
</head>
<body>
    <img class="wave" src="img/wave.png" alt="">
    <div class="container">
        <div class="img">
            <img src="img/personalization.svg" alt="">
        </div>
        <div class="login-container">
            <form action="processregister.php" method="POST">
                <img class="avatar" src="img/avatar.svg" alt="">
                <h5>Welcome</h5>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>     
                    <div>
                        <h5>Full Name</h5>
                        <input type="text" id="fname" name="fullname" class="input" required >
                    </div>
                </div>
                <div class="input-div one">  
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>   
                    <div>
                        <h5>Email</h5>
                        <input type="email" id="email" name="email" class="input" required>
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>     
                    <div>
                        <h5>Address</h5>
                        <input type="text" id="address" name="address" class="input" required>
                    </div>
                </div>
                <div class="input-div one">  
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>   
                    <div>
                        <h5>City</h5>
                        <input type="text" class="input" id="city" name="city"  required>
                        
                    </div>
                </div>
                <div class="input-div five">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>     
                    <div>
                        <h5>Password</h5>
                        <input type="password" id="pass" name="password" class="input" required>
                    </div>
                </div>
                <input type="submit" class="btn" name="registerbutton" value="Register">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
