<?php get_header(); ?>

<main class="page">
    <?php echo "home.php";?>
<?php 
if(have_posts()){
    while(have_posts()){
        the_post();?>
        <article class="article">
            <header class="article__entente">
                <h2 class="article_titre">
                    <?php ?>
                    <a class="article__lien" href="<?php the_permalink();?>"><?php the_title()?></a>
</h2>
<header>
    <p class="article__texte">
        <?php the_content();
        ?>
        </p>
         <?php if(has_post_thumbnail()){?>
        <div class="article__imageUne">
            <?php //affiche l'image de l'article
            the_post_thumbnail("medium"); //peut être thumbnail, ou large. Il y a plusieurs possibilités?>
        </div>
<?php } ?>
        <article>
            <?php } } ?>
</main>

<?php get_footer(); ?>