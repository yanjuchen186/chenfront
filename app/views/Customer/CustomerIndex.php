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
									<li><a href="#">首页</a></li>
									<li class="active">新闻发布</li>
								</ul>
							</div>
						</div>
						<!-- <div class="row">
							<div class="col-md-12">
								<h2>Medium Image</h2>
							</div>
						</div> -->
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-9">
							<div class="blog-posts">
								<ul class="history">
								<?php foreach ($termsItem as $key => $value) { ?>
									<li >
										<div class="featured-box" style="margin-left:0px;">
											<div class="box-content">
												<h4><strong><?php echo $value['name']; ?></strong></h4>
								                <hr class="tall">
								                <?php if( isset($value['termChild']) && !empty($value['termChild'])){ ?>
								                	<div class="row">
														<?php foreach ($value['termChild'] as $kkey =>  $kvalue) {
															 if($kkey % 4 == 4){ 
														?>
															 	</div><div class="row">
													    <?php }   ?> 
													    <div class="col-md-3">
															<a class="img-thumbnail" title="<?php echo $kvalue['name'];  ?>" target="_blank" href="<?php echo $kvalue['url'];  ?>">
																<img class="img-responsive" width="132" height="36" title="<?php echo $kvalue['name'];  ?>" src="<?php echo $kvalue['customerUrl'];  ?>">
															</a>
														</div>                                                                 
													<?php	} ?>

													</div>
								                <?php }else{ ?>
								                		<?php if(isset($value['child']) && !empty($value['child'])){ ?>
								                			<?php foreach ($value['child'] as $ckey => $cvalue) { ?>
								                				<div><h5><?php echo $cvalue['name']; ?></h5></div>
								                				<?php if(isset($cvalue['termChild']) && !empty($cvalue['termChild'])){ ?>
								                					<div class="row">
								                						<?php foreach ($cvalue['termChild'] as $ckkey => $ckvalue) { ?>
								                							<?php if($kkey % 4 == 4){ ?>
																				 	</div><div class="row">
																		    <?php }   ?> 
																		     <div class="col-md-3">
																				<a class="img-thumbnail" title="<?php echo $ckvalue['name'];  ?>" target="_blank" href="<?php echo $ckvalue['url'];  ?>">
																					<img class="img-responsive" width="132" height="36" title="<?php echo $ckvalue['name'];  ?>" src="<?php echo $ckvalue['customerUrl'];  ?>">
																				</a>
																			</div> 

								                						<?php } ?>
								                					</div>
								                				<?php } ?>
								                			<?php } ?>
								                		<?php } ?>
								                <?php } ?>                                             
								<?php } ?>
								</ul>

							</div>
						</div>

						<div class="col-md-3">
							<aside class="sidebar">

								<hr />

								<h4>Categories</h4>
								<ul class="nav nav-list primary push-bottom">
									<li><a href="#">VPG</a></li>
									<li><a href="#">3DCS</a></li>
									<li><a href="#">DYNAFORM</a></li>
									<li><a href="#">LS-DYNA</a></li>
									<li><a href="#">DTM</a></li>
									<li><a href="#">Presys</a></li>
									<li><a href="#">咨询服务</a></li>
									<li><a href="#">培训服务</a></li>
									<li><a href="#">高性能计算</a></li>
								</ul>

								

								<hr />

								<h4>About Us</h4>
								<p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. </p>

							</aside>
						</div>
					</div>

				</div>

			</div>

			<!-- footer html-->
			<?php echo $footer; ?>
		</div>
	</body>
</html>
