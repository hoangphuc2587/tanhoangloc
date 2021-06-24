<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/common.css" media="all">	
	<script src="<?php echo get_template_directory_uri()?>/assets/js/030555ee423f.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri()?>/files/system/img/general/logo-1.png">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri()?>/files/system/img/general/logo-1.png">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/files/system/css/news.css" media="all">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/system/modules/news/assets/css/owl.carousel.css" media="all">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" media="all">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/4ce160f4c6d7.css" media="all">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/jquery/colorbox/1.6.1/css/colorbox.min.css" />
	<script src='<?php echo get_template_directory_uri()?>/assets/jquery/colorbox/1.6.1/js/colorbox.min.js'></script><script>(function($){$(document).ready(function(){$('a[data-lightbox]').map(function(){$(this).colorbox({loop: false,rel: $(this).attr('data-lightbox'),maxWidth: '98%',maxHeight: '98%'});});});})(jQuery);</script>
	<script src="<?php echo get_template_directory_uri()?>/assets/jquery/config/default.js" defer></script>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/custom.css">
	<script src="<?php echo get_template_directory_uri()?>/system/modules/news/assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo get_template_directory_uri()?>/assets/jquery/mpmansory/mp_mansory.js"></script>
	<script src="<?php echo get_template_directory_uri()?>/assets/bootstrap/bootstrap.min.js" defer></script>
	<!--[if lt IE 9]><script src="<?php echo get_template_directory_uri()?>/assets/html5shiv/html5shiv-printshiv.min.js"></script><![endif]-->	    
	</head>


<body id="top" class="win chrome webkit ch90">
	<div id="wrapper" class="clearfix">
		<header id="header" class="relative">
			<div class="inside">					
			    <?php get_template_part( 'template-parts/header/site-nav' ); ?>
				<div class="background-bre" style="display:none">
					<!-- indexer::stop -->
					<div class="mod_breadcrumb menu-brebrum container block">
						<ul>
							<li class="first"><a href="trang-chu.html" title="THIẾT KẾ XÂY DỰNG TRANG TRÍ NỘI THẤT TÂN HOÀNG LỘC><span class='fa fa-home'></span></a></li>
							<li><a href="thiet-ke.html" title="TÂN HOÀNG LỘC: Thiết Kế &amp; Thi Công Nhà Đẹp">Thiết kế</a></li>
							<li class="active last">Danh mục</li>
						</ul>
					</div>
					<!-- indexer::continue -->
				</div>
			</div>
		</header>	

