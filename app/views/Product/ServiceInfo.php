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
											<li class="active"><a href="#productDescription" data-toggle="tab">功能介绍</a></li>
											<li><a href="#productInfo" data-toggle="tab">行业应用 </a></li>
											<li><a href="#productReviews" data-toggle="tab">用户案例</a></li>
										</ul>
										<div class="tab-content">
											<div class="tab-pane active" id="productDescription">
													<section class="toggle ">
														<label>	VPG功能特点</label>
														<div class="toggle-content" style="margin-left:15px;">
															
<p>VPG/PrePost它的前身是FEMB（LS-DYNA软件的指定前处理器），随着VPG技术的发展，ETA公司对VPG/Prepost投入了很大的精力，开发和完善了很多的新功能，整合成为VPG/PrePost模块，具体特点如下：</p>
<p>支持多种CAD数据格式</p>
<p>现在支持的CAD数据格式有：IGES, VDA, DXF, CATIA, STEP, UG 等等。</p>
<p>百分之百支持LS-DYNA所有的关键字</p>
<p>对于著名显式动力分析软件LS-DYNA的关键字，VPG/Prepost 100%支持LS-DYNA所有关键字，用户可以很方便的进行图形界面输入，无需进行文本编辑，并且每一个关键字的参数都有简要的解释。</p>
<p>强大的网格生成功能</p>
<p>VPG/PrePost能自动生成四边形网格，花时少，网格的质量控制方便（三角形网格应严格控制在一定的百分比内）。同时，VPG/Prepost还能自动生成四面体、五面体及六面体的立体网格。	</p>	
															
															
														</div>
													</section>
													<section class="toggle ">
														<label>	VPG_Prepost模块介绍</label>
														<div class="toggle-content" style="margin-left:15px;">
																
															
															
														</div>
													</section>
													<section class="toggle ">
														<label>	LS-DYNA 技术支持工程师</label>
														<div class="toggle-content" style="margin-left:15px;">
																
															
															
														</div>
													</section>
													<section class="toggle ">
														<label>	VPG_Structure模块介绍</label>
														<div class="toggle-content" style="margin-left:15px;">
																
															
															
														</div>
													</section>
													<section class="toggle ">
														<label>	VPG_Safety模块介绍</label>
														<div class="toggle-content" style="margin-left:15px;">
																
															
															
														</div>
													</section>
											</div>
											<div class="tab-pane" id="productInfo">
												<section class="toggle ">
													<label>	VPG/LS-DYNA在汽车行业的应用</label>
													<div class="toggle-content" style="margin-left:15px;">
															
														
														
													</div>
												</section>
												<section class="toggle ">
													<label>	VPG/LS-DYNA在航空航天领域的应用</label>
													<div class="toggle-content" style="margin-left:15px;">
															
														
														
													</div>
												</section>
												<section class="toggle ">
													<label>	VPG/LS-DYNA在军工领域的应用</label>
													<div class="toggle-content" style="margin-left:15px;">
															
														
														
													</div>
												</section>
											</div>
											<div class="tab-pane" id="productReviews">
												<section class="toggle ">
													<label>	VPG假人应用案例</label>
													<div class="toggle-content" style="margin-left:15px;">
															
														
														
													</div>
												</section>
												<section class="toggle ">
													<label>	VPG_Prepost应用案例</label>
													<div class="toggle-content" style="margin-left:15px;">
															
														
														
													</div>
												</section>
												<section class="toggle ">
													<label>	VPG_Structure应用案例</label>
													<div class="toggle-content" style="margin-left:15px;">
															
														
														
													</div>
												</section>
												
												
											</div>
											
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
