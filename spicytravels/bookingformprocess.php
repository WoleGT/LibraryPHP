<?php

include_once("user.php");

// $interview = in_array($_POST['interview'], array('pass', 'fail')) ? $_POST['interview'] : 'fail';

// $type = intval($_POST['type']);
$date = $_POST['date'];
$time = $_POST['time'];
// $reg_id = $reg_POST['id'];

// var_dump($type);
// var_dump($date);
// var_dump($time);

// die();



if(empty($date) || empty($time))
{
  echo "please complete the fields"; 
}else{
    $user = new User();
    $reg = $user->booking($date,$time);
    if($reg == true)
    {
        echo "booking successful";
        header('Location: paymentgateway.php');
    }else{
        echo "Error trying to book an appointment...try again later";
    }   
}
?> 


