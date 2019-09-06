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

                        <p class="f-16">Sign in and explore the system.</p>
                    </div>

                    <!-- Brand logo -->
                    <div class="dt-login__logo">
                        <a class="dt-brand__logo-link" href="index.html">
                            <img class="dt-brand__logo-img" src="dashboard/assets/images/bank.jpg" alt="Bank">
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
                        <form action="dashboard/registration.php" method="POST">

                            <!-- Form Group -->
                            <div class="form-group">
                                <label class="sr-only" for="user-name">Full Name</label>
                                <input type="text" class="form-control" id="user-name" aria-describedby="user-name"
                                       placeholder="Full Name" name="fullname" required>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="user-name">Account Number</label>
                                <input type="number" class="form-control" id="user-name" aria-describedby="user-name"
                                       placeholder="Enter Account Number" name="account_number" required>
                            </div>
                            <!-- /form group -->

                            <!-- Form Group -->
                            <div class="form-group">
                                <label class="sr-only" for="email-1">User Name</label>
                                <input type="text" class="form-control" id="email-1" aria-describedby="email-1"
                                       placeholder="Enter User Name" name="username" required>
                            </div>
                            <!-- /form group -->

                            <!-- Form Group -->
                            <div class="form-group">
                                <label class="sr-only" for="password-1">Password</label>
                                <input type="password" class="form-control" id="password-1" placeholder="Password" name="password" required>
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
                        <a href="page-forgot-password.html">Can’t access your account?</a>
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