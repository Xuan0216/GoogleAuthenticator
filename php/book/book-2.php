<!DOCTYPE html>
<html class="noIE" lang="en-US">
	<head>
		<meta charset="UTF-8" />
		<title>红高粱</title>
		<meta name="description" content=""/>
		<meta name="keywords" content=""/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
		<!-- Favorite Icons -->
		<link rel="icon" href="../../img/favicon/favicon.html" type="image/x-icon" />
		<!-- GENERAL CSS FILES -->
		<link rel="stylesheet" href="../../css/minified.css">
		<!-- // GENERAL CSS FILES -->
		<script type="text/javascript" src="../../js/jquery.min.js" ></script>
		<!-- PARTICULAR PAGES CSS FILES -->
		<link rel="stylesheet" href="../../css/jquery.nouislider.css">
		<link rel="stylesheet" href="../../css/owl.carousel.css">
		<link rel="stylesheet" href="../../css/owl.theme.css">
		<link rel="stylesheet" href="../../css/innerpage.css">
		<!-- // PARTICULAR PAGES CSS FILES -->
		<link rel="stylesheet" href="../../css/responsive.css">
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
		<!-- 单品详细BREADCRUMB -->
		<div class="breadcrumb-container">
			<div class="container">
				<div class="relative">
					<ul class="bc unstyled clearfix">
						<li><a href="#">首页</a></li>
						<li><a href="products.html">书籍</a></li>
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
									<a href="https://gss2.bdstatic.com/9fo3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike116%2C5%2C5%2C116%2C38/sign=59c82cbb2cdda3cc1fe9b07260805264/f2deb48f8c5494eee2e1ba3d2ff5e0fe98257ed6.jpg" data-toggle="lightbox">
										<img src="https://gss2.bdstatic.com/9fo3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike116%2C5%2C5%2C116%2C38/sign=59c82cbb2cdda3cc1fe9b07260805264/f2deb48f8c5494eee2e1ba3d2ff5e0fe98257ed6.jpg" alt="" />
									</a>
								</div>
								<ul class="thumbs unstyled clearfix">
									<li><a href="https://gss2.bdstatic.com/9fo3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike116%2C5%2C5%2C116%2C38/sign=59c82cbb2cdda3cc1fe9b07260805264/f2deb48f8c5494eee2e1ba3d2ff5e0fe98257ed6.jpg" data-toggle="lightbox">
									<img src="https://gss2.bdstatic.com/9fo3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike116%2C5%2C5%2C116%2C38/sign=59c82cbb2cdda3cc1fe9b07260805264/f2deb48f8c5494eee2e1ba3d2ff5e0fe98257ed6.jpg" alt=""/></a></li>
									<li><a href="http://e.hiphotos.baidu.com/baike/pic/item/55e736d12f2eb9381725a006dd628535e4dd6ffe.jpg" data-toggle="lightbox">
									<img src="http://e.hiphotos.baidu.com/baike/pic/item/55e736d12f2eb9381725a006dd628535e4dd6ffe.jpg" alt="" /></a></li>
								</ul>
							</div>
							
						</div>
						<!-- // PRODUCT PREVIEW -->
						<div class="space40 visible-xs"></div>
						<!-- PRODUCT DETAILS -->
						<div class="col-xs-12 col-sm-8">
							<section class="product-details add-cart">
								<header class="entry-header">
									<h2 class="entry-title uppercase">红高粱</h2>
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
												<span class="value">莫言 </span>
											</li>
											<li>
												<span class="key">出版社:</span>
												<span class="value">解放军文艺出版社</span>
											</li>
											<li>
												<span class="key">出版时间:</span>
												<span class="value">1987</span>
											</li>
										</ul>
										
										<div class="clearfix"></div>
										
										<figcaption class="m-b-sm">
										<h5 class="subheader uppercase">内容提要:</h5>
										<p>通过“我”的叙述，描写了抗日战争期间,“我”的祖先在高密东北乡轰轰烈烈、英勇悲壮的人生故事。故事的主线是“我”的爷爷和奶奶，故事发生的主要地点是高密东北乡。“我”的爷爷叫余占鳌，奶奶叫戴凤莲，至于高密东北乡这个地方作者对其做过如下的描述：“最美丽最丑陋、最超脱最世俗同时最圣洁最龌龊，也是最英雄好汉最王八蛋以及最能喝酒和最能爱的地方，这就是高密东北乡.......</p>
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
								<p>莫言 （中国首位诺贝尔文学奖获得者）,原名管谟业，1955年2月17日出生于山东高密，中国作家协会副主席。</p>
								<ul>
									
									<li>1981年开始发表作品《春夜雨霏霏》， 1984年因《透明的红萝卜》而一举成名。</li>
									<li>1986年，在《人民文学》杂志发表中篇小说《红高粱家族》引起文坛极大轰动。</li>
									<li>1987年担任电影《红高粱》编剧，该片获得了第38届柏林国际电影节金熊奖。</li>
									<li>2011年凭借小说《蛙》获得茅盾文学奖。</li>
									<li>2016年12月，当选中国作家协会第九届全国委员会副主席。</li>
									<li>2017年11月，莫言获香港浸会大学荣誉文学博士学位。同年12月，凭借作品《天下太平》，获“2017汪曾祺华语小说奖”中的短篇小说奖。</li>
									
								</ul>
							</div>
							<div class="tab-pane fade in" id="product-reviews">
								<div class="comments-list">
									<div id="disqus_thread"></div>
									<p>以抗战时期为背景，描写战争题材.<p>
										<a href="https://baike.baidu.com/item/红高粱家族/3648334">了解更多》</a>
									</div>
								</div>
								<div class="tab-pane fade in" id="product-shipping">
									<h5 class="m-b-xs"><i class="fa fa-gift inline-middle m-r-sm"></i><span class="inline-middle"></span></h5>
									<p>在新中国六十年的历史上，几代作家在不同的时期创作了数以万计的长篇小说。我们作为新中国成立最早、规模*、门类最全的专业文学出版社，素有“新中国文学出版事业从这里开始”之誉，长篇小说出版资源非常丰富。在庆祝中华人民共和国成立六十周年之际，我们从业已出版的长篇小说中遴选出部分优秀作品，汇集成“人民文学出版社·新中国60年长篇小说典藏”一次性推出。这些书目的选择，兼顾历史评价、专家意见、读者喜好，以及题材和思想艺术风格的丰富性，它们集中展示了新中国长篇小说创作的伟大成就和发展变化，从文学的角度折射出中国特别是新中国各个历史时期的风貌。入选作品大都经过了时间淘洗，是可以流传的上乘之作。阅读或收藏，均富有价值。 </p>
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
											<img src="https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=2771760733,8307699&fm=27&gp=0.jpg" />
											<div class="hover">
												<a href="../music/music2.php" class="entry-url"></a>
												<ul class="icons unstyled">
													
													<li>
														<a href="https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=2771760733,8307699&fm=27&gp=0.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
													</li>
													<li>
														<a href="#" class="circle add-to-cart"><i class="iconfont-heart"></i></a>
													</li>
												</ul>
												
											</div>
										</div>
										<div class="entry-main products_div">
											<h5 class="entry-title">
											<a href="../music/music2.php"><p class="accent-color price products_title">大鱼</p></a>
											</h5>
											<div class="entry-description visible-list">
												<p>《大鱼》是尹约、钱雷为《大鱼海棠》量身定制的电影印象曲，是二人继《何以笙箫默》的电影插曲《默》后的二度合作，二人在合作中产生了新的想法。而为了让周深演唱时更加精准地演绎歌曲情感，词作者尹约逐词逐句地告诉周深歌词的意义以及歌词背后的故事。在录音过程中，尹约为了升华感情，在歌曲的最后部分决定让周深自己和自己合唱。</p>
											</div>
											<div class="entry-price">
												<strong>周深</strong>
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