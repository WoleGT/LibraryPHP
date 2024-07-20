<?php

include_once("user.php");


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phoneNumber = $_POST['phone_number'];
$password = $_POST['password'];
// $reg_id = $reg_POST['id'];


// var_dump($firstname);
// var_dump($lastname);
// var_dump($email);
// var_dump($phoneNumber);

if(empty($firstname) || empty($lastname) || empty($email) || empty($phoneNumber) || empty($password))
{
  echo "please complete the fields"; 
}else{
    $user = new User();
    $reg = $user->createUser($firstname,$lastname,$email,$phoneNumber,$password);
    if($reg == true)
    {
        echo "registration successful";
        header('Location: login.php');
    }else{
        echo "Error trying to register...try again later";
    }   
}
?> 


