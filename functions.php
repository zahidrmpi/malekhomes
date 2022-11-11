<?php 

function malekhomes_bootstrapping(){
    load_theme_textdomain("malekhomes");
    add_theme_support("post-thumbnails"); 
    add_theme_support("title-tag");
    register_nav_menu("primary_menu",__("Primary Menu","malekhomes"));
    add_theme_support("custom-logo");
}
add_action("after_setup_theme","malekhomes_bootstrapping");

function malekhomes_assets(){
    
    wp_enqueue_style("bootstrap","//cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css");
    wp_enqueue_style("bootstrap-icon",get_template_directory_uri() . "/assets/vendor/bootstrap-icons/bootstrap-icons.css");
    wp_enqueue_style("malekhomes",get_stylesheet_uri());
    wp_enqueue_style("font-awesome","//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css");
    wp_enqueue_style("fonts","//fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
    wp_enqueue_script( 'main-script', get_template_directory_uri() . "/assets/js/main.js", array( 'jquery' ), "1.0", true);
    wp_enqueue_script( 'bootstrap-bundle', "//cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js", array('jquery'), "1.1", true);
   
}
add_action("wp_enqueue_scripts","malekhomes_assets");

function malekhomes_widgets_init() {
 
    register_sidebar( array(
        'name' => __( 'footer sidebar 1', 'malekhomes' ),
        'id' => 'sidebar-1',
        'description' => __( 'footer sidebar 1', 'malekhomes' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    register_sidebar( array(
        'name' => __( 'footer sidebar 2', 'malekhomes' ),
        'id' => 'sidebar-2',
        'description' => __( 'footer sidebar 2', 'malekhomes' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => __( 'footer sidebar 3', 'malekhomes' ),
        'id' => 'sidebar-3',
        'description' => __( 'footer sidebar 2', 'malekhomes' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    }
 
add_action( 'widgets_init', 'malekhomes_widgets_init' );