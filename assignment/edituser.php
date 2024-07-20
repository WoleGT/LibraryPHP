<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $id= $_GET["id"];
    include_once('user.php');
    $user= new User ; 
    $singleUser= $user->getSingleUser($id);

    
            
    ?>
 <form action="updateuser.php" method="post">
        <p>
            <label>firstname</label>
            <input type="text" name="firstname" class="form-control" value="<?php echo $singleUser['firstname'] ?>">
        </p>
        <p>
            <label>lastname</label>
            <input type="text" name="lastname" class="form-control"  value="<?php echo $singleUser['lastname'] ?>">
        </p>
        <p>
            <label>email</label>
            <input type="text" name="email" class="form-control"  value="<?php echo $singleUser['email'] ?>" readonly>
        </p>
        <p>
            <label>Phone Number</label>
            <input type="text" name="phone_number" class="form-control" value="<?php echo $singleUser['phone_number'] ?>" >
        </p>
            <input type="hidden" name="user_id" value="<?php echo $singleUser['id'] ?>">    
        <button type="submit">Submit</button>
    </form>












</body>
</html>