<!DOCTYPE html>
<head>
	<meta charset="UTF-8" />
	<title>亦书亦音/书</title>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Favorite Icons -->
	<link rel="icon" href="../img/favicon/favicon.html" type="image/x-icon" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
	
	
	<!-- GENERAL CSS FILES -->
	<link rel="stylesheet" href="../css/minified.css">
	
	<!--script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>');</script-->
		<script type="text/javascript" src="../js/jquery.min.js" ></script>
	<script src="../js/modernizr.min.js"></script>	
	<!-- PARTICULAR PAGES CSS FILES -->
	<link rel="stylesheet" href="../css/jquery.nouislider.css">
	<link rel="stylesheet" href="../css/isotope.css">
	<link rel="stylesheet" href="../css/innerpage.css">
	<!-- // PARTICULAR PAGES CSS FILES -->
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
									
									<!-- // SHOPPING CART -->
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
							<li class="active">
								<a href="products_book.php">书籍</a>
							</li>
							<li>
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
	
		<!-- BREADCRUMB -->
		<div class="breadcrumb-container">
			<div class="container">
				<div class="relative">
					<ul class="bc push-up unstyled clearfix">
						<li><a href="index.php">首页</a></li>
						<li class="active">书</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- // BREADCRUMB -->
		
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
										<h3 class="side-section-title">分类</h3>
									</header>
									<div class="side-section-content">
										<ul id="category-list" class="vmenu unstyled">
											<li>
												<input type="checkbox" id="国风" class="prettyCheckable" data-label="国风" data-labelPosition="right" value="国风" />
												<ul>
													<li><input type="checkbox" id="国风-历史金典" class="prettyCheckable" data-label="历史金典" data-labelPosition="right" value="国风-历史金典" /></li>
													<li><input type="checkbox" id="国风-人文" class="prettyCheckable" data-label="人文" data-labelPosition="right" value="国风-人文" /></li>
													<li><input type="checkbox" id="国风-浪漫青春" class="prettyCheckable" data-label="浪漫青春" data-labelPosition="right" value="国风-浪漫青春" /></li>
													<li><input type="checkbox" id="国风-悬疑推理" class="prettyCheckable" data-label="悬疑推理" data-labelPosition="right" value="国风-悬疑推理" /></li>
													<li><input type="checkbox" id="国风-情感" class="prettyCheckable" data-label="情感" data-labelPosition="right" value="国风-情感" /></li>
													<li><input type="checkbox" id="国风-亲子" class="prettyCheckable" data-label="亲子" data-labelPosition="right" value="国风-亲子" /></li>
											
												</ul>
											</li>
											<li>
												<input type="checkbox" id="海外" class="prettyCheckable" data-label="海外" data-labelPosition="right" value="海外" />
												<ul>
													<li><input type="checkbox" id="海外-名著" class="prettyCheckable" data-label="名著" data-labelPosition="right" value="海外-名著" /></li>
													<li><input type="checkbox" id="海外-人文" class="prettyCheckable" data-label="人文" data-labelPosition="right" value="海外-人文" /></li>
													<li><input type="checkbox" id="海外-浪漫青春" class="prettyCheckable" data-label="浪漫青春" data-labelPosition="right" value="海外-浪漫青春" /></li>
													<li><input type="checkbox" id="海外-悬疑推理" class="prettyCheckable" data-label="悬疑推理" data-labelPosition="right" value="海外-悬疑推理" /></li>
													<li><input type="checkbox" id="海外-情感" class="prettyCheckable" data-label="情感" data-labelPosition="right" value="海外-情感" /></li>
													<li><input type="checkbox" id="海外-亲子" class="prettyCheckable" data-label="亲子" data-labelPosition="right" value="海外-亲子" /></li>
											
												</ul>
											</li>
									
											<li>
												<input type="checkbox" id="check-best" class="prettyCheckable" data-label="当前最热" data-labelPosition="right" value="best" />
											</li>
											<li>
												<input type="checkbox" id="check-new" class="prettyCheckable" data-label="新书" data-labelPosition="right" value="new" />
											</li>
											<li>
												<input type="checkbox" id="check-new" class="prettyCheckable" data-label="儿童书籍" data-labelPosition="right" value="child" />
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
											<div class="range-slider" data-min="1700" data-max="2018" data-step="2" data-currency=""></div>
											<div class="range-slider-value clearfix">
												<span>年代: &ensp;</span>
												<span class="min"></span>
												<span class="max"></span>
											</div>
										</div>
									</div>
									<!-- // PRICE RANGE SLIDER -->
									
									<!-- FILTER BY SIZE -->
									<div id="filter-by-size" class="side-section-content">
										<h4 class="side-section-subheader">作者国籍/语种</h4>
										<ul class="inline-li li-m-lg text-center unstyled">
											<li>
												<a href="#" class="round-icon" data-toggle="tooltip" data-title="中文"><small>中</small></a>
												<input type="checkbox" class="filter-checkbox filter-size" value="中国" />
											</li>
											<li>
												<a href="#" class="round-icon" data-toggle="tooltip" data-title="日语"><small>日</small></a>
												<input type="checkbox" class="filter-checkbox filter-size" value="日本" />
											</li>
											<li>
												<a href="#" class="round-icon" data-toggle="tooltip" data-title="英语"><small>欧美</small></a>
												<input type="checkbox" class="filter-checkbox filter-size" value="欧美" />
											</li>
											<li>
												<a href="#" class="round-icon" data-toggle="tooltip" data-title="英语"><small>印</small></a>
												<input type="checkbox" class="filter-checkbox filter-size" value="印度" />
											</li>
										
											<li>
												<a href="#" class="round-icon" data-toggle="tooltip" data-title="俄语"><small>俄</small></a>
												<input type="checkbox" class="filter-checkbox filter-size" value="俄罗斯" />
											</li>
											<li>
												<a href="#" class="round-icon" data-toggle="tooltip" data-title="法语"><small>法</small></a>
												<input type="checkbox" class="filter-checkbox filter-size" value="法国" />
											</li>
												<li>
												<a href="#" class="round-icon" data-toggle="tooltip" data-title="其他"><small>其他</small></a>
												<input type="checkbox" class="filter-checkbox filter-size" value="其他" />
											</li>
										</ul>
									</div>
									<!-- // FILTER BY SIZE -->
								
								</section>
								<!-- // PRODUCT FILTER -->
				
								
								<!-- PROMO -->
								<div class="promo inverse-background" style="background: url('https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1529395985125&di=eb2e4b5d8b19bf233b42f606d32890c6&imgtype=0&src=http%3A%2F%2Fimgsrc.baidu.com%2Fimgad%2Fpic%2Fitem%2Faa64034f78f0f7365e85822c0155b319ebc413a0.jpg') no-repeat; background-size: auto 100%;">
									<div class="inner text-center np">
										<div class="ribbon">
											<h6 class="nmb">发现好书</h6>
											<h5 class="text-semibold uppercase nmb">在线阅读体验</h5>
											<div class="space10"></div>
											<a href="..html/read-book.html" class="with-icon prepend-icon"><i class="fa fa-caret-right"></i><span> 去看看</span></a>
										</div>
									</div>
								</div>
								<!-- // PROMO -->
								
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
												<li><a class="round-icon active" href="#" data-toggle="tooltip" data-layout="grid" data-title="多列浏览"><i class="fa fa-th"></i></a></li>
												<li><a class="round-icon" href="#" data-toggle="tooltip" data-layout="list" data-title="按一列展开"><i class="fa fa-list"></i></a></li>
											</ul>
											<!-- // DISPLAY MODE -->
											
						
											<!-- // NUMBER OF ITEMS TO BE DISPLAY -->
										</div>
										<div class="space30 visible-xs"></div>
										<!-- PAGINATION -->
										<div class="col-xs-12 col-sm-12 col-md-6 center-xs">
											<ul class="paginator li-m-r-l pull-right">
												<li><a class="round-icon" href="#" data-toggle="tooltip" data-title="Previous Page"><i class="fa fa-angle-left"></i></a></li>
												<li><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">5</a></li>
												<li><a class="round-icon" href="#" data-toggle="tooltip" data-title="Next Page"><i class="fa fa-angle-right"></i></a></li>
											</ul>
										</div>
										<!-- // PAGINATION -->
									</div>
								</header>
				  								<!-- 1   日-->
								<div class="products-layout grid m-t-b add-cart" data-product=".product" data-thumbnail=".entry-media .thumb" data-title=".entry-title > a" data-url=".entry-title > a" data-price=".entry-price > .price">
									
									<div class="product" data-product-id="1" data-category="海外|海外-人文|海外-金典|new" data-price="1950"  data-size="日本">
										<div class="entry-media">
											<img data-src="http://s11.sinaimg.cn/mw690/006LRxGMzy7c1wctW9s4a&690" alt="" class="lazyLoad thumb products_img1" />
											<div class="hover">
												<a href="book/book-1.php" class="entry-url"></a>
												<ul class="icons unstyled">
													
													<li>
														<a href="http://s11.sinaimg.cn/mw690/006LRxGMzy7c1wctW9s4a&690" class="circle" data-toggle="lightbox"><i class="fa fa-search"></i></a>
													</li>
									             <li>
														<a href="#" class="circle add-to-cart"><i class="fa fa-heart"></i></a>
													</li>
												</ul>
												<div class="rate-bar">
													
													<div class="rateit" data-rateit-backingfld="#backing1" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
												</div>
											</div>
										</div>
										<div class="entry-main products_div">
											<h5 class="entry-title">
												<a href="book/book-1.php" class = "products_title">解忧杂货店</a>
											</h5>
											<div class="entry-description visible-list">
												<p>僻静的街道旁有一家杂货店，只要写下烦恼投进店前门卷帘门的投信口，第二天就会在店后的牛奶箱里得到回答：因男友身患绝症，年轻女孩静子在爱情与梦想间徘徊；克郎为了音乐梦想离家漂泊，却在现实中寸步难行；少年浩介面临家庭巨变，挣扎在亲情与未来的迷茫中……</br>
								他们将困惑写成信投进杂货店，奇妙的事情随即不断发生。生命中的一次偶然交会，将如何演绎出截然不同的人生？</p>
											</div>
											<div class="entry-price">
												<a>【日】东野圭吾 </a>
												
												<a href="#" class="btn btn-round btn-default add-to-cart visible-list">添加到收藏</a>
											</div>
											
										</div>
									</div>
						
							

								<!-- 2  中 -->
								
									
									<div class="product" data-product-id="2" data-category="国风|国风-人文|国风-情感|国风-历史经典|best" data-price="1987"  data-size="中国">
										<div class="entry-media">
											<img data-src="https://gss2.bdstatic.com/9fo3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike116%2C5%2C5%2C116%2C38/sign=59c82cbb2cdda3cc1fe9b07260805264/f2deb48f8c5494eee2e1ba3d2ff5e0fe98257ed6.jpg" alt="" class="lazyLoad thumb  products_img1" />
											<div class="hover">
												<a href="book/book-2.php" class="entry-url"></a>
												<ul class="icons unstyled">
													
													<li>
														<a href="https://gss2.bdstatic.com/9fo3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike116%2C5%2C5%2C116%2C38/sign=59c82cbb2cdda3cc1fe9b07260805264/f2deb48f8c5494eee2e1ba3d2ff5e0fe98257ed6.jpg" class="circle" data-toggle="lightbox"><i class="fa fa-search"></i></a>
													</li>
													<li>
														<a href="#" class="circle add-to-cart"><i class="fa fa-heart"></i></a>
													</li>

												
												</ul>
												<div class="rate-bar">
												
													<div class="rateit" data-rateit-backingfld="#backing1" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
												</div>
											</div>
										</div>
										<div class="entry-main products_div">
											<h5 class="entry-title">
												<a href="book/book-2.php" class="products_title">红高粱家族</a>
											</h5>
											<div class="entry-description visible-list">
												<p>由于1987年张艺谋执导的同名电影，《红高粱家族》成为了莫言在西方最知名的作品。张艺谋的电影只根据小说的头两章故事拍摄，但整书却讲述了家庭中的三代人挣扎于20世纪中国农村坎坷跌宕所带来的恐惧。故事从女人的孙子的视角倒序，女人因为给村中的抗日战士运粮而被日本人枪杀，从此被祭为英雄。然而在20世纪30年代，村庄所抗争的暴力并不只有日本侵略者，还有反复破坏红高粱地的土匪。</p>
											</div>
											<div class="entry-price">
												<a>莫言</a>
												
												<a href="#" class="btn btn-round btn-default add-to-cart visible-list">添加到收藏</a>
											</div>
											
										</div>
									</div>
						

								<!-- 3  美 -->
								
									
									<div class="product" data-product-id="3" data-category="海外|海外-情感|海外-人文|海外-浪漫青春|海外-亲子|best" data-price="1813"  data-size="欧美">
										<div class="entry-media">
											<img data-src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1529316684742&di=4148f8d591d7aa3a6c194c10b5b04c9c&imgtype=0&src=http%3A%2F%2Fimg4.duitang.com%2Fuploads%2Fitem%2F201601%2F03%2F20160103182508_JTjPd.jpeg" alt="" class="lazyLoad thumb products_img1" />
											<div class="hover">
												<a href="book/book-3.php" class="entry-url"></a>
												<ul class="icons unstyled">
													
													<li>
														<a href="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1529316684742&di=4148f8d591d7aa3a6c194c10b5b04c9c&imgtype=0&src=http%3A%2F%2Fimg4.duitang.com%2Fuploads%2Fitem%2F201601%2F03%2F20160103182508_JTjPd.jpeg" class="circle" data-toggle="lightbox"><i class="fa fa-search"></i></a>
													</li>
													<li>
														<a href="#" class="circle add-to-cart"><i class="fa fa-heart"></i></a>
													</li>

												
												</ul>
												<div class="rate-bar">
													
													<div class="rateit" data-rateit-backingfld="#backing1" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
												</div>
											</div>
										</div>
										<div class="entry-main products_div">
											<h5 class="entry-title">
												<a href="book/book-3.php" class="products_title">傲慢与偏见</a>
											</h5>
											<div class="entry-description visible-list">
												<p>
        傲慢的单身青年达西与带有偏见的二小姐伊丽莎白、富裕的单身贵族宾利与贤淑的大小姐简之间的感情纠葛，充分表达了作者本人的婚姻观，强调经济利益对恋爱和婚姻的影响。小说情节富有喜剧性，语言机智幽默，是奥斯丁小说中广受欢迎的一部，并被多次改编成电影和电视剧</p>
											</div>
											<div class="entry-price">
												<a>【英】简.奥斯丁</a>
												
												<a href="#" class="btn btn-round btn-default add-to-cart visible-list">添加到收藏</a>
											</div>
											
										</div>
									</div>
						
							

									<!-- 4  俄罗斯 -->
								
									
									<div class="product" data-product-id="4" data-category="海外|海外-人文|海外-名著|海外-亲子" data-price="1913"  data-size="俄罗斯">
										<div class="entry-media">
											<img data-src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1529317548104&di=18ac3113a089637801acfa371271bffc&imgtype=0&src=http%3A%2F%2Fpic5.997788.com%2Fpic_search%2F00%2F12%2F45%2F54%2Fse12455491.jpg" alt="" class="lazyLoad thumb products_img1"  />
											<div class="hover">
												<a href="book/book-4.php" class="entry-url"></a>
												<ul class="icons unstyled">
													
													<li>
														<a href="http://img3m3.ddimg.cn/24/6/22613703-1_b_1.jpg" class="circle" data-toggle="lightbox"><i class="fa fa-search"></i></a>
													</li>
													<li>
														<a href="#" class="circle add-to-cart"><i class="fa fa-heart"></i></a>
													</li>

												
												</ul>
												<div class="rate-bar">
													
													<div class="rateit" data-rateit-backingfld="#backing1" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
												</div>
											</div>
										</div>
										<div class="entry-main products_div">
											<h5 class="entry-title">
												<a href="book/book-4.php" class="products_title">童年</a>
											</h5>
											<div class="entry-description visible-list">
												<p>《童年》《在人间》《我的大学》是高尔基著名的三部曲自传体小说。被誉为苏联**秀的自传体小说之一。本书讲述的是以作者为原型的阿廖沙从3岁到10岁这一时期的童年生活。小说主要从儿童的视角观察描写生活，又以成人的视角审视整个社会及人生。人物已不再是单纯的个人，家庭已不是一般的家庭，而是那个时代——那个由沉重的劳动、家长制手工业的生产关系和无聊生活造就的小市民社会的缩影。本书展现了当时整个社会由腐败、没落而趋向灭亡的过程。
    《童年》这本书写出了作者对苦难生活的认识，对社会人生的独特见解。
 </p>
											</div>
											<div class="entry-price">
												<a>【苏】高尔基</a>
												
												<a href="#" class="btn btn-round btn-default add-to-cart visible-list">添加到收藏</a>
											</div>
											
										</div>
									</div>
						

	                              <!-- 5  法国 -->


									
									<div class="product" data-product-id="5" data-category="海外|海外-人文|海外-名著|海外-亲子|child" data-price="1950"  data-size="其他">
										<div class="entry-media">
											<img data-src="https://img.25pp.com/uploadfile/soft/images/2015/0403/20150403105730750.jpeg" alt="" class="lazyLoad thumb products_img1" />
											<div class="hover">
												<a href="book/book-5.php" class="entry-url"></a>
												<ul class="icons unstyled">
													
													<li>
														<a href="https://img.25pp.com/uploadfile/soft/images/2015/0403/20150403105730750.jpeg" class="circle" data-toggle="lightbox"><i class="fa fa-search"></i></a>
													</li>
													<li>
														<a href="#" class="circle add-to-cart"><i class="fa fa-heart"></i></a>
													</li>

												
												</ul>
												<div class="rate-bar">
													
													<div class="rateit" data-rateit-backingfld="#backing1" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
												</div>
											</div>
										</div>
										<div class="entry-main products_div">
											<h5 class="entry-title">
												<a href="book/book-5.php" class="products_title">安徒生童话</a>
											</h5>
											<div class="entry-description visible-list">
												<p>一代童话大师安徒生倾尽毕生心血打造了一个瑰丽的幻想王国，在这个“献给未来的一代”的神秘世界里，有为了心上人的幸福甘愿化作泡沫的小美人鱼，有历经千辛万苦最终变成了白天鹅的丑小鸭，有全心全意解救变成野天鹅的哥哥们的小公主艾丽莎……</p>
											</div>
											<div class="entry-price">
												<a>【丹麦】安徒生</a>
												
												<a href="#" class="btn btn-round btn-default add-to-cart visible-list">添加到收藏</a>
											</div>
											
										</div>
									</div>
						
								

         <!-- 6 mei -->
							
									
									<div class="product" data-product-id="6" data-category="海外|海外-人文|海外-名著|海外-亲子|best" data-price="1950"  data-size="印度">
										<div class="entry-media">
											<img data-src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1529318747898&di=5e5ec5cba9cdce87c38dfbfa26a51779&imgtype=0&src=http%3A%2F%2Fimg34.ddimg.cn%2F48%2F21%2F22611054-1_o.jpg" alt="" class="lazyLoad thumb products_img1" />
											<div class="hover">
												<a href="book/book-6.php" class="entry-url"></a>
												<ul class="icons unstyled">
													
													<li>
														<a href="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1529318747898&di=5e5ec5cba9cdce87c38dfbfa26a51779&imgtype=0&src=http%3A%2F%2Fimg34.ddimg.cn%2F48%2F21%2F22611054-1_o.jpg" class="circle" data-toggle="lightbox"><i class="fa fa-search"></i></a>
													</li>
													<li>
														<a href="#" class="circle add-to-cart"><i class="fa fa-heart"></i></a>
													</li>

												
												</ul>
												<div class="rate-bar">
													
													<div class="rateit" data-rateit-backingfld="#backing1" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
												</div>
											</div>
										</div>
										<div class="entry-main products_div">
											<h5 class="entry-title">
												<a href="book/book-6.php" class="products_title">泰戈尔诗集</a>
											</h5>
											<div class="entry-description visible-list">
												<p>泰戈尔的诗歌弥漫着恬静、肃穆的意境，如珍珠般闪耀着深邃的哲理之光，引人深思，让人陶醉；他在对自然、世界、人性的描写上，能够与小读者产生强烈的共鸣，并使其更了解自己的理想与追求，在阅读中充满欢乐与光明，正因如此，他的诗被人们形象的称作“精神生活的灯塔”。</p>
											</div>
											<div class="entry-price">
												<a>【印】泰戈尔</a>
												
												<a href="#" class="btn btn-round btn-default add-to-cart visible-list">添加到收藏</a>
											</div>
											
										</div>
									</div>
						
						


									<!-- 7fa -->
							
									
									<div class="product" data-product-id="7" data-category="海外|海外-人文|海外-名著|海外-亲子" data-price="1862"  data-size="法国">
										<div class="entry-media">
											<img data-src="http://e.hiphotos.baidu.com/baike/w%3D230/sign=edc913da9b22720e7bcee5f94bca0a3a/cb8065380cd7912373e322ccae345982b2b78003.jpg" alt="" class="lazyLoad thumb products_img1"/>
											<div class="hover">
												<a href="book/book-7.php" class="entry-url"></a>
												<ul class="icons unstyled">
													
													<li>
														<a href="" class="circle" data-toggle="lightbox"><i class="fa fa-search"></i></a>
													</li>
													<li>
														<a href="#" class="circle add-to-cart"><i class="fa fa-heart"></i></a>
													</li>

												
												</ul>
												<div class="rate-bar">
													<input type="range" value="4.5" step="0.5" id="backing1" />
													<div class="rateit" data-rateit-backingfld="#backing1" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
												</div>
											</div>
										</div>
										<div class="entry-main products_div">
											<h5 class="entry-title ">
												<a href="book/book-7.php" class = "products_title" >悲惨世界</a>
											</h5>
											<div class="entry-description visible-list">
												<p>这是一轴辉煌的画卷，这是一部动人的史诗，这是一种浩博的精神，这是一股充沛的激情，当我们今天要用简单的话来概括《悲惨世界》时，与其笼统地称它为“名著”、“杰作”、“瑰宝”，似乎不如这样具体地称呼它较为确切。
　　作为画卷，它可以使我们联想起什么？它像《清明上河图》？《清明上河图》描绘的是一个特定时间的广阔空间，而它的规模却要大得多，它表现的是一个漫长时代的历史内容。</p>
											</div>
											<div class="entry-price">
												<a>【法】雨果</a>
												
												<a href="#" class="btn btn-round btn-default add-to-cart visible-list">添加到收藏</a>
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
											<div class="list-content">(+00)1344356-675</div>
										</li>
										<li>
											<span class="list-icon"><i class="round-icon fa fa-envelope-alt"></i></span>
											<div class="list-content">support@themina.net</div>
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
									<p>有新推荐·联系你</p>
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
		

<!-- // PAGE WRAPPER -->

<!-- Essential Javascripts -->
<script src="../js/minified.js"></script>
<!-- // Essential Javascripts -->

	<!-- Particular Page Javascripts -->
	<script src="../js/jquery.nouislider.js"></script>
	<script src="../js/jquery.isotope.min.js"></script>
	<script src="../js/products.js"></script>
	<!-- // Particular Page Javascripts -->
</body>
</html>