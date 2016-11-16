<?php

function ajout_scripts()
{


// enregistrement d'un nouveau script
    wp_register_script('main', get_template_directory_uri() . '/scripts/main.js', array('jquery'), '1.0', true);

// appel du script dans la page
    wp_enqueue_script('main');

    wp_localize_script('main', 'ajaxurl', admin_url('admin-ajax.php'));


    wp_register_script('font-awesome', 'https://use.fontawesome.com/d6bf6738a1.js');

    wp_enqueue_script('font-awesome');


    // enregistrement d'un nouveau style
    wp_register_style('google-font', 'https://fonts.googleapis.com/css?family=PT+Sans+Narrow');

// appel du style dans la page
    wp_enqueue_style('google-font');


// enregistrement d'un nouveau style
    wp_register_style('main_style', get_template_directory_uri() . '/styles/main.css');

// appel du style dans la page
    wp_enqueue_style('main_style');

}

add_action('wp_enqueue_scripts', 'ajout_scripts');