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
//Déclaration du type d'article personnalisé des réalisations****************************
//À mettre dans le fichier functions.php et adapter en fonction du type d'article.

//Déclaration des Réalisations
function agence_realisations_custom_post() {

    //On rentre les différentes dénominations de notre article personnalisé type
    //qui seront affichées dans l'interface administrative...
    $labels = array(
        // Le nom au pluriel
        'name'                => _x( 'Réalisations de Mon Agence', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x( 'Réalisations', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __( 'Réalisations'),
        //Les différents libellés de l'interface administrative
        'all_items'           => __( 'Toutes nos réalisations'),
        'view_item'           => __( 'Voir nos réalisations'),
        'add_new_item'        => __( 'Ajouter une nouvelle réalisation'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer une réalisation'),
        'update_item'         => __( 'Modifier une réalisation'),
        'search_items'        => __( 'Rechercher une réalisation'),
        'not_found'           => __( 'Non trouvé'),
        'not_found_in_trash'  => __( 'Non trouvé dans la corbeille')
    );

    //On peut définir ici d'autres options pour notre type d'article personnalisé
    $args = array(
        'label'               => __( 'Nos réalisations'),
        'description'         => __( 'Tous sur nos réalisations'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail',
            'comments', 'revisions', 'custom-fields'),
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'realisations')
    );

    // On enregistre notre type d'article personnalisé qu'on nomme ici "realisations" et ses arguments
    register_post_type( 'realisations', $args );
}

add_action( 'init', 'agence_realisations_custom_post', 0 );
?>


<?php
//Déclaration du type d'article personnalisé des réalisations****************************
//À mettre dans le fichier functions.php et adapter en fonction du type d'article.

//Déclaration des Réalisations
function agence_services_custom_post() {

    //On rentre les différentes dénominations de notre article personnalisé type
    //qui seront affichées dans l'interface administrative...
    $labels = array(
        // Le nom au pluriel
        'name'                => _x( 'Services de Mon Agence', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x( 'Services', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __( 'Services'),
        //Les différents libellés de l'interface administrative
        'all_items'           => __( 'Toutes nos services'),
        'view_item'           => __( 'Voir nos services'),
        'add_new_item'        => __( 'Ajouter un nouveau services'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer un services'),
        'update_item'         => __( 'Modifier un services'),
        'search_items'        => __( 'Rechercher un services'),
        'not_found'           => __( 'Non trouvé'),
        'not_found_in_trash'  => __( 'Non trouvé dans la corbeille')
    );

    //On peut définir ici d'autres options pour notre type d'article personnalisé
    $args = array(
        'label'               => __( 'Nos services'),
        'description'         => __( 'Tous sur nos services'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail',
            'comments', 'revisions', 'custom-fields'),
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'services')
    );

    // On enregistre notre type d'article personnalisé qu'on nomme ici "realisations" et ses arguments
    register_post_type( 'services', $args );
}

add_action( 'init', 'agence_services_custom_post', 0 );
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
?>