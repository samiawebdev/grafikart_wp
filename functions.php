<?php

// namespace App;

// add_action('wp_head', function () {
//     die('Salut les gens!!');
// });
// add_action('wp_head', function () { 
//     die('Au revoir les gens!!');
// }, 5);

//ou

// add_theme_support( 'title-tag' );

// add_action('after_setup_theme', function () {
//     add_theme_support( 'title-tag' );
// });

//ou
function montheme_supports () {
    add_theme_support('title-tag');
}

function montheme_register_assets () {
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', []); //on peut tajouter []; 1.2 pour la version par exemple
    wp_enqueue_style( 'bootstrap' ); //permet de charger bootstrap
    wp_enqueue_script('bootsrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js', [], false, true); //on peut tajouter ['popper', 'jquery']
    //pour l'ordre de priorité si besoin //false
    wp_deregister_script('jquerymin'); //???
    // wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js');
    // wp_enqueue_script('bootsrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js');
}

// add_action('after_setup_theme', 'App/montheme_supports');
add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'montheme_register_assets'); //lorsque wp_enqueue_scripts est appellé, appelle ma fonction montheme_register_assets