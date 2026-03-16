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
     Ici mettre image bannière
    <?php
    // $image_info=get_field("banniere");
    
    //Si l'image est définie dans ACF
    if($image_info!=null){
        //Utiliser la balise picture pour le redimensionnement de l'image ?>
        <picture>
            <source media="(min-width: 800px)" srcset="<?php echo $image_info['sizes']["large"];?>">
            <source media="(min-width: 601px)" srcset="<?php echo $image_info['sizes']["medium"];?>">
            <img src="<?php echo $image_info['sizes']['thumbnail'];?>" alt="<?php echo $image_info["alt"];?>">
        </picture>
    <?php }?>

    <!-- Titres -->
    <h1 class=entete_titre>
       <a href="<?php bloginfo("url");?>" title="<?php bloginfo("name");?>">La <?php bloginfo("name"); ?> - Local</a>
    </h1>
    <h2>de Saint-Augustin-de-Desmaures</h2>
    <h2 class="entete__slogan"><?php bloginfo("description");?></h2>
</header>

<div class="contenu">