<?php

include_once("user.php");



$email = $_POST['email'];
$password = $_POST['password'];
$hashedPassword=password_hash($password, PASSWORD_DEFAULT);



if( empty($email) || empty($password))
{
  echo "please complete fields"; 
}else{
    $user = new User();
    $result = $user->login($email,$password);
    if($result == true)
    {
        echo "Log in successful";
        header('Location: dashboard.php');
    }else{
        echo "Error trying to Log in...try again later";
    }   
}
?> 

 
