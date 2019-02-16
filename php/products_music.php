<!DOCTYPE html>
<head>
	<meta charset="UTF-8" />
	<title>亦书亦音/音乐</title>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
	<link rel="icon" href="../img/favicon/favicon.html" type="image/x-icon" />
	<link rel="stylesheet" href="../css/minified.css">
	<script type="text/javascript" src="../js/jquery.min.js" ></script>
	<script src="../js/modernizr.min.js"></script>
	<link rel="stylesheet" href="../css/jquery.nouislider.css">
	<link rel="stylesheet" href="../css/isotope.css">
	<link rel="stylesheet" href="../css/innerpage.css">
	<link rel="stylesheet" href="../css/responsive.css">
</head>
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
						
						<img src="../img/logo.png" alt="GFashion - Responsive e-commerce HTML Template" />
						
					</div>
					<!-- // SITE LOGO -->
					<!-- SITE NAVIGATION MENU -->
					<nav id="site-menu" role="navigation">
						<ul class="main-menu">
							<li >
								<a href="index.php">首页</a>
							</li>
							<li>
								<a href="products_book.php">书籍</a>
							</li>
							<li class="active">
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
	<!-- // SITE HEADER -->
	
	<!-- 单个作品 -->
	<div class="breadcrumb-container">
		<div class="container">
			<div class="relative">
				<ul class="bc unstyled clearfix">
					<li><a href="index.php">首页</a></li>
					<li class="active">音乐</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- SITE MAIN CONTENT -->
	<main id="main-content" role="main">
		<div class="container">
			<div class="row">
				
				<div class="m-t-b clearfix">
					<!-- SIDEBAR -->
					<aside class="col-xs-12 col-sm-4 col-md-3">
						<section class="sidebar push-up">
							
							<!-- CATEGORIES -->
							<section class="side-section bg-white">
								<header class="side-section-header">
									<h3 class="side-section-title">分类歌单</h3>
								</header>
								<div class="side-section-content">
									<ul id="category-list" class="vmenu unstyled">
										<li>
											<input type="checkbox" id="check-women" class="prettyCheckable" data-label="主题" data-labelPosition="right" value="主题" />
											<ul>
												<li><input type="checkbox" id="check-women-accessories" class="prettyCheckable" data-label="ACG" data-labelPosition="right" value="ACG" /></li>
												<li><input type="checkbox" id="check-women-swimwear" class="prettyCheckable" data-label="经典" data-labelPosition="right" value="经典" /></li>
												<li><input type="checkbox" id="check-women-basics" class="prettyCheckable" data-label="影视" data-labelPosition="right" value="影视" /></li>
												<li><input type="checkbox" id="check-women-dresses" class="prettyCheckable" data-label="儿歌" data-labelPosition="right" value="儿歌" /></li>
												<li><input type="checkbox" id="check-women-jeans" class="prettyCheckable" data-label="古风" data-labelPosition="right" value="古风" /></li>
												<li><input type="checkbox" id="check-women-skirt" class="prettyCheckable" data-label="游戏" data-labelPosition="right" value="游戏" /></li>
												<li><input type="checkbox" id="check-women-legging" class="prettyCheckable" data-label="背景音乐" data-labelPosition="right" value="背景音乐" /></li>
											</ul>
										</li>
										<li>
											<input type="checkbox" id="check-men" class="prettyCheckable" data-label="语种" data-labelPosition="right" value="语种" />
											<ul>
												<li><input type="checkbox" id="check-men-accessories" class="prettyCheckable" data-label="国语" data-labelPosition="right" value="国语" /></li>
												<li><input type="checkbox" id="check-men-jacket" class="prettyCheckable" data-label="英语" data-labelPosition="right" value="英语" /></li>
												<li><input type="checkbox" id="check-men-jumper" class="prettyCheckable" data-label="韩语" data-labelPosition="right" value="韩语" /></li>
												<li><input type="checkbox" id="check-men-jean" class="prettyCheckable" data-label="粤语" data-labelPosition="right" value="粤语" /></li>
												<li><input type="checkbox" id="check-men-shoe" class="prettyCheckable" data-label="日语" data-labelPosition="right" value="日语" /></li>
												<li><input type="checkbox" id="check-men-tshirt" class="prettyCheckable" data-label="法语" data-labelPosition="right" value="法语" /></li>
												<li><input type="checkbox" id="check-men-blazers" class="prettyCheckable" data-label="小语种" data-labelPosition="right" value="小语种" /></li>
											</ul>
										</li>
										<li>
											<input type="checkbox" id="check-beauty" class="prettyCheckable" data-label="男声" data-labelPosition="right" value="男声" />
										</li>
										<li>
											<input type="checkbox" id="check-best" class="prettyCheckable" data-label="女声" data-labelPosition="right" value="女声" />
										</li>
										<li>
											<input type="checkbox" id="check-new" class="prettyCheckable" data-label="新歌" data-labelPosition="right" value="新歌" />
										</li>
									</ul>
								</div>
								<footer class="side-section-footer text-center hide">
									<button type="button" id="btn-filter-cat" class="btn btn-primary btn-round uppercase">Clear Filters</button>
								</footer>
							</section>
							<!-- // CATEGORIES -->
							
							<!-- PRODUCT FILTER -->
							<section class="side-section bg-white">
								<header class="side-section-header">
									<h3 class="side-section-title">更多条件筛选</h3>
								</header>
								
								<!-- PRICE RANGE SLIDER -->
								<div id="filter-by-price" class="side-section-content">
									<h4 class="side-section-subheader">年代</h4>
									<div class="range-slider-container">
										<div class="range-slider" data-min="1950" data-max="2018" data-step="2" data-currency=""></div>
										<div class="range-slider-value clearfix">
											<span>年份: &ensp;</span>
											<span class="min"></span>
											<span class="max"></span>
										</div>
									</div>
								</div>
								<!-- // PRICE RANGE SLIDER -->
								
								<!-- FILTER BY SIZE -->
								<div id="filter-by-size" class="side-section-content">
									<h4 class="side-section-subheader">背景故事</h4>
									<ul class="inline-li li-m-lg text-center unstyled">
										<li>
											<a href="#" class="round-icon"  data-toggle="tooltip" data-title="童话 "><p style = "font-size:11px;">悲伤</p></a>
											<input type="checkbox" class="filter-checkbox filter-size" value="悲伤" />
										</li>
										<li>
											<a href="#" class="round-icon" data-toggle="tooltip" data-title="热血"><p style = "font-size:11px;">热血</p></a>
											<input type="checkbox" class="filter-checkbox filter-size" value="热血" />
										</li>
										<li>
											<a href="#" class="round-icon" data-toggle="tooltip" data-title="童话" ><p style = "font-size:11px;">童话</p></a>
											<input type="checkbox" class="filter-checkbox filter-size" value="童话" />
										</li>
										<li>
											<a href="#" class="round-icon" data-toggle="tooltip" data-title="感动"><p style = "font-size:11px;">感动</p>	</a>
											<input type="checkbox" class="filter-checkbox filter-size" value="感动" />
										</li>
										<li>
											<a href="#" class="round-icon" data-toggle="tooltip" data-title="奇幻" ><p style = "font-size:11px;">奇幻</p></a>
											<input type="checkbox" class="filter-checkbox filter-size" value="奇幻" />
										</li>
										<li>
											<a href="#" class="round-icon" data-toggle="tooltip" data-title="爱情" ><p style = "font-size:11px;">爱情</p></a>
											<input type="checkbox" class="filter-checkbox filter-size" value="爱情" />
										</li>
									</ul>
								</div>
								<!-- // FILTER BY STORY -->
								
								
								
								
								
								
								
							</section>
						</aside>
						<!-- // SIDEBAR -->
						<section class="col-xs-12 col-sm-8 col-md-9">
							
							<section class="products-wrapper">
								<!-- DISPLAY MODE - NUMBER OF ITEMS TO BE DISPLAY - PAGINATION -->
								<header class="products-header">
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-6 center-xs">
											<!-- DISPLAY MODE -->
											<ul class="unstyled inline-li li-m-r-l-sm pull-left">
												<li><a class="round-icon active" href="#" data-toggle="tooltip" data-layout="grid" data-title="多行浏览"><i class="iconfont-th"></i></a></li>
												<li><a class="round-icon" href="#" data-toggle="tooltip" data-layout="list" data-title="单行浏览"><i class="iconfont-list"></i></a></li>
											</ul>
											<!-- // DISPLAY MODE -->
											
											
										</div>
										<div class="space30 visible-xs"></div>
										<!-- PAGINATION -->
										<div class="col-xs-12 col-sm-12 col-md-6 center-xs">
											<ul class="paginator li-m-r-l pull-right">
												<li><a class="round-icon" href="#" data-toggle="tooltip" data-title="前一页"><i class="fa fa-angle-left"></i></a></li>
												<li><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">5</a></li>
												<li><a class="round-icon" href="#" data-toggle="tooltip" data-title="下一页"><i class="fa fa-angle-right"></i></a></li>
											</ul>
										</div>
										<!-- // PAGINATION -->
									</div>
								</header>
								<!-- // DISPLAY MODE - NUMBER OF ITEMS TO BE DISPLAY - PAGINATION -->
								
								<!-- PRODUCT LAYOUT -->
								<div class="products-layout grid m-t-b add-cart" data-product=".product" data-thumbnail=".entry-media .thumb" data-title=".entry-title > a" data-url=".entry-title > a" data-price=".entry-price > .price">
									
									<div class="product" data-product-id="1" data-category="主题|ACG|日语|男声"  data-price="2016"  data-size="伤感|奇幻|爱情">
										<div class="entry-media">
											<img data-src="https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=2771760733,8307699&fm=27&gp=0.jpg" alt="" class="lazyLoad thumb music_img products_img" />
											<div class="hover">
												<a href="music/music2.php" class="entry-url"></a>
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
											<a href="music/music2.php"><p class="accent-color price products_title">大鱼</p></a>
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
									
									<div class="product" data-product-id="2" data-category="主题|经典|国语|日语|女声" data-brand="brand2" data-price="1985" data-size="爱情|伤感">
										<div class="entry-media">
											<img data-src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1529241117190&di=251deaf7f48550bc4928480e755540a3&imgtype=0&src=http%3A%2F%2Fpic.baike.soso.com%2Fp%2F20130904%2F20130904144215-145970863.jpg" alt="" class="lazyLoad thumb products_img" />
											<div class="hover">
												<a href="music/music4.php" class="entry-url"></a>
												<ul class="icons unstyled">
													<li>
														<a href="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1529241117190&di=251deaf7f48550bc4928480e755540a3&imgtype=0&src=http%3A%2F%2Fpic.baike.soso.com%2Fp%2F20130904%2F20130904144215-145970863.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
													</li>
													<li>
														<a href="#" class="circle heart  add-to-cart"><i class="iconfont-heart"></i></a>
													</li>
												</ul>
												
											</div>
										</div>
										<div class="entry-main products_div">
											<h5 class="entry-title">
											<a href="music/music4.php"><p class="accent-color price products_title">偿还（つぐない）</p></a>
											</h5>
											<div class="entry-description visible-list">
												<p>偿还(つぐない，中文译名：赎罪)，是著名华人歌手邓丽君1984年重返日本乐坛后发表的首张日文单曲，由荒木丰久（荒木とよひさ）作词，三木刚（三木たかし）作曲。</p>
											</div>
											<div class="entry-price">
												<strong>邓丽君</strong>
												<a href="#" class="btn btn-round btn-default add-to-cart visible-list">我喜欢</a>
											</div>
											
										</div>
									</div>
									
									<div class="product" data-product-id="2" data-category="主题|影视|国语|女声|新歌"  data-price="2015"  data-size="爱情|伤感">
										<div class="entry-media">
											<img data-src="https://gss3.bdstatic.com/7Po3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike116%2C5%2C5%2C116%2C38/sign=9d43326cb5096b63951456026d5aec21/342ac65c103853436cf772629813b07eca8088bd.jpg" alt="" class="lazyLoad thumb products_img" />
											<div class="hover">
												<a href="music/music5.php" class="entry-url"></a>
												<ul class="icons unstyled">
													<li>
														<a href="https://gss3.bdstatic.com/7Po3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike116%2C5%2C5%2C116%2C38/sign=9d43326cb5096b63951456026d5aec21/342ac65c103853436cf772629813b07eca8088bd.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
													</li>
													<li>
														<a href="#" class="circle heart add-to-cart"><i class="iconfont-heart"></i></a>
													</li>
												</ul>
												
											</div>
										</div>
										<div class="entry-main products_div">
											<h5 class="entry-title">
											<a href="music/music5.php"><p class="accent-color price products_title">覆水</p></a>
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
									
									<div class="product" data-product-id="2" data-category="主题|影视|国语|女声|新歌" data-brand="brand2" data-price="2015"  data-size="爱情|伤感">
										<div class="entry-media">
											<img data-src="https://gss1.bdstatic.com/9vo3dSag_xI4khGkpoWK1HF6hhy/baike/w%3D268%3Bg%3D0/sign=df8291438c94a4c20a23e02d36cf7ce8/5ab5c9ea15ce36d3dc33f37c31f33a87e950b142.jpg " alt="" class="lazyLoad thumb products_img" />
											<div class="hover">
												<a href="music/music1.php" class="entry-url"></a>
												<ul class="icons unstyled">
													<li>
														<a href="https://gss1.bdstatic.com/9vo3dSag_xI4khGkpoWK1HF6hhy/baike/w%3D268%3Bg%3D0/sign=df8291438c94a4c20a23e02d36cf7ce8/5ab5c9ea15ce36d3dc33f37c31f33a87e950b142.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
													</li>
													<li>
														<a href="#" class="circle heart add-to-cart"><i class="iconfont-heart"></i></a>
													</li>
												</ul>
												
											</div>
										</div>
										<div class="entry-main products_div">
											<h5 class="entry-title">
											<a href="music/music1.php"><p class="accent-color price products_title">恩赐</p></a>
											</h5>
											<div class="entry-description visible-list">
												<p>将最美的诗词，都看成你名字；卸下铠甲与芒刺，对全世界仁慈；风在夜里放肆，却吹乱烦烦丝；守着细密的心思，不愿太自私；愿为你赴死，人生不过如此；一千次，一万次，都不辞；嫣红姹紫，这盛世多彩多姿，有你，就是一种恩赐。
												</p>
											</div>
											<div class="entry-price">
												<strong>王楚然</strong>
												<a href="#" class="btn btn-round btn-default add-to-cart visible-list">我喜欢</a>
											</div>
											
										</div>
									</div>
									
									<div class="product" data-product-id="2" data-category="主题|儿歌|英语|男声"  data-price="1980" data-size="童话">
										<div class="entry-media">
											<img data-src="http://img37.ddimg.cn/47/12/23597687-1_e.jpg" alt="" class="lazyLoad thumb products_img" />
											<div class="hover">
												<a href="music/music7.php" class="entry-url"></a>
												<ul class="icons unstyled">
													<li>
														<a href="http://img37.ddimg.cn/47/12/23597687-1_e.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
													</li>
													<li>
														<a href="#" class="circle heart add-to-cart"><i class="iconfont-heart"></i></a>
													</li>
												</ul>
												
											</div>
										</div>
										<div class="entry-main products_div">
											<h5 class="entry-title">
											<a href="music/music7.php"><p class="accent-color price products_title">Hush, Little Baby </p></a>
											</h5>
											<div class="entry-description visible-list">
												<p>Wee Sing Video Series是一个儿童音乐剧录影带合辑。很多录影带充满着丰富的人物来教小朋友一系列知识，就像朋友在你困难时帮助你一样
												</p>
											</div>
											<div class="entry-price">
												<strong>Wee Sing</strong>
												<a href="#" class="btn btn-round btn-default add-to-cart visible-list">我喜欢</a>
											</div>
											
										</div>
									</div>
									
									
									<div class="product" data-product-id="2" data-category="主题|古风|国语|女声" data-price="2010" data-size="爱情">
										<div class="entry-media">
											<img data-src="https://gss0.bdstatic.com/-4o3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike150%2C5%2C5%2C150%2C50/sign=d8c512bbe2f81a4c323fe49bb6430b3c/b3b7d0a20cf431ad1f19e3f64236acaf2fdd9832.jpg" alt="" class="lazyLoad thumb products_img" />
											<div class="hover">
												<a href="music/music6.php" class="entry-url"></a>
												<ul class="icons unstyled">
													<li>
														<a href="https://gss2.bdstatic.com/9fo3dSag_xI4khGkpoWK1HF6hhy/baike/crop%3D0%2C38%2C603%2C397%3Bc0%3Dbaike80%2C5%2C5%2C80%2C26/sign=25f8892bd133c895b231c23bec235fc3/0b55b319ebc4b745697549aac7fc1e178b8215ac.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
													</li>
													<li>
														<a href="#" class="circle heart add-to-cart"><i class="iconfont-heart"></i></a>
													</li>
												</ul>
												
											</div>
										</div>
										<div class="entry-main products_div">
											<h5 class="entry-title">
											<a href="music/music6.php"><p class="accent-color price products_title">故梦 </p></a>
											</h5>
											<div class="entry-description visible-list">
												<p>《故梦》是墨明棋妙原创音乐团队橙翼主唱的一首歌，收录于《天命风流》专辑发行。 由腾云驾雾琉璃仙填词、千年破晓作曲。发
												</p>
											</div>
											<div class="entry-price">
												<strong>双笙</strong>
												<a href="#" class="btn btn-round btn-default add-to-cart visible-list">我喜欢</a>
											</div>
											
										</div>
									</div>
									<div class="product" data-product-id="2" data-category="主题|游戏|韩语|影视|男声"  data-price="2005"  data-size="伤感">
										<div class="entry-media">
											<img data-src="https://gss2.bdstatic.com/9fo3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike80%2C5%2C5%2C80%2C26/sign=c916473dfe198618554ae7d62b844516/77094b36acaf2eddd9c18bb58b1001e9390193be.jpg" alt="" class="lazyLoad thumb products_img" />
											<div class="hover">
												<a href="music/music8.php" class="entry-url"></a>
												<ul class="icons unstyled">
													<li>
														<a href="https://gss2.bdstatic.com/9fo3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike80%2C5%2C5%2C80%2C26/sign=c916473dfe198618554ae7d62b844516/77094b36acaf2eddd9c18bb58b1001e9390193be.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
													</li>
													<li>
														<a href="#" class="circle heart"><i class="iconfont-heart"></i></a>
													</li>
												</ul>
												
											</div>
										</div>
										<div class="entry-main products_div">
											<h5 class="entry-title">
											<a href="music/music8.php"><p class="accent-color price products_title">Persona</p></a>
											</h5>
											<div class="entry-description visible-list">
												<p>这首歌由安七炫自己作词作曲，描述了在离别前，一个内心承受煎熬的男人的最真实的心境描写！是一首结合爵士，R&B,流行等元素曲子，很简洁单纯的Drum让R&B的感觉更重，再加上听起来很顺耳的旋律，Nylon Guitar的琴声让曲子更显伤悲，越发让人感到哀凄
												</p>
											</div>
											<div class="entry-price">
												<strong>安七炫</strong>
												<a href="#" class="btn btn-round btn-default add-to-cart visible-list">我喜欢</a>
											</div>
											
										</div>
									</div>
									
									<div class="product" data-product-id="2" data-category="语种-英语|"  data-price="2000"  data-size="奇幻">
										<div class="entry-media">
											<img data-src="https://gss0.bdstatic.com/-4o3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike80%2C5%2C5%2C80%2C26/sign=3e5702364b90f60310bd9415587bd87e/ac345982b2b7d0a2b8218a9acaef76094a369ac9.jpg" alt="" class="lazyLoad thumb products_img" />
											<div class="hover">
												<a href="music/music3.php" class="entry-url"></a>
												<ul class="icons unstyled">
													<li>
														<a href="https://gss0.bdstatic.com/-4o3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike80%2C5%2C5%2C80%2C26/sign=3e5702364b90f60310bd9415587bd87e/ac345982b2b7d0a2b8218a9acaef76094a369ac9.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
													</li>
													<li>
														<a href="#" class="circle heart"><i class="iconfont-heart"></i></a>
													</li>
												</ul>
												
											</div>
										</div>
										<div class="entry-main products_div">
											<h5 class="entry-title">
											<a href="music/music3.php"><p class="accent-color price products_title">She Is My Sin</p></a>
											</h5>
											<div class="entry-description visible-list">
												<p>She Is My Sin是芬兰交响金属乐团夜愿的第三张专辑《Wishmaster》中的曲目。《Wishmaster》延续了前张专辑《Oceanborn》 强大交响力量金属的特色，但也更重视强有力的旋律速度与沉重的氛围。《Wishmaster》有一个非常明确的幻想主题，这或许超越了其上张专辑。
												</p>
											</div>
											<div class="entry-price">
												<strong>Nightwish</strong>
												<a href="#" class="btn btn-round btn-default add-to-cart visible-list">我喜欢</a>
											</div>
											
										</div>
									</div>
									
									<div class="product" data-product-id="2" data-category="男声|粤语" data-price="1985"  data-size="爱情|伤感">
										<div class="entry-media">
											<img data-src="https://gss1.bdstatic.com/9vo3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike150%2C5%2C5%2C150%2C50/sign=daf240cf63600c33e474d69a7b253a6a/a044ad345982b2b76133ba1f39adcbef77099bb9.jpg" alt="" class="lazyLoad thumb products_img" />
											<div class="hover">
												<a href="music/music9.php" class="entry-url"></a>
												<ul class="icons unstyled">
													<li>
														<a href="https://gss1.bdstatic.com/9vo3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike150%2C5%2C5%2C150%2C50/sign=daf240cf63600c33e474d69a7b253a6a/a044ad345982b2b76133ba1f39adcbef77099bb9.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
													</li>
													<li>
														<a href="#" class="circle heart"><i class="iconfont-heart"></i></a>
													</li>
												</ul>
												
											</div>
										</div>
										<div class="entry-main products_div">
											<h5 class="entry-title">
											<a href="music/music9.php"><p class="accent-color price products_title">喜欢你</p></a>
											</h5>
											<div class="entry-description visible-list">
												<p>《喜欢你》是中国香港摇滚乐队Beyond的一首音乐作品，由黄家驹作词、作曲并演唱，收录在Beyond1988年9月6日发行的专辑《秘密警察》。这首歌曲是Beyond的代表作品之一。
												</p>
											</div>
											<div class="entry-price">
												<strong>Beyond</strong>
												<a href="#" class="btn btn-round btn-default add-to-cart visible-list">我喜欢</a>
											</div>
											
										</div>
									</div>
									
									
									
									<!-- // PRODUCT LAYOUT -->
								</section>
								
							</section>
						</div>
						
					</div>
				</div>
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
														<a href="products_book.php" class="btn btn-default btn-round">
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
											<p>有新推荐·联系您</p>
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
						<!-- // Essential Javascripts -->
						<!-- Particular Page Javascripts -->
						<script src="../js/jquery.nouislider.js"></script>
						<script src="../js/jquery.isotope.min.js"></script>
						<script src="../js/products.js"></script>
						<script src="../js/owl.carousel.js"></script>
						<script src="../js/jquery.flexslider-min.js"></script><!--jquery flexSlider 图片轮播插件-->
						<!-- Particular Page Javascripts -->
					</body>
				</html>