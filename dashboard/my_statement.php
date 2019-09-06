<?php 
include_once("header.php");
$return = $_SERVER['HTTP_REFERER'];
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
                                        
                                        <li class="breadcrumb-item"><a href="statements.php">View Statement</a></li>
                                        <li class="breadcrumb-item"><a href="transactions.php">View Transactions</a></li>
                                        
                                        <li class="breadcrumb-item active" aria-current="page">List of My Trsansactions </li>
                                    </ol>
                                    
                                </div>
                            </div>
                            
                        </div>
                    
                        <!-- Card -->
                        <div class="dt-card">

                            <!-- Card Body -->
                            <div class="dt-card__body"><?php
                                 try{
                                    if(isset($_POST['check-balance'])){
                            
                                        $account_number = $_SESSION['account_number'];
                                        $start =  $general->sanitizeInput($_POST['bdate']);
                                        $end =  $general->sanitizeInput($_POST['vdate']);
                                        $cut = explode("-", $start);
                                        $starting = $cut[0].$cut[1].$cut[2];

                                        $ins = explode("-", $end);
                                       $last = $ins[0].$ins[1].$ins[2];
                            
                                        $account = $statement->getSingleAccount($account_number); ?>

                                        <div class="table-responsive">

                                            <table id="data-table" class="table table-striped table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th >Stmt Id</th>
                                                        <th >Start Date</th>
                                                        <th >End Date</th>
                                                        <th >Amount</th>
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
                                                        $ending_date = $bdat[1];
                                                        $vdate = $split[2]; $vdat = explode(":", $vdate);
                                                        $starting_date = $vdat[2]; 
                                                        
                                                        if(($starting == $starting_date) AND ($last == $ending_date)){ ?>
                                                            <tr class="gradeX">
                                                           
                                                                <td><?php $stmtid = $split[1];
                                                                    $stmt = explode(":", $stmtid);
                                                                    echo $stmt[1];
                                                                ?></td>
                                                                <td><?php  echo $starting_date; ?></td>
                                                                <td><?php echo $ending_date; ?></td>
                                                                <td><?php $amount = $split[4]; 
                                                                    $amo = explode(":", $amount);
                                                                    echo $amo[1]; ?>
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
                                                        } else { 
                                                            //$_SESSION['error'] = "No Transaction Was Found For the selected Date";
                                                            //$all_purpose->redirect('statements.php');
                                                        }  
                                                    } ?>

                                                </tbody>
                                            
                                                <tfoot>
                                                    <tr>
                                                        <tr>
                                                            
                                                            <th >Stmt Id</th>
                                                            <th >Start Date</th>
                                                            <th >End Date</th>
                                                            <th >Amount</th>
                                                            <th >Desc</th>
                                                            <th >Transaction</th>
                                                            
                                                        </tr>
                                                    </tr>
                                                </tfoot>
                                            </table>

                                        </div><?php
                                        
                                    }else{
                                        $_SESSION['error'] = "Please Fill The Form Below To Get Your Statement";
                                        $all_purpose->redirect($return);
                                    }
                                }catch(PDOException $e){
                                    $_SESSION['error'] =  $e->getMessage();
                                    $all_purpose->redirect($return);
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
<?php include_once("footer.php") ?>


   
?>