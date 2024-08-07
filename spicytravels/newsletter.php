<?php

include_once("constant.php");

class Newsletter{
     
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

    public function suscribeNewsletter($email)
    {
        $sql = "INSERT into newsletter SET email='$email'";
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