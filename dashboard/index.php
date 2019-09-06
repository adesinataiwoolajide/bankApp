<?php include_once("header.php"); ?>

<main class="dt-main">
	<?php include_once("sidebar.php"); ?>

		<div class="dt-content-wrapper">

			<div class="dt-content">

				<!-- Page Header -->
				<div class="dt-page__header">
					<h1 class="dt-page__title">Dashboard - <?php echo $_SESSION['full_name'] ?></h1>
				</div>
				
				
				<div class="row">

					<!-- Grid Item -->
					<div class="col-xl-3 col-sm-6">

						<!-- Card -->
						<div class="dt-card dt-card__full-height bg-primary text-white">

							<!-- Card Body -->
							<div class="dt-card__body p-xl-8 py-sm-8 py-6 px-4">
								<!-- Media -->
								<div class="media">

									<i class="icon icon-orders-new icon-6x mr-6 align-self-center"></i>

									<!-- Media Body -->
									<div class="media-body">
										<div class="display-3 font-weight-600 mb-1 init-counter">0</div>
										<span class="d-block">Transaction</span>
									</div>
									<!-- /media body -->

								</div>
								<!-- /media -->
							</div>
							<!-- /card body -->

						</div>
						<!-- /card -->

					</div>
					<div class="col-xl-3 col-sm-6">

						<!-- Card -->
						<div class="dt-card dt-card__full-height bg-secondary text-white">

							<!-- Card Body -->
							<div class="dt-card__body p-xl-8 py-sm-8 py-6 px-4">
								<!-- Media -->
								<div class="media">

									<i class="icon icon-revenue-new icon-6x mr-6 align-self-center"></i>

									<!-- Media Body -->
									<div class="media-body">
										<div class="display-3 font-weight-600 mb-1 init-counter">0</div>
										<span class="d-block">Statement </span>
									</div>
									<!-- /media body -->

								</div>
								<!-- /media -->
							</div>
							<!-- /card body -->

						</div>
						<!-- /card -->

					</div>
					<!-- /grid item -->

					<!-- Grid Item -->
					<div class="col-xl-3 col-sm-6">

						<!-- Card -->
						<div class="dt-card dt-card__full-height bg-info text-white">

							<!-- Card Body -->
							<div class="dt-card__body p-xl-8 py-sm-8 py-6 px-4">
								<!-- Media -->
								<div class="media">

									<i class="icon icon-visits icon-6x mr-6 align-self-center"></i>

									<!-- Media Body -->
									<div class="media-body">
										<div class="display-3 font-weight-600 mb-1 init-counter">0</div>
										<span class="d-block">Activities</span>
									</div>
									<!-- /media body -->

								</div>
								<!-- /media -->
							</div>
							<!-- /card body -->

						</div>
						<!-- /card -->

					</div>
					<!-- /grid item -->

					<!-- Grid Item -->
					<div class="col-xl-3 col-sm-6">

						<!-- Card -->
						<div class="dt-card dt-card__full-height bg-success text-white">

							<!-- Card Body -->
							<div class="dt-card__body p-xl-8 py-sm-8 py-6 px-4">
								<!-- Media -->
								<div class="media">

									<i class="icon icon-queries icon-6x mr-6 align-self-center"></i>

									<!-- Media Body -->
									<div class="media-body">
										<div class="display-3 font-weight-600 mb-1 init-counter">0</div>
										<span class="d-block">BVN</span>
									</div>
									<!-- /media body -->

								</div>
								<!-- /media -->
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
