<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body{
        color:white;
        margin:0%;
        padding: 5%;
    }
</style>
<body class="bg-primary">
    
<?php
session_start();
if(isset($SESSION['mywebsecurity']) && $_SESSION['mywebsecurity'] == 'WoleGT.Dev'){

}else{
    header('Location:homepage.php');
    exit();
}
include_once("user.php");
//create an object of the class
$user = new User();
//access all users
$allUsers = $user->login();


$name=$_SESSION['firstname'];
?> 
<h1>Good evening <?php echo $name ?></h1>


 <p>kindly select your prefrence below</p>
 <p>note a session duration is 20mins</p>
 
 <?php
 include_once('bookingform.php')
 ?>




<br><br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</head>
 


 
