<!DOCTYPE html>
<html class="noIE" lang="en-US">
	<head>
		<meta charset="UTF-8" />
		<title>傲慢与偏见</title>
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
									<a href="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1529316684742&di=4148f8d591d7aa3a6c194c10b5b04c9c&imgtype=0&src=http%3A%2F%2Fimg4.duitang.com%2Fuploads%2Fitem%2F201601%2F03%2F20160103182508_JTjPd.jpeg" data-toggle="lightbox">
										<img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1529316684742&di=4148f8d591d7aa3a6c194c10b5b04c9c&imgtype=0&src=http%3A%2F%2Fimg4.duitang.com%2Fuploads%2Fitem%2F201601%2F03%2F20160103182508_JTjPd.jpeg" alt="" class="products_img1"/>
									</a>
								</div>
								<ul class="thumbs unstyled clearfix">
									<li><a href="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1529316684742&di=4148f8d591d7aa3a6c194c10b5b04c9c&imgtype=0&src=http%3A%2F%2Fimg4.duitang.com%2Fuploads%2Fitem%2F201601%2F03%2F20160103182508_JTjPd.jpeg" data-toggle="lightbox">
										<img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1529316684742&di=4148f8d591d7aa3a6c194c10b5b04c9c&imgtype=0&src=http%3A%2F%2Fimg4.duitang.com%2Fuploads%2Fitem%2F201601%2F03%2F20160103182508_JTjPd.jpeg" alt="" />
									</a></li>
									<li><a href="https://gss3.bdstatic.com/-Po3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike80%2C5%2C5%2C80%2C26/sign=9480f02dd133c895b2739029b07a1895/d52a2834349b033bc0117b601dce36d3d439bdeb.jpg" data-toggle="lightbox">
									<img src="https://gss3.bdstatic.com/-Po3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike80%2C5%2C5%2C80%2C26/sign=9480f02dd133c895b2739029b07a1895/d52a2834349b033bc0117b601dce36d3d439bdeb.jpg" alt="" /></a></li>
								</ul>
							</div>
							
						</div>
						<!-- // PRODUCT PREVIEW -->
						<div class="space40 visible-xs"></div>
						<!-- PRODUCT DETAILS -->
						<div class="col-xs-12 col-sm-8">
							<section class="product-details add-cart">
								<header class="entry-header">
									<h2 class="entry-title uppercase">傲慢与偏见</h2>
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
												<span class="value">【英】简·奥斯汀</span>
											</li>
											
											<li>
												<span class="key">出版时间:</span>
												<span class="value">1813</span>
											</li>
										</ul>
										
										<div class="clearfix"></div>
										
										<figcaption class="m-b-sm">
										<h5 class="subheader uppercase">内容提要:</h5>
										<p>达西富有而潇洒，高傲冷漠，代表“傲慢”；伊丽莎白机灵且睿智，任性直率，代表“偏见”。“傲慢让别人无法爱上我，偏见让我无法爱上别人。”因此爱情在两人之间忽隐忽现、步履维艰。但伊丽莎白*终了解了达西的真正为人，达西也因为伊丽莎白改变了傲慢的态度，二人*终跨越门第终成眷属。</p>
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
								<p>简·奥斯丁（1775—1817），十九世纪英国小说家，世界文学史上*影响力的女性文学家之一。家道小康，初恋夭折，终身未婚。受父亲影响，奥斯丁热爱阅读，二十岁左右开始写作。
								她善于工笔细描，抒写美丽的夜晚可以一字不提月亮；她坚持自己的格调，只为大众写平凡的琐事，尤其是绅士和淑女间的婚姻和爱情；她是英国的骄傲，其头像被印制在新版10英镑纸币上，被誉为“可与莎士比亚平起平坐”的作家。代表作品有《傲慢与偏见》《理智与情感》等六部长篇小说。</p>
								<ul>
									<li>简·奥斯丁21岁时写成她的第一部小说，题名《最初的印象》，她与出版商联系出版，没有结果。
									</li>
									<li>奥斯汀的小说出现在19世纪初叶，一扫风行一时的假浪漫主义潮流，继承和发展了英国18世纪优秀的现实主义传统，为19世纪现实主义小说的高潮做了准备。</li>
									
									<li>1923年，简·奥斯汀小说被查普曼（Robert Chapman）校勘之后再版，终于让她的小说上升到“严肃文学”的殿堂，从此对她小说的研究也越来越多。</li>
									<li>2013年是英国女作家简·奥斯汀的名著《傲慢与偏见》出版200周年，继英国皇家邮政专门发行邮票纪念之后，英国中央银行宣布，简·奥斯汀的头像将被印制在新版10英镑纸币上，以此向她致敬。</li>
									
								</ul>
							</div>
							<div class="tab-pane fade in" id="product-reviews">
								<div class="comments-list">
									<div id="disqus_thread"></div>
									<p>从18世纪末到19世纪初，庸俗无聊的“感伤小说”和“哥特小说”充斥英国文坛。而奥斯汀的小说破旧立新，一反常规地展现了当时尚未受到资本主义工业革命冲击的英国乡村中产阶级的日常生活和田园风光。.<p>
										<a href="https://baike.baidu.com/item/%E7%AE%80%C2%B7%E5%A5%A5%E6%96%AF%E6%B1%80#3">了解更多</a>
									</div>
								</div>
								<div class="tab-pane fade in" id="product-shipping">
									
									<h5 class="m-b-xs"><i class="fa fa-gift inline-middle m-r-sm"></i><span class="inline-middle"></span></h5>
									<p>《傲慢与偏见》是简?奥斯汀的代表作，奥斯丁曾自称：《傲慢与偏见》是她“*宠爱的孩子”。它在英国浪漫主义小说史上起着承上启下的作用。小说情节曲折生动，语言清新优美，给人留下了深刻的印象。本书运用精湛的语言展现了作者对人性透彻的理解，四处洋溢着机智幽默，令人感到情趣盎然。《傲慢与偏见》实属世界文库中不可多得的珍品。本书译者孙致礼先生是我国著名文学翻译家，因其理论研究和英美文学翻译实践，以其敏锐的洞察力、深厚的中英文造诣和笔墨功力在我国翻译界享有很高的威望和知名度，所译文字流畅、精确、通顺并具有异国情调。  </p>
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