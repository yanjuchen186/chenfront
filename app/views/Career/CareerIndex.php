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
									<li class="active">Careers</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Careers</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<h3><strong>人才</strong> 招聘</h3>

					<div class="row">
						<div class="col-md-12">
							<?php if(isset($careerBasicData[0]->content)){echo $careerBasicData[0]->content;} ?>
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-md-8">
							<?php foreach ($careerData as $key => $value) { ?>
								<section class="toggle">
									<label><?php echo $value->careerName; ?></label>
									<div class="toggle-content">
										<?php echo $value->careerInfo; ?>
									</div>
								</section>
							<?php } ?>
							
							

						</div>
						<div class="col-md-4">
							<div class="featured-box featured-box-secundary">
								<div class="box-content clearfix">
									<h4>The Benefits</h4>
									<ul class="thumbnail-gallery flickr-feed" data-plugin-options='{"qstrings": { "id": "93691989@N03" }}'></ul>

									<hr />

									<ul class="list icons pull-left list-unstyled">
										<li><i class="icon icon-check"></i>Fusce sit quis arcu vestibulum.</li>
										<li><i class="icon icon-check"></i>Fusce sit amet orci quis arcu vestibulum.</li>
										<li><i class="icon icon-check"></i>Fusce sit amet orci quis arcu.</li>
										<li><i class="icon icon-check"></i>Fusce sit amet orci arcu vestibu.</li>
										<li><i class="icon icon-check"></i>Fusce sit orci quis arcu vestibulum.</li>
									</ul>

								</div>
							</div>
						</div>
					</div>

				</div>

			</div>

			<!-- footer html-->
			<?php echo $footer; ?>
		</div>
	</body>
</html>
