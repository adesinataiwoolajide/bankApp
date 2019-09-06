<?php

    session_start();
    require_once("../dev/autoload.php");
    $login = new Login;
    $registration = new Registration;
	$general = new General;
	$statement = new Statement;
	try{
		
		if(isset($_POST['register'])){
			$username = $general->sanitizeInput($_POST['username']);
			$account_number = $general->sanitizeInput($_POST['account_number']);
			$full_name = $general->sanitizeInput($_POST['fullname']);
			$password = $general->sanitizeInput(sha1($_POST['password']));

			if($registration->checkIfExistUserName($username)){
				$_SESSION['error'] = "Oooopss!!! The User Name is in use by another customer";
                $general->redirect("../register.php");
            }elseif($statement->checkAccountNumber($account_number)){
				$_SESSION['error'] = "Oooopss!!! The Account Number Does Not Exist";
				$general->redirect("../register.php");
			}elseif($registration->checkCustomerAccountNumber($account_number)){
				$_SESSION['error'] = "You have registered an account with $account_number before";
				$general->redirect("../register.php");
			
			}else{
				if($registration->addCustomer($full_name, $account_number, $username, $password)){
                    $_SESSION['success'] = "You Have Registered Your Account Successfully";
                    $general->redirect(".././");
                }else{
                    $_SESSION['error'] = "Network Failure, Please Try agagin laterA";
                    $general->redirect("../register.php");
                }
			}
		}else{
			$_SESSION['error'] = "Please Fill The Below Form To Register Your Account";
			$general->redirect("../register.php");
		}
	}catch(PDOException $e){
		$_SESSION['error'] = $e->getMessage();
		$general->redirect("../register.php");
	}