<?php
/**
 * Template Name: Home Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
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
								<li> <a href="<?php echo get_home_url(); ?>/bang-gia/don-gia-thi-cong-phan-tho/" title="THỔI HỒN&lt;br&#62; KHÔNG GIAN NỘI THẤT"><img src="<?php echo get_template_directory_uri()?>/files/upload/slide-new/slide-001.jpg" alt="THỔI HỒN&lt;br&#62; KHÔNG GIAN NỘI THẤT" title="THỔI HỒN&lt;br&#62; KHÔNG GIAN NỘI THẤT" id="wows1_1"/></a>					 Mỗi không gian là một câu chuyện. Nơi cả nhà ngồi cạnh nhau					 </li>
								<li> <a href="<?php echo get_home_url(); ?>" title="KIẾN TẠO&lt;br&#62; GIÁ TRỊ SỐNG"><img src="<?php echo get_template_directory_uri()?>/files/upload/slide-new/slide-002.jpg" alt="KIẾN TẠO&lt;br&#62; GIÁ TRỊ SỐNG" title="KIẾN TẠO&lt;br&#62; GIÁ TRỊ SỐNG" id="wows1_2"/></a>					 Thông qua việc thoã mãn các ý tưởng và ước mơ của khách hàng					 </li>
								<li> <a href="<?php echo get_home_url(); ?>/bang-gia/don-gia-thiet-ke-kien-truc/" title="THIẾT KẾ&lt;br&#62; NGÔI NHÀ MƠ ƯỚC"><img src="<?php echo get_template_directory_uri()?>/files/upload/slide-new/slide-003.jpg" alt="THIẾT KẾ&lt;br&#62; NGÔI NHÀ MƠ ƯỚC" title="THIẾT KẾ&lt;br&#62; NGÔI NHÀ MƠ ƯỚC" id="wows1_3"/></a>					 Một ngôi nhà "Đẹp" là nơi chứa đựng nhiều câu chuyện "Đẹp"					 </li>
								<li> <a href="<?php echo get_home_url(); ?>/bang-gia/don-gia-thiet-ke-kien-truc/" title="slide 4"><img src="<?php echo get_template_directory_uri()?>/files/upload/slide-new/slide-004.jpg" alt="slide 4" title="slide 4" id="wows1_4"/></a>					 Một ngôi nhà "Đẹp" là nơi chứa đựng nhiều câu chuyện "Đẹp"					 </li>
							</ul>
						</div>
						<div class="ws_bullets">
							<div> <a href="<?php echo get_template_directory_uri()?>/files/upload/slide-new/slide-001.jpg" title="THỔI HỒN&lt;br&#62; KHÔNG GIAN NỘI THẤT"><span>&nbsp;</span></a> <a href="<?php echo get_template_directory_uri()?>/files/upload/slide-new/slide-002.jpg" title="KIẾN TẠO&lt;br&#62; GIÁ TRỊ SỐNG"><span>&nbsp;</span></a> <a href="<?php echo get_template_directory_uri()?>/files/upload/slide-new/slide-003.jpg" title="THIẾT KẾ&lt;br&#62; NGÔI NHÀ MƠ ƯỚC"><span>&nbsp;</span></a> <a href="<?php echo get_template_directory_uri()?>/files/upload/slide-new/slide-004.jpg" title="slide 4"><span>&nbsp;</span></a></div>
						</div>
					</div>
					<script>(function($){$(document).ready(function(){$("#wowslider-container-705").wowSlider({effect: "parallax",prev: "",next: "",duration: 6000,delay: 7000,width: 1400,height: 1400,autoPlay: false,autoPlayVideo: false,playPause: false,stopOnHover: false,loop: false,bullets: 0,caption: false,captionEffect: "none",captionDuration: 6000,controls: false,controlsThumb: false,responsive: 2,fullScreen: false,gestures: 2,onBeforeStep: 0,images: 0});});}(jQuery));</script>
				</div>
				<!-- indexer::continue -->
				<div class="mod_article first last block" id="article-header">
					<div class="contruction-div div-padding-top">
						<h2 class="ce_headline title-headdline text-left container"> <span> <strong> Nhà Phố </strong></span></h2>
						<!-- indexer::stop -->
						<div class="mod_newslist list-news-scroll block-color container col-sm-no-padding-left col-sm-no-padding-right block">
							<div class="content" id="content-news-916">
								<div class="layout_latest arc_76 block first even text-center wow fadeInUp child-list-1" data-order="1">
									<div class="aniview slow" av-animation="fadeIn">
										<figure class="image_container float_above"> <a href="biet-thu/nha-chi-tiet/" title="Biệt Thự - Chị HIỀN"> <img src="<?php echo get_template_directory_uri()?>/assets/images/8/hien-villa-dalat-01-b85d1298.jpg" width="360" height="290" alt="Biệt Thự - Chị HIỀN"> </a></figure>
										<div class="content">
											<h2> <a href="biet-thu/nha-chi-tiet/" title="Xem bài viết: Biệt Thự - Chị HIỀN">Biệt Thự - Chị HIỀN</a> </h2>
											<div class="teaser"> Đà Lạt</div>
										</div>
									</div>
								</div>
								<div class="layout_latest arc_76 block odd text-center wow fadeInUp child-list-2" data-order="2">
									<div class="aniview slow" av-animation="fadeIn">
										<figure class="image_container float_above"> <a href="biet-thu/nha-chi-tiet/" title="Biệt Thự - Chị YẾN"> <img src="<?php echo get_template_directory_uri()?>/assets/images/f/thiet-ke-biet-thu-chi-yen-binh-duong-01-483b9c0f.jpg" width="360" height="286" alt="Biệt Thự - Chị YẾN"> </a></figure>
										<div class="content">
											<h2> <a href="biet-thu/nha-chi-tiet/" title="Xem bài viết: Biệt Thự - Chị YẾN">Biệt Thự - Chị YẾN</a> </h2>
											<div class="teaser"> Bình Dương</div>
										</div>
									</div>
								</div>
								<div class="layout_latest arc_76 block even text-center wow fadeInUp child-list-3" data-order="3">
									<div class="aniview slow" av-animation="fadeIn">
										<figure class="image_container float_above"> <a href="biet-thu/nha-chi-tiet/" title="Biệt Thự - Anh PHƯƠNG"> <img src="<?php echo get_template_directory_uri()?>/assets/images/1/thiet-ke-biet-thu-anh-phuong-di-an-01-c2c74ed1.jpg" width="360" height="280" alt="Biệt Thự - Anh PHƯƠNG"> </a></figure>
										<div class="content">
											<h2> <a href="biet-thu/nha-chi-tiet/" title="Xem bài viết: Biệt Thự - Anh PHƯƠNG">Biệt Thự - Anh PHƯƠNG</a> </h2>
											<div class="teaser"> Dĩ An</div>
										</div>
									</div>
								</div>
								<div class="layout_latest arc_75 block odd text-center wow fadeInUp child-list-4" data-order="4">
									<div class="aniview slow" av-animation="fadeIn">
										<figure class="image_container float_above"> <a href="biet-thu/nha-chi-tiet/" title="Nhà Phố - Anh HẢI"> <img src="<?php echo get_template_directory_uri()?>/assets/images/7/thiet-ke-nha-pho-hai-house-01-0123f707.jpg" width="360" height="480" alt="Nhà Phố - Anh HẢI"> </a></figure>
										<div class="content">
											<h2> <a href="biet-thu/nha-chi-tiet/" title="Xem bài viết: Nhà Phố - Anh HẢI">Nhà Phố - Anh HẢI</a> </h2>
											<div class="teaser"> Dĩ An</div>
										</div>
									</div>
								</div>
								<div class="layout_latest arc_76 block even text-center wow fadeInUp child-list-1" data-order="5">
									<div class="aniview slow" av-animation="fadeIn">
										<figure class="image_container float_above"> <a href="biet-thu/nha-chi-tiet/" title="Biệt Thự - Chị THU"> <img src="<?php echo get_template_directory_uri()?>/assets/images/d/thiet-ke-biet-thu-chi-thu-dong-nai-9b7a46ad.jpg" width="360" height="324" alt="Biệt Thự - Chị THU"> </a></figure>
										<div class="content">
											<h2> <a href="biet-thu/nha-chi-tiet/" title="Xem bài viết: Biệt Thự - Chị THU">Biệt Thự - Chị THU</a> </h2>
											<div class="teaser"> Đồng Nai</div>
										</div>
									</div>
								</div>
								<div class="layout_latest arc_75 block odd text-center wow fadeInUp child-list-2" data-order="6">
									<div class="aniview slow" av-animation="fadeIn">
										<figure class="image_container float_above"> <a href="biet-thu/nha-chi-tiet/" title="Nhà Phố - Anh THUẬN"> <img src="<?php echo get_template_directory_uri()?>/assets/images/a/thiet-ke-nha-pho-anh-thuan-thu-duc-01-1442888a.jpg" width="360" height="360" alt="Nhà Phố - Anh THUẬN"> </a></figure>
										<div class="content">
											<h2> <a href="biet-thu/nha-chi-tiet/" title="Xem bài viết: Nhà Phố - Anh THUẬN">Nhà Phố - Anh THUẬN</a> </h2>
											<div class="teaser"> Quận 9</div>
										</div>
									</div>
								</div>
								<div class="layout_latest arc_76 block even text-center wow fadeInUp child-list-3" data-order="7">
									<div class="aniview slow" av-animation="fadeIn">
										<figure class="image_container float_above"> <a href="biet-thu/nha-chi-tiet/" title="Biệt Thự - Anh HẬU"> <img src="<?php echo get_template_directory_uri()?>/assets/images/9/thiet-ke-biet-thu-anh-hau-binh-phuoc-01-f3d3a649.jpg" width="360" height="240" alt="Biệt Thự - Anh HẬU"> </a></figure>
										<div class="content">
											<h2> <a href="biet-thu/nha-chi-tiet/" title="Xem bài viết: Biệt Thự - Anh HẬU">Biệt Thự - Anh HẬU</a> </h2>
											<div class="teaser"> Bình Phước</div>
										</div>
									</div>
								</div>
								<div class="layout_latest arc_75 block odd text-center wow fadeInUp child-list-4" data-order="8">
									<div class="aniview slow" av-animation="fadeIn">
										<figure class="image_container float_above"> <a href="biet-thu/nha-chi-tiet/" title="Nhà Phố - Chị Thanh"> <img src="<?php echo get_template_directory_uri()?>/assets/images/6/thiet-ke-nha-pho-chinh-thanh-tien-giang-01-50701ef6.jpg" width="360" height="360" alt="Nhà Phố - Chị Thanh"> </a></figure>
										<div class="content">
											<h2> <a href="biet-thu/nha-chi-tiet/" title="Xem bài viết: Nhà Phố - Chị Thanh">Nhà Phố - Chị Thanh</a> </h2>
											<div class="teaser"> Tiền Giang</div>
										</div>
									</div>
								</div>								
							</div>
							<div>
								<div class="col-md-12 col-sm-12 text-center mt-3">
									 <button class="btn btn-primary btn-view-more btn-view-more-1">XEM THÊM</button>
								</div>	
							</div>
							<script>
								(function($) {
								    $(document).ready(function() {
								        $("#content-news-916").mpmansory({
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


								        $(".btn-view-more-1").click(function() {
				        					$.ajax({
											    type: "POST",
											    url: 'https://tanhoangloc.com',
											    success: function (html) {
											    	var el = '<div class="layout_latest arc_96 block last odd text-center wow fadeInUp child-list-3" data-order="7">';
													el += '<div class="aniview slow" av-animation="fadeIn">';
													el += '<figure class="image_container float_above"> <a href="biet-thu/nha-chi-tiet/" title="Nhà Phố - Anh KHANH"> <img src="<?php echo get_template_directory_uri()?>/assets/images/e/thiet-ke-nha-pho-anh-khanh-quan-2-01-d7ce5a3e.jpg" width="360" height="360" alt="Nhà Phố - Anh KHANH"> </a></figure>';
													el += '<div class="content">';
													el += '<h2> <a href="biet-thu/nha-chi-tiet/" title="Xem bài viết: Nhà Phố - Anh KHANH">Nhà Phố - Anh KHANH</a> </h2>';
													el += '<div class="teaser"> Quận 2</div></div></div></div>';

													el += '<div class="layout_latest arc_96 block last odd text-center wow fadeInUp child-list-3" data-order="7">';
													el += '<div class="aniview slow" av-animation="fadeIn">';
													el += '<figure class="image_container float_above"> <a href="biet-thu/nha-chi-tiet/" title="Nhà Phố - Anh KHANH"> <img src="<?php echo get_template_directory_uri()?>/assets/images/f/thiet-ke-nha-pho-anh-dung-quan-thu-duc-01-400d254f.jpg" width="360" height="360" alt="Nhà Phố - Anh KHANH"> </a></figure>';
													el += '<div class="content">';
													el += '<h2> <a href="biet-thu/nha-chi-tiet/" title="Xem bài viết: Nhà Phố - Anh KHANH">Nhà Phố - Anh KHANH</a> </h2>';
													el += '<div class="teaser"> Quận 2</div></div></div></div>';

													var html = '';

													$( "#content-news-916 .padding" ).each(function( index ) {
                                                        html += $(this)();
													});
													html = html + el;

													jQuery("#content-news-916")(html);
													$("#content-news-916").mpmansory({
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
								<div class="layout_latest arc_75 block even text-center wow fadeInUp child-list-1" data-order="9">
									<div class="aniview slow" av-animation="fadeIn">
										<figure class="image_container float_above"> <a href="biet-thu/nha-chi-tiet/" title="Nhà Phố - Anh VŨ"> <img src="<?php echo get_template_directory_uri()?>/assets/images/9/thiet-ke-nha-pho-anh-vu-di-an-01-e08f5739.png" width="360" height="489" alt="Nhà Phố - Anh VŨ"> </a></figure>
										<div class="content">
											<h2> <a href="biet-thu/nha-chi-tiet/" title="Xem bài viết: Nhà Phố - Anh VŨ">Nhà Phố - Anh VŨ</a> </h2>
											<div class="teaser"> Dĩ An</div>
										</div>
									</div>
								</div>
								<div class="layout_latest arc_76 block odd text-center wow fadeInUp child-list-2" data-order="10">
									<div class="aniview slow" av-animation="fadeIn">
										<figure class="image_container float_above"> <a href="biet-thu/nha-chi-tiet/" title="Biệt Thự - Anh NAM"> <img src="<?php echo get_template_directory_uri()?>/assets/images/4/thiet-ke-biet-thu-anh-nam-binh-phuoc-01-0237cc74.jpg" width="360" height="240" alt="Biệt Thự - Anh NAM"> </a></figure>
										<div class="content">
											<h2> <a href="biet-thu/nha-chi-tiet/" title="Xem bài viết: Biệt Thự - Anh NAM">Biệt Thự - Anh NAM</a> </h2>
											<div class="teaser"> Bình Phước</div>
										</div>
									</div>
								</div>
								<div class="layout_latest arc_75 block even text-center wow fadeInUp child-list-3" data-order="11">
									<div class="aniview slow" av-animation="fadeIn">
										<figure class="image_container float_above"> <a href="biet-thu/nha-chi-tiet/" title="Nhà Phố - Chú TÂM"> <img src="<?php echo get_template_directory_uri()?>/assets/images/1/nha-pho-chu-tam-quan-2-01-16d36f21.jpg" width="360" height="446" alt="Nhà Phố - Chú TÂM"> </a></figure>
										<div class="content">
											<h2> <a href="biet-thu/nha-chi-tiet/" title="Xem bài viết: Nhà Phố - Chú TÂM">Nhà Phố - Chú TÂM</a> </h2>
											<div class="teaser"> Quận 2</div>
										</div>
									</div>
								</div>
								<div class="layout_latest arc_75 block odd text-center wow fadeInUp child-list-4" data-order="12">
									<div class="aniview slow" av-animation="fadeIn">
										<figure class="image_container float_above"> <a href="biet-thu/nha-chi-tiet/" title="Nhà Phố - Anh TÚ"> <img src="<?php echo get_template_directory_uri()?>/assets/images/3/nha-pho-anh-tu-quan-tan-phu-01-6be50cc3.jpg" width="360" height="514" alt="Nhà Phố - Anh TÚ"> </a></figure>
										<div class="content">
											<h2> <a href="biet-thu/nha-chi-tiet/" title="Xem bài viết: Nhà Phố - Anh TÚ">Nhà Phố - Anh TÚ</a> </h2>
											<div class="teaser"> Quận Tân Phú</div>
										</div>
									</div>
								</div>
								<div class="layout_latest arc_75 block even text-center wow fadeInUp child-list-1" data-order="13">
									<div class="aniview slow" av-animation="fadeIn">
										<figure class="image_container float_above"> <a href="biet-thu/nha-chi-tiet/" title="Nhà Phố - Anh LINH"> <img src="<?php echo get_template_directory_uri()?>/assets/images/1/thiet-ke-nha-pho-anh-linh-quan-tan-phu-01-e4d49ef1.jpg" width="360" height="463" alt="Nhà Phố - Anh LINH"> </a></figure>
										<div class="content">
											<h2> <a href="biet-thu/nha-chi-tiet/" title="Xem bài viết: Nhà Phố - Anh LINH">Nhà Phố - Anh LINH</a> </h2>
											<div class="teaser"> Tân Phú</div>
										</div>
									</div>
								</div>
                                <div class="layout_latest arc_75 block odd text-center wow fadeInUp child-list-3" data-order="19">
									<div class="aniview slow" av-animation="fadeIn">
										<figure class="image_container float_above"> <a href="biet-thu/nha-chi-tiet/" title="Nhà Phố - Anh DŨNG"> <img src="<?php echo get_template_directory_uri()?>/assets/images/f/thiet-ke-nha-pho-anh-dung-quan-thu-duc-01-400d254f.jpg" width="360" height="559" alt="Nhà Phố - Anh DŨNG"> </a></figure>
										<div class="content">
											<h2> <a href="biet-thu/nha-chi-tiet/" title="Xem bài viết: Nhà Phố - Anh DŨNG">Nhà Phố - Anh DŨNG</a> </h2>
											<div class="teaser"> Thủ Đức</div>
										</div>
									</div>
								</div>
								<div class="layout_latest arc_75 block even text-center wow fadeInUp child-list-3" data-order="15">
									<div class="aniview slow" av-animation="fadeIn">
										<figure class="image_container float_above"> <a href="biet-thu/nha-chi-tiet/" title="Nhà Phố - Anh BÌNH"> <img src="<?php echo get_template_directory_uri()?>/assets/images/3/nha-pho-anh-binh-quan-thu-duc-01-ee73c943.jpg" width="360" height="504" alt="Nhà Phố - Anh BÌNH"> </a></figure>
										<div class="content">
											<h2> <a href="biet-thu/nha-chi-tiet/" title="Xem bài viết: Nhà Phố - Anh BÌNH">Nhà Phố - Anh BÌNH</a> </h2>
											<div class="teaser"> Thủ Đức</div>
										</div>
									</div>
								</div>								
								<div class="layout_latest arc_76 block odd text-center wow fadeInUp child-list-4" data-order="16">
									<div class="aniview slow" av-animation="fadeIn">
										<figure class="image_container float_above"> <a href="biet-thu/nha-chi-tiet/" title="Biệt Thự - Anh TÂM"> <img src="<?php echo get_template_directory_uri()?>/assets/images/1/thiet-ke-biet-thu-anh-tam-quy-nhon-01-0dfeb731.jpg" width="360" height="225" alt="Biệt Thự - Anh TÂM"> </a></figure>
										<div class="content">
											<h2> <a href="biet-thu/nha-chi-tiet/" title="Xem bài viết: Biệt Thự - Anh TÂM">Biệt Thự - Anh TÂM</a> </h2>
											<div class="teaser"> Quy Nhơn</div>
										</div>
									</div>
								</div>
																
							</div>
							<div>
								<div class="col-md-12 col-sm-12 text-center mt-3">
									 <button class="btn btn-primary btn-view-more btn-view-more-2">XEM THÊM</button>
								</div>	
							</div>
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

								        $(".btn-view-more-2").click(function() {
				        					$.ajax({
											    type: "POST",
											    url: 'http://dev.tanhoangloc.com',
											    success: function (html) {
											    	var el = '<div class="layout_latest arc_96 block last odd text-center wow fadeInUp child-list-3" data-order="7">';
													el += '<div class="aniview slow" av-animation="fadeIn">';
													el += '<figure class="image_container float_above"> <a href="biet-thu/nha-chi-tiet/" title="Nhà Phố - Anh KHANH"> <img src="<?php echo get_template_directory_uri()?>/assets/images/e/thiet-ke-nha-pho-anh-khanh-quan-2-01-d7ce5a3e.jpg" width="360" height="360" alt="Nhà Phố - Anh KHANH"> </a></figure>';
													el += '<div class="content">';
													el += '<h2> <a href="biet-thu/nha-chi-tiet/" title="Xem bài viết: Nhà Phố - Anh KHANH">Nhà Phố - Anh KHANH</a> </h2>';
													el += '<div class="teaser"> Quận 2</div></div></div></div>';

													el += '<div class="layout_latest arc_96 block last odd text-center wow fadeInUp child-list-3" data-order="7">';
													el += '<div class="aniview slow" av-animation="fadeIn">';
													el += '<figure class="image_container float_above"> <a href="biet-thu/nha-chi-tiet/" title="Nhà Phố - Anh KHANH"> <img src="<?php echo get_template_directory_uri()?>/assets/images/f/thiet-ke-nha-pho-anh-dung-quan-thu-duc-01-400d254f.jpg" width="360" height="360" alt="Nhà Phố - Anh KHANH"> </a></figure>';
													el += '<div class="content">';
													el += '<h2> <a href="biet-thu/nha-chi-tiet/" title="Xem bài viết: Nhà Phố - Anh KHANH">Nhà Phố - Anh KHANH</a> </h2>';
													el += '<div class="teaser"> Quận 2</div></div></div></div>';

													var html = '';

													$( "#content-news-959 .padding" ).each(function( index ) {
                                                        html += $(this)();
													});
													html = html + el;

													jQuery("#content-news-999")(html);
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
											          onload: function(items) {
											                /*make somthing with items */ }
											        });
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
						<h2 class="ce_headline title-headdline text-left container"> <span><strong> khách sạn </strong> </span></h2>
						<!-- indexer::stop -->
						<div class="mod_newslist list-news-scroll block-color container col-sm-no-padding-left col-sm-no-padding-right block">
							<div class="content" id="content-news-959">
								<div class="layout_latest arc_96 block first even text-center wow fadeInUp child-list-1" data-order="1">
									<div class="aniview slow" av-animation="fadeIn">
										<figure class="image_container float_above"> <a href="biet-thu/nha-chi-tiet/" title="Khách Sạn - BÌNH DƯƠNG"> <img src="<?php echo get_template_directory_uri()?>/assets/images/4/khach-san-binh-duong-thu-dau-mot-01-c0abfa94.jpg" width="360" height="600" alt="Khách Sạn - BÌNH DƯƠNG"> </a></figure>
										<div class="content">
											<h2> <a href="biet-thu/nha-chi-tiet/" title="Xem bài viết: Khách Sạn - BÌNH DƯƠNG">Khách Sạn - BÌNH DƯƠNG</a> </h2>
											<div class="teaser"> Thủ Dầu Một</div>
										</div>
									</div>
								</div>
								<div class="layout_latest arc_96 block odd text-center wow fadeInUp child-list-2" data-order="2">
									<div class="aniview slow" av-animation="fadeIn">
										<figure class="image_container float_above"> <a href="biet-thu/nha-chi-tiet/" title="Khách Sạn - VIN"> <img src="<?php echo get_template_directory_uri()?>/assets/images/2/khach-san-vin-da-lat-01-21f19f82.jpg" width="360" height="504" alt="Khách Sạn - VIN"> </a></figure>
										<div class="content">
											<h2> <a href="biet-thu/nha-chi-tiet/" title="Xem bài viết: Khách Sạn - VIN">Khách Sạn - VIN</a> </h2>
											<div class="teaser"> Đà Lạt</div>
										</div>
									</div>
								</div>
								<div class="layout_latest arc_96 block even text-center wow fadeInUp child-list-3" data-order="3">
									<div class="aniview slow" av-animation="fadeIn">
										<figure class="image_container float_above"> <a href="biet-thu/nha-chi-tiet/" title="Văn Phòng - NAM KIM"> <img src="<?php echo get_template_directory_uri()?>/assets/images/d/van-phong-nam-kim-01-c45cd1fd.jpg" width="360" height="473" alt="Văn Phòng - NAM KIM"> </a></figure>
										<div class="content">
											<h2> <a href="biet-thu/nha-chi-tiet/" title="Xem bài viết: Văn Phòng - NAM KIM">Văn Phòng - NAM KIM</a> </h2>
											<div class="teaser"> Kiên Giang</div>
										</div>
									</div>
								</div>
								<div class="layout_latest arc_96 block odd text-center wow fadeInUp child-list-4" data-order="4">
									<div class="aniview slow" av-animation="fadeIn">
										<figure class="image_container float_above"> <a href="biet-thu/nha-chi-tiet/" title="Khách Sạn - VINH"> <img src="<?php echo get_template_directory_uri()?>/assets/images/f/khach-san-vinh-phu-quoc-01-ef9a709f.jpg" width="360" height="202" alt="Khách Sạn - VINH"> </a></figure>
										<div class="content">
											<h2> <a href="biet-thu/nha-chi-tiet/" title="Xem bài viết: Khách Sạn - VINH">Khách Sạn - VINH</a> </h2>
											<div class="teaser"> Phú Quốc</div>
										</div>
									</div>
								</div>
								<div class="layout_latest arc_96 block even text-center wow fadeInUp child-list-1" data-order="5">
									<div class="aniview slow" av-animation="fadeIn">
										<figure class="image_container float_above"> <a href="biet-thu/nha-chi-tiet/" title="Khách Sạn - NOVA"> <img src="<?php echo get_template_directory_uri()?>/assets/images/b/khach-san-nova-da-nang-01-b1bcaf9b.jpg" width="360" height="269" alt="Khách Sạn - NOVA"> </a></figure>
										<div class="content">
											<h2> <a href="biet-thu/nha-chi-tiet/" title="Xem bài viết: Khách Sạn - NOVA">Khách Sạn - NOVA</a> </h2>
											<div class="teaser"> Đà Nẵng</div>
										</div>
									</div>
								</div>
								<div class="layout_latest arc_96 block last odd text-center wow fadeInUp child-list-2" data-order="6">
									<div class="aniview slow" av-animation="fadeIn">
										<figure class="image_container float_above"> <a href="biet-thu/nha-chi-tiet/" title="Văn Phòng - VIỆT MỸ"> <img src="<?php echo get_template_directory_uri()?>/assets/images/3/van-phong-viet-my-hoc-mon-01-09614903.jpg" width="360" height="228" alt="Văn Phòng - VIỆT MỸ"> </a></figure>
										<div class="content">
											<h2> <a href="biet-thu/nha-chi-tiet/" title="Xem bài viết: Văn Phòng - VIỆT MỸ">Văn Phòng - VIỆT MỸ</a> </h2>
											<div class="teaser"> Hóc Môn</div>
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="col-md-12 col-sm-12 text-center mt-3">
									 <button class="btn btn-primary btn-view-more btn-view-more-3">XEM THÊM</button>
								</div>	
							</div>
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

								        $(".btn-view-more-3").click(function() {
				        					$.ajax({
											    type: "POST",
											    url: 'http://dev.tanhoangloc.com',
											    success: function (html) {
											    	var el = '<div class="layout_latest arc_96 block last odd text-center wow fadeInUp child-list-3" data-order="7">';
													el += '<div class="aniview slow" av-animation="fadeIn">';
													el += '<figure class="image_container float_above"> <a href="biet-thu/nha-chi-tiet/" title="Nhà Phố - Anh KHANH"> <img src="<?php echo get_template_directory_uri()?>/assets/images/e/thiet-ke-nha-pho-anh-khanh-quan-2-01-d7ce5a3e.jpg" width="360" height="360" alt="Nhà Phố - Anh KHANH"> </a></figure>';
													el += '<div class="content">';
													el += '<h2> <a href="biet-thu/nha-chi-tiet/" title="Xem bài viết: Nhà Phố - Anh KHANH">Nhà Phố - Anh KHANH</a> </h2>';
													el += '<div class="teaser"> Quận 2</div></div></div></div>';

													el += '<div class="layout_latest arc_96 block last odd text-center wow fadeInUp child-list-3" data-order="7">';
													el += '<div class="aniview slow" av-animation="fadeIn">';
													el += '<figure class="image_container float_above"> <a href="biet-thu/nha-chi-tiet/" title="Nhà Phố - Anh KHANH"> <img src="<?php echo get_template_directory_uri()?>/assets/images/f/thiet-ke-nha-pho-anh-dung-quan-thu-duc-01-400d254f.jpg" width="360" height="360" alt="Nhà Phố - Anh KHANH"> </a></figure>';
													el += '<div class="content">';
													el += '<h2> <a href="biet-thu/nha-chi-tiet/" title="Xem bài viết: Nhà Phố - Anh KHANH">Nhà Phố - Anh KHANH</a> </h2>';
													el += '<div class="teaser"> Quận 2</div></div></div></div>';

													var html = '';

													$( "#content-news-959 .padding" ).each(function( index ) {
                                                        html += $(this)();
													});
													html = html + el;

													jQuery("#content-news-959")(html);
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
											          onload: function(items) {
											                /*make somthing with items */ }
											        });
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
													<figure class='image'><img src='<?php echo get_template_directory_uri()?>/files/system/img/general/icon-culture.png' alt='Thiết kế kiến trúc' /></figure>
													<span class='title'>Thiết kế kiến trúc</span>
												</a>
											</li>
											<li class="items col-sm-6 col-sm-inline col-xs-6 col-xs-inline wow fadeIn text-center col-xs-no-padding-left col-xs-no-padding-right col-sm-no-padding-left col-sm-no-padding-right">
												<a href="<?php echo get_home_url(); ?>/dich-vu/thiet-ke-noi-that/" title="Thiết kế nội thất" class="items ">
													<figure class='image'><img src='<?php echo get_template_directory_uri()?>/files/system/img/general/thi-cong-noi-that.png' alt='Thiết kế nội thất' /></figure>
													<span class='title'>Thiết kế nội thất</span>
												</a>
											</li>
											<li class="items col-sm-6 col-sm-inline col-xs-6 col-xs-inline wow fadeIn text-center col-xs-no-padding-left col-xs-no-padding-right col-sm-no-padding-left col-sm-no-padding-right">
												<a href="<?php echo get_home_url(); ?>/dich-vu/xay-dung-nha-dep/" title="Xây dựng nhà đẹp" class="items ">
													<figure class='image'><img src='<?php echo get_template_directory_uri()?>/files/system/img/general/icon-check.png' alt='Xây dựng nhà đẹp' /></figure>
													<span class='title'>Xây dựng nhà đẹp</span>
												</a>
											</li>
											<li class="items col-sm-6 col-sm-inline col-xs-6 col-xs-inline wow fadeIn text-center col-xs-no-padding-left col-xs-no-padding-right col-sm-no-padding-left col-sm-no-padding-right">
												<a href="<?php echo get_home_url(); ?>/dich-vu/thi-cong-nha-xuong/" title="Thi công NHÀ XƯỞNG" class="items ">
													<figure class='image'><img src='<?php echo get_template_directory_uri()?>/files/system/img/general/icon-nha-xuong.png' alt='Thi công NHÀ XƯỞNG' /></figure>
													<span class='title'>Thi công NHÀ XƯỞNG</span>
												</a>
											</li>
											<li class="items col-sm-6 col-sm-inline col-xs-6 col-xs-inline wow fadeIn text-center col-xs-no-padding-left col-xs-no-padding-right col-sm-no-padding-left col-sm-no-padding-right">
												<a href="<?php echo get_home_url(); ?>/dich-vu/tu-van-giam-sat/" title="Tư vấn giám sát" class="items ">
													<figure class='image'><img src='<?php echo get_template_directory_uri()?>/files/system/img/general/icon-giam-sat.png' alt='Tư vấn giám sát' /></figure>
													<span class='title'>Tư vấn giám sát</span>
												</a>
											</li>
											<li class="items last col-sm-6 col-sm-inline col-xs-6 col-xs-inline wow fadeIn text-center col-xs-no-padding-left col-xs-no-padding-right col-sm-no-padding-left col-sm-no-padding-right">
												<a href="<?php echo get_home_url(); ?>/dich-vu/do-dac-cam-moc-xpxd/" title="Đo đạc, cắm mốc, XPXD" class="items ">
													<figure class='image'><img src='<?php echo get_template_directory_uri()?>/files/system/img/general/icon-gpxd.png' alt='Đo đạc, cắm mốc, XPXD' /></figure>
													<span class='title'>Đo đạc, cắm mốc, XPXD</span>
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
										<div class="feature-icon icon"><i class="fa fa-heart-o"></i></div>
										<h5>Thiết kế đẹp và duy nhất</h5>
										<p>					 Thiết kế đảm bảo được cái đẹp và duy nhất cho gia đình bạn để nhận được sự hài lòng từ tất cả mọi thành viên trong gia đình.</p>
									</div>
									<div class="feature wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.3s">
										<div class="feature-icon icon"><i class="fa fa-lightbulb-o"></i></div>
										<h5>Sáng tạo trong thiết kế</h5>
										<p>					Những kỹ sư thiết kế về kiến trúc và nội thất đều là những kỹ sư với kinh nghiệm hàng đầu và khả năng hàng đầu tại Việt Nam.</p>
									</div>
									<div class="feature wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.5s">
										<div class="feature-icon icon"><i class="fa fa-cogs"></i></div>
										<h5>Thi công xây dựng chất lượng</h5>
										<p>					Đội ngũ xây dựng được đào tạo bài bản, hỗ trợ giám sát thi công xây dựng chặt chẽ đảm bảo mọi thứ đúng theo bản vẻ xây dựng.</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="feature wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.7s">
										<div class="feature-icon icon"><i class="fa fa-sliders"></i></div>
										<h5>Tất cả dịch vụ tại một nơi</h5>
										<p>					Dịch vụ đầy đủ từ khâu xin phép xây dựng, thiết kế, thi công và hoàn công. Đảm bảo việc có được một ngôi nhà chất lượng.</p>
									</div>
									<div class="feature wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.9s">
										<div class="feature-icon icon"><i class="fa fa-object-ungroup"></i></div>
										<h5>Quy trình làm việc rõ ràng</h5>
										<p>					 Khách hàng có thể nắm bắt hiểu rõ xuyên xuốt quy trình làm việc khi chúng tôi thực hiện tất cả dịch vụ về xây dựng.</p>
									</div>
									<div class="feature wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="1.1s">
										<div class="feature-icon icon"><i class="fa fa-commenting-o"></i></div>
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
