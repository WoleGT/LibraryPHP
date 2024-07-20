<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
session_start();
$name= $_SESSION['firstname']; 


if(isset($_SESSION ['mywebsecurity']) && $_SESSION['mywebsecurity'] == 'WoleGT_Dev'){

}else{
header("Location: login.php");
exit();
}

include_once("user.php");
//create an object of the class
$user = new User();
//access all users
$allUsers = $user->getAllUsers();

?> 
<h1>Good evening <?php echo $name ?></h1>

<table>
    <thead>
        <th>S/N</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th colspan="2">Action</th>
    </thead>
    <tbody>
        <?php
        $number = 1 ;
           foreach($allUsers as $users){  
        ?>
        <tr>
            <td><?php echo $number++ ?></td>
            <td><?php echo $users['firstname']?></td>
            <td><?php echo $users['lastname'] ?></td>
            <td><?php echo $users['email']?></td>
            <td><?php echo $users['phone_number']?></td>
            <td><a href="edituser.php?id=<?php echo $users['id']?>">Edit</a></td>
            <td><a href="deleteuser.php?id=<?php echo $users['id']?>">Delete</a></td>
        </tr>
        <?php
           }
        ?>

        <!-- displaying data in dropdown -->
         <select>
              <?php 
              foreach($allUsers as $users){   
              ?>
             <option value=""><?php echo $users['firstname']. ' ' .$users['lastname']. ' ' .$users['email'] ?><?php ?></option>
              <?php 
               }
              ?>
         </select>
    </tbody>
</table>
