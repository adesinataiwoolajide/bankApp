<?php 

    class Login {

        public function checkLogin($username, $password)
        {
            $db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM registration WHERE username=:username AND password=:password");
            $query->bindValue(":username", $username);
            $query->bindValue(":password", $password);
            $query->execute();
            if($query->rowCount() == 0){
                return true;
            }else{
                return false;
            }
        }

        public function customerLogin($username, $password)
        {
            $db= Database::getInstance()->getConnection();
            $query= $db->prepare("SELECT * FROM registration  WHERE username=:username AND password=:password");
            $query->bindValue(":username", $username);
            $query->bindValue(":password", $password);
            $query->execute();
            $details= $query->fetch();
            return $details;
        }

        public function forgotPassword($username, $account_number){
            $db= Database::getInstance()->getConnection();
            $query= $db->prepare("SELECT * FROM registration  WHERE username=:username OR account_number=:account_number");
            $query->bindValue(":username", $username);
            $query->bindValue(":account_number", $account_number);
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
            $query= $db->prepare("SELECT * FROM registration  WHERE username=:username OR account_number=:account_number");
            $query->bindValue(":username", $username);
            $query->bindValue(":account_number", $account_number);
            $query->execute();
            $details= $query->fetch();
            return $details;
        }

        public function updatePassword($username, $account_number, $full_name, $password)
        {
            $db= Database::getInstance()->getConnection();
            $query= $db->prepare("UPDATE registration SET full_name=:full_name, password=:password  WHERE username=:username OR account_number=:account_number");
            $query->bindValue(":username", $username);
            $query->bindValue(":account_number", $account_number);
            $query->bindValue(":full_name", $full_name);
            $query->bindValue(":password", $password);
            if($query->execute()){
                return true;
            }else{
                return false;
            }
           
        }
    }

?>