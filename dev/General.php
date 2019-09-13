<?php
	class General{
		
		public function sanitizeInput($input){
			$input=trim($input);
			$input=strip_tags($input);
			$input=stripslashes($input);
			$input=htmlentities($input);
			return $input;
		}

		public function operationHistory($action, $username){
			try{
                $db = Database::getInstance()->getConnection();
				$history = $db->prepare("INSERT INTO activity(action, user_details)VALUES(:action, :username)");
				$arrr = array(':action'=>$action, ':username'=>$username);
				$result = $history->execute($arrr);
				if(!empty($result)){
					return true;
				}else{
					return false;
				}
			}catch(PDOException $e){
				$_SESSION['error'] =  $e->getMessage();
				return false;
			}
		}

		public function redirect($url){
		    header('Location: '.$url);
		    exit();
		}

		public function userAccessLevel($action, $username){
			
			$action= $this->operationHistory($action, $username);
			$_SESSION['success'] = $_SESSION['full_name']. " ". "Welcome to Your Statement Pal customer";
			$this->redirect("./");
			
        }
        
		public function useForgotLogin($action, $username){
			
			$action= $this->operationHistory($action, $username);
			$_SESSION['success'] = $_SESSION['full_name']. " ". "Welcome to Your Statement Pal customer";
			$this->redirect("customer/./");
			
        }
        
        public function getUserDetailsandAddActivity($username, $action){
			try{
                $db = Database::getInstance()->getConnection();
				$loging_out = $db->prepare("SELECT * FROM registration WHERE username =:username");
				$arr = array(':username' =>$username);
				$loging_out->execute($arr);
				$feting = $loging_out->fetch();	
				$new =$this->operationHistory($action, $username);
			}catch(PDOException $e){
				echo $e->getMessage();
				return false;
			}
		
		}

		public function getLog($username){
			try{
                $db = Database::getInstance()->getConnection();
				$query = $db->prepare("SELECT * FROM activity WHERE user_details=:username");
				$query->bindValue(":username", $username);
				$query->execute();
				return $query->fetchAll(PDO::FETCH_ASSOC);
			}catch(PDOException $e){
				echo $e->getMessage();
				return false;
			}
		
		}
		public function getCustomerLog($username){
			try{
                $db = Database::getInstance()->getConnection();
				$query = $db->prepare("SELECT * FROM activity WHERE user_details  !=:username");
				$query->bindValue(":username", $username);
				$query->execute();
				return $query->fetchAll(PDO::FETCH_ASSOC);
			}catch(PDOException $e){
				echo $e->getMessage();
				return false;
			}
		
		}

		public function getCountLog($username)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT count(act_id) as total_log FROM activity WHERE user_details=:username");
            $query->bindValue(":username", $username);
			$query->execute();
			$log =$query->fetch();
			return $log['total_log'];
		}

		public function getUserCountLog($username)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT count(act_id) as total_log FROM activity WHERE user_details=:username");
            $query->bindValue(":username", $username);
			$query->execute();
			$log =$query->fetch();
			return $log['total_log'];
		}
	}
?>