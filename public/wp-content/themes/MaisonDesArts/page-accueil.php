<?php
/* Template name: Accueil */
get_header(); //Appel de l'inclusion d'entête de page
echo "page-accueil.php";
?>

<?php if(has_post_thumbnail()){ ?>
    <picture class="banniere">
        <?php the_post_thumbnail("full"); ?>
    </picture>
<?php } ?>

<!-- H1 -->
<h1 class=entete_titre>
    <a href="<?php bloginfo("url");?>" title="<?php the_title()?>"><?php the_title()?></a>
</h1>

<main class="page">
    <p>
        <?php  the_content() ?>
    </p>
</main>

<?php get_footer(); ?>