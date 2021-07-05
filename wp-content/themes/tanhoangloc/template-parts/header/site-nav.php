<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
$term = get_queried_object();
$catename =  $term->slug;
?>
<div class="header-hotline-mobile text-center padding-bs-0"> <a class="btn-xs" href="tel:0937168239" title="0937.168.239"><i class="fa fa-phone"></i><b>0937.168.239</b></a> <a class="btn-xs" href="https://zalo.me/0937168239" title="0937.168.239" target="_blank" > <b style="color:#eebd00;margin-right: 10px;font-weight: bold;font-size: 20px;" class="zalo-text"> Zalo </b><b>0937.168.239</b></a> <a class="btn-xs" href="<?php echo get_home_url(); ?>/bang-gia/don-gia-thiet-ke-kien-truc/" title="Báo giá Thiết Kế" target="_blank"><i class="fa fa-building" aria-hidden="true"></i><b>Báo giá Thiết Kế</b></a> <a class="btn-xs" href="<?php echo get_home_url(); ?>/bang-gia/don-gia-thi-cong-phan-tho/" title="Bảng Giá Thi Công" target="_blank"><i class="fa fa-university" aria-hidden="true"></i><b>Bảng giá Thi Công</b></a></div>
<div class="relative">
	<div class="more-inside-menu csticky-div">
		<div class="background-menu container padding-bs-0 p-menu">
			<div class="logo hidden-lg hidden-md col-xs-8 col-xs-push-2 col-sm-push-0 padding-bs-0 col-sm-left col-xs-center img-reponsive"> <a href="/" title="THIẾT KẾ XÂY DỰNG TRANG TRÍ NỘI THẤT TÂN HOÀNG LỘC" class="inline-block"><img class="hidden-xs" src="<?php echo get_template_directory_uri()?>/files/system/img/general/logo.png" alt="THIẾT KẾ XÂY DỰNG TRANG TRÍ NỘI THẤT TÂN HOÀNG LỘC"><img class="hidden-lg hidden-md hidden-sm" src="<?php echo get_template_directory_uri()?>/files/system/img/general/logo-mobile.png" alt="THIẾT KẾ XÂY DỰNG TRANG TRÍ NỘI THẤT TÂN HOÀNG LỘC"></a></div>
			<!-- indexer::stop --> 
			<nav class="navbar mod_navigation navbar-default nav-fixed nav-header col-sm-no-padding-right col-md-center block"">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex842-collapse">
						<span class="sr-only">Toggle navigation</span>MENU 
					</button>
					<a class="navbar-brand" href="#"></a>
				</div>
				<div class="collapse navbar-collapse navbar-ex842-collapse">
					<a href="#skipNavigation842" class="invisible"> Bỏ qua điều hướng</a> 
					<ul class="level_1 nav ">
                        <li class="hidden-xs logo-desktop hidden-sm sibling" > <a href="<?php echo get_home_url(); ?>" title="TÂN HOÀNG LỘC: Thiết kế &amp; Thi công nhà đẹp" class="hidden-xs logo-desktop hidden-sm sibling" >TÂN HOÀNG LỘC: Thiết kế & Thi công nhà đẹp </a> </li>										
						<li class="trail sibling" > <a href="<?php echo get_home_url(); ?>" title="TÂN HOÀNG LỘC: Thiết kế &amp; Thi công nhà đẹp" class="trail sibling first<?php echo $pagename == '' ? ' active' : '';?>" >Trang chủ </a> </li>
						<li class="sibling" >
							<a href="<?php echo get_home_url(); ?>/gioi-thieu/" title="TÂN HOÀNG LỘC: Thiết kế &amp; Thi công nhà đẹp" class="submenu sibling <?php echo $pagename == 'gioi-thieu' ? ' active' : '';?>">Giới thiệu </a>
						</li>
						<li class="submenu sibling" >
							<a href="<?php echo get_home_url(); ?>/dich-vu/thiet-ke-kien-truc/" title="TÂN HOÀNG LỘC: Thiết kế &amp; Thi công nhà đẹp" class="submenu sibling dropdown-toggle" data-toggle="dropdown" >Dịch vụ <b class="caret-icon fa fa-caret-down"></b> </a>
							<ul class="level_2 dropdown-menu multi-level">
								<li class="first" > <a href="<?php echo get_home_url(); ?>/dich-vu/thiet-ke-kien-truc/" title="Thiết Kế Kiến Trúc - TÂN HOÀNG LỘC - Thiết Kế &amp; Thi Công Nhà Đẹp" class="first<?php echo $pagename == 'thiet-ke-kien-truc' ? ' active' : '';?>" >Thiết kế kiến trúc </a> </li>
								<li> <a href="<?php echo get_home_url(); ?>/dich-vu/thiet-ke-noi-that/"
								class="<?php echo $pagename == 'thiet-ke-noi-that' ? 'active' : '';?>" title="Thiết Kế Nội Thất TÂN HOÀNG LỘC - Thiết kế thi công trọn gói">Thiết kế nội thất </a> </li>
								<li> <a href="<?php echo get_home_url(); ?>/dich-vu/xay-dung-nha-dep/"
								class="<?php echo $pagename == 'xay-dung-nha-dep' ? 'active' : '';?>"  title="Xây dựng nhà đẹp">Xây dựng nhà đẹp </a> </li>
								<li> <a href="<?php echo get_home_url(); ?>/dich-vu/thi-cong-nha-xuong/"
								class="<?php echo $pagename == 'thi-cong-nha-xuong' ? 'active' : '';?>"  title="Thi công nhà xưởng">Thi công NHÀ XƯỞNG </a> </li>
								<li> <a href="<?php echo get_home_url(); ?>/dich-vu/tu-van-giam-sat/" 
									class="<?php echo $pagename == 'tu-van-giam-sat' ? 'active' : '';?>" title="Tư vấn giám sát">Tư vấn giám sát </a> </li>
								<li class="last" > <a href="<?php echo get_home_url(); ?>/dich-vu/do-dac-cam-moc-xpxd/" title="Đo đạc, cắm mốc, XPXD" class="last<?php echo $pagename == 'do-dac-cam-moc-xpxd' ? ' active' : '';?>" >Đo đạc, cắm mốc, XPXD </a> </li>
							</ul>
						</li>
						<li class="sibling" >
							<a href="<?php echo get_home_url(); ?>/thiet-ke/" title="TÂN HOÀNG LỘC: Thiết Kế &amp; Thi Công Nhà Đẹp" class="sibling dropdown-toggle" data-toggle="dropdown" >Thiết kế <b class="caret-icon fa fa-caret-down"></b> </a> 
							<ul class=" level_2 dropdown-menu">
								<li class="first"><a href="<?php echo get_home_url(); ?>/thiet-ke/nha-pho/" title="Nhà phố" class="cate-75 cate-init items<?php echo $catename == 'nha-pho' ? ' active' : '';?>">Nhà phố</a></li>
								<li class=""><a href="<?php echo get_home_url(); ?>/thiet-ke/biet-thu/" title="Biệt thự" class="cate-76 cate-init items<?php echo $catename == 'biet-thu' ? ' active' : '';?>">Biệt thự</a></li>
								<li class=""><a href="<?php echo get_home_url(); ?>/thiet-ke/noi-that-can-ho/" title="Nội thất - Căn hộ" class="cate-82 cate-init items<?php echo $catename == 'noi-that-can-ho' ? ' active' : '';?>">Nội thất - Căn hộ</a></li>								
								<li class=""><a href="<?php echo get_home_url(); ?>/thiet-ke/cao-oc-khach-san" title="Cao ốc - Khách sạn" class="cate-96 cate-init items<?php echo $catename == 'cao-oc-khach-san' ? ' active' : '';?>">Cao ốc - Khách sạn</a></li>							
							</ul>
						</li>
						
						<li class="submenu sibling" >
							<a href="<?php echo get_home_url(); ?>/du-an/" title="Dự Án - XÂY DỰNG TÂN HOÀNG LỘC - Thiết Kế &amp; Thi Công Nhà Đẹp, Nội Thất" class="submenu sibling dropdown-toggle" data-toggle="dropdown" >Dự án <b class="caret-icon fa fa-caret-down"></b> </a>							
							<ul class=" level_2 dropdown-menu">
								<li class="first"><a href="<?php echo get_home_url(); ?>/du-an/dang-thi-cong" title="Đang thi công" class="cate-93 cate-init items<?php echo $pagename == 'dang-thi-cong' ? ' active' : '';?>">Đang thi công</a></li>
								<li class="last"><a href="<?php echo get_home_url(); ?>/du-an/da-hoan-thien" title="Đã hoàn thiện" class="cate-85 cate-init items<?php echo $pagename == 'da-hoan-thien' ? ' active' : '';?>">Đã hoàn thiện</a></li>
							</ul>
						</li>
						<li class="submenu sibling" >
							<a href="<?php echo get_home_url(); ?>/bang-gia/don-gia-thiet-ke-kien-truc/" title="Bảng Giá - XÂY DỰNG TÂN HOÀNG LỘC - Thiết Kế &amp; Thi Công Nhà Đẹp, Nội Thất" class="submenu sibling dropdown-toggle" data-toggle="dropdown" >Bảng giá <b class="caret-icon fa fa-caret-down"></b> </a>
							<ul class="level_2 dropdown-menu multi-level">
								<li class="first" > <a href="<?php echo get_home_url(); ?>/bang-gia/don-gia-thiet-ke-kien-truc/" title="Đơn Giá Thiết Kế - XÂY DỰNG TÂN HOÀNG LỘC - Thiết Kế &amp; Thi Công Nhà Đẹp, Nội Thất" class="first<?php echo $pagename == 'don-gia-thiet-ke-kien-truc' ? ' active' : '';?>" >Đơn giá thiết kế </a> </li>
								<li class="last" > <a href="<?php echo get_home_url(); ?>/bang-gia/don-gia-thi-cong-phan-tho/" title="Đơn Giá Thiết Kế - XÂY DỰNG TÂN HOÀNG LỘC - Thiết Kế &amp; Thi Công Nhà Đẹp, Nội Thất" class="last<?php echo $pagename == 'don-gia-thi-cong-phan-tho' ? ' active' : '';?>" >Đơn giá thi công phần thô </a> </li>
							</ul>
						</li>											
						<li class="sibling last" > <a href="<?php echo get_home_url(); ?>/lien-he" title="Liên Hệ - TÂN HOÀNG LỘC Design &amp; Construction" class="sibling last <?php echo $pagename == 'lien-he' ? ' active' : '';?>" >Liên hệ </a> </li>
					</ul>
					<a id="skipNavigation842" class="invisible">&nbsp;</a>
				</div>
			</nav>
			<!-- indexer::continue -->
			<div class="col-sm-1 col-xs-2"></div>
		</div>
	</div>
</div>
