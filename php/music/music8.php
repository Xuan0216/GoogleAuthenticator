<!DOCTYPE html>
<html class="noIE" lang="en-US">
	<head>
		<meta charset="UTF-8" />
		<title>PERSONA</title>
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
		
		<!-- 单品-->
		<div id="page-wrapper">
			
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
										<a href="https://gss2.bdstatic.com/9fo3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike80%2C5%2C5%2C80%2C26/sign=c916473dfe198618554ae7d62b844516/77094b36acaf2eddd9c18bb58b1001e9390193be.jpg" data-toggle="lightbox" >
											<img src="https://gss2.bdstatic.com/9fo3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike80%2C5%2C5%2C80%2C26/sign=c916473dfe198618554ae7d62b844516/77094b36acaf2eddd9c18bb58b1001e9390193be.jpg" alt="" class = "products_img"/>
										</a>
									</div>
									<ul class="thumbs unstyled clearfix">
										<li><a href="https://gss2.bdstatic.com/9fo3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike80%2C5%2C5%2C80%2C26/sign=c916473dfe198618554ae7d62b844516/77094b36acaf2eddd9c18bb58b1001e9390193be.jpg"><img src = "https://gss2.bdstatic.com/9fo3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike80%2C5%2C5%2C80%2C26/sign=c916473dfe198618554ae7d62b844516/77094b36acaf2eddd9c18bb58b1001e9390193be.jpg" alt = ""/></a></li>
										<li><a href="https://gss0.bdstatic.com/-4o3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike80%2C5%2C5%2C80%2C26/sign=eca3ae9331adcbef15397654cdc645b8/b7fd5266d01609249719354cd40735fae6cd34ac.jpg"><img src="https://gss0.bdstatic.com/-4o3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike80%2C5%2C5%2C80%2C26/sign=eca3ae9331adcbef15397654cdc645b8/b7fd5266d01609249719354cd40735fae6cd34ac.jpg" alt="" /></a></li>
									</ul>
								</div>
								
							</div>
							<!-- // PRODUCT PREVIEW -->
							<div class="space40 visible-xs"></div>
							<!-- PRODUCT DETAILS -->
							<div class="col-xs-12 col-sm-8">
								<section class="product-details add-cart">
									<header class="entry-header">
										<h2 class="entry-title uppercase">PERSONA</h2>
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
													<span class="value">安七炫</span>
												</li>
												<li>
													<span class="key">作词:</span>
													<span class="value">安七炫</span>
												</li>
												<li>
													<span class="key">作曲:</span>
													<span class="value">安七炫</span>
												</li>
											</ul>
											
											<div class="clearfix"></div>
											
											<figcaption class="m-b-sm">
											<h5 class="subheader uppercase">歌曲简介:</h5>
											<p style = "text-indent: 2em;">这首歌由安七炫自己作词作曲，描述了在离别前，一个内心承受煎熬的男人的最真实的心境描写。
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
									<strong style = "font-size:20px;color:black;">安七炫</strong>
									<p class ="product_text">
										安七炫（Kang Ta），1979年11月29日出生于韩国庆尚北道醴泉郡，韩国男歌手、演员、词曲创作者，韩国SM娱乐有限公司旗下艺人、理事，前男子演唱组合H.O.T成员。
									</p>
									
								</div>
								<div class="tab-pane fade in" id="product-reviews">
									<div class="comments-list">
										<p class ="product_text">这是一首结合爵士，R&B,流行等元素曲子，很简洁单纯的Drum让R&B的感觉更重，再加上听起来很顺耳的旋律，Nylon Guitar的琴声让曲子更显伤悲，越发让人感到哀凄。为心爱女人送行时，男人表面与真心话的交错，表现出男人在离别前真正的心意，与悲伤的旋律与幻想非常调和。</p>
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
											<img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1529316684742&di=4148f8d591d7aa3a6c194c10b5b04c9c&imgtype=0&src=http%3A%2F%2Fimg4.duitang.com%2Fuploads%2Fitem%2F201601%2F03%2F20160103182508_JTjPd.jpeg" alt="" class="lazyOwl thumb products_img1" />
											<div class="hover">
												<a href="../book/book-3.php" class="entry-url"></a>
												<ul class="icons unstyled">
													
													<li>
														<a href="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1529316684742&di=4148f8d591d7aa3a6c194c10b5b04c9c&imgtype=0&src=http%3A%2F%2Fimg4.duitang.com%2Fuploads%2Fitem%2F201601%2F03%2F20160103182508_JTjPd.jpeg" class="circle" data-toggle="lightbox"><i class="fa fa-search"></i></a>
														<li>
															<a href="#" class="circle heart"><i class="iconfont-heart"></i></a>
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
											<a href="../book/book-3.php" class="products_title">傲慢与偏见</a>
											</h5>
											<div class="entry-price">
												<a>【英】简.奥斯丁</a>
												
											</div>
											
										</div>
									</div>
								</div>
							</section>
							<!-- // FEATURED PRODUCTS -->
						</div>
					</div>
				</div>
				
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