<?php

    session_start();
    require_once("../dev/autoload.php");
	$administrator = new Administrator;
	$general = new General;
	try{
		
		if(isset($_POST['login'])){
			$username = $general->sanitizeInput($_POST['username']);
			$password = sha1($_POST['password']);

			if($administrator->checkUserLogin($username, $password)){
				$_SESSION['error'] = "Oooopss!!! No Account was found for $username";
				$general->redirect("../admin_login.php");
			}else{
				$result = $administrator->getSingleUser($username);
				$_SESSION['username'] = $result['username'];
				$_SESSION['full_name'] = ucwords($result['name']);
				$_SESSION['status'] = $result['status'];
				$_SESSION['id'] = $result['user_id'];
				$action ="Logged In";
				$his = $general->getUserDetailsandAddActivity($username, $action);
				$login =  $general->userAccessLevel($action, $username);
			}
		}else{
			$_SESSION['error'] = "Please Fill The Below Form To Access Your Statement Pal Dashboard";
			$general->redirect("../admin_login.php");
		}
	}catch(PDOException $e){
		$_SESSION['error'] = $e->getMessage();
		$general->redirect("../admin_login.php");
	}