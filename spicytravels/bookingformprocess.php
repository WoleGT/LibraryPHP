<?php

include_once("user.php");


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phoneNumber = $_POST['phone_number'];
$Password = $_POST['password'];
$date = $_POST['date'];
$time = $_POST['time'];
// $reg_id = $reg_POST['id'];

var_dump($date);
var_dump($time);

die();



// var_dump($firstname);
// var_dump($lastname);
// var_dump($email);
// var_dump($phoneNumber);

if(empty($firstname) || empty($lastname) || empty($email) || empty($phoneNumber) || empty($Password) || empty($date) || empty($time))
{
  echo "please complete the fields"; 
}else{
    $user = new User();
    $reg = $user->booking($firstname,$lastname,$email,$phoneNumber,$Password,$date,$time);
    if($reg == true)
    {
        echo "booking successful";
        // header('Location: login.php');
    }else{
        echo "Error trying to book an appointment...try again later";
    }   
}
?> 


