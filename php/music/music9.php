<!DOCTYPE html>
<html class="noIE" lang="en-US">
	<head>
		<meta charset="UTF-8" />
		<title>喜欢你</title>
		<meta name="description" content=""/>
		<meta name="keywords" content=""/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
		
		<link rel="stylesheet" href="../../css/minified.css">
		<link rel="stylesheet" href="../../css/jquery.nouislider.css">
		<link rel="stylesheet" href="../../css/owl.carousel.css">
		<link rel="stylesheet" href="../../css/owl.theme.css">
		<link rel="stylesheet" href="../../css/innerpage.css">
		<link rel="stylesheet" href="../../css/responsive.css">
		<script type="text/javascript" src="../../js/jquery.min.js" ></script>
	</head>
	<body class="product-single">
		
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
											<a  href = "../../login.html">
												<?php
												echo "/退出";
												?>
											</a>
										</a>
										<!-- // SOCIAL ICONS -->
									</li>
									<li data-toggle="sub-header"data-target="#sub-cart">
										<!-- SHOPPING CART -->
										<a href="../cart.php"id="total-cart">
											<i class="fa fa-heart round-icon"></i>
										</a>
										
										<!-- // CART -->
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
							
							<img src="../../img/logo.png" alt="GFashion - Responsive e-commerce HTML Template" />
							
						</div>
						<!-- // SITE LOGO -->
						<!-- SITE NAVIGATION MENU -->
						<nav id="site-menu" role="navigation">
							<ul class="main-menu">
								<li >
									<a href="../index.php">首页</a>
								</li>
								<li>
									<a href="../products_book.php">书籍</a>
								</li>
								<li class="active">
									<a href="../products_music.php">音乐</a>
								</li>
								
							</ul>
							
						</nav>
						<!-- // SITE NAVIGATION MENU -->
					</div>
				</div>
			</div>
			<!-- // MAIN HEADER -->
		</header>
		<!-- // SITE HEADER -->
		
		<!-- 单品详细BREADCRUMB -->
		<div class="breadcrumb-container">
			<div class="container">
				<div class="relative">
					<ul class="bc unstyled clearfix">
						<li><a href="#">首页</a></li>
						<li><a href="../../products_music.php">音乐</a></li>
						<li class="active">详情</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- // BREADCRUMB -->
		
		<!-- SITE MAIN CONTENT -->
		<main id="main-content" role="main">
			
			<section class="section">
				<div class="container">
					<div class="row">
						<!-- PRODUCT PREVIEW -->
						<div class="col-xs-12 col-sm-4">
							<div class="product-preview">
								<div class="big-image">
									<a href="https://gss1.bdstatic.com/9vo3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike150%2C5%2C5%2C150%2C50/sign=daf240cf63600c33e474d69a7b253a6a/a044ad345982b2b76133ba1f39adcbef77099bb9.jpg" data-toggle="lightbox" >
										<img src="https://gss1.bdstatic.com/9vo3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike150%2C5%2C5%2C150%2C50/sign=daf240cf63600c33e474d69a7b253a6a/a044ad345982b2b76133ba1f39adcbef77099bb9.jpg" alt="" class = "products_img"/>
									</a>
								</div>
								<ul class="thumbs unstyled clearfix">
									<li><a href="https://gss1.bdstatic.com/9vo3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike150%2C5%2C5%2C150%2C50/sign=daf240cf63600c33e474d69a7b253a6a/a044ad345982b2b76133ba1f39adcbef77099bb9.jpg"><img src = "https://gss1.bdstatic.com/9vo3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike150%2C5%2C5%2C150%2C50/sign=daf240cf63600c33e474d69a7b253a6a/a044ad345982b2b76133ba1f39adcbef77099bb9.jpg" alt = ""/></a></li>
									<li><a href="https://gss2.bdstatic.com/-fo3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike80%2C5%2C5%2C80%2C26/sign=d827cac40a7b020818c437b303b099b6/91ef76c6a7efce1b2b372aabaf51f3deb48f65b7.jpg"><img src="https://gss2.bdstatic.com/-fo3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike80%2C5%2C5%2C80%2C26/sign=d827cac40a7b020818c437b303b099b6/91ef76c6a7efce1b2b372aabaf51f3deb48f65b7.jpg" alt="" /></a></li>
								</ul>
							</div>
							
						</div>
						<!-- // PRODUCT PREVIEW -->
						<div class="space40 visible-xs"></div>
						<!-- PRODUCT DETAILS -->
						<div class="col-xs-12 col-sm-8">
							<section class="product-details add-cart">
								<header class="entry-header">
									<h2 class="entry-title uppercase">喜欢你</h2>
								</header>
								<article class="entry-content">
									<figure>
										<span class="entry-price inline-middle">评分</span>
										<div class="rate-bar inline-middle">
											<input type="range" value="4.5" step="0.5" id="backing0" />
											<div class="rateit" data-rateit-backingfld="#backing0" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
										</div>
										
										
										<ul class="entry-meta unstyled">
											<li>
												<span class="key">歌手:</span>
												<span class="value">黄家驹</span>
											</li>
											<li>
												<span class="key">作词:</span>
												<span class="value">黄家驹</span>
											</li>
											<li>
												<span class="key">作曲:</span>
												<span class="value">黄家驹</span>
											</li>
										</ul>
										
										<div class="clearfix"></div>
										
										<figcaption class="m-b-sm">
										<h5 class="subheader uppercase">歌曲简介:</h5>
										<p style = "text-indent: 2em;">《喜欢你》是中国香港摇滚乐队Beyond的一首音乐作品，由黄家驹作词、作曲并演唱，收录在Beyond1988年9月6日发行的专辑《秘密警察》。这首歌曲是Beyond的代表作品之一。
										</p>
										</figcaption>
										
										
										
										<ul class="inline-li li-m-r-l m-t-lg ul_music">
											<li>
												<a href="#" class="btn btn-round btn-default add-to-cart visible-list  collect_btn">收藏</a>
											</li>
											
											<li>
												<div class="btn-audio">
													<audio id="mp3Btn">
														<source src="http://47.106.68.189/wp-content/uploads/2018/06/
														王楚然-恩赐.mp3" type="audio/mpeg" />
													</audio>
												</div>
												
											</li>
											
										</ul>
									</figure>
								</article>
							</section>
						</div>
						<!-- // PRODUCT DETAILS -->
					</div>
					<div clmass="m-t-lg">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#product-description" data-toggle="tab">歌手简介</a></li>
							<li><a href="#product-reviews" data-toggle="tab">创作背景</a></li>
							
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade in active" id="product-description">
								<strong style = "font-size:20px;color:black;">黄家驹</strong>
								<p class ="product_text">
									黄家驹（1962年6月10日-1993年6月30日），出生于香港，中国香港男歌手、原创音乐人、吉他手、摇滚乐队Beyond主唱、节奏吉他手及创队成员。1983年以歌曲《大厦》出道，并担任Beyond乐队的主唱。
								</p>
								
							</div>
							<div class="tab-pane fade in" id="product-reviews">
								<div class="comments-list">
									<p class ="product_text">《喜欢你》是黄家驹写给和自己已经分手的女友的一首歌曲。最初做音乐时，由于某些原因黄家驹不得不放弃深爱着的女友，把时间和精力放到音乐之中，这令他十分愧疚。所以他便写了《喜欢你》这首歌，表达对失去爱情的苦楚。</p>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- FEATURED PRODUCTS -->
			<!-- FEATURED PRODUCTS -->
			<section class="section featured visible-items-4">
				<div class="container">
					<div class="row">
						<header class="section-header clearfix col-sm-offset-3 col-sm-6">
							<h3 class="section-title">搭配书籍</h3>
						</header>
						
						<div class="clearfix"></div>
						
						<!-- BEGIN CAROUSEL -->
						<div id="featured-products" class="add-cart" data-product=".product" data-thumbnail=".entry-media .thumb" data-title=".entry-title > a" data-url=".entry-title > a" data-price=".entry-price > .price">
							
							<div class="owl-controls clickable top">
								<div class="owl-buttons">
									<div class="owl-prev"><i class="fa fa-angle-left"></i></div>
									<div class="owl-next"><i class="fa fa-angle-right"></i></div>
								</div>
							</div>
							<div class="owl-carousel owl-theme" data-visible-items="4" data-navigation="true" data-lazyload="true">
								<div class="product" data-product-id="1">
									<div class="entry-media">
										<img src="https://img.25pp.com/uploadfile/soft/images/2015/0403/20150403105730750.jpeg" alt="" class="lazyLoad thumb products_img1" alt="" class="lazyOwl thumb products_img1" />
										<div class="hover">
											<a href="../book/book-5.php" class="entry-url"></a>
											<ul class="icons unstyled">
												
												<li>
													<a href="https://img.25pp.com/uploadfile/soft/images/2015/0403/20150403105730750.jpeg" alt="" class="lazyLoad thumb products_img1" class="circle" data-toggle="lightbox"><i class="fa fa-search"></i></a>
													<li>
														<a href="#" class="circle heart add-to-cart"><i class="iconfont-heart"></i></a>
													</li>
													
												</li>
												
											</ul>
											<div class="rate-bar">
												<input type="range" value="4.5" step="0.5" id="backing1" />
												<div class="rateit" data-rateit-backingfld="#backing1" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
											</div>
										</div>
									</div>
									<div class="entry-main products_div">
										<h5 class="entry-title">
										<a href="../book/book-5.php" class="products_title">安徒生童话</a>
										</h5>
										<div class="entry-price">
											<a>丹麦】安徒生</a>
										</div>
										
									</div>
								</div>
							</div>
						</section>
						<!-- // FEATURED PRODUCTS -->
						
					</main>
					<!-- SECOND ROW -->
					
					<!-- // SITE FOOTER -->
					
				</div>
				<!-- // PAGE WRAPPER -->
				<!-- Essential Javascripts -->
				<script src="../../js/minified.js"></script>
				<!-- // Essential Javascripts -->
				<!-- Particular Page Javascripts -->
				<script src="../../js/jquery.nouislider.js"></script><!--jQuery区域范围滑块插件noUiSlider-->
				<script src="../../js/owl.carousel.js"></script>
				<script src="../../js/products.js"></script>
			</body>
		</html>