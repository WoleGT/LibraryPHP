<?php

include_once("newsletter.php");



$email = $_POST['email'];

if(empty($email))
{
  echo  "<script type='text/javascript'>
          window.onclick or function()
          {alert('please supply email');}
          </script>";
}else{
    $newsletter = new Newsletter();
    $result = $newsletter->suscribeNewsletter($email);
    if($result == true)
    {
        echo "suscribed successfully!";
        echo "Back to homepage";

    }else{
        echo "Error trying to suscribe...try again later";
    }   
}
?> 

 
 