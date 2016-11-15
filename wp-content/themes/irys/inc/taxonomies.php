<?php

add_action('init', 'create_bio_taxonomy');
function create_bio_taxonomy(){
    $args = array(
        'label' => 'Catégorie lifestyle',
        'rewrite' => array( 'slug' => 'categorie-lifestyle' ),
        'hierarchical' => false,
        'show_ui' => true,
    );
    register_taxonomy(
        'categorie-lifestyle',
        array('biographie'),
        $args
    );
}
