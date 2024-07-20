<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

include_once("user.php");
//create an object of the class
$user = new User();
//access all users
$allUsers = $user->login();

session_start();
$name=$_SESSION['firstname'];
?> 
<h1>Good evening <?php echo $name ?></h1>


 <p>kindly select your prefrence below</p>
 <p>note a session duration is 30mins</p>
 
 <form>
    <label>Consultation Type:</label>
     <br>
     <input type="checkbox">Holiday
     <input type="checkbox">Visa
     <input type="checkbox">Migration
     <input type="checkbox">Tour
     <br>
     <br>
    <label>Date:</label>
    <!-- <input name="inDate" type="date" name="date"> -->
    <input name="date" type="date" value="<?php echo date('Y-m-d',strtotime($data['congestart']))?>">
    <br><br>
    <label>Time:</label>
    <!-- <input name="inTime" type="time" name="time"> -->
    <input name='time' type="time" value="<?php echo time('H:m',strtotime($data['time_d']))?>">
    
    <br><br>
    <button type="submit" class="btn btn-danger">Click to Reconfirm Date & Time before submission</button>
    <p id="date-time-Str">d=??? t=???</p>
    <br>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
 <?php
  header('Location: paymentgateway.php'); 
  ?>  



 
