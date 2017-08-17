<?php
// CONSTANTES
add_theme_support( 'post-thumbnails' );
define("ID_HOME", 988);

// arquivo de funcoes do wordpress
function validateMail($emailAddress){
    return filter_var($emailAddress, FILTER_VALIDATE_EMAIL);
}

function sendMail($to, $subject, $body){
    $headers = array('Content-Type: text/html; charset=UTF-8');
    return wp_mail( $to, $subject, $body, $headers );
}

add_action( 'widgets_init', 'inglesonskype_widgets_init' );
function inglesonskype_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Blog Sidebar', 'theme-slug' ),
        'id' => 'inglesonskype-blog-side',
        'description' => __( 'Sidebar para a sessão Blog', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="side-item %2$s">',
	'after_widget'  => '</li>',
	'before_title' => '<h3 class="side-title">',
	'after_title'   => '</h3>',
    ) );
}