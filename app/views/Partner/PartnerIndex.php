<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<?php echo $header; ?>	
	<body>

		<div class="body">
			<!-- menu html -->
			<?php echo $menu; ?>

			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">About Parter</li>
								</ul>
							</div>
						</div>
						
					</div>
				</section>

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3 class="push-top">Our <strong>Parter</strong></h3>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">

							<ul class="history">
								<?php foreach ($partnerData as $key => $value) { ?>
									<li data-appear-animation="">
									<div class="thumb">
										<img src="<?php echo $value->logoImgUrl; ?>" alt="" />
									</div>
									<div class="featured-box" >
										<div class="box-content">
											<h4><strong><?php echo $value->brandName; ?></strong></h4>
											<hr class="tall">
											<?php echo $value->info; ?>
										</div>
									</div>
								</li>
								<?php } ?>
																								
							</ul>

						</div>
					</div>

					

					
				</div>

			</div>

			<!-- footer html-->
			<?php echo $footer; ?>
		</div>
	</body>
</html>
