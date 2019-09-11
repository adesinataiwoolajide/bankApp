<?php include_once("../administrator/header.php");

    include_once("details.php");
    $account_number = $_GET['account_number'];
    $account = $statement->getSingleAccount($account_number);
    $customer = $statement->getAllSingleCustomerAccount($customerid);
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
                                        
                                        <li class="breadcrumb-item"><a href="account_transactions.php?account_number=<?php echo $account_number ?>">View Transactions</a></li>
                                        <li class="breadcrumb-item"><a href="accounts.php">View Accounts</a></li>
                                        <li class="breadcrumb-item"><a href="transactions.php">View Transactions</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">My Trsansactions on <?php echo $account_number ?> </li>
                                    </ol>
                                    
                                </div>
                            </div>
                            
                        </div>
                    
                        <!-- Card -->
                        <div class="dt-card">

                            <!-- Card Body -->
                            <div class="dt-card__body"><?php
                                if(count($account) ==0){ ?>
                                    <p align="center" style="color: red"><i class="icon icon-table"></i> 
                                        No Transaction was found for <?php echo $account ?>
                                    </p><?php

                                }else{ ?>
                                    <!-- Tables -->
                                    <div class="table-responsive">

                                        <table id="data-table" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th >Account Number</th>
                                                    <!-- <th >Stmt Id</th> -->
                                                    <th >Booking Date</th>
                                                    <th >Value Date</th>
                                                    <th >Amount</th>
                                                    <th>Status </th>
                                                    <th >Desc</th>
                                                    <th >Transaction</th>
                                                        
                                                </tr>
                                            </thead>
                                        
                                            <tbody> 
                                                <?php
                                                $y=1; 
                                                foreach ($account as $accounts){
                                                    $split = explode(",", $accounts['stmt']); 
                                                    $bdate = $split[3]; $bdat = explode(":", $bdate);
                                                    $starting_date = $bdat[1];
                                                    $vdate = $split[2]; $vdat = explode(":", $vdate);
                                                    $ending_date = $vdat[2]; ?>
                                                    <tr class="gradeX">
                                                        <td><?php echo $account_number ?></td>
                                                        <?php 
                                                            // $stmtid = $split[1];
                                                            // $stmt = explode(":", $stmtid);
                                                            // echo $stmt[1];
                                                        ?>
                                                        <td><?php  echo $ending_date; ?></td>
                                                        <td><?php echo $starting_date; ?></td>
                                                        <td><?php $amount = $split[4]; 
                                                            $amo = explode(":", $amount);
                                                            echo $amo[1]; ?>
                                                        </td>
                                                        <td><?php 
                                                           $status = substr($amo[1], 0,1);
                                                           if($status!= "-" ){ ?>
                                                                <p style="color: green"> CR</p><?php
                                                           } else{ ?>
                                                               <p style="color: red"> DR</p><?php
                                                           }?>
                                                        </td>
                                                        <td><?php  $description = $split[5]; 
                                                            $des = explode(":", $description);
                                                            echo $des[0]; ?>
                                                        </td>
                                                        <td><?php  $transref = $split[6]; 
                                                            $tra = explode(":", $transref);
                                                            echo $tra[1]; ?>
                                                        </td>
                                                        
                                                    </tr><?php 
                                                    $y++; 
                                                } ?>

                                            </tbody>
                                        
                                            <tfoot>
                                                <tr>
                                                    <tr>
                                                        <th >Account Number</th>
                                                        <!-- <th >Stmt Id</th> -->
                                                        <th >Booking Date</th>
                                                        <th >Value Date</th>
                                                        <th >Amount</th>
                                                        <th>Status </th>
                                                        <th >Desc</th>
                                                        <th >Transaction</th>
                                                        
                                                    </tr>
                                                </tr>
                                            </tfoot>
                                        </table>

                                    </div><?php
                                
                                } ?>
                            </div>
                            <!-- /card body -->

                        </div>
                        <!-- /card -->

                    
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
<?php include_once("../administrator/footer.php") ?>
