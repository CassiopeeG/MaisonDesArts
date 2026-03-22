<?php
/* Template Name: Volets */
get_header();
?>

<main class="page_volets">

    <div>
        <h2 class= ' titre_h2'> Un lieu culturel complet : nos 4 volets </h2>
    </div>

    <p>
        <?php the_content(); ?>
    </p>

    <?php
    $posts = get_posts(array(
        'posts_per_page' => -1,
        'post_type'      => 'volets',
        'post_status'    => 'publish',
        'orderby'        => 'title',
        'order'          => 'ASC',
    ));
    ?>

    <?php if ($posts) { ?>
        <?php foreach ($posts as $post) { ?>
            <?php setup_postdata($post); ?>

            <article class="article">
                <header class="article__entete">
                    <h3 class="article__titre">
                        <a class="article__lien" href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h3>
                </header>

                <?php
                $image_info = get_field("photo_1", get_the_ID());
                if ($image_info) { ?>
                    <div class="article__imageUne">
                        <img src="<?php echo $image_info['url']; ?>" alt="<?php echo $image_info['alt']; ?>">
                    </div>
                <?php } ?>

                <p class="article__texte">
                    <?php
                    $texte = get_field("texte_volet", get_the_ID());
                    echo wp_trim_words(strip_tags($texte), 25, '...');
                    ?>
                </p>

                <p class="article__date">
                    <?php echo get_field("date_volet", get_the_ID()); ?>
                </p>
            </article>

        <?php } ?>
        <?php wp_reset_postdata(); ?>
    <?php } ?>

</main>

<?php get_footer(); ?>