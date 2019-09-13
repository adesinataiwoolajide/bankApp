<?php include_once("header.php");
    $username = $_SESSION['username'];
    $log = $general->getCustomerLog($username);
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
                                        
                                        <li class="breadcrumb-item"><a href="activities.php">View My Activities</a></li>
                                        
                                        <li class="breadcrumb-item active" aria-current="page">List of My Activities </li>
                                    </ol>
                                    
                                </div>
                            </div>
                            
                        </div>
                    
                        <!-- Card -->
                        <div class="dt-card">

                            <!-- Card Body -->
                            <div class="dt-card__body"><?php
                                if(count($log) ==0){ ?>
                                    <p align="center" style="color: red"><i class="icon icon-table"></i> 
                                       Your Activity Log is Empty
                                    </p><?php

                                }else{ ?>
                                    <!-- Tables -->
                                    <div class="table-responsive">

                                        <table id="data-table" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th >S/N</th>
                                                    <th >Customer</th>
                                                    <th >Action</th>
                                                    <th >Time</th>
                                                    
                                                </tr>
                                            </thead>
                                        
                                            <tbody> 
                                                <?php
                                                $y=1; 
                                                foreach ($log as $logs){
                                                   ?>
                                                    <tr class="gradeX">
                                                        <td><?php echo $y ?></td>
                                                        <td><?php echo $logs['user_details'] ?></td>
                                                        <td><?php echo $logs['action'] ?></td>
                                                        <td><?php echo $logs['time_added'] ?></td>
                                                       
                                                    </tr><?php 
                                                    $y++; 
                                                } ?>

                                            </tbody>
                                        
                                            <tfoot>
                                                <tr>
                                                    <th >S/N</th>
                                                    <th >Customer</th>
                                                    <th >Action</th>
                                                    <th >Time</th>
                                                    
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
<?php include_once("footer.php") ?>
