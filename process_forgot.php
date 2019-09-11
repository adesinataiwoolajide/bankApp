<?php

    session_start();
    require_once("dev/autoload.php");
    $login = new Login;
	$registration = new Customer;
	$general = new General;
	try{
		
		if(isset($_POST['retrieve'])){
			$username = $general->sanitizeInput($_POST['username']);
			$account_number = $general->sanitizeInput($_POST['username']);

			if($login->forgotPassword($username, $account_number)){
			
				$_SESSION['error'] = "Oooopss!!! $username does not exist";
				$general->redirect("forgot-password.php");
			}else{
                $action ="Retrieved Account";
                $his = $general->getUserDetailsandAddActivity($username, $action);
				$general->redirect("retrive-password.php?username=$username");
			}
		}else{
			$_SESSION['error'] = "Please Fill The Below Form To Retrive your Account";
			$general->redirect("forgot-password.php");
		}
	}catch(PDOException $e){
		$_SESSION['error'] = $e->getMessage();
		$general->redirect("forgot-password.php");
	}