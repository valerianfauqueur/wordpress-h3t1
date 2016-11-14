<?php 

// ------------------ ANNONCES ----------------------
add_action('init', 'programme_post_type');
function programme_post_type(){
    $labels = array(
        'name'               => 'Programme',
        'singular_name'      => 'Chapitre',
        'all_items'          => 'Tous les chapitres',
        'add_new'            => 'Ajouter un chapitre',
        'add_new_item'       => 'Ajouter un chapitre',
        'edit_item'          => "Modifier le chapitre",
        'new_item'           => 'Nouveau chapitre',
        'view_item'          => "Voir le chapitre",
        'search_items'       => 'Trouver un chapitre',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Chapitres parents:',
        'menu_name'          => 'Programme',
    );
    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','editor', 'excerpt' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 3,
        'menu_icon'           => 'dashicons-megaphone',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => 'programme' )
    );
    register_post_type('programme', $args );
}