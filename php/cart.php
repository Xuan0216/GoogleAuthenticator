<!DOCTYPE html>
<html class="noIE" lang="en-US">
	<head>
		<meta charset="UTF-8" />
		<title>收藏夹</title>
		<meta name="description" content=""/>
		<meta name="keywords" content=""/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="icon" href="../img/favicon/favicon.html" type="image/x-icon" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/minified.css">
		<script type="text/javascript" src="../js/jquery.min.js" ></script>
		<script src="../js/modernizr.min.js"></script>
		<link rel="stylesheet" href="../css/jquery.nouislider.css">
		<link rel="stylesheet" href="../css/isotope.css">
		<link rel="stylesheet" href="../css/innerpage.css">
		<!-- // PARTICULAR PAGES CSS FILES -->
		<link rel="stylesheet" href="../css/responsive.css">
	</head>
	<body>
		<body class="products-view">
			
			<!-- PAGE WRAPPER -->
			<div id="page-wrapper">
				<!-- SITE HEADER -->
				
				<header id="site-header" role="banner">
					<!-- HEADER TOP -->
					
					<div class="header-top">
						<div class="container">
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-7">
									<!-- CONTACT INFO -->
									<div class="contact-info">
										<i class="fa fa-headphones round-icon"></i>
										<strong>亦书亦音</strong>
										<span>享受你的美好生活</span>
									</div>
									<!-- // CONTACT INFO -->
								</div>
								<div class="col-xs-12 col-sm-6 col-md-5">
									<ul class="actions unstyled clearfix">
										
										<li data-toggle="sub-header"data-target="#sub-social">
											<!-- SOCIAL ICONS -->
											
											<i class="fa fa-user"style = "color:gray"></i>
											<span>您好,</span>
											<?php
											session_start();
											echo $_SESSION['M_id'];
											?>
											<a id="social-icons">
												<a  href = "../login.html">
													<?php
													echo "/退出";
													?>
												</a>
											</a>
											<!-- // SOCIAL ICONS -->
										</li>
										<li data-toggle="sub-header"data-target="#sub-cart">
											<!-- SHOPPING CART -->
											<a href="cart.php"id="total-cart">
												<i class="fa fa-heart round-icon"></i>
											</a>
											
											<!-- // SHOPPING CART -->
										</li>
									</ul>
								</div>
							</div>
						</div>
						
						
						<!-- ADD TO CART MESSAGE -->
						<div class="cart-notification">
						<ul class="unstyled"></ul>
					</div>
					<!-- // ADD TO CART MESSAGE -->
				</div>
				<!-- // HEADER TOP -->
				<!-- MAIN HEADER -->
				<div class="main-header-wrapper">
					<div class="container">
						<div class="main-header">
							<!-- CURRENCY / LANGUAGE / USER MENU -->
							<div class="actions">
								<div class="clearfix"></div>
								
								<!-- // USER RELATED MENU -->
							</div>
							<!-- // CURRENCY / LANGUAGE / USER MENU -->
							<!-- SITE LOGO -->
							<div class="logo-wrapper">
								
								<img src="../img/logo.png" alt="GFashion - Responsive e-commerce HTML Template" />
								
							</div>
							<!-- // SITE LOGO -->
							<!-- SITE NAVIGATION MENU -->
							<nav id="site-menu" role="navigation">
								<ul class="main-menu">
									<li >
										<a href="index.php">首页</a>
									</li>
									<li class="active">
										<a href="products_book.php">书籍</a>
									</li>
									<li>
										<a href="products_music.php">音乐</a>
									</li>
									
								</ul>
								
							</nav>
							<!-- // SITE NAVIGATION MENU -->
						</div>
					</div>
				</div>
				<!-- // MAIN HEADER -->
			</header>
		</header>
		<!-- // SITE HEADER -->
		
		<!-- BREADCRUMB -->
		<div class="breadcrumb-container">
			<div class="container">
				<div class="relative">
					<ul class="bc unstyled clearfix">
						<li><a href="index.php">首页</a></li>
						<li class="active">收藏夹</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- // BREADCRUMB -->
		
		<!-- SITE MAIN CONTENT -->
		<main id="main-content" role="main">
			
			<section class="section">
				<div class="container">
					
					<table class="tbl-cart" >
						<thead>
							<tr>
								<th style="text-align: left; font-size:20px;">收藏列表</th>
								
								<th  style="width: 10%;"></th>
							</tr>
						</thead>
						<tbody>
							<tr class="hide empty-cart">
								<td colspan="5">
									你的收藏为空 <a href="products_book.php">去添加~</a>.
								</td>
							</tr>
						</tbody>
					</table>
					
					
					
				</div>
			</section>
			
			
		</main>
		<!-- // SITE MAIN CONTENT -->
		
		<!-- SITE FOOTER -->
		<footer class="page-footer">
			
			<!-- WIDGET AREA -->
			<div class="widgets">
				
				<!-- SECOND ROW -->
				<div class="section">
					<div class="container">
						<div class="row">
							
							<div class="col-xs-12 col-sm-12 col-md-3">
								<section class="widget widget-menu">
									<h5 class="widget-title">联系我们</h5>
									<div class="widget-content">
										<ul class="menu iconed-list unstyled">
											<li>
												<span class="list-icon"><i class="round-icon fa fa-map-marker"></i></span>
												<div class="list-content">杭州</div>
											</li>
											<li>
												<span class="list-icon"><i class="round-icon fa fa-phone"></i></span>
												<div class="list-content">15990184855</div>
											</li>
											<li>
												<span class="list-icon"><i class="round-icon fa fa-envelope"></i></span>
												<div class="list-content">631674132@qq.com</div>
											</li>
										</ul>
									</div>
								</section>
							</div>
							
							<div class="col-xs-12 col-sm-12 col-md-6">
								<section class="widget widget-ads">
									<div class="widget-content">
										<div class="center-xs">
											<div class="ads">
												<a href="#">
													<img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1529422283729&di=597a9e5378aa9628686ae98c9a645c95&imgtype=0&src=http%3A%2F%2Fimg.qdaily.com%2Farticle%2Farticle_show%2F20160702105013tQhLKupmyzal7HPs.jpg%3FimageMogr2%2Fauto-orient%2Fthumbnail%2F%25211200x380r%2Fgravity%2FCenter%2Fcrop%2F1200x380%2Fquality%2F85%2Fformat%2Fjpg%2Fignore-error%2F1" alt="" />
												</a>
												<div class="ads-caption bottom-right">
													<a href="index.php" class="btn btn-default btn-round">
														<i class="round-icon fa fa-angle-right"></i>
														<span class="inline-middle">了解更多</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
							
							<div class="col-xs-12 col-sm-12 col-md-3">
								<section class="widget widget-subscription">
									<h5 class="widget-title">亦书亦音</h5>
									<div class="widget-content">
										<p>有新推荐·联系你</p>
										<form action="#" method="post">
											<div class="input-group">
												<label for="subscription-email" class="placeholder"> Your Email</label>
												<input type="email" id="subscription-email" name="email" class="form-control" required />
												<span class="input-group-btn">
													<button class="btn btn-primary">参与</button>
												</span>
											</div>
										</form>
									</div>
								</section>
							</div>
							
						</div>
					</div>
				</div>
				<!-- // SECOND ROW -->
				
			</div>
			<!-- // WIDGET AREA -->
			
			
			<div class="footer-sub">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							
							<div class="space10"></div>
							
						</div>
						
						<div class="space40 visible-xs"></div>
						
						<div class="col-xs-12 col-sm-6 center-xs">
							<div class="pull-right">
								<div class="vmid">
									<span class="uppercase">友情链接 ：</span>
									<a href="http://bang.dangdang.com/" target="_blank">当当书城、<a>
										<a href="https://www.zhihu.com" target="_blank">知乎、<a>
											<a href="https://www.taobao.com" target="_blank">淘宝、<a>
												<a href="https://www.baidu.com" target="_blank">百度<a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</footer>
						<!-- // SITE FOOTER -->
						
					</div>
					<!-- // PAGE WRAPPER -->
					<!-- Essential Javascripts -->
					<script src="../js/minified.js"></script>
					<script src="../js/products.js"></script>
					<script src="../js/owl.carousel.js"></script>
					<!-- // Particular Page Javascripts -->
					
				</body>
			</html>