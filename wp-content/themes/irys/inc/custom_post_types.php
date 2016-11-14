<?php
add_action('init', 'create_custom_post_type_formulaires');
function create_custom_post_type_formulaires(){

    $labels = array(
        'name'               => 'Formulaires de contact',
        'singular_name'      => 'Formulaire de contact',
        'all_items'          => 'Toutes les formulaires',
        'add_new'            => 'Ajouter un formulaire',
        'add_new_item'       => 'Ajouter un nouveau formulaire',
        'edit_item'          => "Modifier le formulaire",
        'new_item'           => 'Nouveau formulaire',
        'view_item'          => "Voir le formulaire",
        'search_items'       => 'Rechercher un formulaire',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'formulaire parent:',
        'menu_name'          => 'formulaire',
    );
    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title', 'editor'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 0,
        'menu_icon'           => 'dashicons-email-alt',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => 'formulaire' ),
    );
    register_post_type( 'slide', $args );
}