<?php
/**
 * Template Name: Design Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
get_header();
$cate = array(1,3,5,6);
$data = get_posts( array(
    'post_type'        => 'product',
    'category'         => $cate,
    'numberposts'      => 50
));
?>

<div id="container" class="container padding-bs-0">
	<div id="main" class="col-sm-12">
		<div class="inside aniview slow" av-animation="fadeIn">
			<div class="mod_article first last block" id="thiet-ke-danh-muc">
				<style>#container{padding-top:0px;}</style>
				<!-- indexer::stop -->
				<div class="mod_newsmenu menu-tab-left block">
					<ul class=" level_1">
						<li class="first "><a href="<?php echo get_home_url(); ?>/thiet-ke/" title="Tất cả" class="cate- cate-init items<?php echo $pagename == 'thiet-ke' ? ' active' : '';?>">Tất cả</a></li>
						<li class=""><a href="<?php echo get_home_url(); ?>/thiet-ke/nha-pho/" title="Nhà phố" class="cate-75 cate-init items<?php echo $pagename == 'nha-pho' ? ' active' : '';?>">Nhà phố</a></li>
						<li class=""><a href="<?php echo get_home_url(); ?>/thiet-ke/biet-thu/" title="Biệt thự" class="cate-76 cate-init items<?php echo $pagename == 'biet-thu' ? ' active' : '';?>">Biệt thự</a></li>
						<li class=""><a href="<?php echo get_home_url(); ?>/thiet-ke/noi-that-can-ho/" title="Nội thất - Căn hộ" class="cate-82 cate-init items<?php echo $pagename == 'noi-that-can-ho' ? ' active' : '';?>">Nội thất - Căn hộ</a></li>						
						<li class="last"><a href="<?php echo get_home_url(); ?>/thiet-ke/cao-oc-khach-san/" title="Cao ốc - Khách sạn" class="cate-96 cate-init items<?php echo $pagename == 'cao-oc-khach-san' ? ' active' : '';?>">Cao ốc - Khách sạn</a></li>
						
					</ul>
				</div>
				<!-- indexer::continue --><!-- indexer::stop -->
				<div class="mod_newslist list-news-scroll block-color block">					
					<div class="content" id="content-news-919">						
						<?php
                            $i = 0;
						    foreach ($data as $post) {
							    $post_id = get_the_ID();
							    $city = get_field_object('address' , $post_id);
						?>
						<div class="layout_latest arc_75 block <?php echo $i == 0 ? 'first' : '' ?> <?php echo $i%2 == 0 ? 'odd' : 'even' ?> text-center wow fadeInUp child-list-<?php echo ($i + 1);?>" data-order="<?php echo ($i + 1);?>">
							<div class="aniview slow" av-animation="fadeIn">
								<figure class="image_container float_above"> <a href="<?php the_permalink(); ?>" title="<?php echo $post->post_title;?>"> <img src="<?php echo get_the_post_thumbnail_url($post_id,'full');?>" width="360" height="489" alt="<?php echo $post->post_title;?>"> </a></figure>
								<div class="content">
									<h2> <a href="<?php the_permalink(); ?>" title="Xem bài viết:<?php echo $post->post_title;?>"><?php echo $post->post_title;?></a> </h2>
									<div class="teaser"><?php echo $city['value'];?></div>
								</div>
							</div>
						</div>
					    <?php 
                                $i++;
					        } 
					    ?>																		
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
