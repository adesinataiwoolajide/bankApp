<?php
	class General{
		
		public function sanitizeInput($input){
			$input=trim($input);
			$input=strip_tags($input);
			$input=stripslashes($input);
			$input=htmlentities($input);
			return $input;
		}

		public function operationHistory($action, $email){
			try{
                $db = Database::getInstance()->getConnection();
				$history = $db->prepare("INSERT INTO activity(action, user_details)VALUES(:action, :email)");
				$arrr = array(':action'=>$action, ':email'=>$email);
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

		public function userAccessLevel($action, $email){
			
			$action= $this->operationHistory($action, $email);
			$_SESSION['success'] = $_SESSION['full_name']. " ". "Welcome to Your Dashboard";
			$this->redirect("./");
			
        }
        
        public function getUserDetailsandAddActivity($email, $action){
			try{
                $db = Database::getInstance()->getConnection();
				$loging_out = $db->prepare("SELECT * FROM admin_login WHERE user_name =:email");
				$arr = array(':email' =>$email);
				$loging_out->execute($arr);
				$feting = $loging_out->fetch();	
				$new =$this->operationHistory($action, $email);
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
	}
?>