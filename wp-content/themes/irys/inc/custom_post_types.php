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

// ------------------ Actions à venir ----------------------
add_action('init', 'actions_a_venir');
function actions_a_venir(){

    $labels = array(
        'name'               => 'actions',
        'singular_name'      => 'action',
        'all_items'          => 'Toutes les actions',
        'add_new'            => 'Ajouter une action',
        'add_new_item'       => 'Ajouter une action',
        'edit_item'          => "Modifier l'action",
        'new_item'           => 'Nouvelle action',
        'view_item'          => "Voir les actions",
        'search_items'       => 'Trouver une action',
        'not_found'          => 'Pas d\'action',
        'not_found_in_trash' => 'Pas d\'action',
        'parent_item_colon'  => 'action parentes:',
        'menu_name'          => 'actions',
    );
    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','editor', 'excerpt' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 4,
        'menu_icon'           => 'dashicons-megaphone',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => 'actions' )
    );
    register_post_type('actions', $args );

}
// ------------------ agenda ----------------------
add_action('init', 'agenda');
function agenda(){

    $labels = array(
        'name'               => 'date',
        'singular_name'      => 'date',
        'all_items'          => 'Toutes les dates',
        'add_new'            => 'Ajouter une date',
        'add_new_item'       => 'Ajouter une date',
        'edit_item'          => "Modifier la date",
        'new_item'           => 'Nouvelle date',
        'view_item'          => "Voir les dates",
        'search_items'       => 'Trouver une date',
        'not_found'          => 'Pas de date',
        'not_found_in_trash' => 'Pas de date',
        'parent_item_colon'  => 'dates parentes:',
        'menu_name'          => 'agenda',
    );
    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','editor', 'excerpt' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-megaphone',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => 'date' )
    );
    register_post_type('agenda', $args );

}