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
                        <h1 class="dt-login__title">Login</h1>
                        <!-- /login title -->

                        <p class="f-16">Sign in to Statement Pal with your E-mail or Account Number.</p>
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
                        <form action="customer/process_login.php" method="POST">
                            
                            <!-- Form Group -->
                            <div class="form-group">
                                <label >E-Mail</label>
                                <input type="text" class="form-control" id="user-name" aria-describedby="user-name"
                                       placeholder="Enter Your E Mail" name="username" required>
                            </div>
                            <!-- /form group -->
                           
                            <!-- Form Group -->
                            <div class="form-group">
                                <label >Password</label>
                                <input type="password" class="form-control" id="password-1" placeholder="Password" name="password" reuiredq>
                            </div>
                            <!-- /form group -->
                            
                            <!-- Form Group -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary text-uppercase" name="login">Login</button>
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