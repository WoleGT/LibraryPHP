<?php

//include the user class
include_once("user.php");


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phoneNumber = $_POST['phone_number'];

// var_dump($firstname);
// var_dump($lastname);
// var_dump($email);
// var_dump($phoneNumber);

if(empty($firstname) || empty($lastname) || empty($email) || empty($phoneNumber))
{
  echo "please complete the fields"; 
}else{
    $user = new User();
    $reg = $user->register($firstname,$lastname,$email,$phoneNumber);
    if($reg == true)
    {
        echo "registration successful";
    }else{
        echo "Error trying to register...try again later";
    }   
}
?>


