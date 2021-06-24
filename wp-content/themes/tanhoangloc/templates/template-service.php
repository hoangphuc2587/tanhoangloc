<?php
/**
 * Template Name: Service Template
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
            <div class="mod_article first last block" id="thiet-ke-kien-truc">
                <!-- indexer::stop -->
                <nav class="mod_navigation menu-tab-left block">                    
                    <ul class="level_1" role="menubar">                        
                        <li class="sibling first"><a href="<?php echo get_home_url(); ?>/dich-vu/thiet-ke-kien-truc/" title="Thiết kế kiến trúc TÂN HOÀNG LỘC - Thiết kế thi công trọn gói" class="cate-general cate-552 sibling first<?php echo $pagename == 'thiet-ke-kien-truc' ? ' active' : '';?>" role="menuitem">Thiết kế kiến trúc</a></li>                        
                        <li class="sibling"><a href="<?php echo get_home_url(); ?>/dich-vu/thiet-ke-noi-that/" title="Thiết Kế Nội Thất TÂN HOÀNG LỘC - Thiết kế thi công trọn gói" class="cate-general cate-552 sibling<?php echo $pagename == 'thiet-ke-noi-that' ? ' active' : '';?>" role="menuitem">Thiết kế nội thất</a></li>
                        <li class="sibling"><a href="<?php echo get_home_url(); ?>/dich-vu/xay-dung-nha-dep/" title="Xây dựng nhà đẹp" class="cate-general cate-553 sibling<?php echo $pagename == 'xay-dung-nha-dep' ? ' active' : '';?>" role="menuitem">Xây dựng nhà đẹp</a></li>
                        <li class="sibling"><a href="<?php echo get_home_url(); ?>/dich-vu/thi-cong-nha-xuong/" title="Thi công nhà xưởng" class="cate-general cate-555 sibling<?php echo $pagename == 'thi-cong-nha-xuong' ? ' active' : '';?>" role="menuitem">Thi công NHÀ XƯỞNG</a></li>
                        <li class="sibling"><a href="<?php echo get_home_url(); ?>/dich-vu/tu-van-giam-sat/" title="Tư vấn giám sát" class="cate-general cate-556 sibling<?php echo $pagename == 'tu-van-giam-sat' ? ' active' : '';?>" role="menuitem">Tư vấn giám sát</a></li>
                        <li class="sibling last"><a href="<?php echo get_home_url(); ?>/dich-vu/do-dac-cam-moc-xpxd/" title="Đo đạc, cắm mốc, XPXD" class="cate-general cate-557 sibling last<?php echo $pagename == 'do-dac-cam-moc-xpxd' ? ' active' : '';?>" role="menuitem">Đo đạc, cắm mốc, XPXD</a></li>
                    </ul>
                    <a id="skipNavigation952" class="invisible">&nbsp;</a>
                </nav>
                <!-- indexer::continue -->
                <style>.desktop-about{margin-left: calc(5% + 4px);}@media only screen and (max-width: 768.98px){.desktop-about{margin-left: unset;}}</style>
                <div class="col-sm-7 padding-bs-0 background-img-one desktop-about">
                    <div class="div-teaser-round text-left">
                        <div class="relative">
                            <div class="ce_text teaser-text block">
                                <div class="content">
                                    <?php the_content();?>
                                </div>
                            </div>
                            <div class="ce_image hidden-xs block">
                                <figure class="image_container"> <img src="<?php echo get_template_directory_uri()?>/files/system/img/general/bg-about-us.png" width="450" height="450" alt="THIẾT KẾ XÂY DỰNG TRANG TRÍ NỘI THẤT TÂN HOÀNG LỘC" title="THIẾT KẾ XÂY DỰNG TRANG TRÍ NỘI THẤT TÂN HOÀNG LỘC"></figure>
                            </div>
                            <div class="clear clearfix"></div>
                        </div>
                    </div>
                </div>
                <?php
                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
                ?>
                <div class="col-sm-7 padding-bs-0 background-img-two service">
                    <div class="ce_image block">
                        <figure class="image_container" style="margin-bottom:15px;"> <img src="<?php echo $featured_img_url;?>" width="700" height="580" alt="THIẾT KẾ XÂY DỰNG TRANG TRÍ NỘI THẤT TÂN HOÀNG LỘC" title="THIẾT KẾ XÂY DỰNG TRANG TRÍ NỘI THẤT TÂN HOÀNG LỘC"></figure>
                    </div>
                </div>
                <div class="clear clearfix"></div>
                <style>#container{padding-top:0px;}</style>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
