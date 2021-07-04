<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
$post_id = get_the_ID();
$city = get_field_object('address' , $post_id);
$dientich = get_field_object('dien_tich' , $post_id);
$quymo = get_field_object('quy_mo' , $post_id);
?>
<div id="container" class="container padding-bs-0">
    <div id="main" class="col-sm-12">
		<div class="inside aniview slow" av-animation="fadeIn">
			<div class="mod_article first last block" id="thiet-ke-chi-tiet-thiet-ke">
				<div class="mod_newsreader news-reader block">				
					<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
					<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script><script>$.fancybox.defaults.buttons=["zoom","share","slideShow","fullScreen","download","thumbs","close"];</script>
					<div class="layout_full layout_mansory block" >
						<h1 class="text-center"><?php echo the_title().' - '.$city['value']; ?></h1>
						<div class="content-albums simplelightbox" id="content-news-tab-detail-">
							<?php 
							    for ($i = 1; $i <= 30; $i++) { 
							    	$image = get_field_object('image_'.$i , $post_id);
							    	if (!empty($image['value'])){

							?>	
							<figure class="item">
								<a href="<?php echo $image['value']['sizes']['medium_large'];?>" data-fancybox="gallery"><img src="<?php echo $image['value']['sizes']['medium'];?>" alt="Biệt Thự - <?php the_title();?>"></a>
							</figure>
						    <?php 
						            }
						       } 
						    ?>
						</div>
						<script>(function($){$(document).ready(function(){$("#content-news-tab-detail-").mpmansory({childrenClass: 'item',columnClasses: 'padding',breakpoints:{lg: 3,md: 4,sm: 6,xs: 6},distributeBy: {order: false,height: false,attr: 'data-order',attrOrder: 'asc'},onload: function (items){}});});}(jQuery));</script>
						<div class="ce_text ce_text_full block">
							<div class="ce_text block">
								<div class="content">
									<h1><span style="color: #ffcc00;"><strong>THÔNG TIN CÔNG TRÌNH</strong></span></h1>
									<p><span style="font-family: verdana, geneva, sans-serif;">- Chủ đầu tư:&nbsp;<?php the_title();?></span></p>
									<p><span style="font-family: verdana, geneva, sans-serif;">- Địa chỉ xây dựng:&nbsp;<?php echo $city['value'];?></span></p>
									<?php if(!empty($dientich['value'])){?>
									<p><span style="font-family: verdana, geneva, sans-serif;">- Diện tích xây dựng: <?php echo $dientich['value'];?></span></p>
								    <?php } ?>
								    <?php if(!empty($quymo['value'])){?>
									<p><span style="font-family: verdana, geneva, sans-serif;">- Quy mô: <?php echo $quymo['value'];?></span></p>
									<?php } ?>
									<p><span style="font-family: verdana, geneva, sans-serif;">- Thiết kế và Xây dựng Trọn Gói: <span style="color: #ffcc00;"><strong><span class="warning"><a style="color: #ffcc00;" href="<?php echo get_home_url(); ?>">TÂN HOÀNG LỘC</a></span></strong></span></span></p>
									<p><strong><span style="font-family: verdana, geneva, sans-serif;">HOTLINE/ZALO: <span style="font-size: 10pt; color: #ff6600;">0908.053.279 - 0937.168.239 - 028.66718839</span></span></strong><span style="font-family: verdana, geneva, sans-serif;"> (Tư vấn 24/7)</span></p>
									<div class="layout_full layout_mansory block">
										<div class="ce_text ce_text_full block">
											<div class="ce_text block">
												<div class="content">
													<?php the_content();?>
												</div>
											</div>
										</div>
									</div>
									<p>&nbsp;</p>
								</div>
							</div>
						</div>
					</div>
					<!-- indexer::stop -->
					<p class="back"><a href="javascript:history.go(-1)" title=" Trở lại">&lt; Trở lại</a></p>
					<!-- indexer::continue -->
				</div>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
?>
