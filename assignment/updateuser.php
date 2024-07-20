 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>

 <?php
 include_once('user.php');


 $firstname = $_POST["firstname"];
 $lastname = $_POST["lastname"];
 $email = $_POST["email"];
 $phoneNumber = $_POST["phone_number"];
 $userId = $_POST["user_id"];

// to see whats coming in from edituser.php
// var_dump($firstname);

// next: validate data by writing conditional statement below
 
 
  if(empty($firstname) || empty($lastname) || empty($phoneNumber))
 {
   echo "please complete the fields"; 
 }else{
     $user = new User();
     $reg = $user->updateUser($firstname,$lastname,$phoneNumber,$userId);
     if($reg == true)
     {
         echo "update successful";
     }else{
         echo "Error trying to update...try again later";
     }   
 }



 ?>
    

    
 </body>
 </html>