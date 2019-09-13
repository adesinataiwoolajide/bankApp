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
			$query = $db->prepare("SELECT DISTINCT account FROM statement ORDER BY account ASC");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
        }
        public function getAllAccounts()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT account FROM statement ORDER BY account ASC");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
        }
        public function getAllTransAccount()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT DISTINCT account,email,customer_name, customerid FROM statement ORDER BY account ASC");
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
        
        public function getAllSingleCustomerAccount($customerid)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM statement WHERE customerid=:customerid");
            $query->bindValue(":customerid", $customerid);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
        public function getSingleCustAccount($customerid)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT DISTINCT account FROM statement WHERE customerid=:customerid");
            $query->bindValue(":customerid", $customerid);
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

		public function getAllCountSingleStatement()
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT count(id) as total_statement FROM statement");
			$query->execute();
			$state =$query->fetch();
			return $state['total_statement'];
		}
		public function countAllCountSingleStatement()
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT count(DISTINCT account) as total_statement FROM statement");
			$query->execute();
			$state =$query->fetch();
			return $state['total_statement'];
		}

		public function countTransactions($accounting)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT count(id) as total_acct FROM statement WHERE account=:accounting");
            $query->bindValue(":accounting", $accounting);
			$query->execute();
			$state =$query->fetch();
			return $state['total_acct'];
		}

		public function getCustomerName($account_number)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM statement WHERE account=:account_number ORDER BY customer_name ASC LIMIT 0,1");
            $query->bindValue(":account_number", $account_number);
			$query->execute();
			return $query->fetch();
        }
		
		public function getCountAccount($customerid)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT count(DISTINCT account) as total_account FROM statement WHERE customerid=:customerid");
            $query->bindValue(":customerid", $customerid);
			$query->execute();
			$state =$query->fetch();
			return $state['total_account'];
		}
		public function getAllCountAccount()
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT count(DISTINCT account) as total_account FROM statement");
			$query->execute();
			$state =$query->fetch();
			return $state['total_account'];
		}
		public function getAccountTransctions($customerid)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT count(account) as total_account FROM statement WHERE customerid=:customerid");
            $query->bindValue(":customerid", $customerid);
			$query->execute();
			$state =$query->fetch();
			return $state['total_account'];
		}

		public function getAllAccountTransctions()
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT count(account) as total_account FROM statement");
			$query->execute();
			$state =$query->fetch();
			return $state['total_account'];
		}
		

		public function checkAccountNumberAndEmail($account_number, $username)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM statement WHERE account=:account_number AND email=:username");
			$query->bindValue(":account_number", $account_number);
			$query->bindValue(":username", $username);
			$query->execute();
			if($query->rowCount() == 0){
				return true;
			}else{
				return false;
			}

        }
    }

?>