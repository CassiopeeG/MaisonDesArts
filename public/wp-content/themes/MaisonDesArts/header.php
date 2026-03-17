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
    <?php } ?>

    <!-- Image bannière -->
    <img class="banniere" src="<?php echo get_template_directory_uri();?>/liaisons/images/banniere.png" alt="">
    
    <!-- Titres -->
    <h1 class=entete_titre>
       <a href="<?php bloginfo("url");?>" title="<?php bloginfo("name");?>">La <?php bloginfo("name"); ?> - Local</a>
    </h1>
    <h2>de Saint-Augustin-de-Desmaures</h2>
    <h2 class="entete__slogan"><?php bloginfo("description");?></h2>
</header>

<div class="contenu">