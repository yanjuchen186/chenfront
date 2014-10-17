<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<?php echo $header; ?>	
	<body>

		<div class="body">
			<!-- menu html -->
			<?php echo $menu; ?>

			<div role="main" class="main shop">

				<div class="container">

					<div class="row">
						<div class="col-md-9">

							<div class="row">
								<div class="col-md-12">
									<h4><strong><?php if(isset($currInfo[0]->psName)){echo $currInfo[0]->psName;} ?></strong></h4>
									<hr class="tall">
									<?php if(isset($currInfo[0]->productInfo)){echo $currInfo[0]->productInfo;} ?>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="tabs tabs-product">
										<ul class="nav nav-tabs">
											<?php foreach ($detailData as $key => $value) { ?>
												<li class="<?php if($key == 0){echo 'active';} ?>">
													<a href="#nav-tabs-<?php echo $value['tid']; ?>" data-toggle="tab"><?php echo $value['name']; ?></a>
												</li>
											<?php }  ?>
										</ul>
										<div class="tab-content">
											<?php foreach ($detailData as $key => $value) { ?>
												<div class="tab-pane <?php if($key == 0){echo 'active';} ?>" id="nav-tabs-<?php echo $value['tid']; ?>">
													<?php if(isset($value['child']) && !empty($value['child'])){ ?>
														<?php foreach ($value['child'] as $kkey => $kvalue) { ?>
															<section class="toggle ">
																<label>
																	<?php echo $kvalue['infoName'];  ?>
																</label>
																<div class="toggle-content" style="margin-left:15px;">
																	<?php echo $kvalue['infoContent'];  ?>										
																</div>
															</section>
														<?php } ?>
													<?php } ?>
												</div>
											<?php }  ?>	
										</div>
									</div>
								</div>
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
