<?php

include_once("constant.php");

 class User{
     
    public $dbcon;

	function __construct()
	{
		$this->dbcon = new mysqli(DB_SERVER_NAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME);
		
        if ($this->dbcon->connect_error){
			     die("Connection Not Successful" . $this->dbcon->connect_error);
		    }else{
			      // echo "Connection Successful";
		}      
	}


    public function createUser($firstname,$lastname,$email,$phoneNumber,$password)
    {
        $hashedPassword=password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT into user SET firstname='$firstname',lastname='$lastname',email='$email',phone_number='$phoneNumber', password='$hashedPassword'";
        $dbcon = $this->dbcon->query($sql);   
        
        if($this->dbcon->affected_rows == 1){
                 return true;
            }else{
                 return false;
        }
    }

    public function updateUser($firstname, $lastname, $phoneNumber,$id)
    {
        $sql = "UPDATE user SET firstname='$firstname', lastname='$lastname', phone_number='$phoneNumber' where id='$id'";
        $dbcon = $this->dbcon->query($sql);  
        
        if($this->dbcon->affected_rows == 1){
                 return true;
            }else{
                 return false;
        }
    }

    public function deleteUser($firstname, $lastname, $phoneNumber)
    {
        $sql = "UPDATE user SET firstname='$firstname', lastname='$lastname', phone_number='$phoneNumber', where id='$id'";
        $dbcon = $this->dbcon->query($sql);
        
        if($this->dbcon->affected_rows == 1){
                 return true;
            }else{
                 return false;
        }
    }

    public function login($email,$password)
    {
       $sql = "SELECT * FROM user where email='$email'";
       $dbcon = $this->dbcon->query($sql);   
        
       if($this->dbcon->affected_rows == 1){
            $row = $dbcon->fetch_assoc();
            $hashedPassword = $row['password'];
            $confirmpassword = password_verify($password,$hashedPassword);
            session_start();
            $_SESSION['firstname']=$row['firstname'];
            $_SESSION['id']=$row['id'];
            $_SESSION['adminstatus']= $row['status'];
            $_SESSION['mywebsecurity']='WoleGT_Dev';
            if ($confirmpassword){
                     return true;
            }else{
                     return false;
            }
        }
    }

    public function getAllUsers(){
        $sql = "SELECT * FROM user";
        $dbcon = $this->dbcon->query($sql); 
        $result = array();
        
        if($this->dbcon->affected_rows >0){
          while($row = $dbcon->fetch_assoc()){
          $_SESSION['firstname']=$row['firstname'];
              $result[] = $row;
          }               
                  return $result;
            }else{
                  return $result;
        }
    }
    
    public function getSingleUser($id){
      $sql = "SELECT * FROM user where id='$id'";
      $dbcon = $this->dbcon->query($sql); 
      
      if($this->dbcon->affected_rows == 1){
        $row = $dbcon->fetch_assoc();
        $_SESSION['id']=$row['id'];
         return $row;
        }else{
         return false;
      }
    }




    


 }
 ?>

 


























