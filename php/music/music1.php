<!DOCTYPE html>
<html class="noIE" lang="en-US">
	<head>
		<meta charset="UTF-8" />
		<title>恩赐</title>
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
									<a href="https://gss1.bdstatic.com/9vo3dSag_xI4khGkpoWK1HF6hhy/baike/w%3D268%3Bg%3D0/sign=df8291438c94a4c20a23e02d36cf7ce8/5ab5c9ea15ce36d3dc33f37c31f33a87e950b142.jpg" data-toggle="lightbox" >
										<img src="https://gss1.bdstatic.com/9vo3dSag_xI4khGkpoWK1HF6hhy/baike/w%3D268%3Bg%3D0/sign=df8291438c94a4c20a23e02d36cf7ce8/5ab5c9ea15ce36d3dc33f37c31f33a87e950b142.jpg" alt="" class = "products_img"/>
									</a>
								</div>
								<ul class="thumbs unstyled clearfix">
									<li><a href="https://gss1.bdstatic.com/9vo3dSag_xI4khGkpoWK1HF6hhy/baike/w%3D268%3Bg%3D0/sign=df8291438c94a4c20a23e02d36cf7ce8/5ab5c9ea15ce36d3dc33f37c31f33a87e950b142.jpg"><img src = "https://gss1.bdstatic.com/9vo3dSag_xI4khGkpoWK1HF6hhy/baike/w%3D268%3Bg%3D0/sign=df8291438c94a4c20a23e02d36cf7ce8/5ab5c9ea15ce36d3dc33f37c31f33a87e950b142.jpg" alt = ""/></a></li>
									<li><a href="https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=2848914793,461911549&fm=27&gp=0.jpgg"><img src="https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=2848914793,461911549&fm=27&gp=0.jpg" alt="" /></a></li>
								</ul>
							</div>
							
						</div>
						<!-- // PRODUCT PREVIEW -->
						<div class="space40 visible-xs"></div>
						<!-- PRODUCT DETAILS -->
						<div class="col-xs-12 col-sm-8">
							<section class="product-details add-cart">
								<header class="entry-header">
									<h2 class="entry-title uppercase">恩赐</h2>
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
												<span class="value">王楚然 </span>
											</li>
											<li>
												<span class="key">作词:</span>
												<span class="value">崔恕</span>
											</li>
											<li>
												<span class="key">作曲:</span>
												<span class="value">王可</span>
											</li>
										</ul>
										
										<div class="clearfix"></div>
										
										<figcaption class="m-b-sm">
										<h5 class="subheader uppercase">歌曲简介:</h5>
										<p>古装剧《将军在上》的插曲
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
								<strong style = "font-size:20px;color:black;">王楚然</strong>
								<p class ="product_text">
									1999年1月21日出生于上海市，中国内地女演员、歌手，就读于上海戏剧学院。
									2016年，参演校园话剧《遥远的家乡》，获得第十二届“文明风采”竞赛全国一等奖  。2017年10月，出演个人首部电视剧《将军在上》，从而正式进入演艺圈 ；12月，主演的现代爱情电影《将军在上之时空恋人》上线。
								</p>
								
							</div>
							<div class="tab-pane fade in" id="product-reviews">
								<div class="comments-list">
									<p class ="product_text">所有剧情里最悲的一点是，除了表妹以外的所有人，全都活下来了，而且幸福美满。只有她一个客死他乡，灵柩回乡，最后就算得到的梦寐以求的名份，也不能为他人道也……所有人都是色彩欢快明亮的，只有她，从头到尾，都是黑白两色，而那仅有的白色，叫做叶昭。</p>
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
											<a>【丹麦】安徒生</a>
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
				<script src="../../js/minified.js"></script>
				<script src="../../js/jquery.nouislider.js"></script><!--jQuery区域范围滑块插件noUiSlider-->
				<script src="../../js/owl.carousel.js"></script>
				<script src="../../js/products.js"></script>
			</body>
		</html>