<?php

function wordpress_resources(){   ?><!--any css, java script file-->
    
    <?php wp_enqueue_style('style', get_stylesheet_uri());    
    
}

add_action('wp_enqueue_scripts', 'wordpress_resources');


//Navigation menus
register_nav_menus(array(
    'primary' =>__( 'Primary Menu'),
    'footer' =>__( 'Footer Menu'),
));

?>