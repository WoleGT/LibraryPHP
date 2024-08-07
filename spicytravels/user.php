<?php

include_once("constant.php");

class User{
     
    public $dbcon;

	function __construct()
	{
		$this->dbcon = new mysqli(DB_SERVER_NAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME);
		if ($this->dbcon->connect_error) {
			die("Connection Not Successful" . $this->dbcon->connect_error);
		} else {
			// echo "Connection Successful";
		}      
	}

    public function createUser($firstname,$lastname,$email,$phoneNumber,$password)
    {
        $hashedPassword=password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT into user SET firstname='$firstname',lastname='$lastname',email='$email',phone_number='$phoneNumber',password='$hashedPassword'";
        $dbcon = $this->dbcon->query($sql);   
        if($this->dbcon->affected_rows == 1)  
        {
            return true;
        }else{
            return false;
        }
    }

    public function login($email=null,$password=null)
    {
        $sql = "SELECT * FROM user where email='$email'";
        $dbcon = $this->dbcon->query($sql);   
        if($this->dbcon->affected_rows == 1){
            $row = $dbcon->fetch_assoc(); 
            $hashedPassword = $row['password'];
            $confirmpassword=password_verify($password,$hashedPassword);      
            session_start();
            $_SESSION['mywebsecurity']= "WoleGT.Dev";
            $_SESSION['firstname']=$row['firstname'];
            $_SESSION['id']=$row['id'];
            
            if($confirmpassword){
                return true;
            }else{
                return false;
            }

        }
    }


    public function booking($date,$time)
    {
        $sql = "INSERT into user SET date='$date',time='$time'";
        $dbcon = $this->dbcon->query($sql);   
        if($this->dbcon->affected_rows == 1)  
        {
            return true;
        }else{
            return false;
        }
    }


}  

?>