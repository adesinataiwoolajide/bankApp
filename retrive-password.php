<?php include_once("header.php");
    require_once("dev/autoload.php");
    $username = $_GET['username'];
    $account_number = $username;
    
    $login = new Login;
	$registration = new Customer;
    $general = new General;
    $result = $registration->getSingleCustomerList($username, $account_number); 
    
?>

<!-- Root -->
<div class="dt-root">
    <div class="dt-root__inner">

        <!-- Login Container -->
        <div class="dt-login--container">

            <!-- Login Content -->
            <div class="dt-login__content-wrapper">

                <!-- Login Background Section -->
                <div class="dt-login__bg-section">

                    <div class="dt-login__bg-content">
                        <!-- Login Title -->
                        <h1 class="dt-login__title">Retrieve Password</h1>
                        <!-- /login title -->
                        <p class="f-16">Please fill The below form to Update Your Account Details.</p>
                    </div>


                    <!-- Brand logo -->
                    <div class="dt-login__logo">
                        <a class="dt-brand__logo-link" href="./">
                            <p style="color:white">Powered by Packine Systems</p>
                        </a>
                    </div>
                    <!-- /brand logo -->

                </div>
                <!-- /login background section -->

                <!-- Login Content Section -->
                <div class="dt-login__content">

                    <!-- Login Content Inner -->
                    <div class="dt-login__content-inner">

                        <!-- Form -->
                        <form action="update-password.php" method="POST">

                            <!-- Form Group -->
                            <div class="form-group">
                                <label >Full Name</label>
                                <input type="text" class="form-control" id="user-name" aria-describedby="user-name"
                                       placeholder="User Name" readonly name="full_name" value="<?php echo $result['full_name']; ?>">
                            </div>
                            <!-- /form group -->

                           
                            <div class="form-group">
                                <label >Account Number</label>
                                <input type="number" class="form-control" id="user-name" aria-describedby="user-name"
                                       placeholder="Enter Account Number" name="account_number" readonly value="<?php echo $result['account_number']; ?>">
                            </div>
                            <!-- /form group -->

                            <!-- Form Group -->
                            <div class="form-group">
                                <label class="sr-only" for="email-1">User Name</label>
                                <input type="text" class="form-control" id="email-1" aria-describedby="email-1"
                                       placeholder="Enter User Name" name="username" readonly value="<?php echo $result['username']; ?>">
                            </div>
                            <!-- /form group -->

                            <!-- Form Group -->
                            <div class="form-group">
                                <label >Password</label>
                                <input type="password" class="form-control" id="password-1" placeholder="Password" name="password" required>
                            </div>
                            <div class="form-group">
                                <label >Repeat Password</label>
                                <input type="password" class="form-control" id="password-1" placeholder="Password" name="repeat" required>
                            </div>
                            <input type="hidden" name="return" value="<?php echo $_SERVER['REQUEST_URI']; ?>">
                            <!-- Form Group -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary text-uppercase" name="update">Update Password</button>
                                <span class="d-inline-block ml-4">Or
                                <a class="d-inline-block font-weight-500 ml-3" href="register.php">Register</a>
                                </span>
                            </div>
                            <!-- /form group -->

                        </form>
                        <!-- /form -->

                    </div>
                    <!-- /login content inner -->

                    <!-- Login Content Footer -->
                    <div class="dt-login__content-footer">
                        <a href="./">Already have an account?</a>
                    </div>
                    <!-- /login content footer -->

                </div>
                <!-- /login content section -->

            </div>
            <!-- /login content -->

        </div>
        <!-- /login container -->

    </div>
</div>
<!-- /root -->
<?php include_once("footer.php"); ?>