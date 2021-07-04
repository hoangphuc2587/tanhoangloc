<?php
/**
 * Template Name: Contact Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

if (!session_id()) {
  session_start();
}

$capchaError = false;
$succsess = false;
$name = '';
$phone = '';
$email = '';
$content = '';
$cacha = '';

if(isset($_SESSION['captcha_error']) && $_SESSION['captcha_error'] === 'error'){
   $capchaError = true;
   $name = $_SESSION['name'];
   $phone = $_SESSION['phone'];
   $email = $_SESSION['email'];
   $content = $_SESSION['contact'];
   $cacha = $_SESSION['captcha'];
   unset($_SESSION['captcha_error']);

}else if(isset($_SESSION['succsess']) && $_SESSION['succsess'] === 'succsess'){
     $succsess = true;
     unset($_SESSION['succsess']);
}


get_header();
?>

<div id="container" class="container padding-bs-0">
    <div id="main" class="col-sm-12">
        <div class="inside aniview slow" av-animation="fadeIn">
            <div class="mod_article first last block" id="lien-he">
                <!-- START LEFT -->
                <div class="teaser-company col-md-6 col-sm-7 padding-bs-0">
                    <div class="ce_text block">
                        <div class="content">
                            <p><span style="color: #eebd00;"><strong><span style="font-size: 10pt;">CÔNG TY TNHH THIẾT KẾ XÂY DỰNG </span><span style="font-size: 12pt;"> TÂN HOÀNG LỘC</span></strong></span></p>
                            <hr>
                            <div style="font-size: 12px;"><img src="<?php echo get_template_directory_uri()?>/files/upload/icon-dia-diem/icon-dia-diem.png" alt="" width="20" height="20">&nbsp;<span style="color: #808080;">Trụ sở:</span> 965/36/30  Quang Trung, Phường 14, Quận Gò Vấp, TPHCM</div>
                            <hr>
                            <div style="font-size: 12px;"><img src="<?php echo get_template_directory_uri()?>/files/upload/icon-dia-diem/icon-dia-diem.png" alt="" width="20" height="20">&nbsp;<span style="color: #808080;">Địa chỉ:</span> 93/8b Nguyễn Thị Tú, Phường Bình Hưng hòa B, Quận Bình Tân, TP.HCM</div>
                            <hr>
                            <div style="font-size: 12px;"><img src="<?php echo get_template_directory_uri()?>/files/upload/icon-dia-diem/icon-dia-diem.png" alt="" width="20" height="20">&nbsp;<span style="color: #808080;">Mã số thuế:</span> 0314868728</div>
                            <hr>
                            <div><img src="<?php echo get_template_directory_uri()?>/files/upload/icon-dia-diem/icon-dien-thoai.png" alt="" width="20" height="20">&nbsp;<strong>0908.053.279 - 0937.168.239 - 028.66718839</strong></div>
                            <hr>
                            <div><img src="<?php echo get_template_directory_uri()?>/files/upload/icon-dia-diem/icon-email.png" alt="" width="20">tanhoangloc.design@gmail.com</div>
                            <hr>
                            <div>
                                <p><img src="<?php echo get_template_directory_uri()?>/files/upload/icon-dia-diem/icon-web.png" alt="" width="20">&nbsp;www.tanhoangloc.com</p>
                            </div>                            
                        </div>
                    </div>
                </div>
                <!-- END LEFT --><!-- indexer::stop -->
                <div class="ce_form col-md-6 col-sm-5 form-contact-div col-xs-no-padding-left col-xs-no-padding-right tableless block">
                    <h2><span>THÔNG TIN LIÊN HỆ</span></h2>
                    <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" id="f1" method="post"  class="form-horizontal form-contact">
                        <div class="formbody">
                            <input type="hidden" name="FORM_SUBMIT" value="auto_form_1"> <input type="hidden" name="REQUEST_TOKEN" value="828d13a2e3b3ee04e347fbb3f1d78637"> 
                            <div class="widget widget-explanation explanation">
                                <?php if($succsess){ ?>
                                <p style="color: blue;font-weight: 700;">Thông tin đã được gửi thành công.</p>
                                <?php } ?>
                                <p>Quý khách có thể liên hệ với chúng tôi bằng cách điền thông tin vào mẫu bên dưới. Chúng tôi sẽ liên hệ với quý khách trong thời gian sớm nhất hoặc gọi điện thoại để được tư vấn.</p>
                            </div>
                            <div class="widget widget-text input-contact mandatory"><label for="ctrl_1" class="input-contact mandatory"> <span class="invisible">Trường bắt buộc</span> Họ và tên<span class="mandatory">*</span></label> <input type="text" name="name" id="ctrl_1" class="text input-contact mandatory" value="<?php echo $name;?>" required placeholder="Vui lòng nhập tên bạn" tabindex="1"></div>
                            <div class="widget widget-text input-contact"><label for="ctrl_2" class="input-contact"> Điện thoại <span class="mandatory">*</span> </label> <input type="tel" name="phone" id="ctrl_2" class="text input-contact" value="<?php echo $phone;?>" required placeholder="Vui lòng nhập điện thoại bạn" maxlength="10" tabindex="2"></div>
                            <div class="widget widget-text input-contact"><label for="ctrl_3" class="input-contact"> Email </label> <input type="email" name="email" id="ctrl_3" class="text input-contact" value="<?php echo $email;?>" placeholder="Vui lòng nhập email bạn" tabindex="3"></div>
                            <div class="widget widget-textarea input-contact mandatory"><label for="ctrl_4" class="input-contact mandatory"> <span class="invisible">Trường bắt buộc</span> Nội dung<span class="mandatory">*</span></label> <textarea name="contact" id="ctrl_4" class="textarea input-contact mandatory" rows="2" cols="40" required placeholder="Vui lòng nhập nội dung" tabindex="4"><?php echo $content;?></textarea></div>
                            <div class="widget widget-text input-contact mandatory">
                                <label for="ctrl_5" class="input-contact mandatory"> <span class="invisible">Trường bắt buộc</span> Bảo mật<span class="mandatory">*</span></label>
                                <div class="filedQuestion">
                                <img src="<?php echo get_home_url(); ?>/capcha-image.php?12325" class="captcha-image" alt="captcha" /> 
                                <input type="text" name="capcha" id="ctrl_5" class="text input-contact mandatory" value="<?php echo $capcha;?>" tabindex="5" required>
                                <?php if($capchaError){ ?>
                                <p style="color:#ff0000;text-align: right;">Mã bảo vệ không đúng.</p>
                                <?php } ?>
                                </div>                                
                            </div>
                            <input type="hidden" name="action" value="contact_form">            
                            <div class="submit_container"> <input type="submit" id="ctrl_6" class="submit" name="submit" value="Gửi thông tin"></div>
                        </div>
                    </form>
                </div>
                <!-- indexer::continue -->
                <div class="ce_text padding-bs-0 padding-top-sm-15 padding-top-md-15 last block">
                    <div class="content">
                        <p><iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.568236970631!2d106.63533471428751!3d10.844316560903481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529845347b6eb%3A0xb712315fe806a682!2zOTY1IFF1YW5nIFRydW5nLCBQaMaw4budbmcgMTQsIEfDsiBW4bqlcCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1624102677545!5m2!1sen!2s" width="100%" height="300" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    

<?php get_footer(); ?>