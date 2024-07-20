<?php

include_once("user.php");


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phoneNumber = $_POST['phone_number'];
$Password = $_POST['password'];
$Facebook = $POST['facebook'];



if(empty($firstname) || empty($lastname) || empty($email) || empty($phoneNumber) || empty($Password))
{
  echo "please complete the fields"; 
}else{
    $user = new User();
    $reg = $user->createUser($firstname,$lastname,$email,$phoneNumber,$Password,$facebook);
    if($reg == true)
    {
        echo "Account creation successful";
        header('Location: homepage.php');
    }else{
        echo "Error trying to create an Account...try again later";
    }   
}
?> 


