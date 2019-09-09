<?php 
    class Statement {

        public function getAccountNumber($account_number)
		{
			return $this->account_number = $account_number;
        }

        public function setAccountNumberAttribute($value){
            return $this->attributes['account_number'] = ($value);
        }

        public function checkAccountNumber($account_number)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM statement WHERE account=:account_number");
			$query->bindValue(":account_number", $account_number);
			$query->execute();
			if($query->rowCount() < 1){
				return true;
			}else{
				return false;
			}

        }
        
        public function deleteAccount($account_number)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("DELETE FROM statement WHERE account=:account_number");
			$query->bindValue(":account_number", $account_number);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
			
        }

        public function getAllAccount()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM statement ORDER BY full_name ASC");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
        }
        
        public function getSingleAccount($account_number)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM statement WHERE account=:account_number");
            $query->bindValue(":account_number", $account_number);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getSingleAccountList($account_number)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM statement WHERE account=:account_number");
            $query->bindValue(":account_number", $account_number);
			$query->execute();
			return $query->fetch();
		}

		public function getCountSingleStatement($account_number)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT count(id) as total_statement FROM statement WHERE account=:account_number");
            $query->bindValue(":account_number", $account_number);
			$query->execute();
			$state =$query->fetch();
			return $state['total_statement'];
		}
		
		
    }

?>