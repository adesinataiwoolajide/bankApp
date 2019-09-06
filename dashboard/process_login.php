<?php

    session_start();
    require_once("../dev/autoload.php");
    $login = new Login;
	$registration = new Registration;
	$general = new General;
	try{
		
		if(isset($_POST['login'])){
			$username = $general->sanitizeInput($_POST['username']);
			$password = sha1($_POST['password']);

			if($login->checkLogin($username, $password)){
			
				$_SESSION['error'] = "Oooopss!!! Invalid Username or Password";
				$general->redirect(".././");
			}else{
				$result = $registration->getSingleCustomerList($username);
				$_SESSION['username'] = $result['username'];
				$_SESSION['full_name'] = $result['full_name'];
				$_SESSION['account_number'] = $result['account_number'];
				$_SESSION['id'] = $result['registration_id'];
				$action ="Logged In";
				$login =  $general->userAccessLevel($action, $username);
			}
		}else{
			$_SESSION['error'] = "Please Fill The Below Form To Access The System";
			$general->redirect(".././");
		}
	}catch(PDOException $e){
		$_SESSION['error'] = $e->getMessage();
		$general->redirect(".././");
	}