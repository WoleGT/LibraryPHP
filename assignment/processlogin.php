<?php

include_once("user.php");

$email = $_POST['email'];
$password = $_POST['password'];


if( empty($email) || empty($password))
{
  echo "please complete the fields"; 
}else{
    $user = new User();
    $result = $user->login($email,$password);
    if($result == true)
    {
        echo "registration successful";
        header('Location: dashboard.php');
    }else{
        echo "Error trying to login...try again later";
    }   
}
?>


