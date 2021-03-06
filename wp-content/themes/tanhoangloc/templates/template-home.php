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
								<li> <a href="<?php echo get_home_url(); ?>/bang-gia/don-gia-thi-cong-phan-tho/" title="Thi???t k??? & Thi c??ng&lt;br&#62; Nh?? ph??? - Bi???t th???" title="Thi???t k??? & Thi c??ng&lt;br&#62; Nh?? ph??? - Bi???t th???"><img src="<?php echo get_template_directory_uri()?>/files/upload/slide-new/slide-001.jpg" alt="Thi???t k??? & Thi c??ng&lt;br&#62; Nh?? ph??? - Bi???t th???" title="" id="wows1_1"/></a><i class="fa fa-phone"></i>  <b>0908.053.279</b></li>
								<li> <a href="<?php echo get_home_url(); ?>" title="Thi???t k??? mi???n ph??&lt;br&#62; B???o h??nh 10 n??m"><img src="<?php echo get_template_directory_uri()?>/files/upload/slide-new/slide-002.jpg" alt="Thi???t k??? mi???n ph??&lt;br&#62; B???o h??nh 10 n??m" title="" id="wows1_2"/></a><i class="fa fa-phone"></i>  <b>0908.053.279</b></li>
								<li> <a href="<?php echo get_home_url(); ?>/bang-gia/don-gia-thiet-ke-kien-truc/" title="Thi???t k??? & Thi c??ng&lt;br&#62; Tr???n g??i - N???i th???t"><img src="<?php echo get_template_directory_uri()?>/files/upload/slide-new/slide-003.jpg" alt="Thi???t k??? & Thi c??ng&lt;br&#62; Tr???n g??i - N???i th???t" title="" id="wows1_3"/></a><i class="fa fa-phone"></i>  <b>0908.053.279</b></li>
								<li> <a href="<?php echo get_home_url(); ?>/bang-gia/don-gia-thiet-ke-kien-truc/" title="slide 4"><img src="<?php echo get_template_directory_uri()?>/files/upload/slide-new/slide-004.jpg" alt="" title="" id="wows1_4"/></a><i class="fa fa-phone"></i>  <b>0908.053.279</b></li>
							</ul>
						</div>
						<div class="ws_bullets">
							<div> <a href="<?php echo get_template_directory_uri()?>/files/upload/slide-new/slide-001.jpg" title="TH???I H???N&lt;br&#62; KH??NG GIAN N???I TH???T"><span>&nbsp;</span></a> <a href="<?php echo get_template_directory_uri()?>/files/upload/slide-new/slide-002.jpg" title="KI???N T???O&lt;br&#62; GI?? TR??? S???NG"><span>&nbsp;</span></a> <a href="<?php echo get_template_directory_uri()?>/files/upload/slide-new/slide-003.jpg" title="THI???T K???&lt;br&#62; NG??I NH?? M?? ?????C"><span>&nbsp;</span></a> <a href="<?php echo get_template_directory_uri()?>/files/upload/slide-new/slide-004.jpg" title="slide 4"><span>&nbsp;</span></a></div>
						</div>
					</div>
					<script>(function($){$(document).ready(function(){$("#wowslider-container-705").wowSlider({effect: "parallax",prev: "",next: "",duration: 6000,delay: 7000,width: 1400,height: 1400,autoPlay: false,autoPlayVideo: false,playPause: false,stopOnHover: false,loop: false,bullets: 0,caption: true,captionEffect: "none",captionDuration: 6000,controls: false,controlsThumb: false,responsive: 2,fullScreen: false,gestures: 2,onBeforeStep: 0,images: 0});});}(jQuery));</script>
				</div>
				<!-- indexer::continue -->
				<div class="mod_article first last block" id="article-header">
					<div class="contruction-div div-padding-top">
						<h2 class="ce_headline title-headdline text-left container"> <span> <strong> Nh?? Ph??? </strong></span></h2>
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
										<figure class="image_container float_above"> <a href="<?php the_permalink(); ?>" title="Nh?? Ph??? - <?php echo $post->post_title;?>"> <img src="<?php echo get_the_post_thumbnail_url($post_id,'full');?>" width="360" height="489" alt="Nh?? Ph??? - <?php echo $post->post_title;?>"> </a></figure>
										<div class="content">
											<h2> <a href="<?php the_permalink(); ?>" title="Xem b??i vi???t: Nh?? Ph???- <?php echo $post->post_title;?>">Nh?? Ph??? - <?php echo $post->post_title;?></a> </h2>
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
									 <button class="btn btn-primary btn-view-more btn-view-more-1">XEM TH??M</button>
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
						<h2 class="ce_headline title-headdline text-left container"> <span><strong> Bi???t th??? </strong> </span></h2>
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
										<figure class="image_container float_above"> <a href="<?php the_permalink(); ?>" title="Bi???t th??? - <?php echo $post->post_title;?>"> <img src="<?php echo get_the_post_thumbnail_url($post_id,'full');?>" width="360" height="489" alt="Bi???t th??? - <?php echo $post->post_title;?>"> </a></figure>
										<div class="content">
											<h2> <a href="<?php the_permalink(); ?>" title="Xem b??i vi???t: Bi???t th??? - <?php echo $post->post_title;?>">Bi???t th??? - <?php echo $post->post_title;?></a> </h2>
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
									 <button class="btn btn-primary btn-view-more btn-view-more-2">XEM TH??M</button>
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
						<h2 class="ce_headline title-headdline text-left container"> <span><strong> Kh??ch s???n </strong> </span></h2>
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
										<figure class="image_container float_above"> <a href="<?php the_permalink(); ?>" title="Kh??ch s???n - <?php echo $post->post_title;?>"> <img src="<?php echo get_the_post_thumbnail_url($post_id,'full');?>" width="360" height="489" alt="Kh??ch s???n - <?php echo $post->post_title;?>"> </a></figure>
										<div class="content">
											<h2> <a href="<?php the_permalink(); ?>" title="Xem b??i vi???t: Kh??ch s???n- <?php echo $post->post_title;?>">Kh??ch s???n - <?php echo $post->post_title;?></a> </h2>
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
									 <button class="btn btn-primary btn-view-more btn-view-more-3">XEM TH??M</button>
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
								<h2 class="ce_headline title-headdline text-center color-gray"> <span> D???ch v??? T??n Ho??ng L???c </span></h2>
								<div class="row service-home">
									<!-- indexer::stop -->
									<div class="mod_newsmenu services-block block">
										<ul id='scrolls_onlymenu964' class="menu-list-image">
											<li class="items first col-sm-6 col-sm-inline col-xs-6 col-xs-inline wow fadeIn text-center col-xs-no-padding-left col-xs-no-padding-right col-sm-no-padding-left col-sm-no-padding-right">
												<a href="<?php echo get_home_url(); ?>/dich-vu/thiet-ke-kien-truc/" title="Thi???t k??? ki???n tr??c" class="items "> 												  
													<span class='title'><i class="fa fa-mortar-board"></i><span
														 class="text">Thi???t k??? ki???n tr??c</span></span>
												</a>
											</li>
											<li class="items col-sm-6 col-sm-inline col-xs-6 col-xs-inline wow fadeIn text-center col-xs-no-padding-left col-xs-no-padding-right col-sm-no-padding-left col-sm-no-padding-right">
												<a href="<?php echo get_home_url(); ?>/dich-vu/thiet-ke-noi-that/" title="Thi???t k??? n???i th???t" class="items ">
													<span class='title'><i class="fa fa-hotel"></i><span
														 class="text">Thi???t k??? n???i th???t</span></span>
												</a>
											</li>
											<li class="items col-sm-6 col-sm-inline col-xs-6 col-xs-inline wow fadeIn text-center col-xs-no-padding-left col-xs-no-padding-right col-sm-no-padding-left col-sm-no-padding-right">
												<a href="<?php echo get_home_url(); ?>/dich-vu/xay-dung-nha-dep/" title="X??y d???ng nh?? ?????p" class="items ">
													<span class='title'><i class="fa fa-bank"></i><span
														 class="text">X??y d???ng nh?? ?????p</span></span>
												</a>
											</li>
											<li class="items col-sm-6 col-sm-inline col-xs-6 col-xs-inline wow fadeIn text-center col-xs-no-padding-left col-xs-no-padding-right col-sm-no-padding-left col-sm-no-padding-right">
												<a href="<?php echo get_home_url(); ?>/dich-vu/thi-cong-nha-xuong/" title="Thi c??ng NH?? X?????NG" class="items ">
													<span class='title'><i class="fa fa-cubes"></i><span
														 class="text">Thi c??ng NH?? X?????NG</span></span>
												</a>
											</li>
											<li class="items col-sm-6 col-sm-inline col-xs-6 col-xs-inline wow fadeIn text-center col-xs-no-padding-left col-xs-no-padding-right col-sm-no-padding-left col-sm-no-padding-right">
												<a href="<?php echo get_home_url(); ?>/dich-vu/tu-van-giam-sat/" title="T?? v???n gi??m s??t" class="items ">
													<span class='title'><i class="fa fa-users"></i><span
														 class="text">T?? v???n gi??m s??t</span></span>
													<span class='title'></span>
												</a>
											</li>
											<li class="items last col-sm-6 col-sm-inline col-xs-6 col-xs-inline wow fadeIn text-center col-xs-no-padding-left col-xs-no-padding-right col-sm-no-padding-left col-sm-no-padding-right">
												<a href="<?php echo get_home_url(); ?>/dich-vu/do-dac-cam-moc-xpxd/" title="??o ?????c, c???m m???c, XPXD" class="items ">
													<span class='title'><i class="fa fa-line-chart"></i><span
														 class="text">??o ?????c, c???m m???c, XPXD</span></span>
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
								<h2 class="title-headdline color-black"><span>V?? sao b???n n??n l???a ch???n ch??ng t??i</span></h2>
								<h6 class="text-center">			Ch??ng t??i thi???t k??? &amp; t???o n??n nh???ng ng??i nh?? m?? ?????c cho t???t c??? kh??ch h??ng c???a m??nh. </h6>
							</div>
							<div class="">
								<div class="col-md-6 col-sm-6" data-wow-offset="30">
									<div class="feature wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.1s">
										<div class="feature-icon icon"><i class="fa fa-money"></i></div>
										<h5>Thi???t k??? ?????p v?? duy nh???t</h5>
										<p>					 Thi???t k??? ?????m b???o ???????c c??i ?????p v?? duy nh???t cho gia ????nh b???n ????? nh???n ???????c s??? h??i l??ng t??? t???t c??? m???i th??nh vi??n trong gia ????nh.</p>
									</div>
									<div class="feature wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.3s">
										<div class="feature-icon icon"><i class="fa fa-flash"></i></div>
										<h5>S??ng t???o trong thi???t k???</h5>
										<p>					Nh???ng k??? s?? thi???t k??? v??? ki???n tr??c v?? n???i th???t ?????u l?? nh???ng k??? s?? v???i kinh nghi???m h??ng ?????u v?? kh??? n??ng h??ng ?????u t???i Vi???t Nam.</p>
									</div>
									<div class="feature wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.5s">
										<div class="feature-icon icon"><i class="fa fa-cog"></i></div>
										<h5>Thi c??ng x??y d???ng ch???t l?????ng</h5>
										<p>					?????i ng?? x??y d???ng ???????c ????o t???o b??i b???n, h??? tr??? gi??m s??t thi c??ng x??y d???ng ch???t ch??? ?????m b???o m???i th??? ????ng theo b???n v??? x??y d???ng.</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="feature wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.7s">
										<div class="feature-icon icon"><i class="fa fa-share-alt"></i></div>
										<h5>T???t c??? d???ch v??? t???i m???t n??i</h5>
										<p>					D???ch v??? ?????y ????? t??? kh??u xin ph??p x??y d???ng, thi???t k???, thi c??ng v?? ho??n c??ng. ?????m b???o vi???c c?? ???????c m???t ng??i nh?? ch???t l?????ng.</p>
									</div>
									<div class="feature wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.9s">
										<div class="feature-icon icon"><i class="fa fa-list-ol"></i></div>
										<h5>Quy tr??nh l??m vi???c r?? r??ng</h5>
										<p>					 Kh??ch h??ng c?? th??? n???m b???t hi???u r?? xuy??n xu???t quy tr??nh l??m vi???c khi ch??ng t??i th???c hi???n t???t c??? d???ch v??? v??? x??y d???ng.</p>
									</div>
									<div class="feature wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="1.1s">
										<div class="feature-icon icon"><i class="fa fa-comments-o"></i></div>
										<h5>T?? v???n h??? tr??? tuy???t v???i</h5>
										<p>					 Nh???ng t?? v???n vi??n, chuy??n gia v??? n???i ngo???i th???t s???n s??ng t?? v???n h??? tr??? cho b???n ?????y ????? th???c m???c v?? v???n ????? quan t??m nh???t.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="camket-div">
						<div class="container">
							<h2 class="ce_headline title-headdline text-center color-gray"> <span> Cam k???t <strong>D???ch v??? </strong> </span></h2>
							<div class="content-icon">
								<div class="icon col-sm-6 col-sm-no-padding-left wow fadeInLeft" >
									<figure class="col-sm-3 col-xs-3 col-sm-no-padding-left col-xs-no-padding-left"><img src="<?php echo get_template_directory_uri()?>/files/system/img/general/tien-do.png"/></figure>
									<div class="content">
										<h3><span>????ng ti???n ?????</span></h3>
										<p class="thoi-gian" style="text-align: justify;"> Cam k???t th???i gian thi???t k??? v?? thi c??ng v???i ti???n ????? r?? r??ng gi??p ch??? ?????u t?? & c??c ?????i t??c ho??n to??n y??n t??m khi l??m vi???c v???i ch??ng t??i</p>
									</div>
								</div>
								<div class="icon col-sm-6 col-sm-no-padding-right wow fadeInRight">
									<figure class="col-sm-3 col-xs-3 col-sm-no-padding-left col-xs-no-padding-left" ><img src="<?php echo get_template_directory_uri()?>/files/system/img/general/chat-luong.png"/></figure>
									<div class="content">
										<h3><span>S???n ph???m xu???t x?????ng ?????t ch???t l?????ng</span></h3>
										<p class="chat-luong" style="text-align: justify;"> M???i s???n ph???m ?????u ???????c T??N HO??NG L???C ch??m ch??t nh???m mang ?????n ni???m tin tuy???t ?????i n??i kh??ch h??ng, ?????m b???o c??c s???n ph???m ?????t ti??u chu???n ch???t l?????ng khi xu???t x?????ng</p>
									</div>
								</div>
								<div class="icon col-sm-6 col-sm-no-padding-left wow fadeInLeft">
									<figure class="col-sm-3 col-xs-3 col-sm-no-padding-left col-xs-no-padding-left" ><img src="<?php echo get_template_directory_uri()?>/files/system/img/general/hai-long.png"/></figure>
									<div class="content">
										<h3><span>????a ra gi???i ph??p ?????n khi b???n h??i l??ng</span></h3>
										<p class="giai-phap" style="text-align: justify;"> Ch??ng t??i s???n s??ng ????a ra nhi???u gi???i ph??p/?? t?????ng thi???t k??? t???i ??u ????? kh??ch h??ng l???a ch???n cho ?????n khi kh??ch h??ng th???t s??? h??i l??ng, ????p ???ng t???i ??a mong mu???n c???a kh??ch h??ng v??? kinh ph??, th???i gian v?? ch???t l?????ng</p>
									</div>
								</div>
								<div class="icon col-sm-6 col-sm-no-padding-right wow fadeInRight">
									<figure class="col-sm-3 col-xs-3 col-sm-no-padding-left col-xs-no-padding-left" ><img src="<?php echo get_template_directory_uri()?>/files/system/img/general/thoa-thuan.png"/></figure>
									<div class="content">
										<h3><span>S??? d???ng ????ng v???t li???u nh?? th???a thu???n</span></h3>
										<p class="thoa-thuan" style="text-align: justify"> Cam k???t l??m ????ng ch???t li???u ???? th???ng nh???t v???i kh??ch h??ng. B???t k??? ch???t li???u, v???t t?? kh??ng th???c hi???n ????ng nh?? cam k???t, ch??ng t??i s??? ch???u tr??ch nhi???m thu h???i v?? ho??n tr??? 100% kinh ph?? gi?? tr??? s???n ph???m sai ph???m</p>
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
