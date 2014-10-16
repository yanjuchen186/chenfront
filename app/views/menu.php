<header id="header">
	<div class="container">
		<h1 class="logo">
			<a href="index.html">
				<img alt="Porto" width="156" height="74" data-sticky-width="82" data-sticky-height="40" src="img/eta_logo_10.png">
			</a>
		</h1>
		<div class="search">
			<form id="searchForm" action="page-search-results.html" method="get">
				<div class="input-group">
					<input type="text" class="form-control search" name="q" id="q" placeholder="Search...">
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit"><i class="icon icon-search"></i></button>
					</span>
				</div>
			</form>
		</div>
		<nav>
			<ul class="nav nav-pills nav-top">
				<li>
					<a href="about-us.html"><i class="icon icon-angle-right"></i>About Us</a>
				</li>
				<li>
					<a href="contact-us.html"><i class="icon icon-angle-right"></i>Contact Us</a>
				</li>
				<li class="phone">
					<span><i class="icon icon-phone"></i>(123) 456-7890</span>
				</li>
			</ul>
		</nav>
		<button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
			<i class="icon icon-bars"></i>
		</button>
	</div>
	<div class="navbar-collapse nav-main-collapse collapse">
		<div class="container">
			<ul class="social-icons">
				<li class="facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook">Facebook</a></li>
				<li class="twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter">Twitter</a></li>
				<li class="linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin">Linkedin</a></li>
			</ul>
			<nav class="nav-main mega-menu">
				<ul class="nav nav-pills nav-main" id="mainMenu">
					<li class="active">
						<a  href="index.html">
							首页
						</a>
						
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" href="about-us-basic.html">
							关于eta
							<i class="icon icon-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="about-us-basic.html">ETA公司</a></li>
							<li><a href="about-parter.html">合作伙伴</a></li>
							<li><a href="page-careers.html">加入ETA</a></li>
						</ul>
					</li>
					<li>
						<a href="blog-medium-image.html">新闻发布</a>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" href="product.html">
							产品与服务
							<i class="icon icon-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="">VPG</a></li>
							<li><a href="">DYNAFORM</a></li>
							<li><a href="">LS-DYNA</a></li>
							<li><a href="">DTM</a></li>
							<li><a href="">3DCS</a></li>
							<li><a href="">Presys</a></li>
							<li><a href="">咨询服务</a></li>
							<li><a href="">培训服务</a></li>
							<li><a href="">高性能计算</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" href="soft.html">
							支持与下载
							<i class="icon icon-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="soft.html">软件下载</a></li>
							<li><a href="">手册下载</a></li>
						</ul>
					</li>
					<li>
						<a href="custom.html">行业客户</a>
					</li>
					
					<li class="dropdown mega-menu-item mega-menu-signin signin" id="headerAccount">
						<a class="dropdown-toggle" href="page-login.html">
							<i class="icon icon-user"></i> 登录
							<i class="icon icon-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li>
								<div class="mega-menu-content">
									<div class="row">
										<div class="col-md-12">

											<div class="signin-form">

												<span class="mega-menu-sub-title">登录</span>

												<form action="" id="" type="post">
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>邮箱</label>
																<input type="text" value="" class="form-control input-lg">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<a class="pull-right" id="headerRecover" href="#">(忘记密码?)</a>
																<label>密码</label>
																<input type="password" value="" class="form-control input-lg">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<span class="remember-box checkbox">
																<label for="rememberme">
																	<input type="checkbox" id="rememberme" name="rememberme">记住我
																</label>
															</span>
														</div>
														<div class="col-md-6">
															<input type="submit" value="登录" class="btn btn-primary pull-right push-bottom" data-loading-text="Loading...">
														</div>
													</div>
												</form>

												<p class="sign-up-info">还不是eta会员? <a href="#" id="headerSignUp">立刻注册!</a></p>

											</div>

											<div class="signup-form">
												<span class="mega-menu-sub-title">Create Account</span>

												<form action="" id="" type="post">
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>E-mail Address</label>
																<input type="text" value="" class="form-control input-lg">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="form-group">
															<div class="col-md-6">
																<label>Password</label>
																<input type="password" value="" class="form-control input-lg">
															</div>
															<div class="col-md-6">
																<label>Re-enter Password</label>
																<input type="password" value="" class="form-control input-lg">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<input type="submit" value="Create Account" class="btn btn-primary pull-right push-bottom" data-loading-text="Loading...">
														</div>
													</div>
												</form>

												<p class="log-in-info">Already have an account? <a href="#" id="headerSignIn">Log In!</a></p>
											</div>

											<div class="recover-form">
												<span class="mega-menu-sub-title">Reset My Password</span>
												<p>Complete the form below to receive an email with the authorization code needed to reset your password.</p>

												<form action="" id="" type="post">
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>E-mail Address</label>
																<input type="text" value="" class="form-control input-lg">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<input type="submit" value="Submit" class="btn btn-primary pull-right push-bottom" data-loading-text="Loading...">
														</div>
													</div>
												</form>

												<p class="log-in-info">Already have an account? <a href="#" id="headerRecoverCancel">Log In!</a></p>
											</div>

										</div>
									</div>
								</div>
							</li>
						</ul>
					</li>

				</ul>
			</nav>
		</div>
	</div>
</header>