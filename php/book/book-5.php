<!DOCTYPE html>
<html class="noIE" lang="en-US">
	<head>
		<meta charset="UTF-8" />
		<title>安徒生童话</title>
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
									<a href="https://img.25pp.com/uploadfile/soft/images/2015/0403/20150403105730750.jpeg" data-toggle="lightbox">
										<img src="https://img.25pp.com/uploadfile/soft/images/2015/0403/20150403105730750.jpeg" alt="" />
									</a>
								</div>
								<ul class="thumbs unstyled clearfix">
									<li><a href="https://img.25pp.com/uploadfile/soft/images/2015/0403/20150403105730750.jpeg" data-toggle="lightbox">
									<img src="https://img.25pp.com/uploadfile/soft/images/2015/0403/20150403105730750.jpeg" alt="" /></a></li>
									<li><a href="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1529314609317&di=c1be27aa53966463884cbec430da31e3&imgtype=0&src=http%3A%2F%2Fg.hiphotos.baidu.com%2Fbaike%2Fpic%2Fitem%2F91529822720e0cf3294a4dcb0646f21fbe09aa45.jpg">
									<img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1529314609317&di=c1be27aa53966463884cbec430da31e3&imgtype=0&src=http%3A%2F%2Fg.hiphotos.baidu.com%2Fbaike%2Fpic%2Fitem%2F91529822720e0cf3294a4dcb0646f21fbe09aa45.jpg" alt="" /></a></li>
								</ul>
							</div>
							
						</div>
						<!-- // PRODUCT PREVIEW -->
						<div class="space40 visible-xs"></div>
						<!-- PRODUCT DETAILS -->
						<div class="col-xs-12 col-sm-8">
							<section class="product-details add-cart">
								<header class="entry-header">
									<h2 class="entry-title uppercase">安徒生童话</h2>
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
												<span class="value">【丹麦】安徒生 </span>
											</li>
											<li>
												<span class="key">出版社:</span>
												<span class="value">北方妇女儿童出版社</span>
											</li>
											<li>
												<span class="key">出版时间:</span>
												<span class="value">2014</span>
											</li>
										</ul>
										
										<div class="clearfix"></div>
										
										<figcaption class="m-b-sm">
										<h5 class="subheader uppercase">内容提要:</h5>
										<p>一部真正可以从小读到老的书。世界童话文学创始人安徒生历时近40年创作而成。
											其中*著名的故事包括《海的女儿》、《皇帝的新装》、《丑小鸭》、《卖火柴的小女孩》等经典故事。这些故事流传百年，经久不衰。
										安徒生童话追求真、善、美，处处体现着爱的真谛。它不仅能让人感受到童话世界的纯真和美好，还会让人明白许多道理。在生活中，我们也要拥有那些主人公们的优秀品质，如积极乐观、坚持不懈、真诚博爱、谦逊勤勉等。 </p>
										</figcaption>
										
										
										<ul class="inline-li li-m-r-l m-t-lg">
											<li>
												<div class="entry-price">
													<a href="#" class="btn btn-round btn-default add-to-cart visible-list">收藏</a></div>
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
									<p>汉斯·克里斯蒂安·安徒生（Hans Christian Andersen，1805年4月2日－1875年8月4日）丹麦作家，诗人，因为他的童话故事而世界闻名。被誉为“世界儿童文学的太阳”</br>
									他最著名的童话故事有《小锡兵》、《冰雪女王》、《拇指姑娘》、《卖火柴的小女孩》、《丑小鸭》和《红鞋》等。安徒生生前曾得到皇家的致敬，并被高度赞扬为给全欧洲的一代孩子带来了欢乐。他的作品已经被译为150多种语言，成千上万册童话书在全球陆续发行出版。他的童话故事还激发了大量电影，舞台剧，芭蕾舞剧以及电影动画的制作。</p>
									
								</div>
								<div class="tab-pane fade in" id="product-reviews">
									<div class="comments-list">
										<div id="disqus_thread"></div>
										<p>1838年获得作家奖金——国家每年拨给他200元非公职津贴。安徒生文学生涯始于1822年的编写剧本。进入大学后，创作日趋成熟。曾发表游记和歌舞喜剧，出版诗集和诗剧。1833年出版长篇小说《即兴诗人》，为他赢得国际声誉，是他成人文学的代表作。他的作品《安徒生童话》已经被译为150多种语言，在全球各地发行和出版。<p>
											
										</div>
									</div>
									<div class="tab-pane fade in" id="product-shipping">
										
										<h5 class="m-b-xs"><i class="fa fa-gift inline-middle m-r-sm"></i><span class="inline-middle"></span></h5>
										<p>对孩子来说，童话是一个美好的世界，热爱童话、经常阅读童话的孩子，会汲取童话世界里美好的东西，永远拥有一颗追求真、善、美的心，变得更加友善和诚信。在全世界范围内，*经典、*被人称赞的童话故事，当属流传了几百年的《安徒生童话》和《格林童话》。 </p>
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