<?php
	//starting session
	session_start();
	require_once("dev/autoload.php");
    $login = new Login;
    $registration = new Customer;
    $general = new General;
	try{
		$general = new General($db);
		//assigning session variable to a variable
		$username = $_SESSION['username'];
		$action = "Logged Out";
		$his = $general->getUserDetailsandAddActivity($username, $action);
		$_SESSION['success'] = $username. " ". "You have logged out successfully";
		
		unset($username);
		//destroying the session
		session_destroy();
		//redirecting to the index page
		$general->redirect("./");	
	}catch(PDOException $e){
		$_SESSION['error'] = "Network Failure". $e->getMessage();
		$general->redirect("./");	
	}	
?>