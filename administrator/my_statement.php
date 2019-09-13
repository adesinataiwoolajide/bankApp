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
                            
                                        $account_number =  $general->sanitizeInput($_POST['account_number']);;
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
                                                        <th >S/N</th>
                                                        <th >Account Number</th>
                                                        <th >Booking Date</th>
                                                        <th >Value Date</th>
                                                        <th >Amount</th>
                                                        <th >Currency</th>
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
                                                        $curr = $split[2]; 
                                                        $vdate = $split[3]; 
                                                        $vdat = explode(":", $vdate);
                                                        $bdate = $split[4]; $bdat = explode(":", $bdate);
                                                        $amount = $split[5];
                                                        $description = $split[6]; 
                                                        $transref = $split[7]; 
                                                       
                                                        $ending_date = $bdat[1];
                                                       $starting_date = $vdat[1];
                                                        
                                                        if(($starting == $starting_date) AND ($last == $ending_date)){ ?>
                                                            <tr class="gradeX">
                                                                <td><?php echo $y ?></td>
                                                                <td><?php echo $account_number ?></td>
                                                                
                                                                <td><?php  echo $starting_date; ?></td>
                                                                <td><?php echo $ending_date; ?></td>
                                                                <td><?php ; 
                                                                    $amo = explode(":", $amount);
                                                                    echo $amo[1]; ?>
                                                                </td>
                                                                <td><?php $currency = explode(":", $curr); echo $currency[1] ?></td>
                                                                <td><?php 
                                                                $status = substr($amo[1], 0,1);
                                                                if($status!= "-" ){ ?>
                                                                        <p style="color: green"> CR</p><?php
                                                                } else{ ?>
                                                                    <p style="color: red"> DR</p><?php
                                                                }?>
                                                                </td>
                                                                <td><?php  
                                                                    $des = explode(":,", $description);
                                                                    echo $des[0]; ?>
                                                                </td>
                                                                <td><?php  
                                                                    $tra = explode(":", $transref);
                                                                    $list = $tra[1];
                                                                    echo substr($list, 0,18); ?>
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
                                                            <th >S/N</th>
                                                            <th >Account Number</th>
                                                            <th >Booking Date</th>
                                                            <th >Value Date</th>
                                                            <th >Amount</th>
                                                            <th >Currency</th>
                                                            <th>Status </th>
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