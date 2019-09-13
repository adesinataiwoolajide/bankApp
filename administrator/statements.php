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
                                        
                                        <li class="breadcrumb-item"><a href="statements.php">View Statements</a></li>
                                        <li class="breadcrumb-item"><a href="transactions.php">View Transactions</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">List of Bank Statement </li>
                                    </ol>
                                    
                                </div>
                            </div>
                            
                        </div>
                   
                        <div class="dt-card">

                            <!-- Card Header -->
                            <div class="dt-card__header">

                                <!-- Card Heading -->
                                <div class="dt-card__heading">
                                    <h3 class="dt-card__title">Statement Details Form</h3>
                                </div>
                                <!-- /card heading -->

                            </div>

                            <!-- Card Body -->
                            <div class="dt-card__body">

                                <form action="my_statement.php" method="POST" enctype="multipart/form-data">
                                    
                                    <div class="form-row">
                                        <div class="col-sm-4 mb-3">
                                            <label for="validationDefault02">Account Number</label>
                                           <select class="form-control" required name="account_number">
                                                <option value=""> -- Select Account Number  -- </option>
                                                <option value=""> </option><?php 
                                                foreach($statement->getAllAccount() as $show){  ?>
                                                    <option value="<?php echo $show['account'] ?> "><?php echo $show['account'] ?> </option><?php 
                                                } ?>
                                            </select>
                                           
                                        </div>
                                        <div class="col-sm-4 mb-3">
                                            <label for="validationDefault02">Start Date</label>
                                            <input type="date" class="form-control" id="validationDefault01"
                                                placeholder="Start Date" required name="bdate">
                                           
                                        </div>
                                        <div class="col-sm-4 mb-3">
                                            <label for="validationDefault02">End Date</label>
                                            <input type="date" class="form-control" id="validationDefault02"
                                                placeholder="End Date" name="vdate"
                                                required>
                                            
                                        </div>
                                        <div class="col-sm-12 mb-3">
                                            <button class="btn btn-primary btn-lg btn-block text-uppercase" type="submit" name="check-balance">Get Statement</button>
                                        </div>
                                        
                                    </div>
                                    
                                   
                                </form>
                                <!-- /form -->

                            </div>
                            <!-- /card body -->

                        </div>

                    
                    </div>
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
