<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <?= Html::csrfMetaTags() ?>
		<title><?= Html::encode($this->title) ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
		
		<!-- all css here -->
                <link href="../../web/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
                <link href="../../web/css/et-fonts.css" rel="stylesheet" type="text/css"/>
                <link href="../../web/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
                <link href="../../web/css/magnific-popup.css" rel="stylesheet" type="text/css"/>
                <link href="../../web/css/icofont.css" rel="stylesheet" type="text/css"/>
                <link href="../../web/css/meanmenu.css" rel="stylesheet" type="text/css"/>
                <link href="../../web/css/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
                <link href="../../web/css/responsive.css" rel="stylesheet" type="text/css"/>
                <link href="../../web/css/style.css" rel="stylesheet" type="text/css"/>
                <link href="../../web/css/custom.css" rel="stylesheet" type="text/css"/>
                <script src="../../web/js/vendor/modernizr-2.8.3.min.js" type="text/javascript"></script>
              
    </head>
    <body>
	<?php $this->beginBody() ?>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
         <!-- header-area-start -->
		<header>
			<div class="main-menu-area ptb-20">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-2">
                                                    
							<div class="logo">
								<a href="/"><img src="../../web/img/logo/1.png" alt=""/></a> 

							</div>
						</div>
						<div class="col-md-9 col-sm-10">
							<?php include(Yii::getAlias('@app/views/layouts/top_menu.php'));?>
						</div>
					</div>
				</div>
			</div>
		</header>
        <!-- header-area-end -->
		<!-- breadcrumb-banner-area -->
		<div class="breadcrumb-banner-area bg-opacity bg-img ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-text">
							<div class="breadcrumb-menu">
                                                            <!--  <ul>
                                                                 <li><a href="index.html">home</a></li>
                                                                 <li><span>Blog gird right sidebar</span></li>
                                                             </ul> --> 
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumb-banner-area-end -->
		<!-- blog-gird-left-sidebar-start -->
		<div class="blog-gird-left-sidebar pt-100 pb-40">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
		
							<?= $content ?>
						</div>
					</div>
					<div class="col-md-4">
						<div class="sidebar-widget">
							<h5 class="sidebar-title">Поиск по сайту</h5>
							<form id="search" action="#">
								<input type="text" placeholder="Search" />
								<button>Search</button>
							</form>
						</div>
						<div class="sidebar-widget">
							<h5 class="sidebar-title">Новые Фильмы</h5>
							<ul class="sidebar-link">
								<li><a href="#">Howe to grow business plan Sticky Post</a></li>
								<li><a href="#">Howe to grow business plan</a></li>
								
							</ul>
						</div>
						<div class="sidebar-widget">
							<h5 class="sidebar-title">Популярные фильмы</h5>
							<ul class="sidebar-link">
								<li><a href="#">minimal</a></li>
								<li><a href="#">Month of the year</a></li>
								
							</ul>
						</div>
						<div class="sidebar-widget">
						<h5 class="sidebar-title">Комментарии</h5>
							<ul class="sidebar-link">
								<li><a href="#">fohinni on Howe to grow business plan</a></li>
								<li><a href="#">nam nai on Howe to grow business plan</a></li>
								
							</ul>
						</div>
						<div class="sidebar-widget">
							<h5 class="sidebar-title">tags</h5>
							<ul class="tag">
								<li><?= app\components\CatsWidget::widget() ?></li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- blog-gird-left-sidebar-end -->
		<!-- footer-area-start -->
		<footer>
			<div class="footer-area pt-80 pb-50">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-4">
							<div class="single-footer text-center mb-30">
								<div class="footer-icon">
									<i class="fa fa-phone"></i>
								</div>
								<div class="footer-info">
									<span>+1111 222 3333 </span>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="single-footer text-center mb-30">
								<div class="footer-icon">
									<i class="fa fa-envelope"></i>
								</div>
								<div class="footer-info">
									<span>admin@yourmail.com</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="single-footer text-center mb-30">
								<div class="footer-icon">
									<i class="fa fa-map-marker"></i>
								</div>
								<div class="footer-info">
									<span>Banasree, Dhaka </span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom-area ptb-20">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="copyright">
								<p>Copyright © 2017 <a href="https://devitems.com/" target="_blank">DevItems</a> All Right Reserved.</p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="icon floatright">
								<a href="https://twitter.com/devitemsllc"><i class="fa fa-twitter"></i></a>
								<a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="fa fa-facebook"></i></a>
								<a href="https://dribbble.com/devitemsllc"><i class="fa fa-dribbble"></i></a>
								<a  href="https://www.instagram.com/devitems/"><i class="fa fa-instagram"></i></a>
								<a href="https://www.youtube.com/channel/UC_AH6tcQrJa8txh_rNbL-AQ"><i class="fa fa-youtube"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- footer-area-end -->
		<!-- all js here -->
                <script src="../../web/js/vendor/jquery-1.12.0.min.js" type="text/javascript"></script>
                <script src="../../web/js/ajax-mail.js" type="text/javascript"></script>
                <script src="../../web/js/bootstrap.min.js" type="text/javascript"></script>
                <script src="../../web/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
                <script src="../../web/js/isotope.pkgd.min.js" type="text/javascript"></script>
                <script src="../../web/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
                <script src="../../web/js/jquery.meanmenu.js" type="text/javascript"></script>
                <script src="../../web/js/main.js" type="text/javascript"></script>
                <script src="../../web/js/owl.carousel.min.js" type="text/javascript"></script>
                <script src="../../web/js/plugins.js" type="text/javascript"></script>
     
	<?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage() ?>
