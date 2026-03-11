<?php
/* Template Name: Réalisations */
get_header();
?>

<main class="page-realisations">

    <!-- Titre de la page -->
    <section class="page-header">
        <h1><?php the_title(); ?></h1>
        <div class="page-description">
            <?php the_content(); ?>
        </div>
    </section>


<?php
$posts = get_posts(array(
    'posts_per_page' => -1,
    'post_type' => 'realisations',
    'post_status' => 'publish',
    'orderby' => 'title',
    'order' => 'ASC',
));

if($posts){
    foreach ($posts as $post){
        setup_postdata($post);
?>

    <article class="realisation">

        <!-- Titre -->
        <h2 class="realisation__titre">
            <a href="<?php the_permalink();?>">
                <?php the_title(); ?>
            </a>
        </h2>


        <!-- Image -->
        <div class="realisation__image">

        <?php
        $image_info = get_field("photo_1");

        if($image_info){ ?>

            <picture>
                <source media="(min-width: 800px)" srcset="<?php echo $image_info['sizes']['large']; ?>">
                <source media="(min-width: 600px)" srcset="<?php echo $image_info['sizes']['medium']; ?>">
                <img src="<?php echo $image_info['sizes']['thumbnail']; ?>" alt="<?php echo $image_info['alt']; ?>">
            </picture>

        <?php } ?>

        </div>


        <!-- Bloc texte bleu comme ton design -->
        <div class="realisation__contenu">

            <p class="realisation__client">
                <?php echo get_field("nom_client"); ?>
            </p>

            <div class="realisation__texte">
                <?php the_excerpt(); ?>
            </div>

            <div class="realisation__date">
                <?php echo get_the_date(); ?>
            </div>

        </div>

    </article>

<?php
    }
    wp_reset_postdata();
}
?>

</main>

<?php get_footer(); ?>