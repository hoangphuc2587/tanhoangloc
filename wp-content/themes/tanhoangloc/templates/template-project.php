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
$value = array(1,2);
if ($pagename == 'dang-thi-cong' ){
     $value = array(1);
}elseif($pagename == 'da-hoan-thien' ){
     $value = array(2);
}

$data = get_posts( array(
    'post_type'        => 'product',   
    'numberposts'      => 50,
    'meta_query' => array(
      array(
         'key'     => 'tinh_trang',
         'value'   => $value,
         'compare' => 'IN'
      )
   )
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
						<li class="first"><a href="<?php echo get_home_url(); ?>/du-an/" title="Tất cả" class="cate- cate-init items<?php echo $pagename == 'du-an' ? ' active' : '';?>">Tất cả</a></li>
						<li><a href="<?php echo get_home_url(); ?>/du-an/dang-thi-cong/" title="Đang thi công" class="cate-75 cate-init items<?php echo $pagename == 'dang-thi-cong' ? ' active' : '';?>">Đang thi công</a></li>
						<li class="last"><a href="<?php echo get_home_url(); ?>/du-an/da-hoan-thien/" title="Đã hoàn thiện<" class="cate-76 cate-init items<?php echo $pagename == 'da-hoan-thien' ? ' active' : '';?>">Đã hoàn thiện</a></li>
					</ul>
				</div>
				<!-- indexer::continue --><!-- indexer::stop -->
				<div class="mod_newslist list-news-scroll block-color block">
					<?php if (!empty($data)):?>
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
