<?php 
if(function_exists('register_nav_menus')){
    register_nav_menus(
        array(
            'principal' => 'Menu Principal'
        )
    );
}
?>

<?php
//Déclaration du type d'article personnalisé des Volets ****************************
//À mettre dans le fichier functions.php et adapter en fonction du type d'article.

//Déclaration des Volets
function maison_des_arts_volets_custom_post() {

    //On rentre les différentes dénominations de notre article personnalisé type
    //qui seront affichées dans l'interface administrative...
    $labels = array(
        // Le nom au pluriel
        'name'                => _x( 'Volets Culturels de la Maison des arts', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x( 'Volets Culturels', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __( 'Volets Culturels'),
        //Les différents libellés de l'interface administrative
        'all_items'           => __( 'Tout les volets culturels'),
        'view_item'           => __( 'Voir nos volets culturels'),
        'add_new_item'        => __( 'Ajouter un nouveau volet'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer un volet'),
        'update_item'         => __( 'Modifier un volet'),
        'search_items'        => __( 'Rechercher un volet'),
        'not_found'           => __( 'Non trouvé'),
        'not_found_in_trash'  => __( 'Non trouvé dans la corbeille')
    );

    //On peut définir ici d'autres options pour notre type d'article personnalisé
    $args = array(
        'label'               => __( 'Nos Volets Culturels'),
        'description'         => __( 'Tous sur nos Volets Culturels'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail',
            'comments', 'revisions', 'custom-fields'),
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'volets')
    );

    // On enregistre notre type d'article personnalisé qu'on nomme ici "realisations" et ses arguments
    register_post_type( 'volets', $args );
}

add_action( 'init', 'maison_des_arts_volets_custom_post', 0 );
?>

<?php

//Déclaration des équipes 
function agence_equipe_custom_post() {

    //On rentre les différentes dénominations de notre article personnalisé type
    //qui seront affichées dans l'interface administrative...
    $labels = array(
        // Le nom au pluriel
        'name'                => _x( 'Équipe de Mon Agence', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x( 'Équipe', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __( 'Équipe'),
        //Les différents libellés de l'interface administrative
        'all_items'           => __( 'Toutes nos Équipe'),
        'view_item'           => __( 'Voir nos Équipe'),
        'add_new_item'        => __( 'Ajouter un nouveau Équipe'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer un Équipe'),
        'update_item'         => __( 'Modifier un Équipe'),
        'search_items'        => __( 'Rechercher un Équipe'),
        'not_found'           => __( 'Non trouvé'),
        'not_found_in_trash'  => __( 'Non trouvé dans la corbeille')
    );

    //On peut définir ici d'autres options pour notre type d'article personnalisé
    $args = array(
        'label'               => __( 'Équipe'),
        'description'         => __( 'Tous sur notre Équipe'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail',
            'comments', 'revisions', 'custom-fields'),
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'services')
    );

    // On enregistre notre type d'article personnalisé qu'on nomme ici "realisations" et ses arguments
    register_post_type( 'equipe', $args );
}

add_action( 'init', 'agence_equipe_custom_post', 0 );
?>

<?php
    if(function_exists('add_theme_support')){
        add_theme_support('post-thumbnails');
    }


/* Ajout de nouveaux formats d'images générés par WordPress */
if(function_exists ( "add_image_size" )){
add_image_size( "image-article", 550, 400, true);
add_image_size("image-article-single", 900, 600, true);
}
?>