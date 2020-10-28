<?php

    include_once './db.php';	
    include_once './user.php';
   $full_name = $_POST['fullname'];
   $email = $_POST['email'];
   $address = $_POST['address'];
   $city = $_POST['city'];
   $password = $_POST['password'];

   $con = new DBConnector();
   $pdo = $con->connectToDB();

   $user = new User();
   //set the member variable
   $user->setFullName($full_name);
   $user->setEmail($email);
   $user->setAddress($address);
   $user->setCity( $city);
   $user->setPassword($password);

   echo $user->register($pdo);
?>