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
			// $full_name = $general->sanitizeInput($_POST['fullname']);
			$password = $general->sanitizeInput(sha1($_POST['password']));
			$repeat = $general->sanitizeInput(sha1($_POST['repeat']));

			if($password != $repeat){
                $_SESSION['error'] = "Opps!!! Password Does Not Match";
				$general->redirect("../register.php");
            }else{
				if($registration->checkIfExistUserName($username)){
					$_SESSION['error'] = "Oooopss!!! The User Name is in use by another customer";
					$general->redirect("../register.php");
				}elseif($statement->checkAccountNumberAndEmail($account_number, $username)){
					$_SESSION['error'] = "No Account was found for the E-Mail and Account Number";
					$general->redirect("../register.php");
				}elseif($registration->checkCustomerAccountNumber($account_number, $username)){
					$_SESSION['error'] = "You have registered an account with $account_number before";
					$general->redirect("../register.php");
				
				}else{
					$data = $statement->getCustomerName($account_number);
					$full_name = ucwords($data['customer_name']);
					$customer_id = $data['customerid'];
					if($registration->addCustomer($full_name, $account_number, $username, $password, $customer_id)){
	
						$action ="Registered Account";
						$his = $general->getUserDetailsandAddActivity($username, $action);
						$_SESSION['success'] = "You Have Registered Your Account Successfully";
						$general->redirect(".././");
					}else{
						$_SESSION['error'] = "Network Failure, Please Try agagin laterA";
						$general->redirect("../register.php");
					}
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