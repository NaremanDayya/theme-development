<?php
function nana_theme_title(){
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
}

add_action('add_theme_support','nana_theme_title');


function nana_menus(){
$locations= array(
     'primary'=>"Left Sidebar",
     'footer'=>"Footer Menu Items"
);

register_nav_menus($locations;)

}
add_action('init','nana_menus');

}
function nana_register_sytle(){
    $version= wp_get_theme()->get('Version');
    wp_enqueue_style('nana-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css",array() ,'4.4.1');
    wp_enqueue_style('nana-style', 'get_template_directory_uri()."/style.css",array() ,'$version');
    wp_enqueue_style('nana-fontawsome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" ,array() ,'5.13.0');

}

add_action('wp_enqueue_scripts','nana_register_sytle');



function nana_register_scripts(){
    $version= wp_get_theme()->get('Version');
    wp_enqueue_script('nana-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js",array() ,'3.4.1',true);
    wp_enqueue_script('nana-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js
    ",array() ,'1.16.0',true);
    wp_enqueue_script('nana-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js
    ",array() ,'4.4.1',true);
    wp_enqueue_script('nana-main', 'get_template_directory_uri()."/assets/js/main.js",array() ,'$version',true);

    
   
}

add_action('wp_enqueue_scripts','nana_register_sytle');
function nana_widget_areas(){
    register_sidebar(
        array(
            'before_title'=>'',
            'after_title'=>'',
            'before_widget'=>'<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget'=>'</ul>',
            'name'=>'sidebar area',
            'id'=>'sidebar-1',
            'description'=>'sidebar widget area'
        )
        );
}
add_action('widget_init','nana_widget_areas');
register_sidebar(
    array(
        'before_title'=>'',
        'after_title'=>'',
        'before_widget'=>'<ul class="social-list list-inline py-3 mx-auto">',
        'after_widget'=>'</ul>',
        'name'=>'footer area',
        'id'=>'footer-1',
        'description'=>'footer widget area'
    )
    );
}
add_action('widget_init','nana_widget_areas');







?>