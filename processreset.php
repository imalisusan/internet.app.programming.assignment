<?php

    include_once './db.php';	
    include_once './user.php';
    session_start();
    $email = $_SESSION['email'];
    $password = $_POST['password'];
    $newPassword = $_POST['new'];
    $confirmNewPassword = $_POST['confirm']; 

     if($newPassword == $confirmNewPassword)
    {
        $con = new DBConnector();
        $pdo = $con->connectToDB();
        
        $user = new User($email, $password, $newPassword);
        $user->setEmail($email);
        $user->setPassword($password);
        $user->setNewPassword($newPassword);
        echo $user->changePassword($pdo);
    }
    else
    {
        echo "Your passwords don't match";
    }
     
?>






