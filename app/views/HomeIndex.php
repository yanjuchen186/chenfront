<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<!-- header html -->
<?php echo $header; ?>	
	<body>
	<!-- Current Page CSS -->
	<?php echo HTML::style('vendor/circle-flip-slideshow/css/component.css'); ?>
	<?php echo HTML::style('vendor/nivo-slider/nivo-slider.css'); ?>
	<?php echo HTML::style('vendor/nivo-slider/themes/default/default.css'); ?>
			
		<div class="body">
			<!-- menu html -->
			<?php echo $menu; ?>

			<div role="main" class="main">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="nivo-slider">
								<div class="slider-wrapper theme-default">
									<div id="nivoSlider" class="nivoSlider">
										
										<?php foreach ($bannerData as $key => $value) { ?>
											<img title="<?php echo $value['title']; ?>" src="<?php echo $value['promoteUrl']; ?>" data-thumb="<?php echo $value['promoteUrl']; ?>" alt="" />
										<?php } ?>
									</div>
									<div id="htmlcaption" class="nivo-html-caption"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="home-intro home-intro-compact">
								
							</div>
						</div>
					</div>
				</div>

				<div class="container">

					<div class="row center">
						<div class="col-md-12">
							<h2 class="short word-rotator-title">
								Porto is
								<strong class="inverted">
									<span class="word-rotate">
										<span class="word-rotate-items">
											<span>incredibly</span>
											<span>especially</span>
											<span>extremely</span>
										</span>
									</span>
								</strong>
								beautiful and fully responsive.
							</h2>
							<p class="featured lead">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo. vamus suscipit molestie vestibulum.
							</p>
						</div>
					</div>

				</div>

				<div class="home-concept">
					<div class="container">

						<div class="row center">
							<span class="sun"></span>
							<span class="cloud"></span>
							<div class="col-md-2 col-md-offset-1">
								<div class="process-image" data-appear-animation="bounceIn">
									<img src="img/product_12.png" alt="" />
									<strong>VPG</strong>
								</div>
							</div>
							<div class="col-md-2">
								<div class="process-image" data-appear-animation="bounceIn" data-appear-animation-delay="200">
									<img src="img/product_15.png" alt="" />
									<strong>LS-DYNA</strong>
								</div>
							</div>
							<div class="col-md-2">
								<div class="process-image" data-appear-animation="bounceIn" data-appear-animation-delay="400">
									<img src="img/product_16.png" alt="" />
									<strong>DYNAFORM</strong>
								</div>
							</div>
							<div class="col-md-4 col-md-offset-1">
								<div class="project-image">
									<div id="fcSlideshow" class="fc-slideshow">
										<ul class="fc-slides">
											<li><a href="portfolio-single-project.html"><img class="img-responsive" src="img/projects/project-home-1.jpg" /></a></li>
											<li><a href="portfolio-single-project.html"><img class="img-responsive" src="img/projects/project-home-2.jpg" /></a></li>
											<li><a href="portfolio-single-project.html"><img class="img-responsive" src="img/projects/project-home-3.jpg" /></a></li>
										</ul>
									</div>
									<strong class="our-work">Our Service</strong>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="container">

					<!-- <div class="row">
						<hr class="tall" />
					</div> -->
					<hr class="tall" />
				</div>

				<!-- logo -->
				<div class="container">

					<div class="row center">
						<div class="owl-carousel" data-plugin-options='{"items": 6, "singleItem": false, "autoPlay": true, "pagination": false}'>
							<div>
								<img class="img-responsive" src="img/logos/logo-1.png" alt="">
							</div>
							<div>
								<img class="img-responsive" src="img/logos/logo-2.png" alt="">
							</div>
							<div>
								<img class="img-responsive" src="img/logos/logo-3.png" alt="">
							</div>
							<div>
								<img class="img-responsive" src="img/logos/logo-4.png" alt="">
							</div>
							<div>
								<img class="img-responsive" src="img/logos/logo-5.png" alt="">
							</div>
							<div>
								<img class="img-responsive" src="img/logos/logo-6.png" alt="">
							</div>
							<div>
								<img class="img-responsive" src="img/logos/logo-4.png" alt="">
							</div>
							<div>
								<img class="img-responsive" src="img/logos/logo-2.png" alt="">
							</div>
						</div>
					</div>

				</div>

				<div class="map-section">
					<section class="featured footer map">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<div class="recent-posts push-bottom">
										<h2>Latest <strong>News</strong> Posts</h2>
										<div class="row">
											<div class="owl-carousel" data-plugin-options='{"items": 1, "autoHeight": true}'>
												<div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">15</span>
																<span class="month">Jan</span>
															</div>
															<h4><a href="blog-post.html">2014年9月DCS亚太区用户大会</a></h4>
															<p> 随着中国国内制造行业对公差分析需求的日益增长，3DCS软件已被很多用户所采用，目前国内用户递增迅速。 <a href="/" class="read-more">read more <i class="icon icon-angle-right"></i></a></p>
														</article>
													</div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">15</span>
																<span class="month">Jan</span>
															</div>
															<h4><a href="blog-post.html">DYNAFORM/LS-DYNA软件在钣金冲压中的应用高级培训在上海举办</a></h4>
															<p>ETA-China 2014年5月9日消息：由ETA-China主办的“DYNAFORM/LS-DYNA软件在钣金冲压中的应用高级培训”于2014年5月8日至9日在上海超级计算中心成功举办。. <a href="/" class="read-more">read more <i class="icon icon-angle-right"></i></a></p>
														</article>
													</div>
												</div>
												<div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">12</span>
																<span class="month">Jan</span>
															</div>
															<h4><a href="blog-post.html">ETA-China2014年软件应用培训已全面启动</a></h4>
															<p>ETA-China 于2014年4月15-18日在北京瑞城大酒店成功举办了为期4天的“LS-DYNA软件应用基础培训及汽车方面应用高级培训”，这标志着ETA-China2014年软件培训已全面启动。. <a href="/" class="read-more">read more <i class="icon icon-angle-right"></i></a></p>
														</article>
													</div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">11</span>
																<span class="month">Jan</span>
															</div>
															<h4><a href="blog-post.html">2013第一届中国LS-DYNA用户大会成功举行</a></h4>
															<p>ETA-China 2013年10月18日消息：2013年10月17日-18日美国LSTC公司在中国大连举办为期两天的“第一届中国LS-DYNA用户大会”，会议取得圆满成功。 <a href="/" class="read-more">read more <i class="icon icon-angle-right"></i></a></p>
														</article>
													</div>
												</div>
												<div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">15</span>
																<span class="month">Jan</span>
															</div>
															<h4><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. <a href="/" class="read-more">read more <i class="icon icon-angle-right"></i></a></p>
														</article>
													</div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">15</span>
																<span class="month">Jan</span>
															</div>
															<h4><a href="blog-post.html">ETA-China赞助“第七届板材冲压成形技术专题培训”</a></h4>
															<p>ETA-China 2013年4月22日消息：由中汽培训中心（CATTC)举办，ETA-China赞助的第七届板材冲压成形技术专题培训于2013年4月22日至25日在上海召开。奇瑞汽车、重庆长安、上海汽车、江淮汽车厂、北京比亚迪模具、广汽丰田、柳州五菱汽车工业、北京福田戴姆勒汽车等国内主要知名整车厂及模具厂的40多名工程师一起参加了此次培训。. <a href="/" class="read-more">read more <i class="icon icon-angle-right"></i></a></p>
														</article>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<h2><strong>What</strong> Client’s Say</h2>
									<div class="row">
										<div class="owl-carousel push-bottom" data-plugin-options='{"items": 1, "autoHeight": true}'>
											<div>
												<div class="col-md-12">
													<blockquote class="testimonial">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.  Donec hendrerit vehicula est, in consequat.  Donec hendrerit vehicula est, in consequat.</p>
													</blockquote>
													<div class="testimonial-arrow-down"></div>
													<div class="testimonial-author">
														<div class="img-thumbnail img-thumbnail-small">
															<img src="img/clients/ceo_1.png" alt="">
														</div>
														<p><strong>John Smith</strong><span>CEO & Founder - Okler</span></p>
													</div>
												</div>
											</div>
											<div>
												<div class="col-md-12">
													<blockquote class="testimonial">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</blockquote>
													<div class="testimonial-arrow-down"></div>
													<div class="testimonial-author">
														<div class="img-thumbnail img-thumbnail-small">
															<img src="img/clients/ceo_2.png" alt="">
														</div>
														<p><strong>John Smith</strong><span>CEO & Founder - Okler</span></p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>

			<!-- footer html-->
			<?php echo $footer; ?>
			<!-- Current Page JS -->
			<?php echo HTML::script('vendor/circle-flip-slideshow/js/jquery.flipshow.js'); ?>
			<?php echo HTML::script('vendor/nivo-slider/jquery.nivo.slider.js'); ?>
			<?php echo HTML::script('js/views/view.home.js'); ?>

		</div>
	</body>
</html>
			
