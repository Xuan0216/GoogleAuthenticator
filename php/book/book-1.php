<!DOCTYPE html>
<html class="noIE" lang="en-US">
	<head>
		<meta charset="UTF-8" />
		<title>解忧杂货店</title>
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
<!-- // -->

<!-- SITE MAIN CONTENT -->
<main id="main-content" role="main">

<section class="section">
	<div class="container">
		<div class="row">
			<!-- PRODUCT PREVIEW -->
			<div class="col-xs-12 col-sm-4">
				
				<div class="product-preview">
					<div class="big-image">
						<a href="http://s11.sinaimg.cn/mw690/006LRxGMzy7c1wctW9s4a&690" data-toggle="lightbox">
							<img src="http://s11.sinaimg.cn/mw690/006LRxGMzy7c1wctW9s4a&690" alt="" />
						</a>
					</div>
					<ul class="thumbs unstyled clearfix">
						<li><a href="http://s11.sinaimg.cn/mw690/006LRxGMzy7c1wctW9s4a&690 " data-toggle="lightbox">
						<img src="http://s11.sinaimg.cn/mw690/006LRxGMzy7c1wctW9s4a&690" alt="" /></a></li>
						<li><a href="http://h.hiphotos.baidu.com/baike/pic/item/f31fbe096b63f624f43baa878544ebf81b4ca3d4.jpg" data-toggle="lightbox">
						<img src="http://h.hiphotos.baidu.com/baike/pic/item/f31fbe096b63f624f43baa878544ebf81b4ca3d4.jpg" alt="" /></a></li>
					</ul>
				</div>
				
			</div>
			<!-- // PRODUCT PREVIEW -->
			<div class="space40 visible-xs"></div>
			<!-- PRODUCT DETAILS -->
			<div class="col-xs-12 col-sm-8">
				<section class="product-details add-cart">
					<header class="entry-header">
						<h2 class="entry-title uppercase">解忧杂货店</h2>
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
									<span class="value">【日】东野圭吾 </span>
								</li>
								<li>
									<span class="key">出版社:</span>
									<span class="value">南海出版社</span>
								</li>
								<li>
									<span class="key">出版时间:</span>
									<span class="value">2012</span>
								</li>
							</ul>
							
							<div class="clearfix"></div>
							
							<figcaption class="m-b-sm">
							<h5 class="subheader uppercase">内容提要:</h5>
							<p>僻静的街道旁有一家杂货店，只要写下烦恼投进店前门卷帘门的投信口，第二天就会在店后的牛奶箱里得到回答：因男友身患绝症，年轻女孩静子在爱情与梦想间徘徊；克郎为了音乐梦想离家漂泊，却在现实中寸步难行；少年浩介面临家庭巨变，挣扎在亲情与未来的迷茫中……</br>
							他们将困惑写成信投进杂货店，奇妙的事情随即不断发生。生命中的一次偶然交会，将如何演绎出截然不同的人生？</p>
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
					<p>东野圭吾（ひがしの けいご，Higashino Keigo）,日本著名作家。代表作有《放学后》《秘密》《白夜行》《以眨眼干杯》《神探伽利略》《嫌疑人X的献身》《预知梦》《湖畔》等。</p>
					<ul>
						
						<li>1985年，《放学后》获第31届江户川乱步奖，开始专职写作；</li>
						<li>1999年，《秘密》获第52届日本推理作家协会奖；</li>
						<li>2005年出版的《嫌疑人X的献身》史无前例地同时获得第134届直木奖、第6届本格推理小说大奖，以及年度三大推理小说排行榜第1名；</li>
						<li>2008年，《流星之绊》获第43届新风奖；</li>
						<li>2009年出版的《新参者》获两大推理小说排行榜年度第1名；</li>
						<li>2012年，《解忧杂货店》获第7届中央公论文艺奖；</li>
						<li>2014年，《祈りの幕が下りる時》（暂译《祈祷落幕时》）获第48届吉川英治文学奖。</li>
						
					</ul>
				</div>
				<div class="tab-pane fade in" id="product-reviews">
					<div class="comments-list">
						<div id="disqus_thread"></div>
						<p>僻静的街道旁有一家杂货店，只要写下烦恼投进店前门卷帘门的投信口，第二天就会在店后的牛奶箱里得到回答：因男友身患绝症，年轻女孩静子在爱情与梦想间徘徊；克郎为了音乐梦想离家漂泊，却在现实中寸步难行；少年浩介面临家庭巨变，挣扎在亲情与未来的迷茫中…</p>
						
					</div>
				</div>
				<div class="tab-pane fade in" id="product-shipping">
					
					<h5 class="m-b-xs"><i class="fa fa-gift inline-middle m-r-sm"></i><span class="inline-middle"></span></h5>
					<p> 僻静的街道旁有一家杂货店，只要写下烦恼投进店前门卷帘门的投信口，第二天就会在店后的牛奶箱里得到回答：因男友身患绝症，年轻女孩静子在爱情与梦想间徘徊；克郎为了音乐梦想离家漂泊，却在现实中寸步难行；少年浩介面临家庭巨变，挣扎在亲情与未来的迷茫中…</p>
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
					
					<div class="product" data-product-id="3">
						<div class="entry-media">
							<img src="https://gss3.bdstatic.com/7Po3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike116%2C5%2C5%2C116%2C38/sign=9d43326cb5096b63951456026d5aec21/342ac65c103853436cf772629813b07eca8088bd.jpg" alt="" class="lazyLoad thumb products_img" />
							<div class="hover">
								<a href="../music/music5.php" class="entry-url"></a>
								<ul class="icons unstyled">
									<li>
										<a href="https://gss3.bdstatic.com/7Po3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike116%2C5%2C5%2C116%2C38/sign=9d43326cb5096b63951456026d5aec21/342ac65c103853436cf772629813b07eca8088bd.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
									</li>
									<li>
										<a href="#" class="circle heart"><i class="iconfont-heart"></i></a>
									</li>
								</ul>
								
							</div>
						</div>
						<div class="entry-main products_div">
							<h5 class="entry-title">
							<a href="../music/music5.php"><p class="accent-color price products_title">覆水</p></a>
							</h5>
							<div class="entry-description visible-list">
								<p>《覆水》是古装剧《将军在上》的插曲，由王楚然演唱，发行于2017年11月1日。无声陪伴你，永远说不出口
								；随年华细水长流，此生情不多，可是我从未保留，似覆水难收。</p>
							</div>
							<div class="entry-price">
								<strong>王楚然</strong>
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