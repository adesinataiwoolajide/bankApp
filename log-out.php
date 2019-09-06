<?php
	//starting session
	session_start();
	require_once("dev/autoload.php");
    $login = new Login;
    $registration = new Registration;
    $general = new General;
	try{
		$general = new General($db);
		//assigning session variable to a variable
		$email = $_SESSION['user_name'];
		$action = "Logged Out";
		$his = $general->getUserDetailsandAddActivity($email, $action);
		$_SESSION['success'] = $email. " ". "You have logged out successfully";
		
		unset($email);
		//destroying the session
		session_destroy();
		//redirecting to the index page
		$general->redirect("./");	
	}catch(PDOException $e){
		$_SESSION['error'] = "Network Failure". $e->getMessage();
		$general->redirect("./");	
	}	
?>