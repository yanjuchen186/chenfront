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

			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="footer-ribbon">
							<span>Get in Touch</span>
						</div>
						<div class="col-md-3">
							<div class="newsletter">
								<h4>Newsletter</h4>
								<p>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>
			
								<div class="alert alert-success hidden" id="newsletterSuccess">
									<strong>Success!</strong> You've been added to our email list.
								</div>
			
								<div class="alert alert-danger hidden" id="newsletterError"></div>
			
								<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
									<div class="input-group">
										<input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
										<span class="input-group-btn">
											<button class="btn btn-default" type="submit">Go!</button>
										</span>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-3">
							<h4>Latest Tweet</h4>
							<div id="tweet" class="twitter" data-account-id="">
								<p>Please wait...</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-details">
								<h4>Contact Us</h4>
								<ul class="contact">
									<li><p><i class="icon icon-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</p></li>
									<li><p><i class="icon icon-phone"></i> <strong>Phone:</strong> (123) 456-7890</p></li>
									<li><p><i class="icon icon-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<h4>Follow Us</h4>
							<div class="social-icons">
								<ul class="social-icons">
									<li class="facebook"><a href="" target="_blank" data-placement="bottom" rel="tooltip" title="Facebook">Facebook</a></li>
									<li class="twitter"><a href="" target="_blank" data-placement="bottom" rel="tooltip" title="Twitter">Twitter</a></li>
									<li class="linkedin"><a href="" target="_blank" data-placement="bottom" rel="tooltip" title="Linkedin">Linkedin</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-1">
								<a href="index.html" class="logo">
									<img alt="Porto Website Template" class="img-responsive" src="img/logo-footer.png">
								</a>
							</div>
							<div class="col-md-7">
								<p>© Copyright 2014. All Rights Reserved.</p>
							</div>
							<div class="col-md-4">
								<nav id="sub-menu">
									<ul>
										<li><a href="page-faq.html">FAQ's</a></li>
										<li><a href="sitemap.html">Sitemap</a></li>
										<li><a href="contact-us.html">Contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Libs -->
		<script src="vendor/jquery.js"></script>
		<script src="vendor/jquery.appear.js"></script>
		<script src="vendor/jquery.easing.js"></script>
		<script src="vendor/jquery.cookie.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.js"></script>
		<script src="vendor/jquery.validate.js"></script>
		<script src="vendor/jquery.stellar.js"></script>
		<script src="vendor/jquery.knob.js"></script>
		<script src="vendor/jquery.gmap.js"></script>
		<script src="vendor/twitterjs/twitter.js"></script>
		<script src="vendor/isotope/jquery.isotope.js"></script>
		<script src="vendor/owl-carousel/owl.carousel.js"></script>
		<script src="vendor/jflickrfeed/jflickrfeed.js"></script>
		<script src="vendor/magnific-popup/magnific-popup.js"></script>
		<script src="vendor/mediaelement/mediaelement-and-player.js"></script>
		
		<!-- Theme Initializer -->
		<script src="js/theme.plugins.js"></script>
		<script src="js/theme.js"></script>
		
		<!-- Custom JS -->
		<script src="js/custom.js"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script type="text/javascript">
		
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-12345678-1']);
			_gaq.push(['_trackPageview']);
		
			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		
		</script>
		 -->

	</body>
</html>
