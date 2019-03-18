<?php
/*
* Plugin Name: My Second Plugin
*/
function test($atts=[], $content)
{
    $atts = array_change_key_case((array)$atts,CASE_LOWER);
    extract(shortcode_atts(array(
        'twitter'=> null,
        'youtube'=>  "http://youtube.com/",
        'facebook'=> "http://facebook.com/",
    ),$atts));
    ?>
    <a href="<?=$twitter?>"><img src="wp-content/plugins/mesecondplugin/images/twitter.png"/></a>
    <a href="<?=$youtube?>"><img src="wp-content/plugins/mesecondplugin/images/youtube.png"/></a>
    <a href="<?=$facebook?>"><img src="wp-content/plugins/mesecondplugin/images/facebook.png"/></a>
    <?php 
}

function plugin_init(){
    add_shortcode("test_shortcode", "test");
}
add_action("init","plugin_init");
?>