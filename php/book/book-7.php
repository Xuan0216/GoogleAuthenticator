<!DOCTYPE html>
<html class="noIE" lang="en-US">
	<head>
		<meta charset="UTF-8" />
		<title>悲惨世界</title>
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
								<li class="active">
									<a href="../products_book.php">书籍</a>
								</li>
								<li>
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
		<!-- 单品详细 -->
		<div class="breadcrumb-container">
			<div class="container">
				<div class="relative">
					<ul class="bc unstyled clearfix">
						<li><a href="#">首页</a></li>
						<li><a href="../products_book.php">书籍</a></li>
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
									<a href="http://e.hiphotos.baidu.com/baike/w%3D230/sign=edc913da9b22720e7bcee5f94bca0a3a/cb8065380cd7912373e322ccae345982b2b78003.jpg" data-toggle="lightbox">
										<img src="http://e.hiphotos.baidu.com/baike/w%3D230/sign=edc913da9b22720e7bcee5f94bca0a3a/cb8065380cd7912373e322ccae345982b2b78003.jpg" alt=""  class="products_img1"/>
									</a>
								</div>
								<ul class="thumbs unstyled clearfix">
									<li>
										<a href="http://e.hiphotos.baidu.com/baike/w%3D230/sign=edc913da9b22720e7bcee5f94bca0a3a/cb8065380cd7912373e322ccae345982b2b78003.jpg" data-toggle="lightbox">
											<img src="http://e.hiphotos.baidu.com/baike/w%3D230/sign=edc913da9b22720e7bcee5f94bca0a3a/cb8065380cd7912373e322ccae345982b2b78003.jpg" alt="" />
										</a></li>
										<li><a href="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1529321429332&di=68e1440375bbbfb947bd65320d98e080&imgtype=0&src=http%3A%2F%2Fh.hiphotos.baidu.com%2Fbaike%2Fpic%2Fitem%2Fd833c895d143ad4bdeb8a7848b025aafa50f06db.jpg">
										<img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1529321429332&di=68e1440375bbbfb947bd65320d98e080&imgtype=0&src=http%3A%2F%2Fh.hiphotos.baidu.com%2Fbaike%2Fpic%2Fitem%2Fd833c895d143ad4bdeb8a7848b025aafa50f06db.jpg" alt="" /></a></li>
									</ul>
								</div>
								
							</div>
							<!-- // PRODUCT PREVIEW -->
							<div class="space40 visible-xs"></div>
							<!-- PRODUCT DETAILS -->
							<div class="col-xs-12 col-sm-8">
								<section class="product-details add-cart">
									<header class="entry-header">
										<h2 class="entry-title uppercase">悲惨世界</h2>
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
													<span class="key">作者:</span>
													<span class="value">【法】雨果 </span>
												</li>
												<li>
													<span class="key">出版社:</span>
													<span class="value">南海出版社</span>
												</li>
												<li>
													<span class="key">出版时间:</span>
													<span class="value">1862</span>
												</li>
											</ul>
											
											<div class="clearfix"></div>
											
											<figcaption class="m-b-sm">
											<h5 class="subheader uppercase">内容提要:</h5>
											<p>《悲惨世界(上中下)(精)》是雨果在流亡期间写的长篇小说，是他的代表作，也是世界文学宝库的珍品之一。
												《悲惨世界(上中下)(精)》通过冉阿让等人的悲惨遭遇以及冉阿让被卞福汝主教感化后一系列令人感动的事迹，深刻揭露和批判了19世纪法国封建专制社会的腐朽本质及其罪恶现象，对穷苦人民在封建重压下所遭受的剥削欺诈和残酷迫害表示了悲悯和同情。
											</p>
											</figcaption>
											
											
											<ul class="inline-li li-m-r-l m-t-lg">
												<li>
													<a href="#" class="btn btn-round btn-default add-to-cart visible-list">收藏</a>
												</li>
												<li>
													<a href="../../html/read-book.html" target="_blank">开启阅读时光</a>
													
												</li>
												
												
											</ul>
											
										</figure>
									</article>
								</section>
							</div>
							<!-- // PRODUCT DETAILS -->
						</div>
						<div class="m-t-lg">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#product-description" data-toggle="tab">作者简介</a></li>
								<li><a href="#product-reviews" data-toggle="tab">创作背景</a></li>
								<li><a href="#product-shipping" data-toggle="tab">推荐理由</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane fade in active" id="product-description">
									<p>
									维克多·雨果（Victor Hugo，1802年2月26日—1885年5月22日），法国作家，19世纪前期积极浪漫主义文学的代表作家，人道主义的代表人物，法国文学史上卓越的资产阶级民主作家，被人们称为“法兰西的莎士比亚”。一生写过多部诗歌、小说、剧本、各种散文和文艺评论及政论文章，在法国及世界有着广泛的影响力。</p>
									<ul>
										
										<li>1823年，随着自由主义日趋高涨，雨果的政治态度发生改变，他与浪漫派文艺青年缪塞、大仲马等人组成“第二文社”，开始明确反对伪古典主义。</li>
										<li>1831年，雨果的长篇小说《巴黎圣母院》（Notre-Dame de Paris）问世，这部小说是雨果最富有浪漫主义小说。</li>
										<li>1853年，政治讽刺诗集《惩罚集》问世。《惩罚集》充满革命气势，曾在第二次世界大战期间成为鼓舞爱国志士反纳粹的斗志。</li>
										
									</ul>
								</div>
								<div class="tab-pane fade in" id="product-reviews">
									<div class="comments-list">
										<div id="disqus_thread"></div>
										<p>1830年，法国发生了“七月革命”，封建复辟王朝被翻。雨果热情赞扬革命，歌颂那些革命者，写诗哀悼那些在巷战中牺牲的英雄。七月革命后，雨果也在政治上进一步走上左翼的道路.
											<p>
												
											</div>
										</div>
										<div class="tab-pane fade in" id="product-shipping">
											
											<h5 class="m-b-xs"><i class="fa fa-gift inline-middle m-r-sm"></i><span class="inline-middle"></span></h5>
											<p>1862年，雨果的长篇小说《悲惨世界》问世，书中揭露了资本主义社会的尖锐矛盾和贫富悬殊，描写了下层人民的痛苦命运，提出了当时社会的三个迫切问题：贫穷使男子潦倒，饥饿使妇女堕落，黑暗使儿童羸弱。猛烈抨击了资产阶级法律的虚伪。小说受到全世界人民的欢迎。</p>
										</div>
									</div>
								</div>
							</div>
						</section>
						<!-- FEATURED PRODUCTS -->
						<section class="section featured visible-items-4">
							<div class="container">
								<div class="row">
									<header class="section-header clearfix col-sm-offset-3 col-sm-6">
										<h3 class="section-title">伴读音乐推荐</h3>
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
													<img src="https://gss1.bdstatic.com/-vo3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike80%2C5%2C5%2C80%2C26/sign=ab957c15d9b44aed4d43b6b6d275ec64/2fdda3cc7cd98d102c64736e223fb80e7bec9038.jpg" alt="" class="lazyLoad thumb music_img products_img" />
													<div class="hover">
														<a href="../music/music4.php" class="entry-url"></a>
														<ul class="icons unstyled">
															
															<li>
																<a href="https://gss1.bdstatic.com/-vo3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike80%2C5%2C5%2C80%2C26/sign=ab957c15d9b44aed4d43b6b6d275ec64/2fdda3cc7cd98d102c64736e223fb80e7bec9038.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
															</li>
															<li>
																<a href="#" class="circle add-to-cart"><i class="iconfont-heart"></i></a>
															</li>
														</ul>
														
													</div>
												</div>
												<div class="entry-main products_div">
													<h5 class="entry-title">
													<a href="../music/music4.php"><p class="accent-color price products_title">偿还（つぐない）</p></a>
													</h5>
													<div class="entry-price">
														<strong>邓丽君</strong>
														<a href="#" class="btn btn-round btn-default add-to-cart visible-list">我喜欢</a>
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
						<!-- // SITE MAIN CONTENT -->
						
						<!-- SITE FOOTER -->
						<footer class="page-footer">
							
							<div class="footer-sub">
								<div class="container">
									<div class="row">
										<div class="space40 visible-xs"></div>
										<div class="col-xs-12 col-sm-6"><div class="space10"></div></div>
										<div class="col-xs-12 col-sm-6 center-xs">
											<div class="pull-right">
												<div class="vmid">
													<span class="uppercase">友情链接 ：</span>
													<a href="http://bang.dangdang.com/" target="_blank">当当书城、</a>
													<a href="https://www.zhihu.com" target="_blank">知乎、</a>
													<a href="https://www.taobao.com" target="_blank">淘宝、</a>
													<a href="https://www.baidu.com" target="_blank">百度</a>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</footer>
						<!-- // SITE FOOTER -->
						
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