<?php 
session_start();
$email = $_SESSION['email'];
$name = $_SESSION['name'];
$address = $_SESSION['address'];
$city = $_SESSION['city'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <title>Profile Details</title>
    <style>

        /*Navigation Menu*/
nav
{
    width: 100%;
    height: 50px;
    background-color: #F7E7ED;
    border-top: 1px solid rgba(255, 255, 255, .2);
    border-bottom: 1px solid rgba(255, 255, 255, .2);
    position: sticky;
    top: 0;
    font-family:'Poppins', sans-serif;
}
nav ul
{
    display: flex;
    margin: 0;
    padding: 0, 100px;
    float: right;
}
nav ul li
{
    list-style: none;
}
nav ul li a
{
    display:block;
    color: black;
    padding: 0 20px;
    text-decoration: none;
    text-transform: uppercase;
    font-weight: bold;
    line-height: 50px;
}
nav ul li a.active
{
    background: #B9124D;
}

    </style>
</head>
<body>
    <!--Navigation Menu-->
    <nav>      
            <ul> 
                <li><a href="homepage.php">Home</a></li>
                <li><a href="profile.php" class="active">Profile</a></li>  
                <li><a href="order.php">Order Food</a></li>  
                <li><a href="logout.php">Logout</a></li>     
            </ul>
        </nav>
    <div class="card-container">
        <div class="upper-container">
            <div class="image-container">
                <img src="img/profile.jpg" alt="">
            </div>
        </div>
        <div class="lower-container">
            <div>
                <h3>Full name: <?php echo $name ?></h3>
                <h4>Email: <?php echo $email ?></h4>
                
            </div>
            <div>
                <p>Address: <?php echo $address ?></p>
                <p>City: <?php echo $city ?></p>
            </div>
            <div>
                <a href="reset_password.php" class="btn">Change Password</a>
                <a href="logout.php" class="btn">Log Out</a>
            </div>
        </div>

    </div>
</body>
</html>