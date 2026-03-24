<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <title>
        <?php bloginfo('name');
        if(is_home() || is_front_page()){ ?>
            | <?php bloginfo('description'); 
        }else{?>
            | <?php wp_title("", true);
        }?>
    </title>

<meta charset='<?php bloginfo('charset');?>'/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/liaisons/css/styles.css"/>
<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/public/wp-content/themes/MaisonDesArts/liaisons/css/styles.css"/>  ici test -->
<?php wp_head(); ?>
</head>

<body>
    <!-- <?php echo "header.php";?> -->
<header class="entente">
    <?php if(has_nav_menu('principal')){?>
    <!-- Navigation -->
    <nav id="principal" class="navigation menu__principal">
        <?php wp_nav_menu(array('theme_location' => 'principal'));?>
    </nav>

    <!-- Fils d'ariane -->
    <?php } 

    //Récuperer l'URL
    global $wp;
    $StringURL = home_url( add_query_arg( array(), $wp->request ) );

    //Le séparer en un tableau
    $ArrayStringURL = explode("/", $StringURL);

    //Vérifier si sur page accueil
    if($StringURL != "https://timunix3.csfoy.ca/~equipe_accolade/public"){ ?>
    <ul class="fil_ariane">
        <li>
            <a href="https://timunix3.csfoy.ca/~equipe_accolade/public/">Accueil</a>
        </li>
    <?php 
    
    for($i=5; $i < count($ArrayStringURL); $i++){; ?>
        <li>
            <a href="">/ <?php echo $ArrayStringURL[$i] ?></a>
        </li>
        <?php }; ?>
    </ul>
    <?php }?>
</header>