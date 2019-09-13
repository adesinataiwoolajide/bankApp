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
                                        
                                        <li class="breadcrumb-item"><a href="accounts.php">View Transactions</a></li>
                                        
                                        <li class="breadcrumb-item active" aria-current="page">List of All Customers Transactions </li>
                                    </ol>
                                    
                                </div>
                            </div>
                            
                        </div>
                    
                       
                    </div>
                </div>
                <div class="row">

                    <!-- Grid Item -->
                   
                    
                    <div class="dt-card col-md-12">

                        <!-- Card Body -->
                        <div class="dt-card__body"><?php
                            if(count($account) ==0){ ?>
                                <p align="center" style="color: red"><i class="icon icon-table"></i> 
                                    No Transaction was found for All Customers
                                </p><?php

                            }else{ ?>
                                <!-- Tables -->
                                <div class="table-responsive">

                                    <table id="data-table" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th >Account Number</th>
                                                <th >Email</th>
                                                <th >Customer Name</th>
                                                <th >Customer ID</th>
                                                <th>Action </th>
                                                   
                                            </tr>
                                        </thead>
                                    
                                        <tbody> 
                                            <?php
                                            $y=1; 
                                            foreach($statement->getAllTransAccount() as $accounts){ 
                                                ?>
                                                <tr class="gradeX">
                                                    <td><?php echo $y; ?></td>
                                                    <td><?php echo $accounts['account'] ?></td>
                                                    <td><?php echo $accounts['email'] ?></td>
                                                    <td><?php echo $accounts['customer_name'] ?></td>
                                                    <td><?php echo $accounts['customerid'] ?></td>
                                                    <td>
                                                        <a href="account_transactions.php?account_number=<?php echo $accounts['account'] ?>" class="btn btn-success">
                                                            <i class="fa fa-list"></i>View
                                                        </a>
                                                    </td>
                                                
                                                </tr><?php 
                                                $y++; 
                                            } ?>

                                        </tbody>
                                    
                                        <tfoot>
                                            <tr>
                                                <th>S/N</th>
                                                <th >Account Number</th>
                                                <th >Email</th>
                                                <th >Customer Name</th>
                                                <th >Customer ID</th>
                                                <th>Action </th>
                                                   
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div><?php
                            
                            } ?>
                        </div>
                        <!-- /card body -->

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
