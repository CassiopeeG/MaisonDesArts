<?php
/* Template Name: Nouvelles */
get_header();

echo "page-nouvelles.php";
?>

<main class="page-nouvelles">

    <!-- Titre de la page -->
    <section class="page-header">
        <h1><?php the_title(); ?></h1>
        <div class="page-description">
            <?php the_content(); ?>
        </div>
    </section>


<div class="container-articles">
<?php
$posts = get_posts(array(
    'posts_per_page' => -1,
    'post_type' => 'post',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
));

if($posts){
    foreach($posts as $post){
        setup_postdata($post); ?>
        
        <article class="article">

         <?php if(has_post_thumbnail()){ ?>
                <div class="article__imageUne">
                    <?php the_post_thumbnail("image-article"); ?>
                </div>
            <?php } ?>
            <header class="article__entente">
                <h2 class="article_titre">
                        <?php the_title(); ?>
                </h2>
            </header>

            <p class="article__texte">
                <?php the_excerpt(); ?>
            </p>
            <p>Consulter l'article
               <a class="article__lien" href="<?php the_permalink();?>">
                </a>
                </p>
</a>

    
        </article>

    <?php }
    wp_reset_postdata();
}
?>
</div>

</main>

<?php get_footer(); ?>
