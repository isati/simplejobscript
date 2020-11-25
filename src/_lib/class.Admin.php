<?php

 class CAdmin
 {
 	private $userId;
 	private $username;
 	private $email;

 	public function __construct(){}

 	public function login($username, $password)
 	{
 		global $db;
		$sql = 'SELECT id,password FROM '.DB_PREFIX.'admin WHERE username="'.$username.'"';
		$result = $db->query($sql);
		$row = $result->fetch_assoc();
		if (!empty($row))
		{
		    if(password_verify($password, $row['password']))
		    {
                $this->userId = $row['id'];
                return true;
            }
		}
		return false;
 	}

 	public function getId()
 	{
 		return $this->userId;
 	}
 }

?>
