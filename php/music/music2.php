<!DOCTYPE html>
<html class="noIE" lang="en-US">
	<head>
		<meta charset="UTF-8" />
		<title>大鱼</title>
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
						<li><a href="../products_music.php">音乐</a></li>
						<li class="active">详情</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- SITE MAIN CONTENT -->
		<main id="main-content" role="main">
			<section class="section">
				<div class="container">
					<div class="row">
						<!-- PRODUCT PREVIEW -->
						<div class="col-xs-12 col-sm-4">
							<div class="product-preview">
								<div class="big-image">
									<a href="https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=2771760733,8307699&fm=27&gp=0.jpg" data-toggle="lightbox" >
										<img src="https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=2771760733,8307699&fm=27&gp=0.jpg" alt="" class = "products_img"/>
									</a>
								</div>
								<ul class="thumbs unstyled clearfix">
									<li><a href="https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=2771760733,8307699&fm=27&gp=0.jpg"><img src = "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=2771760733,8307699&fm=27&gp=0.jpg" alt = ""/></a></li>
									<li><a href="https://ss1.bdstatic.com/70cFuXSh_Q1YnxGkpoWK1HF6hhy/it/u=3555449634,3516454113&fm=27&gp=0.jpg"><img src="https://ss1.bdstatic.com/70cFuXSh_Q1YnxGkpoWK1HF6hhy/it/u=3555449634,3516454113&fm=27&gp=0.jpg" alt="" /></a></li>
								</ul>
							</div>
							
							
						</div>
						<!-- // PRODUCT PREVIEW -->
						<div class="space40 visible-xs"></div>
						<!-- PRODUCT DETAILS -->
						<div class="col-xs-12 col-sm-8">
							<section class="product-details add-cart">
								<header class="entry-header">
									<h2 class="entry-title uppercase">大鱼</h2>
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
												<span class="value">周深 </span>
											</li>
											<li>
												<span class="key">作词:</span>
												<span class="value">尹约</span>
											</li>
											<li>
												<span class="key">作曲:</span>
												<span class="value">钱雷</span>
											</li>
										</ul>
										
										<div class="clearfix"></div>
										
										<figcaption class="m-b-sm">
										<h5 class="subheader uppercase">歌曲简介:</h5>
										<p style ="text-indent: 2em;">《大鱼》是尹约、钱雷为《大鱼海棠》量身定制的电影印象曲，是二人继《何以笙箫默》的电影插曲《默》后的二度合作，二人在合作中产生了新的想法。而为了让周深演唱时更加精准地演绎歌曲情感，词作者尹约逐词逐句地告诉周深歌词的意义以及歌词背后的故事。在录音过程中，尹约为了升华感情，在歌曲的最后部分决定让周深自己和自己合唱。
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
					</div>
					<div clmass="m-t-lg">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#product-description" data-toggle="tab">歌手简介</a></li>
							<li><a href="#product-reviews" data-toggle="tab">创作背景</a></li>
							
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade in active" id="product-description">
								<strong style = "font-size:20px;color:black;">周深</strong>
								<p class ="product_text">
									1992年9月29日生，贵州贵阳人。2014浙江卫视《中国好声音》第三季学员，属那英战队。2016年6月毕业于乌克兰利沃夫国立音乐学院，美声专业。
								</p>
								
							</div>
							<div class="tab-pane fade in" id="product-reviews">
								<div class="comments-list">
									<p class ="product_text">《大鱼》是尹约、钱雷为《大鱼海棠》量身定制的电影印象曲，是二人继《何以笙箫默》的电影插曲《默》后的二度合作，二人在合作中产生了新的想法 。而为了让周深演唱时更加精准地演绎歌曲情感，词作者尹约逐词逐句地告诉周深歌词的意义以及歌词背后的故事。在录音过程中，尹约为了升华感情，在歌曲的最后部分决定让周深自己和自己合唱 。</p>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
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
											<img src="https://gss2.bdstatic.com/9fo3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike116%2C5%2C5%2C116%2C38/sign=59c82cbb2cdda3cc1fe9b07260805264/f2deb48f8c5494eee2e1ba3d2ff5e0fe98257ed6.jpg" alt="" class="lazyLoad thumb  products_img1" />
											<div class="hover">
												<a href="../book/book-2.php" class="entry-url"></a>
												<ul class="icons unstyled">
													
													<li>
														<a href="https://gss2.bdstatic.com/9fo3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike116%2C5%2C5%2C116%2C38/sign=59c82cbb2cdda3cc1fe9b07260805264/f2deb48f8c5494eee2e1ba3d2ff5e0fe98257ed6.jpg" alt="" class="lazyLoad thumb  products_img1" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
													</li>
													<li>
														<a href="#" class="circle add-to-cart"><i class="iconfont-heart"></i></a>
													</li>
												</ul>
												
											</div>
										</div>
										<div class="entry-main products_div">
											<h5 class="entry-title">
											<a href="../book/book-2.php" class="products_title">红高粱家族</a>
											</h5>
											<div class="entry-price">
												<a>莫言</a>
											</div>
											
										</div>
									</div>
								</div>
								<!-- // END CAROUSEL -->
								
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