<?php
/**
 * User: vy4eslavik
 * Date: 10.11.13
 * Time: 17:37
 */

//  Setup Them
if (function_exists('add_theme_support')) {
    // Add menu
    add_theme_support('menus');

    // Custom header is used for the main image
    add_theme_support('custom-header', array(
        'width' => 285,
        'height' => 160,
        'default-image' => get_template_directory_uri().'/images/logo-default.jpg',
        'header-text' => false,
    ));

    // Post thumbnails
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(200, 200);
}

//  Template page "Whats New"
class whatsNew{
    public function dateReformat($date){
        echo(date('j',strtotime($date)).
            '<br/>'.
            date('M',strtotime($date)));
    }

    public function contentThumb($str){
        if(strlen($str) > 230){
            echo(mb_substr($str, 0, 230).'...');
        }else{
            echo $str;
        }
    }
}