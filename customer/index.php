<?php include_once("../administrator/header.php"); include_once("details.php"); ?>
 
<main class="dt-main">
	<?php include_once("sidebar.php"); ?>

		<div class="dt-content-wrapper">

			<div class="dt-content">

				<!-- Page Header -->
				<div class="dt-page__header">
					<h1 class="dt-page__title">Statement Pal Dashboard - <?php echo $_SESSION['full_name'] ?></h1>
				</div>
				
				
				<div class="row">

					<!-- Grid Item -->
					
					<div class="col-xl-4 col-sm-6"  onclick="location.href='transactions.php';">

						<!-- Card -->
						<div class="dt-card dt-card__full-height bg-primary text-white">

							<!-- Card Body -->
							<div class="dt-card__body p-xl-8 py-sm-8 py-6 px-4">
								<!-- Media -->
								<div class="media">

									<i class="icon icon-orders-new icon-6x mr-6 align-self-center"></i>

									<!-- Media Body -->
									<div class="media-body">
										<div class="display-3 font-weight-600 mb-1 init-counter"><?php echo $statement->getAccountTransctions($customerid); ?></div>
										<span class="d-block">MY TRANSACTIONS</span>
									</div>
									<!-- /media body -->

								</div>
								<!-- /media -->
							</div>
							<!-- /card body -->

						</div>
						<!-- /card -->

					</div>
					<div class="col-xl-4 col-sm-6" onclick="location.href='statements.php';">

						<!-- Card -->
						<div class="dt-card dt-card__full-height bg-secondary text-white">

							<!-- Card Body -->
							<div class="dt-card__body p-xl-8 py-sm-8 py-6 px-4">
								<!-- Media -->
								<div class="media">

									<i class="icon icon-revenue-new icon-6x mr-6 align-self-center"></i>

									<!-- Media Body -->
									<div class="media-body">
										<div class="display-3 font-weight-600 mb-1 init-counter"><?php echo $statement->getCountSingleStatement($account_number); ?></div>
										<span class="d-block">MY STATEMENTS </span>
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
					<div class="col-xl-4 col-sm-6"  onclick="location.href='accounts.php';">

						<!-- Card -->
						<div class="dt-card dt-card__full-height bg-info text-white">

							<!-- Card Body -->
							<div class="dt-card__body p-xl-8 py-sm-8 py-6 px-4">
								<!-- Media -->
								<div class="media">

									<i class="icon icon-visits icon-6x mr-6 align-self-center"></i>

									<!-- Media Body -->
									<div class="media-body">
										<div class="display-3 font-weight-600 mb-1 init-counter"><?php echo $statement->getCountAccount($customerid) ?></div>
										<span class="d-block">MY ACCOUNTS</span>
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
					
				</div>
				<div class="row">

					<!-- Grid Item -->
					<div class="col-xl-6 col-sm-6"  onclick="location.href='';">

						<div class="dt-card">

							<!-- Card Header -->
							<div class="dt-card__header mb-4">

								<!-- Card Heading -->
								<div class="dt-card__heading">
									<h3 class="dt-card__title">Exchange Rate</h3>
								</div>
								<!-- /card heading -->

								<!-- Card Tools -->
								<div class="dt-card__tools">
									<a href="javascript:void(0)" class="dt-card__more"><?php echo date("Y-M-D") ?></a>
								</div>
								<!-- /card tools -->

							</div>
							<!-- /card header -->

							<!-- Card Body -->
							<div class="dt-card__body pb-5">

								<!-- Tables -->
								<div class="table-responsive ps-custom-scrollbar">
									<table class="table table-ordered table-bordered-0 mb-0">
										<thead>
										<tr>
											<th class="text-uppercase">Currency</th>
											<th class="text-uppercase text-right" scope="col">Rate (NG)
											</th>
											
											<th class="text-uppercase text-right" scope="col">Fee</th>
										</tr>
										</thead>
										<tbody>
											<tr>
												<td>USD</td>
												<td class="text-right text-nowrap">1 </td>
												<td class="text-center">355</td>
												<td class="text-right text-danger">-$2.33</td>
											</tr>

											<tr>
												<td>POUNDS</td>
												<td class="text-right text-nowrap">1 </td>
												<td class="text-center">555</td>
												<td class="text-right text-danger">-$6.33</td>
											</tr>
											<tr>
												<td>POUNDS</td>
												<td class="text-right text-nowrap">1 </td>
												<td class="text-center">555</td>
												<td class="text-right text-danger">-$6.33</td>
											</tr>
											<tr>
												<td>POUNDS</td>
												<td class="text-right text-nowrap">1 </td>
												<td class="text-center">555</td>
												<td class="text-right text-danger">-$6.33</td>
											</tr>
										
										
										</tbody>
									</table>
								</div>
								<!-- /tables -->

							</div>
							<!-- /card body -->

							
						</div>

					</div>
					
					<div class="col-xl-6 col-md-6">

						<!-- Card -->
						<div class="dt-card bg-image-v7 bg-overlay bg-overlay-black overlay-opacity-0_1 text-white overflow-hidden">

							<!-- Overlay Content -->
							<div class="bg-overlay__inner">

								<!-- Card Body -->
								<div class="dt-card__body py-6">

									<!-- Grid -->
									<div class="row no-gutters">

										<!-- Grid Item -->
										<div class="col-sm-7">
											<div class="text-center text-sm-left mb-8 mb-sm-0">
												<p class="display-5 font-weight-500">
													Download our app and start quickly
												</p>
												<span class="d-block mb-3">Available on</span>
												<div class="mb-2">
													<a href="javascript:void(0)" class="d-inline-block">
														<img src="../administrator/assets/images/dashboard/google-play-store.png"
															alt="Play Store" class="img-fluid">
													</a>
												</div>
												<div>
													<a href="javascript:void(0)" class="d-inline-block">
														<img src="../administrator/assets/images/dashboard/apple-app-store.png"
															alt="App Store" class="img-fluid">
													</a>
												</div>
											</div>
										</div>
										<!-- /grid item -->

										<!-- Grid Item -->
										<div class="col-sm-5 align-self-sm-end text-center text-sm-right">
											<img class="img-fluid mb-n18"
												src="../administrator/assets/images/dashboard/phone2.jpeg" alt="App Store">
										</div>
										<!-- /grid item -->

									</div>
									<!-- /grid -->

								</div>
								<!-- /card body -->

							</div>
							<!-- /overlay content -->

						</div>
						<!-- /card -->

						</div>
					</div>
					
				</div>
				
			</div>
				
			
			<footer class="dt-footer">
				Copyright Statement Pal © <?php echo date("Y"); ?> Powered by Packine Systems
			</footer>

        </div>

<!-- /customizer sidebar -->
        </main>
    </div>
</div>
<!-- /root -->

<!-- Optional JavaScript -->
<?php include_once("../administrator/footer.php") ?>
