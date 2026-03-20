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
    
    <h2>Section Nouvelles</h2>
    
    <?php 
    if(have_posts()){
        while(have_posts()){
            the_post();?>
            <article class="article">
                <header class="article__entente">
                    <h3 class="article_titre"><?php ?>
                        <a class="article__lien" href="<?php the_permalink();?>"><?php the_title()?></a>
                    </h3>
                <header>
                    
                <p class="article__texte">
                    <?php the_excerpt();?>
                </p>
                
                <?php if(has_post_thumbnail()){?>
                    <div class="article__imageUne">
                        <?php //affiche l'image de l'article
                        the_post_thumbnail("medium"); //peut être thumbnail, ou large. Il y a plusieurs possibilités?>
                    </div><?php 
                    } ?>
        <article>
            <?php } } ?>

            <section>

            </section>

        <h2>Section Volets</h2>

    <ul class="volets">
      <?php
        //Requête et boucle d'affichage des articles avec ACF
        //À mettre dans les pages utilisant les articles personnalisés et adapter****************
        $posts = get_posts(array(
            'posts_per_page' => -1,
            'post_type'	=> 'services',
            'post_status' => 'publish',
            'orderby' => 'the_title',
            'order' => 'ASC',
        ));

        if(have_posts()){
            //tant qu'il restera des articles
            foreach ($posts as $post){?>
                <li class="volet_lien">
                    <h3>
                        <a class="volet__lien" href="<?php the_permalink();?>"><?php the_title()?></a>
                    </h3>
                </li>
            <?php }}?>
        </ul>
</main>


<?php get_footer(); ?>