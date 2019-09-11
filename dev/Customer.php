<?php 
    class Customer{

        private $registration_id;
        private $full_name ; 
        private $account_number; 
        private $username; 
        private $password; 

        public function getRegistrationId($registration_id)
		{
			return $this->registration_id = $registration_id;
        }

        public function getFullName($full_name)
		{
			return $this->full_name = $full_name;
        }

        public function setFullNameAttribute($value){
            return $this->attributes['full_name'] = ucwords($value);
        }

        public function getAccountNumber($account_number)
		{
			return $this->account_number = $account_number;
        }

        public function setAccountNumberAttribute($value){
            return $this->attributes['account_number'] = ($value);
        }

        public function getUsername($username)
		{
			return $this->username = $username;
        }

        public function setUserNameAttribute($value){
            return $this->attributes['username'] = ($value);
        }

        public function checkIfExistUserName($username)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM registration WHERE username=:username");
			$query->bindValue(":username", $username);
			$query->execute();
			if($query->rowCount() > 0){
				return true;
			}else{
				return false;
			}
		}
        public function checkCustomerAccountNumber($account_number, $username)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM registration WHERE account_number=:account_number AND username=:username");
			$query->bindValue(":account_number", $account_number);
			$query->bindValue(":username", $username);
			$query->execute();
			if($query->rowCount() > 0){
				return true;
			}else{
				return false;
			}
        }
        
        public function deleteCustomerAccount($account_number)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("DELETE FROM registration WHERE account_number=:account_number");
			$query->bindValue(":account_number", $account_number);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
			
        }

        public function getAllCustromer()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM registration ORDER BY full_name ASC");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
        }
        
        public function getSingleCustomer($username)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM registration WHERE username=:username");
            $query->bindValue(":username", $username);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getSingleCustomerList($username, $account_number)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM registration WHERE username=:username OR account_number=:account_number");
            $query->bindValue(":account_number", $account_number);
            $query->bindValue(":username", $username);
			$query->execute();
			return $query->fetch();
        }
		public function getSingleDetails($username)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM registration WHERE username=:username");
            $query->bindValue(":username", $username);
			$query->execute();
			return $query->fetch();
        }
        

        public function addCustomer($full_name, $account_number, $username, $password, $customer_id)
        {
            $db = Database::getInstance()->getConnection();
            $query = $db->prepare("INSERT INTO registration(full_name, account_number, username, password, customer_id)
                 VALUES (:full_name, :account_number, :username, :password, :customer_id)");
            $query->bindValue(":full_name", $full_name);
            $query->bindValue(":account_number", $account_number);   
            $query->bindValue(":username", $username);
            $query->bindValue(":password", $password);
            $query->bindValue(":customer_id", $customer_id);
            if(!empty($query->execute())){
				return true;
			}else{
                return false;
            }
        }
        public function updateCustomer($registration_id,$full_name, $account_number, $username, $password)
        {
            $db = Database::getInstance()->getConnection();
            $query = $db->prepare("UPDATE registration SET full_name=:full_name, account_number=:account_number, username=:username, password=:password 
            WHERE registration_id=:registration_id)");
            $query->bindValue(":full_name", $full_name);
            $query->bindValue(":account_number", $account_number);   
            $query->bindValue(":username", $username);
            $query->bindValue(":password", $password);
            $query->bindValue(":registration_id", $registration_id);
            if(!empty($query->execute())){
				return true;
			}else{
                return false;
            }
        }

    }


?>