
<script src="dashboard/node_modules/jquery/dist/jquery.min.js"></script>
<script src="dashboard/node_modules/moment/moment.js"></script>
<script src="dashboard/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="dashboard/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
<script src="dashboard/node_modules/masonry-layout/dist/masonry.pkgd.min.js"></script>
<script src="dashboard/node_modules/sweetalert2/dist/sweetalert2.js"></script>
<script src="dashboard/assets/js/functions.js"></script>
<script src="dashboard/assets/js/customizer.js"></script>
<script src="dashboard/assets/js/script.js"></script>
<script src="dashboard/assets/Toast/js/Toast.min.js"></script>
<script src="dashboard/node_modules/jquery/dist/jquery.min.js"></script>
<script src="dashboard/node_modules/moment/moment.js"></script>
<script src="dashboard/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="dashboard/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
<script src="dashboard/node_modules/chartist/dist/chartist.min.js"></script>
<script src="dashboard/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="dashboard/assets/js/custom/charts/dashboard-listing.js"></script>
    <?php 
    if(isset($_SESSION['success'])){
        $message = $_SESSION['success']; ?>
        <script type="text/javascript">
            new Toast({ message: '<?php echo $message; ?>', type: 'success' });
        </script><?php 
        unset($_SESSION['success']);
    }
    if(isset($_SESSION['error'])){
        $message = $_SESSION['error'];?>
    
        <script type="text/javascript">
            new Toast({ message: '<?php echo $message; ?>', type: 'danger' });
        </script><?php 
        unset($_SESSION['error']);
    }  ?>

</body>

</html>