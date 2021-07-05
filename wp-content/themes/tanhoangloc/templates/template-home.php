<?php
/**
 * Template Name: Home Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
$posts_per_page = 8;
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
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/jquery/wow-slider/css.css" media="all">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/files/system/css/news.css" media="all">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" media="all">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/jquery/wow/wow-animate.css" media="all">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/4ce160f4c6d7.css" media="all">
	<script src="<?php echo get_template_directory_uri()?>//assets/jquery/config/default.js" defer></script>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/custom.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/home.css" media="all">	
	<script src="<?php echo get_template_directory_uri()?>/assets/jquery/wow/wow.min.js"></script><script>new WOW().init();</script>
	<script src="<?php echo get_template_directory_uri()?>/assets/jquery/wow-slider/wow.js" defer></script>
	<script src="<?php echo get_template_directory_uri()?>/assets/jquery/wow-slider/wow-effect.js" defer></script>
	<script src="<?php echo get_template_directory_uri()?>/assets/jquery/mpmansory/mp_mansory.js"></script>
	<script src="<?php echo get_template_directory_uri()?>/assets/bootstrap/bootstrap.min.js" defer></script>    <!--[if lt IE 9]><script src="<?php echo get_template_directory_uri()?>/assets/html5shiv/html5shiv-printshiv.min.js"></script><![endif]-->
</head>


<body id="top" class="win chrome webkit ch90">
	<div id="wrapper" class="clearfix">
		<header id="header" class="relative">
			<div class="inside">
				<?php get_template_part( 'template-parts/header/site-nav' ); ?>
				<!-- indexer::stop -->
				<div class="mod_rocksolid_slider slider-header slider-home block">
					<div id="wowslider-container-705" class="container-slider">
						<div class="ws_images">
							<ul>
								<li> <a href="<?php echo get_home_url(); ?>/bang-gia/don-gia-thi-cong-phan-tho/" title="Thiết kế & Thi công&lt;br&#62; Nhà phố - Biệt thự" title="Thiết kế & Thi công&lt;br&#62; Nhà phố - Biệt thự"><img src="<?php echo get_template_directory_uri()?>/files/upload/slide-new/slide-001.jpg" alt="Thiết kế & Thi công&lt;br&#62; Nhà phố - Biệt thự" title="" id="wows1_1"/></a><i class="fa fa-phone"></i>  <b>0908.053.279</b></li>
								<li> <a href="<?php echo get_home_url(); ?>" title="Thiết kế miễn phí&lt;br&#62; Bảo hành 10 năm"><img src="<?php echo get_template_directory_uri()?>/files/upload/slide-new/slide-002.jpg" alt="Thiết kế miễn phí&lt;br&#62; Bảo hành 10 năm" title="" id="wows1_2"/></a><i class="fa fa-phone"></i>  <b>0908.053.279</b></li>
								<li> <a href="<?php echo get_home_url(); ?>/bang-gia/don-gia-thiet-ke-kien-truc/" title="Thiết kế & Thi công&lt;br&#62; Trọn gói - Nội thất"><img src="<?php echo get_template_directory_uri()?>/files/upload/slide-new/slide-003.jpg" alt="Thiết kế & Thi công&lt;br&#62; Trọn gói - Nội thất" title="" id="wows1_3"/></a><i class="fa fa-phone"></i>  <b>0908.053.279</b></li>
								<li> <a href="<?php echo get_home_url(); ?>/bang-gia/don-gia-thiet-ke-kien-truc/" title="slide 4"><img src="<?php echo get_template_directory_uri()?>/files/upload/slide-new/slide-004.jpg" alt="" title="" id="wows1_4"/></a><i class="fa fa-phone"></i>  <b>0908.053.279</b></li>
							</ul>
						</div>
						<div class="ws_bullets">
							<div> <a href="<?php echo get_template_directory_uri()?>/files/upload/slide-new/slide-001.jpg" title="THỔI HỒN&lt;br&#62; KHÔNG GIAN NỘI THẤT"><span>&nbsp;</span></a> <a href="<?php echo get_template_directory_uri()?>/files/upload/slide-new/slide-002.jpg" title="KIẾN TẠO&lt;br&#62; GIÁ TRỊ SỐNG"><span>&nbsp;</span></a> <a href="<?php echo get_template_directory_uri()?>/files/upload/slide-new/slide-003.jpg" title="THIẾT KẾ&lt;br&#62; NGÔI NHÀ MƠ ƯỚC"><span>&nbsp;</span></a> <a href="<?php echo get_template_directory_uri()?>/files/upload/slide-new/slide-004.jpg" title="slide 4"><span>&nbsp;</span></a></div>
						</div>
					</div>
					<script>(function($){$(document).ready(function(){$("#wowslider-container-705").wowSlider({effect: "parallax",prev: "",next: "",duration: 6000,delay: 7000,width: 1400,height: 1400,autoPlay: false,autoPlayVideo: false,playPause: false,stopOnHover: false,loop: false,bullets: 0,caption: true,captionEffect: "none",captionDuration: 6000,controls: false,controlsThumb: false,responsive: 2,fullScreen: false,gestures: 2,onBeforeStep: 0,images: 0});});}(jQuery));</script>
				</div>
				<!-- indexer::continue -->
				<div class="mod_article first last block" id="article-header">
					<div class="contruction-div div-padding-top">
						<h2 class="ce_headline title-headdline text-left container"> <span> <strong> Nhà Phố </strong></span></h2>
						<!-- indexer::stop -->
						<div class="mod_newslist list-news-scroll block-color container col-sm-no-padding-left col-sm-no-padding-right block">
							<div class="content" id="content-news-916">
								<?php
								$nhapho = get_posts( array(
								    'post_type'        => 'product',
								    'category'         => 3,
								    'posts_per_page' => $posts_per_page,
                                    'offset'         => 0
								));
								?>
								<?php
                                    $i = 0;
								    foreach ($nhapho as $post) {
									    $post_id = get_the_ID();
									    $city = get_field_object('address' , $post_id);
								?>
								<div class="layout_latest arc_75 block <?php echo $i == 0 ? 'first' : '' ?> <?php echo $i%2 == 0 ? 'odd' : 'even' ?> text-center wow fadeInUp child-list-<?php echo ($i + 1);?>" data-order="<?php echo ($i + 1);?>">
									<div class="aniview slow" av-animation="fadeIn">
										<figure class="image_container float_above"> <a href="<?php the_permalink(); ?>" title="Nhà Phố - <?php echo $post->post_title;?>"> <img src="<?php echo get_the_post_thumbnail_url($post_id,'full');?>" width="360" height="489" alt="Nhà Phố - <?php echo $post->post_title;?>"> </a></figure>
										<div class="content">
											<h2> <a href="<?php the_permalink(); ?>" title="Xem bài viết: Nhà Phố- <?php echo $post->post_title;?>">Nhà Phố - <?php echo $post->post_title;?></a> </h2>
											<div class="teaser"><?php echo $city['value'];?></div>
										</div>
									</div>
								</div>
							    <?php 
                                        $i++;
							        } 
							    ?>								
							</div>							
							<?php if (count($nhapho) == $posts_per_page) { ?>
							<div class="block-view-more-1">
								<div class="col-md-12 col-sm-12 text-center mt-3">
									 <button class="btn btn-primary btn-view-more btn-view-more-1">XEM THÊM</button>
								</div>
								<input type="hidden" id="hdOffset1" value="0">
							</div>
						    <?php } ?>
							<script>
								(function($) {
								    jQuery(document).ready(function() {
								        jQuery("#content-news-916").mpmansory({
								            childrenClass: 'layout_latest',
								            columnClasses: 'padding',
								            breakpoints: {
								                lg: 3,
								                md: 4,
								                sm: 6,
								                xs: 6
								            },
								            distributeBy: {
								                order: false,
								                height: false,
								                attr: 'data-order',
								                attrOrder: 'asc'
								            },
								            /*/default distribute by order,options=>order: true/false,height: true/false,attr=>'data-order',attrOrder=>'asc'/'desc'*/ onload: function(items) {
								                /*make somthing with items */ }
								        });

                                        jQuery(".btn-view-more-1").click(function() {
                                        	var offset = parseInt($("#hdOffset1").val());
                                        	offset = offset + 1;
				        					jQuery.ajax({
											    type: "POST",
											    url: "<?php echo get_home_url(); ?>/wp-admin/admin-ajax.php",
					                            data: {
					                                action: 'getPopularPosts',
					                                posts_per_page: <?php echo $posts_per_page;?>,
					                                category: 3,
					                                offset: offset
					                            },
											    success: function (res) {
											    	if (res != ''){

												    	var el = res;

	                                                    $("#hdOffset1").val(offset);
														var html = '';
														jQuery( "#content-news-916 .padding" ).each(function( index ) {
	                                                        html += jQuery(this).html();
														});
														html = html + el;

														jQuery("#content-news-916").html(html);
														jQuery("#content-news-916").mpmansory({
												            childrenClass: 'layout_latest',
												            columnClasses: 'padding',
												            breakpoints: {
												                lg: 3,
												                md: 4,
												                sm: 6,
												                xs: 6
												            },
												            distributeBy: {
												                order: false,
												                height: false,
												                attr: 'data-order',
												                attrOrder: 'asc'
												            },
												          onload: function(items) {
												                /*make somthing with items */ }
												        });
												    }else{
												    	jQuery(".block-view-more-1").css("display","none");
												    }
											    }
										    });
										 });    

								    });
								}(jQuery));
							</script>
						</div>
						<!-- indexer::continue -->
					</div>
					<div class="contruction-div contruction-div-2 div-padding-top">
						<h2 class="ce_headline title-headdline text-left container"> <span><strong> Biệt thự </strong> </span></h2>
						<!-- indexer::stop -->
						<div class="mod_newslist list-news-scroll block-color container col-sm-no-padding-left col-sm-no-padding-right block">
							<div class="content" id="content-news-999">
								<?php
								$bietthu = get_posts( array(
								    'post_type'        => 'product',
								    'category'         => 1,
								    'posts_per_page' => $posts_per_page,
                                    'offset'         => 0
								));
								?>
								<?php
                                    $i = 0;
								    foreach ($bietthu as $post) {
									    $post_id = get_the_ID();
									    $city = get_field_object('address' , $post_id);
								?>
								<div class="layout_latest arc_75 block <?php echo $i == 0 ? 'first' : '' ?> <?php echo $i%2 == 0 ? 'odd' : 'even' ?> text-center wow fadeInUp child-list-<?php echo ($i + 1);?>" data-order="<?php echo ($i + 1);?>">
									<div class="aniview slow" av-animation="fadeIn">
										<figure class="image_container float_above"> <a href="<?php the_permalink(); ?>" title="Biệt thự - <?php echo $post->post_title;?>"> <img src="<?php echo get_the_post_thumbnail_url($post_id,'full');?>" width="360" height="489" alt="Biệt thự - <?php echo $post->post_title;?>"> </a></figure>
										<div class="content">
											<h2> <a href="<?php the_permalink(); ?>" title="Xem bài viết: Biệt thự - <?php echo $post->post_title;?>">Biệt thự - <?php echo $post->post_title;?></a> </h2>
											<div class="teaser"><?php echo $city['value'];?></div>
										</div>
									</div>
								</div>
							    <?php 
                                        $i++;
							        } 
							    ?>
							</div>
							<?php if (count($bietthu) == $posts_per_page) { ?>
							<div class="block-view-more-2">
								<div class="col-md-12 col-sm-12 text-center mt-3">
									 <button class="btn btn-primary btn-view-more btn-view-more-2">XEM THÊM</button>
								</div>
								<input type="hidden" id="hdOffset2" value="0">	
							</div>
							<?php } ?>
							<script>
								(function($) {
								    $(document).ready(function() {
								        $("#content-news-999").mpmansory({
								            childrenClass: 'layout_latest',
								            columnClasses: 'padding',
								            breakpoints: {
								                lg: 3,
								                md: 4,
								                sm: 6,
								                xs: 6
								            },
								            distributeBy: {
								                order: false,
								                height: false,
								                attr: 'data-order',
								                attrOrder: 'asc'
								            },
								            /*/default distribute by order,options=>order: true/false,height: true/false,attr=>'data-order',attrOrder=>'asc'/'desc'*/ onload: function(items) {
								                /*make somthing with items */ }
								        });


                                        jQuery(".btn-view-more-2").click(function() {
                                        	var offset = parseInt($("#hdOffset2").val());
                                        	offset = offset + 1;
				        					jQuery.ajax({
											    type: "POST",
											    url: "<?php echo get_home_url(); ?>/wp-admin/admin-ajax.php",
					                            data: {
					                                action: 'getPopularPosts',
					                                posts_per_page: <?php echo $posts_per_page;?>,
					                                category: 1,
					                                offset: offset
					                            },
											    success: function (res) {
											    	if (res != ''){

												    	var el = res;

	                                                    $("#hdOffset2").val(offset);
														var html = '';
														jQuery( "#content-news-999 .padding" ).each(function( index ) {
	                                                        html += jQuery(this).html();
														});
														html = html + el;

														jQuery("#content-news-999").html(html);
														jQuery("#content-news-999").mpmansory({
												            childrenClass: 'layout_latest',
												            columnClasses: 'padding',
												            breakpoints: {
												                lg: 3,
												                md: 4,
												                sm: 6,
												                xs: 6
												            },
												            distributeBy: {
												                order: false,
												                height: false,
												                attr: 'data-order',
												                attrOrder: 'asc'
												            },
												          onload: function(items) {
												                /*make somthing with items */ }
												        });
												    }else{
												    	jQuery(".block-view-more-2").css("display","none");
												    }
											    }
										    });
										});								        	
								    });
								}(jQuery));
							</script>
						</div>
						<!-- indexer::continue -->
					</div>					
					<div class="contruction-div contruction-div-2 div-padding-top">
						<h2 class="ce_headline title-headdline text-left container"> <span><strong> Khách sạn </strong> </span></h2>
						<!-- indexer::stop -->
						<div class="mod_newslist list-news-scroll block-color container col-sm-no-padding-left col-sm-no-padding-right block">
							<div class="content" id="content-news-959">
								<?php
								$khachsan = get_posts( array(
								    'post_type'        => 'product',
								    'category'         => 6,
								    'posts_per_page' => $posts_per_page,
                                    'offset'         => 0
								));
								?>
								<?php
                                    $i = 0;
								    foreach ($khachsan as $post) {
									    $post_id = get_the_ID();
									    $city = get_field_object('address' , $post_id);
								?>
								<div class="layout_latest arc_75 block <?php echo $i == 0 ? 'first' : '' ?> <?php echo $i%2 == 0 ? 'odd' : 'even' ?> text-center wow fadeInUp child-list-<?php echo ($i + 1);?>" data-order="<?php echo ($i + 1);?>">
									<div class="aniview slow" av-animation="fadeIn">
										<figure class="image_container float_above"> <a href="<?php the_permalink(); ?>" title="Khách sạn - <?php echo $post->post_title;?>"> <img src="<?php echo get_the_post_thumbnail_url($post_id,'full');?>" width="360" height="489" alt="Khách sạn - <?php echo $post->post_title;?>"> </a></figure>
										<div class="content">
											<h2> <a href="<?php the_permalink(); ?>" title="Xem bài viết: Khách sạn- <?php echo $post->post_title;?>">Khách sạn - <?php echo $post->post_title;?></a> </h2>
											<div class="teaser"><?php echo $city['value'];?></div>
										</div>
									</div>
								</div>
							    <?php 
                                        $i++;
							        } 
							    ?>
							</div>
							<?php if (count($khachsan) == $posts_per_page) { ?>
							<div class="block-view-more-3">
								<div class="col-md-12 col-sm-12 text-center mt-3">
									 <button class="btn btn-primary btn-view-more btn-view-more-3">XEM THÊM</button>
								</div>	
								<input type="hidden" id="hdOffset3" value="0">	
							</div>
							<?php } ?>
							<script>
								(function($) {
								    $(document).ready(function() {
								        $("#content-news-959").mpmansory({
								            childrenClass: 'layout_latest',
								            columnClasses: 'padding',
								            breakpoints: {
								                lg: 3,
								                md: 4,
								                sm: 6,
								                xs: 6
								            },
								            distributeBy: {
								                order: false,
								                height: false,
								                attr: 'data-order',
								                attrOrder: 'asc'
								            },
								            /*/default distribute by order,options=>order: true/false,height: true/false,attr=>'data-order',attrOrder=>'asc'/'desc'*/ onload: function(items) {
								                /*make somthing with items */ }
								        });

                                        jQuery(".btn-view-more-3").click(function() {
                                        	var offset = parseInt($("#hdOffset3").val());
                                        	offset = offset + 1;
				        					jQuery.ajax({
											    type: "POST",
											    url: "<?php echo get_home_url(); ?>/wp-admin/admin-ajax.php",
					                            data: {
					                                action: 'getPopularPosts',
					                                posts_per_page: <?php echo $posts_per_page;?>,
					                                category: 6,
					                                offset: offset
					                            },
											    success: function (res) {
											    	if (res != ''){

												    	var el = res;

	                                                    $("#hdOffset3").val(offset);
														var html = '';
														jQuery( "#content-news-959 .padding" ).each(function( index ) {
	                                                        html += jQuery(this).html();
														});
														html = html + el;

														jQuery("#content-news-959").html(html);
														jQuery("#content-news-959").mpmansory({
												            childrenClass: 'layout_latest',
												            columnClasses: 'padding',
												            breakpoints: {
												                lg: 3,
												                md: 4,
												                sm: 6,
												                xs: 6
												            },
												            distributeBy: {
												                order: false,
												                height: false,
												                attr: 'data-order',
												                attrOrder: 'asc'
												            },
												          onload: function(items) {
												                /*make somthing with items */ }
												        });
												    }else{
												    	jQuery(".block-view-more-3").css("display","none");
												    }
											    }
										    });
										});								        				
								    });
								}(jQuery));
							</script>
						</div>
						<!-- indexer::continue -->
					</div>
					<div class="background-features-top service-home-block div-padding">
						<div class="container service-div div-padding col-sm-no-padding-left col-sm-no-padding-right">
							<div class="content col-sm-7 col-md-6 col-sm-push-5 col-md-push-6">
								<h2 class="ce_headline title-headdline text-center color-gray"> <span> Dịch vụ Tân Hoàng Lộc </span></h2>
								<div class="row service-home">
									<!-- indexer::stop -->
									<div class="mod_newsmenu services-block block">
										<ul id='scrolls_onlymenu964' class="menu-list-image">
											<li class="items first col-sm-6 col-sm-inline col-xs-6 col-xs-inline wow fadeIn text-center col-xs-no-padding-left col-xs-no-padding-right col-sm-no-padding-left col-sm-no-padding-right">
												<a href="<?php echo get_home_url(); ?>/dich-vu/thiet-ke-kien-truc/" title="Thiết kế kiến trúc" class="items "> 												  
													<span class='title'><i class="fa fa-mortar-board"></i><span
														 class="text">Thiết kế kiến trúc</span></span>
												</a>
											</li>
											<li class="items col-sm-6 col-sm-inline col-xs-6 col-xs-inline wow fadeIn text-center col-xs-no-padding-left col-xs-no-padding-right col-sm-no-padding-left col-sm-no-padding-right">
												<a href="<?php echo get_home_url(); ?>/dich-vu/thiet-ke-noi-that/" title="Thiết kế nội thất" class="items ">
													<span class='title'><i class="fa fa-hotel"></i><span
														 class="text">Thiết kế nội thất</span></span>
												</a>
											</li>
											<li class="items col-sm-6 col-sm-inline col-xs-6 col-xs-inline wow fadeIn text-center col-xs-no-padding-left col-xs-no-padding-right col-sm-no-padding-left col-sm-no-padding-right">
												<a href="<?php echo get_home_url(); ?>/dich-vu/xay-dung-nha-dep/" title="Xây dựng nhà đẹp" class="items ">
													<span class='title'><i class="fa fa-bank"></i><span
														 class="text">Xây dựng nhà đẹp</span></span>
												</a>
											</li>
											<li class="items col-sm-6 col-sm-inline col-xs-6 col-xs-inline wow fadeIn text-center col-xs-no-padding-left col-xs-no-padding-right col-sm-no-padding-left col-sm-no-padding-right">
												<a href="<?php echo get_home_url(); ?>/dich-vu/thi-cong-nha-xuong/" title="Thi công NHÀ XƯỞNG" class="items ">
													<span class='title'><i class="fa fa-cubes"></i><span
														 class="text">Thi công NHÀ XƯỞNG</span></span>
												</a>
											</li>
											<li class="items col-sm-6 col-sm-inline col-xs-6 col-xs-inline wow fadeIn text-center col-xs-no-padding-left col-xs-no-padding-right col-sm-no-padding-left col-sm-no-padding-right">
												<a href="<?php echo get_home_url(); ?>/dich-vu/tu-van-giam-sat/" title="Tư vấn giám sát" class="items ">
													<span class='title'><i class="fa fa-users"></i><span
														 class="text">Tư vấn giám sát</span></span>
													<span class='title'></span>
												</a>
											</li>
											<li class="items last col-sm-6 col-sm-inline col-xs-6 col-xs-inline wow fadeIn text-center col-xs-no-padding-left col-xs-no-padding-right col-sm-no-padding-left col-sm-no-padding-right">
												<a href="<?php echo get_home_url(); ?>/dich-vu/do-dac-cam-moc-xpxd/" title="Đo đạc, cắm mốc, XPXD" class="items ">
													<span class='title'><i class="fa fa-line-chart"></i><span
														 class="text">Đo đạc, cắm mốc, XPXD</span></span>
												</a>
											</li>
										</ul>
									</div>
									<!-- indexer::continue -->
								</div>
							</div>
						</div>
					</div>
					<div class="background-features hidden-xs">
						<div class="container">
							<div class="section-header">
								<h2 class="title-headdline color-black"><span>Vì sao bạn nên lựa chọn chúng tôi</span></h2>
								<h6 class="text-center">			Chúng tôi thiết kế &amp; tạo nên những ngôi nhà mơ ước cho tất cả khách hàng của mình. </h6>
							</div>
							<div class="">
								<div class="col-md-6 col-sm-6" data-wow-offset="30">
									<div class="feature wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.1s">
										<div class="feature-icon icon"><i class="fa fa-money"></i></div>
										<h5>Thiết kế đẹp và duy nhất</h5>
										<p>					 Thiết kế đảm bảo được cái đẹp và duy nhất cho gia đình bạn để nhận được sự hài lòng từ tất cả mọi thành viên trong gia đình.</p>
									</div>
									<div class="feature wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.3s">
										<div class="feature-icon icon"><i class="fa fa-flash"></i></div>
										<h5>Sáng tạo trong thiết kế</h5>
										<p>					Những kỹ sư thiết kế về kiến trúc và nội thất đều là những kỹ sư với kinh nghiệm hàng đầu và khả năng hàng đầu tại Việt Nam.</p>
									</div>
									<div class="feature wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.5s">
										<div class="feature-icon icon"><i class="fa fa-cog"></i></div>
										<h5>Thi công xây dựng chất lượng</h5>
										<p>					Đội ngũ xây dựng được đào tạo bài bản, hỗ trợ giám sát thi công xây dựng chặt chẽ đảm bảo mọi thứ đúng theo bản vẻ xây dựng.</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="feature wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.7s">
										<div class="feature-icon icon"><i class="fa fa-share-alt"></i></div>
										<h5>Tất cả dịch vụ tại một nơi</h5>
										<p>					Dịch vụ đầy đủ từ khâu xin phép xây dựng, thiết kế, thi công và hoàn công. Đảm bảo việc có được một ngôi nhà chất lượng.</p>
									</div>
									<div class="feature wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.9s">
										<div class="feature-icon icon"><i class="fa fa-list-ol"></i></div>
										<h5>Quy trình làm việc rõ ràng</h5>
										<p>					 Khách hàng có thể nắm bắt hiểu rõ xuyên xuốt quy trình làm việc khi chúng tôi thực hiện tất cả dịch vụ về xây dựng.</p>
									</div>
									<div class="feature wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="1.1s">
										<div class="feature-icon icon"><i class="fa fa-comments-o"></i></div>
										<h5>Tư vấn hỗ trợ tuyệt vời</h5>
										<p>					 Những tư vấn viên, chuyên gia về nội ngoại thất sẵn sàng tư vấn hỗ trợ cho bạn đầy đủ thắc mắc và vấn đề quan tâm nhất.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="camket-div">
						<div class="container">
							<h2 class="ce_headline title-headdline text-center color-gray"> <span> Cam kết <strong>Dịch vụ </strong> </span></h2>
							<div class="content-icon">
								<div class="icon col-sm-6 col-sm-no-padding-left wow fadeInLeft" >
									<figure class="col-sm-3 col-xs-3 col-sm-no-padding-left col-xs-no-padding-left"><img src="<?php echo get_template_directory_uri()?>/files/system/img/general/tien-do.png"/></figure>
									<div class="content">
										<h3><span>Đúng tiến độ</span></h3>
										<p class="thoi-gian" style="text-align: justify;"> Cam kết thời gian thiết kế và thi công với tiến độ rõ ràng giúp chủ đầu tư & các đối tác hoàn toàn yên tâm khi làm việc với chúng tôi</p>
									</div>
								</div>
								<div class="icon col-sm-6 col-sm-no-padding-right wow fadeInRight">
									<figure class="col-sm-3 col-xs-3 col-sm-no-padding-left col-xs-no-padding-left" ><img src="<?php echo get_template_directory_uri()?>/files/system/img/general/chat-luong.png"/></figure>
									<div class="content">
										<h3><span>Sản phẩm xuất xưởng đạt chất lượng</span></h3>
										<p class="chat-luong" style="text-align: justify;"> Mỗi sản phẩm đều được TÂN HOÀNG LỘC chăm chút nhằm mang đến niềm tin tuyệt đối nơi khách hàng, đảm bảo các sản phẩm đạt tiêu chuẩn chất lượng khi xuất xưởng</p>
									</div>
								</div>
								<div class="icon col-sm-6 col-sm-no-padding-left wow fadeInLeft">
									<figure class="col-sm-3 col-xs-3 col-sm-no-padding-left col-xs-no-padding-left" ><img src="<?php echo get_template_directory_uri()?>/files/system/img/general/hai-long.png"/></figure>
									<div class="content">
										<h3><span>Đưa ra giải pháp đến khi bạn hài lòng</span></h3>
										<p class="giai-phap" style="text-align: justify;"> Chúng tôi sẵn sàng đưa ra nhiều giải pháp/ý tưởng thiết kế tối ưu để khách hàng lựa chọn cho đến khi khách hàng thật sự hài lòng, đáp ứng tối đa mong muốn của khách hàng về kinh phí, thời gian và chất lượng</p>
									</div>
								</div>
								<div class="icon col-sm-6 col-sm-no-padding-right wow fadeInRight">
									<figure class="col-sm-3 col-xs-3 col-sm-no-padding-left col-xs-no-padding-left" ><img src="<?php echo get_template_directory_uri()?>/files/system/img/general/thoa-thuan.png"/></figure>
									<div class="content">
										<h3><span>Sử dụng đúng vật liệu như thỏa thuận</span></h3>
										<p class="thoa-thuan" style="text-align: justify"> Cam kết làm đúng chất liệu đã thống nhất với khách hàng. Bất kỳ chất liệu, vật tư không thực hiện đúng như cam kết, chúng tôi sẽ chịu trách nhiệm thu hồi và hoàn trả 100% kinh phí giá trị sản phẩm sai phạm</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div id="container" class="container padding-bs-0">
			<div id="main" class="col-sm-12">
				<div class="inside aniview slow" av-animation="fadeIn"></div>
			</div>
		</div>		
    

<?php get_footer(); ?>
