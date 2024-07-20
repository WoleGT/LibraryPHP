<?php

include_once("constant.php");

class User{

    public $dbcon;

	//connecting to Db

	function __construct()
	{
		$this->dbcon = new mysqli(DB_SERVER_NAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME);
		if ($this->dbcon->connect_error) {
			die("Connection Not Successful" . $this->dbcon->connect_error);
		} else {
			// echo "Connection Successful";
		}
	}


    function sayHello()
    {
        echo "hello";
    }

	function register($firstname,$lastname,$email,$phoneNumber)
    {
	$sql = "INSERT into user SET firstname='$firstname',lastname='$lastname', email='$email', phone_number='$phoneNumber'";
	$dbcon = $this->dbcon->query($sql);   
	if($this->dbcon->affected_rows == 1)  
	{
		return true;
	}else{
		return false;
	}

   }
}
   
   
   
//    public function getAllUser ()
//    {
// 	$sql = "SELECT * from user";
//    }
   
//    public function getSingleUser ($userId)
//    {
// 	$sql = "SELECT * from user where id='userId'";
//    }
   
    



   
?>