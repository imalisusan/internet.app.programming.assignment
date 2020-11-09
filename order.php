<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/order.css">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <title>Order Food</title>
</head>
<body>
 <!--Navigation Menu-->
        <nav>      
            <ul> 
                <li><a href="homepage.php">Home</a></li>
                <li><a href="profile.php">Profile</a></li>  
                <li><a href="order.php" class="active">Order Food</a></li>  
                <li><a href="orderstatus.php" class="active">Orders</a></li>  
                <li><a href="logout.php">Logout</a></li>     
            </ul>
        </nav>
    <img class="wave" src="img/wave.png" alt="">
    <div class="container">
        <div class="img">
            <img src="img/food.svg" alt="">
        </div>
        <div class="login-container">
            <form action="processlogin.php" method="POST">
              
                    <div>
                        <h5>Food Item</h5>
                        <select name="item" id="" class="form-control">
                            <option value="Chips">Chips</option>
                            <option value="Chicken">Chicken</option>
                            <option value="Burger">Burger</option>
                            <option value="Pizza"> Pizza</option>
                        </select>
                    </div>
                
                        <h5>Quantity</h5>
                        <input class="form-control" type="number" name="quantity">
        
                <input type="submit" class="btn" value="Order">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>