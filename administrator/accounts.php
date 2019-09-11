<?php include_once("header.php");
    $account = $statement->getAllAccount();
?>

    <main class="dt-main">
        <?php include_once("sidebar.php"); ?>

        <div class="dt-content-wrapper">

            <div class="dt-content">
                <div class="row">

                    <div class="col-12">
                        <div class="row dt-masonry">
                            <div class="col-md-12 dt-masonry__item">
                                <div class="dt-card">
                                    
                                    <ol class="mb-0 breadcrumb">
                                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                                        
                                        <li class="breadcrumb-item"><a href="accounts.php">View Accounts</a></li>
                                        
                                        <li class="breadcrumb-item active" aria-current="page">List of My Accounts </li>
                                    </ol>
                                    
                                </div>
                            </div>
                            
                        </div>
                    
                       
                    </div>
                </div>
                <div class="row">

                    <!-- Grid Item --><?php 
                    foreach($statement->getAllAccount() as $list){ 
                        $accounting = $list['account']; ?>
                        <div class="col-xl-3 col-sm-6"  onclick="location.href='account_transactions.php?account_number=<?php echo $accounting ?>';">

                            <!-- Card -->
                            <div class="dt-card dt-card__full-height bg-info text-white">

                                <!-- Card Body -->
                                <div class="dt-card__body p-xl-8 py-sm-8 py-6 px-4">
                                    <!-- Media -->
                                    <div class="media">

                                        <i class="icon icon-user icon-6x mr-6 align-self-center"></i>

                                        <!-- Media Body -->
                                        <div class="media-body">
                                            <div class="display-3 font-weight-600 mb-1 init-counter">
                                                <?php echo $statement->countTransactions($accounting); ?>
                                            </div>
                                            <span class="d-block"><b><?php echo $list['account']; ?></b></span>
                                        </div>
                                        <!-- /media body -->

                                    </div>
                                    <!-- /media -->
                                </div>
                                <!-- /card body -->

                            </div>
                            <!-- /card -->

                        </div><?php
                    }?>
                    
					
					
                </div>
            </div>

            
            <footer class="dt-footer">
                Copyright Jethro Systems © <?php echo date("Y"); ?>
            </footer>

        </div>

    <!-- /customizer sidebar -->
    </main>
    </div>
</div>
<!-- /root -->

<!-- Optional JavaScript -->
<?php include_once("footer.php") ?>
