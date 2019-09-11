<?php
	class Administrator{
		private $name;
		private $email;
		private $password;
		private $username;
		public $userId;
		
		public function getName($name)
		{
			return $this->name = $name;
		}
				
		public function getEmail($email)
		{
			return $this->email = $email;
		}

		public function getUsername($username)
		{
			return $this->username = $username;
		}				

		 public function checkIfExistUserName($username)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM administrator WHERE username=:username");
			$query->bindValue(":username", $username);
			$query->execute();
			if($query->rowCount() > 0){
				return true;
			}else{
				return false;
			}
		}
        
        
        public function deleteUserAccount($username)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("DELETE FROM administrator WHERE username=:username");
			$query->bindValue(":username", $username);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
			
        }

        public function getAllUser()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM administrator ORDER BY name ASC");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
        }

        public function addUser($name, $username, $password, $User_id)
        {
            $db = Database::getInstance()->getConnection();
            $query = $db->prepare("INSERT INTO administrator(name,  username, password, User_id)
                 VALUES (:name, : :username, :password, :User_id)");
            $query->bindValue(":name", $name);
             
            $query->bindValue(":username", $username);
            $query->bindValue(":password", $password);
            $query->bindValue(":User_id", $User_id);
            if(!empty($query->execute())){
				return true;
			}else{
                return false;
            }
        }
        public function updateUser($user_id,$name, $username, $password)
        {
            $db = Database::getInstance()->getConnection();
            $query = $db->prepare("UPDATE administrator SET name=:name, username=:username, password=:password 
            WHERE user_id=:user_id)");
            $query->bindValue(":name", $name);
            $query->bindValue(":username", $username);
            $query->bindValue(":password", $password);
            $query->bindValue(":user_id", $user_id);
            if(!empty($query->execute())){
				return true;
			}else{
                return false;
            }
        }

        public function userLogin($username, $password)
        {
            $db= Database::getInstance()->getConnection();
            $query= $db->prepare("SELECT * FROM administrator WHERE username=:username AND password=:password");
            $query->bindValue(":username", $username);
            $query->bindValue(":password", $password);
            $query->execute();
            $details= $query->fetch();
            return $details;
        }

        public function forgotPassword($username, $account_number){
            $db= Database::getInstance()->getConnection();
            $query= $db->prepare("SELECT * FROM administrator  WHERE username=:username");
            $query->bindValue(":username", $username);
            $query->execute();
            if($query->rowCount() == 0){
                return true;
            }else{
                return false;
            }
        }

        public function retrievePassword($username, $account_number)
        {
            $db= Database::getInstance()->getConnection();
            $query= $db->prepare("SELECT * FROM administrator  WHERE username=:username");
            $query->bindValue(":username", $username);
            $query->execute();
            $details= $query->fetch();
            return $details;
        }

        public function updatePassword($username, $account_number, $name, $password)
        {
            $db= Database::getInstance()->getConnection();
            $query= $db->prepare("UPDATE administrator SET name=:name, password=:password  WHERE username=:username");
            $query->bindValue(":username", $username);
            $query->bindValue(":name", $name);
            $query->bindValue(":password", $password);
            if($query->execute()){
                return true;
            }else{
                return false;
            }
           
        }

        public function getSingleUser($username)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM administrator WHERE username=:username");
            $query->bindValue(":username", $username);
			$query->execute();
			return $query->fetch();
        }
        
        public function checkUserLogin($username, $password)
        {
            $db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM administrator WHERE username=:username AND password=:password");
            $query->bindValue(":username", $username);
            $query->bindValue(":password", $password);
            $query->execute();
            if($query->rowCount() == 0){
                return true;
            }else{
                return false;
            }
        }

		
	}
?>