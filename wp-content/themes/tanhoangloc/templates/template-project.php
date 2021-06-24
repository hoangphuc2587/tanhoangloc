<?php
/**
 * Template Name: Project Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
get_header();
?>

<div id="container" class="container padding-bs-0">
	<div id="main" class="col-sm-12">
		<div class="inside aniview slow" av-animation="fadeIn">
			<div class="mod_article first last block" id="thiet-ke-danh-muc">
				<style>#container{padding-top:0px;}</style>
				<!-- indexer::stop -->
				<div class="mod_newsmenu menu-tab-left block">
					<ul class=" level_1">
						<li class="first"><a href="<?php echo get_home_url(); ?>/du-an/" title="Tất cả" class="cate- cate-init items<?php echo $pagename == 'du-an' ? ' active' : '';?>">Tất cả</a></li>
						<li><a href="<?php echo get_home_url(); ?>/du-an/dang-thi-cong/" title="Đang thi công" class="cate-75 cate-init items<?php echo $pagename == 'dang-thi-cong' ? ' active' : '';?>">Đang thi công</a></li>
						<li class="last"><a href="<?php echo get_home_url(); ?>/du-an/da-hoan-thien/" title="Đã hoàn thiện<" class="cate-76 cate-init items<?php echo $pagename == 'da-hoan-thien' ? ' active' : '';?>">Đã hoàn thiện</a></li>
					</ul>
				</div>
				<!-- indexer::continue --><!-- indexer::stop -->
				<div class="mod_newslist list-news-scroll block-color block">
					<?php if ($pagename == 'dang-thi-cong' || $pagename == 'du-an'):?>
					<h1><span>Nhà Phố Hiện Đại | Nhà Phố Cổ Điển | Thiết Kế Nhà Phố | Mẫu Nhà Phố Đẹp | Thiết Kế Thi Công Trọn Gói Nhà Phố</span></h1>
					<script>document.addEventListener("DOMContentLoaded",function(event){(function($){if($(".mod_breadcrumb").length>0){var li_last=$(".mod_breadcrumb").find("li.last"),more=$(".mod_breadcrumb").find(".info-more");if(li_last.length==0){li_last=$(".mod_breadcrumb").find(".last");}li_last.html("Nhà Phố Hiện Đại | Nhà Phố Cổ Điển | Thiết Kế Nhà Phố | Mẫu Nhà Phố Đẹp | Thiết Kế Thi Công Trọn Gói Nhà Phố");if(more.length>0){more.html("Nhà Phố Hiện Đại | Nhà Phố Cổ Điển | Thiết Kế Nhà Phố | Mẫu Nhà Phố Đẹp | Thiết Kế Thi Công Trọn Gói Nhà Phố");}}}(jQuery));});</script>
					<div class="content" id="content-news-919">						
						<div class="layout_latest arc_75 block odd" data-order="1">
							<div class="aniview slow" av-animation="fadeIn">
								<figure class="image_container float_above"> <a href="thietke/nha-pho-anh-thuan.html" title="Nhà Phố - Anh THUẬN"> <img src="<?php echo get_template_directory_uri()?>/assets/contao/images/loading.gif" data-src="<?php echo get_template_directory_uri()?>/assets/images/9/nha-pho-anh-thieu-nha-trang-01-cef59a99.jpg" width="360" height="360" alt="Nhà Phố - Anh THUẬN"class='lazy'> </a></figure>
								<div class="content">
									<h2> <a href="thietke/nha-pho-anh-thuan.html" title="Xem bài viết: Nhà Phố - Anh THUẬN">Nhà Phố - Anh THUẬN</a> </h2>
									<div class="teaser"> Quận 9</div>
								</div>
							</div>
						</div>						
						<div class="layout_latest arc_75 block even" data-order="2">
							<div class="aniview slow" av-animation="fadeIn">
								<figure class="image_container float_above"> <a href="thietke/nha-pho-chi-thanh.html" title="Nhà Phố - Chị Thanh"> <img src="<?php echo get_template_directory_uri()?>/assets/contao/images/loading.gif" data-src="<?php echo get_template_directory_uri()?>/assets/images/9/thiet-ke-nha-pho-anh-vu-di-an-01-e08f5739.png" width="360" height="360" alt="Nhà Phố - Chị Thanh"class='lazy'> </a></figure>
								<div class="content">
									<h2> <a href="thietke/nha-pho-chi-thanh.html" title="Xem bài viết: Nhà Phố - Chị Thanh">Nhà Phố - Chị Thanh</a> </h2>
									<div class="teaser"> Tiền Giang</div>
								</div>
							</div>
						</div>
						<div class="layout_latest arc_75 block odd" data-order="3">
							<div class="aniview slow" av-animation="fadeIn">
								<figure class="image_container float_above"> <a href="thietke/nha-pho-chu-tam.html" title="Nhà Phố - Chú TÂM"> <img src="<?php echo get_template_directory_uri()?>/assets/contao/images/loading.gif" data-src="<?php echo get_template_directory_uri()?>/assets/images/1/nha-pho-chu-tam-quan-2-01-16d36f21.jpg" width="360" height="446" alt="Nhà Phố - Chú TÂM"class='lazy'> </a></figure>
								<div class="content">
									<h2> <a href="thietke/nha-pho-chu-tam.html" title="Xem bài viết: Nhà Phố - Chú TÂM">Nhà Phố - Chú TÂM</a> </h2>
									<div class="teaser"> Quận 2</div>
								</div>
							</div>
						</div>
						<div class="layout_latest arc_75 block even" data-order="2">
							<div class="aniview slow" av-animation="fadeIn">
								<figure class="image_container float_above"> <a href="thietke/nha-pho-chi-thanh.html" title="Nhà Phố - Chị Thanh"> <img src="<?php echo get_template_directory_uri()?>/assets/contao/images/loading.gif" data-src="<?php echo get_template_directory_uri()?>/assets/images/6/thiet-ke-nha-pho-chinh-thanh-tien-giang-01-50701ef6.jpg" width="360" height="360" alt="Nhà Phố - Chị Thanh"class='lazy'> </a></figure>
								<div class="content">
									<h2> <a href="thietke/nha-pho-chi-thanh.html" title="Xem bài viết: Nhà Phố - Chị Thanh">Nhà Phố - Chị Thanh</a> </h2>
									<div class="teaser"> Tiền Giang</div>
								</div>
							</div>
						</div>
					<?php else:?>	
						<h3 style="text-align: center;"><span>Đang cập nhật dữ liệu</span></h3>
					<?php endif;?>						
					</div>
					<script>(function($){$(document).ready(function(){$("#content-news-919").mpmansory({childrenClass: 'layout_latest',columnClasses: 'padding',breakpoints:{lg: 3,md: 4,sm: 6,xs:6},distributeBy: {order: false,height: false,attr: 'data-order',attrOrder: 'asc'},/*/default distribute by order,options=>order: true/false,height: true/false,attr=>'data-order',attrOrder=>'asc'/'desc'*/ onload: function (items){/*make somthing with items */}});});}(jQuery));</script><!-- indexer::stop -->
					<div class="pagination block" style="display:none">
						<p>Trang 1 của 3</p>
						<ul>
							<li><span class="current">1</span></li>
							<li><a href="" class="link" title="Tới trang 2">2</a></li>
							<li><a href="" class="link" title="Tới trang 3">3</a></li>
							<li class="next"><a href="" class="next" title="Tới trang 2"> Tiếp</a></li>
							<li class="last"><a href="" class="last" title="Tới trang 3">Cuối cùng &#187;</a></li>
						</ul>
					</div>
					<!-- indexer::continue -->	
				</div>
				<!-- indexer::continue -->
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>
