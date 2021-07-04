<?php

    if (!session_id()) {
      session_start();
    }
    //PHP CAPTCHA image
    //Generated by https://www.html-code-generator.com/php/captcha-image-code-generator.php

    $width = 200;
    $height = 54;
    $font_size = 17;
    $font = "./arial.ttf";
    $font = realpath($font);
    $chars_length = 6;

    $captcha_characters = '0123456789';

    $image = imagecreatetruecolor($width, $height);
    $bg_color = imagecolorallocate($image, 230, 227, 227);
    $font_color = imagecolorallocate($image, 79, 68, 68);
    imagefilledrectangle($image, 0, 0, $width, $height, $bg_color);

    //background hori-line
    $hori_line = round($height/5);
    $color = imagecolorallocate($image, 255, 255, 255);
    for($i=0; $i < $hori_line; $i++) {
        imageline($image, $width, 5*$i, 0, 5*$i, $color);
    }

    $text_pos = $height/2+$font_size/2;
    $xw = ($width/$chars_length);
    $x = 0;
    $font_gap = $xw/2-$font_size/2;
    $digit = '';
    for($i = 0; $i < $chars_length; $i++) {
        $letter = $captcha_characters[rand(0, strlen($captcha_characters)-1)];
        $digit .= $letter;
        if ($i == 0) {
            $x = 0;
        }else {
            $x = $xw*$i;
        }
        imagettftext($image, $font_size, rand(-20,20), $x+$font_gap, $text_pos, $font_color, $font, $letter);
    }

    // record token in session variable
    $_SESSION['captcha_token'] = strtolower($digit);

    // display image
    header('Content-Type: image/png');
    imagepng($image);
    imagedestroy($image);
?>