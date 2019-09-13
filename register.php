<?php include_once("header.php"); ?>

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
                        <h1 class="dt-login__title">Sign Up</h1>
                        <!-- /login title -->

                        <p class="f-16">Register Your Account with Statement Pal.</p>
                    </div>

                    <!-- Brand logo -->
                    <div class="dt-login__logo">
                        <a class="dt-brand__logo-link" href="./">
                            <!-- <img class="dt-brand__logo-img" src="customer/assets/images/bank.jpg" alt="Bank"> -->
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
                        <form action="customer/registration.php" method="POST">

                            <!-- Form Group -->
                            
                            <div class="form-group">
                                <label>Account Number</label>
                                <input type="number" class="form-control" id="user-name" aria-describedby="user-name"
                                       placeholder="Enter Your Account Number" name="account_number" required>
                            </div>
                            <!-- /form group -->

                            <!-- Form Group -->
                            <div class="form-group">
                                <label>E-Mail</label>
                                <input type="text" class="form-control" id="email-1" aria-describedby="email-1"
                                       placeholder="Enter Your  E-Mail" name="username" required>
                            </div>
                            <!-- /form group -->

                            <!-- Form Group -->
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" id="password-1" placeholder="Enter Your Password" name="password" required>
                            </div>
                            <div class="form-group">
                                <label >Repeat Password</label>
                                <input type="password" class="form-control" id="password-1" placeholder="Please Repeat Password" name="repeat" required>
                            </div>
                            <!-- /form group -->

                           

                            <!-- Form Group -->
                            <div class="form-group">
                                <button type="submit" name="register" class="btn btn-primary text-uppercase">Sign up</button>
                                <span class="d-inline-block ml-4">Or
                                    <a class="d-inline-block font-weight-500 ml-3" href="./">Login</a>
                                </span>
                            </div>
                            <!-- /form group -->

                        </form>
                        <!-- /form -->

                    </div>
                    <!-- /login content inner -->

                    <!-- Login Content Footer -->
                    <div class="dt-login__content-footer">
                        <a href="forgot-password.php">Can’t access your account?</a>
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