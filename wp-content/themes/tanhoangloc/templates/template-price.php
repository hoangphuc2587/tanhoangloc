<?php
/**
 * Template Name: Price Template
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
            <div class="mod_article reader-news first last block" id="don-gia-thiet-ke">
                <style>#container{padding-top:0px;}</style>
                <!-- indexer::stop -->
                <nav class="mod_navigation menu-tab-left price-list block">
                    <a href="<?php echo get_home_url(); ?>/bang-gia/don-gia-thiet-ke-kien-truc/#skipNavigation922" class="invisible"> Bỏ qua điều hướng</a> 
                    <ul class="level_1" role="menubar">                       
                        <li class="sibling first"><a href="<?php echo get_home_url(); ?>/bang-gia/don-gia-thiet-ke-kien-truc/" title="Đơn Giá Thi Công Phần Thô - XÂY DỰNG TÂN HOÀNG LỘC - Thiết Kế &amp; Thi Công Nhà Đẹp, Nội Thất" class="cate-general cate-526 sibling<?php echo $pagename == 'don-gia-thiet-ke-kien-truc' ? ' active' : '';?>" role="menuitem">Đơn giá thiết kế</a></li>                        
                        <li class="sibling last"><a href="<?php echo get_home_url(); ?>/bang-gia/don-gia-thi-cong-phan-tho/" title="Đơn Giá Thi Công Phần Thô - XÂY DỰNG TÂN HOÀNG LỘC - Thiết Kế &amp; Thi Công Nhà Đẹp, Nội Thất" class="cate-general cate-527 sibling<?php echo $pagename == 'don-gia-thi-cong-phan-tho' ? ' active' : '';?>" role="menuitem">Đơn giá thi công phần thô</a></li>                        
                    </ul>
                    <a id="skipNavigation922" class="invisible">&nbsp;</a>
                </nav>
                <!-- indexer::continue -->
                <h1 class="nb-line-top"><span></span></h1>
                <h1 class="ce_headline title-headdline color-black"> <span> <?php the_title();?> </span></h1>
                <div class="ce_text block">
                    <div class="content">
                       <?php the_content();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>