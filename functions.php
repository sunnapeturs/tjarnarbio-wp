<?php 
function tjarnarbio_files(){
    //fyrra argumentið er nafn sem ég gef, ef linkur sleppa http hér er verið að load inn öllu sem er
    //vanalega gert í html head, css og js og aðrir pakkar.
    wp_enqueue_style('google-font-roboto','//fonts.googleapis.com/css?family=Roboto+Condensed:400,700');
    wp_enqueue_style('google-font-work-sans','//fonts.googleapis.com/css?family=Work+Sans:300,400,600');
    wp_enqueue_script('font-awesome','//kit.fontawesome.com/2989a72a07.js');
    wp_enqueue_style( 'tjarnarbio-style', get_template_directory_uri() . '/css/style.css');
}
add_action('wp_enqueue_scripts','tjarnarbio_files');

//til þess að réttur titill sé efst í flipanum
function tjarnarbio_feature(){
    add_theme_support('title-tag');
}
add_action('after_setup_theme','tjarnarbio_feature');
?>