<?php

/* ------------------- */
/* Activation du menu */
add_theme_support('nav_menus'); // Ajout du menu dans l'admin
register_nav_menu('primary', 'Menu Principal');


/* --------------- */
/* Image à la une */
add_theme_support('post-thumbnails'); // Ajoute une image à la une dans chacun de nos articles


/* ----------------- */
/* Custom post type */
add_action('init', 'activite_init');
function activite_init() {
    $labels = array(
        'name'               => 'Activités',
        'singular_name'      => 'Activité',
        'add_new'            => 'Ajouter une activité',
        'add_new_item'       => 'Ajouter une nouvelle activité',
        'edit_item'          => 'Modifier une activité',
        'new_item'           => 'Nouvelle activité',
        'view_item'          => "Voir l'activité",
        'search_items'       => 'Recherche une activité',
        'not_found'          => 'Aucune activité trouvé',
        'not_found_in_trash' => 'Aucune activité dans la corbeille',
        'menu_name'          => 'Activités du mois'
    );


    $args = array(
        'labels'           => $labels,
        'public'           => true,
        'show_ui'          => true,
        'show_in_menu'     => true,
        'query_var'        => true,
        'rewrite'          => true,
        'capability_type'  => 'post',
        'hierarchical'     => false,
        'menu_position'    => 3,
        'supports'         => array('title', 'editor', 'custom-fields')
    );

    register_post_type('activites', $args);
}


// Customizer File
require get_template_directory(). '/inc/customizer.php';

?>