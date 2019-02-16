<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>亦书亦音</title>
  <meta name="description" content=""/>
  <meta name="keywords" content=""/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
  <!-- Favorite Icons -->
  <!-- GENERAL CSS FILES -->
  <link rel="stylesheet" href="../css/minified.css">
  <script  type="text/javascript" src="../js/jquery.min.js"></script>
  <script src="../js/modernizr.min.js"></script>
  <!-- PARTICULAR PAGES CSS FILES -->
  <link rel="stylesheet" href="../css/owl.theme.css">
  <link rel="stylesheet" href="../css/owl.carousel.css">
  <link href="../css/flexslider.css" rel="stylesheet" />
  <link rel="stylesheet" href="../css/innerpage.css">
  <!-- // PARTICULAR PAGES CSS FILES -->
  <link rel="stylesheet" href="../css/responsive.css">
</head>
<body class="home">
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
                <li>
                  <!-- SEARCH BOX -->
                  <div class="search-box">
                    <form action="search.php"method="post">
                      <div class="input-iconed prepend">
                        <button class="input-icon"><i class="fa fa-search"></i></button>
                        <label for="input-search"class="placeholder">开始你的探索…</label>
                        <input type="text"name="search"id="input-search"class="round-input full-width"required />
                      </div>
                    </form>
                  </div>
                  <!-- // SEARCH BOX -->
                </li>
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
              <li class="active">
                <a href="index.php">首页</a>
              </li>
              <li>
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
  
  
  <!-- HOMEPAGE SLIDER -->
  <div id="home-slider">
    <div class="flexslider">
      <ul class="slides">
        <!-- THE FIRST SLIDE -->
        <li>
          <!-- THE MAIN IMAGE IN THE SLIDE -->
          <img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1529348035614&di=5577e7b00d90553fe69809b3076f3034&imgtype=jpg&src=http%3A%2F%2Fimg2.imgtn.bdimg.com%2Fit%2Fu%3D2961876502%2C2428548018%26fm%3D214%26gp%3D0.jpg" alt="" />
          
          <!-- THE CAPTIONS OF THE FIRST SLIDE -->
          
          <div class="flex-caption herotext text-bold gfc animated"
            data-animation="fadeInRightBig"
            data-x="680"
            data-y="40"
            data-speed="900"
          data-start="1800">陈奕迅</div>
          
          <div class="flex-caption h6 text-bold gfc text-center animated"
            data-animation="fadeInDown"
            data-x="639"
            data-y="260"
            data-speed="1600"
            data-start="2900">
            十年<br/>
            <a href="products_music.php" class="btn btn-primary uppercase">了解详情</a>
          </div>
          
        </li>
        
        <!-- THE SECOND SLIDE -->
        <li>
          <!-- THE MAIN IMAGE IN THE SLIDE -->
          <img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1530423490&di=cf1962968bf4e7a6d7daa13f133b8ecd&imgtype=jpg&er=1&src=http%3A%2F%2Fimg.zcool.cn%2Fcommunity%2F01317d581c3146a84a0e282bfa4189.jpg%403000w_1l_2o_100sh.jpg" alt="" />
          
        </li>
        
        <!-- THE THIRD SLIDE -->
        <li>
          
          <img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1529422283729&di=597a9e5378aa9628686ae98c9a645c95&imgtype=0&src=http%3A%2F%2Fimg.qdaily.com%2Farticle%2Farticle_show%2F20160702105013tQhLKupmyzal7HPs.jpg%3FimageMogr2%2Fauto-orient%2Fthumbnail%2F%25211200x380r%2Fgravity%2FCenter%2Fcrop%2F1200x380%2Fquality%2F85%2Fformat%2Fjpg%2Fignore-error%2F1" alt="" />
          
          <div class="flex-caption h2 text-bold gfc bg-dark animated uppercase"
            data-animation="fadeInUpBig"
            data-x="797"
            data-y="30"
            data-speed="600"
            data-start="900">与文字相约,爱上阅读<br>
            <a href="products_book.php">了解详情</a>
          </div>
        </li>
        
      </ul>
    </div>
  </div>
  <!-- // HOMEPAGE SLIDER -->
  
  <!-- SITE MAIN CONTENT -->
  <main id="main-content" role="main">
    
    <!-- PROMO BOXES -->
    <section class="section promos">
      <div class="container">
        <div class="row" style=" min-width: 1000px; display: flex; flex-flow:row nowrap; ">
          <div class="col-md-4">
            <div class="promo inverse-background first-row animated" data-animation="fadeInDown" style="background: url('https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=901108476,2651634656&fm=200&gp=0.jpg') no-repeat; background-size: 100%;">
              <div class="inner text-center np">
                <div class="ribbon">
                  <h6 class="nmb">新书推荐</h6>
                  <h5 class="text-semibold uppercase nmb">遇见对的书</h5>
                  <div class="space10"></div>
                  <a href="products_book.php" class="with-icon prepend-icon"><i class="fa fa-caret-right"></i><span>进入书籍</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="promo inverse-background first-row animated" data-animation="fadeInDown" style="background: url('https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1529826653530&di=3e7f38fa1d44a0803385ff156dc5c432&imgtype=0&src=http%3A%2F%2Fimgsrc.baidu.com%2Fimgad%2Fpic%2Fitem%2F3b87e950352ac65c7f23b456f1f2b21193138af5.jpg') no-repeat; background-size: 100%;">
              <div class="inner text-center np">
                <div class="ribbon">
                  <h6 class="nmb">新歌到~</h6>
                  <h5 class="text-semibold uppercase nmb">侧耳倾听</h5>
                  <div class="space10"></div>
                  <a href="products_music.php" class="with-icon prepend-icon"><i class="fa fa-caret-right"></i><span>进入音乐</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="promo inverse-background first-row animated" data-animation="fadeInDown" style="background: url('https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1530421183&di=cf4baf8347044346e915c90a0974b90e&imgtype=jpg&er=1&src=http%3A%2F%2Fshulaquan.com%2Fwp-content%2Fuploads%2F2014%2F10%2F11.jpg') no-repeat; background-size: 100%;">
              <div class="inner text-center np">
                <div class="ribbon">
                  <h6 class="nmb">重温收藏</h6>
                  <h5 class="text-semibold uppercase nmb">回味经典</h5>
                  <div class="space10"></div>
                  <a href="cart.php" class="with-icon prepend-icon"><i class="fa fa-caret-right"></i><span>收藏夹</span></a>
                </div>
              </div>
            </div>
          </div>
          
          
        </div>
      </div>
    </section>
    <!-- // PROMO BOXES -->
    
    <!-- BOOK PRODUCTS -->
    <section class="section featured visible-items-4">
      <div class="container">
        <div class="row">
          <header class="section-header clearfix col-sm-offset-3 col-sm-6">
            <h3 class="section-title">热书推荐</h3>
            <p class="section-teaser">为乐趣而读书~</p>
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
                  <img src="http://s11.sinaimg.cn/mw690/006LRxGMzy7c1wctW9s4a&690" alt="" class="lazyLoad thumb products_img1" />
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
                  
                  <div class="entry-price">
                    <a>【日】东野圭吾 </a>
                    
                    <a href="#" class="btn btn-round btn-default add-to-cart visible-list">添加到收藏</a>
                  </div>
                  
                </div>
              </div>
              
              <div class="product" data-product-id="2">
                <div class="entry-media">
                  <img src="https://gss2.bdstatic.com/9fo3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike116%2C5%2C5%2C116%2C38/sign=59c82cbb2cdda3cc1fe9b07260805264/f2deb48f8c5494eee2e1ba3d2ff5e0fe98257ed6.jpg" alt="" class="lazyLoad thumb  products_img1" />
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
                  
                  <div class="entry-price">
                    <a>莫言</a>
                    
                    <a href="#" class="btn btn-round btn-default add-to-cart visible-list">添加到收藏</a>
                  </div>
                  
                </div>
              </div>
              
              <div class="product" data-product-id="3">
                
                <div class="entry-media">
                  <img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1529316684742&di=4148f8d591d7aa3a6c194c10b5b04c9c&imgtype=0&src=http%3A%2F%2Fimg4.duitang.com%2Fuploads%2Fitem%2F201601%2F03%2F20160103182508_JTjPd.jpeg" alt="" class="lazyLoad thumb products_img1" />
                  <div class="hover">
                    <a href="book/book-3.php" class="entry-url"></a>
                    <ul class="icons unstyled">
                      
                      <li>
                        <a href="images/book/1.jpg" class="circle" data-toggle="lightbox"><i class="fa fa-search"></i></a>
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
                  
                  <div class="entry-price">
                    <a>【英】简.奥斯丁</a>
                    
                    <a href="#" class="btn btn-round btn-default add-to-cart visible-list">添加到收藏</a>
                  </div>
                  
                </div>
              </div>
              
              <div class="product" data-product-id="4">
                
                <div class="entry-media">
                  <img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1529317548104&di=18ac3113a089637801acfa371271bffc&imgtype=0&src=http%3A%2F%2Fpic5.997788.com%2Fpic_search%2F00%2F12%2F45%2F54%2Fse12455491.jpg" alt="" class="lazyLoad thumb products_img1"  />
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
                  
                  <div class="entry-price">
                    <a>【苏】高尔基</a>
                    
                    <a href="#" class="btn btn-round btn-default add-to-cart visible-list">添加到收藏</a>
                  </div>
                  
                </div>
              </div>
              
              <div class="product" data-product-id="5">
                <div class="entry-media">
                  <img src="https://img.25pp.com/uploadfile/soft/images/2015/0403/20150403105730750.jpeg" alt="" class="lazyLoad thumb products_img1" />
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
                  
                  <div class="entry-price">
                    <a>【丹麦】安徒生</a>
                    
                    <a href="#" class="btn btn-round btn-default add-to-cart visible-list">添加到收藏</a>
                  </div>
                  
                </div>
              </div>
              
              <div class="product" data-product-id="6">
                <div class="entry-media">
                  <img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1529318747898&di=5e5ec5cba9cdce87c38dfbfa26a51779&imgtype=0&src=http%3A%2F%2Fimg34.ddimg.cn%2F48%2F21%2F22611054-1_o.jpg" alt="" class="lazyLoad thumb products_img1" />
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
                  
                  <div class="entry-price">
                    <a>【印】泰戈尔</a>
                    
                    <a href="#" class="btn btn-round btn-default add-to-cart visible-list">添加到收藏</a>
                  </div>
                  
                </div>
                
              </div>
              
              <div class="product" data-product-id="7">
                <div class="entry-media">
                  <img src="http://e.hiphotos.baidu.com/baike/w%3D230/sign=edc913da9b22720e7bcee5f94bca0a3a/cb8065380cd7912373e322ccae345982b2b78003.jpg" alt="" class="lazyLoad thumb products_img1"/>
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
                  <div class="entry-price">
                    <a>【法】雨果</a>
                    
                    <a href="#" class="btn btn-round btn-default add-to-cart visible-list">添加到收藏</a>
                  </div>
                  
                </div>
              </div>
              
            </div>
            <!-- // END CAROUSEL -->
          </div>
        </div>
      </div>
    </section>
    <!-- // BOOK PRODUCTS -->
    
    <section class="section featured visible-items-4">
      <div class="container">
        <div class="row">
          <header class="section-header clearfix col-sm-offset-3 col-sm-6">
            <h3 class="section-title">音乐</h3>
            <p class="section-teaser">音乐表达的是无法用语言描述，却又不可能对其保持沉默的东西~</p>
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
              <div class="product" data-product-id="12">
                <div class="entry-media">
                  <img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1529241117190&di=251deaf7f48550bc4928480e755540a3&imgtype=0&src=http%3A%2F%2Fpic.baike.soso.com%2Fp%2F20130904%2F20130904144215-145970863.jpg" alt="" class="lazyLoad thumb products_img" />
                  <div class="hover">
                    <a href="music/music4.php" class="entry-url"></a>
                    <ul class="icons unstyled">
                      <li>
                        <a href="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1529241117190&di=251deaf7f48550bc4928480e755540a3&imgtype=0&src=http%3A%2F%2Fpic.baike.soso.com%2Fp%2F20130904%2F20130904144215-145970863.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                      </li>
                      <li>
                        <a href="#" class="circle heart add-to-cart"><i class="iconfont-heart"></i></a>
                      </li>
                    </ul>
                    
                  </div>
                </div>
                <div class="entry-main products_div">
                  <h5 class="entry-title">
                  <a href="music/music4.php"><p class="accent-color price products_title">偿还（つぐない）</p></a>
                  </h5>
                  
                  <div class="entry-price">
                    <strong>邓丽君</strong>
                    <a href="#" class="btn btn-round btn-default add-to-cart visible-list">我喜欢</a>
                  </div>
                  
                </div>
              </div>
              
              <div class="product" data-product-id="13">
                <div class="entry-media">
                  <img src="https://gss3.bdstatic.com/7Po3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike116%2C5%2C5%2C116%2C38/sign=9d43326cb5096b63951456026d5aec21/342ac65c103853436cf772629813b07eca8088bd.jpg" alt="" class="lazyLoad thumb products_img" />
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
                  
                  <div class="entry-price">
                    <strong>王楚然</strong>
                    <a href="#" class="btn btn-round btn-default add-to-cart visible-list">我喜欢</a>
                  </div>
                  
                </div>
                
              </div>
              
              <div class="product" data-product-id="11">
                <div class="entry-media">
                  <img src="https://gss1.bdstatic.com/9vo3dSag_xI4khGkpoWK1HF6hhy/baike/w%3D268%3Bg%3D0/sign=df8291438c94a4c20a23e02d36cf7ce8/5ab5c9ea15ce36d3dc33f37c31f33a87e950b142.jpg " alt="" class="lazyLoad thumb products_img" />
                  <div class="hover">
                    <a href="music/music1.php" class="entry-url"></a>
                    <ul class="icons unstyled">
                      <li>
                        <a href="https://gss1.bdstatic.com/9vo3dSag_xI4khGkpoWK1HF6hhy/baike/w%3D268%3Bg%3D0/sign=df8291438c94a4c20a23e02d36cf7ce8/5ab5c9ea15ce36d3dc33f37c31f33a87e950b142.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                      </li>
                      <li>
                        <a href="#" class="circle heart add-to-cart"><i class="iconfont-heart "></i></a>
                      </li>
                    </ul>
                    
                  </div>
                </div>
                <div class="entry-main products_div">
                  <h5 class="entry-title">
                  <a href="music/music1.php"><p class="accent-color price products_title">恩赐</p></a>
                  </h5>
                  
                  <div class="entry-price">
                    <strong>王楚然</strong>
                    <a href="#" class="btn btn-round btn-default add-to-cart visible-list">我喜欢</a>
                  </div>
                  
                </div>
                
              </div>
              
              <div class="product" data-product-id="10">
                <div class="entry-media">
                  <img src="http://img37.ddimg.cn/47/12/23597687-1_e.jpg" alt="" class="lazyLoad thumb products_img" />
                  <div class="hover">
                    <a href="music/music7.php" class="entry-url"></a>
                    <ul class="icons unstyled">
                      <li>
                        <a href="http://img37.ddimg.cn/47/12/23597687-1_e.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                      </li>
                      <li>
                        <a href="#" class="circle heart add-to-cart"><i class="iconfont-heart "></i></a>
                      </li>
                    </ul>
                    
                  </div>
                </div>
                <div class="entry-main products_div">
                  <h5 class="entry-title">
                  <a href="music/music7.php"><p class="accent-color price products_title">Hush, Little Baby </p></a>
                  </h5>
                  
                  <div class="entry-price">
                    <strong>Wee Sing</strong>
                    <a href="#" class="btn btn-round btn-default add-to-cart visible-list">我喜欢</a>
                  </div>
                  
                </div>
              </div>
              
              <div class="product" data-product-id="9">
                
                <div class="entry-media">
                  <img src="https://gss0.bdstatic.com/-4o3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike150%2C5%2C5%2C150%2C50/sign=d8c512bbe2f81a4c323fe49bb6430b3c/b3b7d0a20cf431ad1f19e3f64236acaf2fdd9832.jpg" alt="" class="lazyLoad thumb products_img" />
                  <div class="hover">
                    <a href="music/music6.php" class="entry-url"></a>
                    <ul class="icons unstyled">
                      <li>
                        <a href="https://gss2.bdstatic.com/9fo3dSag_xI4khGkpoWK1HF6hhy/baike/crop%3D0%2C38%2C603%2C397%3Bc0%3Dbaike80%2C5%2C5%2C80%2C26/sign=25f8892bd133c895b231c23bec235fc3/0b55b319ebc4b745697549aac7fc1e178b8215ac.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                      </li>
                      <li>
                        <a href="#" class="circle heart add-to-cart"><i class="iconfont-heart "></i></a>
                      </li>
                    </ul>
                    
                  </div>
                </div>
                <div class="entry-main products_div">
                  <h5 class="entry-title">
                  <a href="music/music6.php"><p class="accent-color price products_title">故梦 </p></a>
                  </h5>
                  
                  <div class="entry-price">
                    <strong>双笙</strong>
                    <a href="#" class="btn btn-round btn-default add-to-cart visible-list">我喜欢</a>
                  </div>
                  
                </div>
              </div>
              
              <div class="product" data-product-id="8">
                <div class="entry-media">
                  <img src="https://gss2.bdstatic.com/9fo3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike80%2C5%2C5%2C80%2C26/sign=c916473dfe198618554ae7d62b844516/77094b36acaf2eddd9c18bb58b1001e9390193be.jpg" alt="" class="lazyLoad thumb products_img" />
                  <div class="hover">
                    <a href="music/music8.php" class="entry-url"></a>
                    <ul class="icons unstyled">
                      <li>
                        <a href="https://gss2.bdstatic.com/9fo3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike80%2C5%2C5%2C80%2C26/sign=c916473dfe198618554ae7d62b844516/77094b36acaf2eddd9c18bb58b1001e9390193be.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                      </li>
                      <li>
                        <a href="#" class="circle heart add-to-cart"><i class="iconfont-heart "></i></a>
                      </li>
                    </ul>
                    
                  </div>
                </div>
                <div class="entry-main products_div">
                  <h5 class="entry-title">
                  <a href="music/music8.php"><p class="accent-color price products_title">Persona</p></a>
                  </h5>
                  
                  <div class="entry-price">
                    <strong>安七炫</strong>
                    <a href="#" class="btn btn-round btn-default add-to-cart visible-list">我喜欢</a>
                  </div>
                  
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    
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
        <script src="../js/products.js"></script>
        <!-- Particular Page Javascripts -->
        <script src="../js/owl.carousel.js"></script>
        <script src="../js/jquery.flexslider-min.js"></script><!--jquery flexSlider 图片轮播插件-->
        <!-- // Particular Page Javascripts -->
        <script>
        jQuery(function($) {
        var $slider = $('#home-slider > .flexslider');
        $slider.find('.flex-caption').each(function() {
        var $this = $(this);
        var configs = {
        left: $this.data('x'),
        top: $this.data('y'),
        speed: $this.data('speed') + 'ms',
        delay: $this.data('start') + 'ms'
        };
        if ( configs.left == 'center' && $this.width() !== 0 )
        {
        configs.left = ( $slider.width() - $this.width() ) / 2;
        }
        if ( configs.top == 'center' && $this.height() !== 0 )
        {
        configs.top = ( $slider.height() - $this.height() ) / 2;
        }
        
        $this.data('positions', configs);
        
        $this.css({
        'left': configs.left + 'px',
        'top': configs.top + 'px',
        'animation-duration': configs.speed,
        'animation-delay': configs.delay
        });
        });
        
        $(window).on('resize', function() {
        var wW = $(window).width(),
        zoom = ( wW >= 1170 ) ? 1 : wW / 1349;
        $('.flex-caption.gfc').css('zoom', zoom);
        });
        $(window).trigger('resize');
        
        
        
        $slider.imagesLoaded(function() {
        $slider.flexslider({
        animation: 'slide',
        easing: 'easeInQuad',
        slideshow: false,
        nextText: '<i class="fa fa-angle-right"></i>',
        prevText: '<i class="fa fa-angle-left"></i>',
        start: function() {
        flex_fix_pos(1);
        },
        before: function(slider) {
        // initial caption animation for next show
        $slider.find('.slides li .animation-done').each(function() {
        $(this).removeClass('animation-done');
        var animation = $(this).attr('data-animation');
        $(this).removeClass(animation);
        });
        
        flex_fix_pos(slider.animatingTo + 1);
        },
        after: function() {
        // run caption animation
        $slider.find('.flex-active-slide .animated').each(function() {
        var animation = $(this).attr('data-animation');
        $(this).addClass('animation-done').addClass(animation);
        });
        }
        });
        });
        
        
        function flex_fix_pos(i) {
        $slider.find('.slides > li:eq(' + i + ') .gfc').each(function() {
        var $this = $(this),
        pos = $(this).data('positions');
        
        if ( pos.left == 'center' )
        {
        pos.left = ( $slider.width() - $this.width() ) / 2;
        $this.css('left', pos.left + 'px');
        $this.data('positions', pos);
        }
        if ( pos.top == 'center' )
        {
        pos.top = ( $slider.height() - $this.height() ) / 2;
        $this.css('left', pos.top + 'px');
        $this.data('positions', pos);
        }
        });
        }
        });
        </script>
      </body>
    </html>