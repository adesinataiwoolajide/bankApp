<?php

    session_start();
    require_once("dev/autoload.php");
    $login = new Login;
	$registration = new Customer;
	$general = new General;
	try{
		
		if(isset($_POST['update'])){
			$username = $general->sanitizeInput($_POST['username']);
			$account_number = $general->sanitizeInput($_POST['account_number']);
			$full_name = $general->sanitizeInput($_POST['full_name']);
			$password = $general->sanitizeInput(sha1($_POST['password']));
            $repeat = $general->sanitizeInput(sha1($_POST['repeat']));
            $return = $_POST['return'];            
            if($password != $repeat){
                $_SESSION['error'] = "Opps!!! Password Does Not Match";
                $general->redirect($return);
            }

			if(!empty($login->updatePassword($username, $account_number, $full_name, $password))){
                $action ="Update Password";
                $his = $general->getUserDetailsandAddActivity($username, $action);
				$result = $registration->getSingleCustomerList($username, $account_number);
				$_SESSION['username'] = $result['username'];
				$_SESSION['full_name'] = $result['full_name'];
				$_SESSION['account_number'] = $result['account_number'];
				$_SESSION['id'] = $result['registration_id'];
				$_SESSION['customer_id'] = $result['customer_id'];
                //$action ="Logged In";
                //$his = $general->getUserDetailsandAddActivity($username, $action);
				$login =  $general->useForgotLogin($action, $username);
			}else{
                $_SESSION['error'] = "Network Failure, Please Try Again Later";
				$general->redirect($return);
			}
		}else{
			$_SESSION['error'] = "Please Fill The Below Form To Retrive your Account";
			$general->redirect($return);
		}
	}catch(PDOException $e){
		echo $e->getMessage();
		$general->redirect($return);
	}