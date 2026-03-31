<?php get_header(); ?>
<?php echo "index.php";?>

<main class="page" id="contenu">
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
        <article>
            <?php } } ?>
</main>

<?php get_footer(); ?>