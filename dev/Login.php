<?php 

    class Login {

        public function checkLogin($username, $password)
        {
            $db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM registration WHERE username=:username AND password=:password");
            $query->bindValue(":username", $username);
            $query->bindValue(":password", $password);
            $query->execute();
            if($query->rowCount() < 0){
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
    }

?>