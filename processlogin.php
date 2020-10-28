<?php

    include_once './db.php';	
    include_once './user.php';
   $email = $_POST['email'];
   $password = $_POST['password'];

   $con = new DBConnector();
   $pdo = $con->connectToDB();
   
   $user = new User($email, $password);
   $user->setEmail($email);
   $user->setPassword($password);

   
   echo $user->login($pdo);

?>