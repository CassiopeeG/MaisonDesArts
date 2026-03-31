<?php
/* Template Name: Volets */
get_header();

$page_id = get_queried_object_id();
$citation = get_field('citation_volets', $page_id);
$texte_intro = get_field('texte_intro_volets', $page_id);
$image_hero = get_field('image_hero_volets', $page_id);
?>

<main class="volets_page">

    <h2 class="volets_page_titre">Un lieu culturel <br> complet : nos 4 volets</h2>

    <section class="volets_mise_en_avant">

        <div class="volets_mise_en_avant_texte">
            <?php if ($citation) { ?>
                <div class="volets_citation">
                    <span class="volets_citation_guillemet_ouverture">❝</span>

                    <div class="volets_citation_contenu">
                        <?php echo $citation; ?>
                    </div>

                    <span class="volets_citation_guillemet_fermeture">❞</span>
                </div>
            <?php } ?>
        </div>

        <div class="volets_mise_en_avant_image">
            <?php if ($image_hero) { ?>
                <div class="volets_image_hero">
                    <img src="<?php echo $image_hero['url']; ?>" alt="<?php echo $image_hero['alt']; ?>">
                </div>
            <?php } ?>
        </div>

    </section>

    <div class="volets_separateur">
        <p>Voici ce qui vous attend :</p>
    </div>

    <?php if ($texte_intro) { ?>
        <div class="volets_texte_intro">
            <?php echo $texte_intro; ?>
        </div>
    <?php } ?>

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

            <article class="volets_bloc">

                <?php
                $image_info = get_field('photo_1', get_the_ID());
                if ($image_info) { ?>
                    <div class="volets_bloc_image">
                        <img src="<?php echo $image_info['url']; ?>" alt="<?php echo $image_info['alt']; ?>">
                    </div>
                <?php } ?>

                <div class="volets_bloc_contenu">
                    <header class="volets_bloc_entete">
                        <h3 class="volets_bloc_titre">
                            <a class="volets_bloc_lien" href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                    </header>

                    <div class="volets_bloc_texte">
                        <p class="volets_bloc_resume">
                            <?php
                            $texte = get_field('texte_volet', get_the_ID());
                            echo wp_trim_words(strip_tags($texte), 25, '...');
                            ?>
                        </p>

                        <div class="volets_bloc_infos">
                            <p class="volets_bloc_date">
                                <?php
                                $date = get_field('date_volet', get_the_ID());
                                if ($date) {
                                    $date_formattee = DateTime::createFromFormat('Ymd', $date);
                                    // echo date_i18n('j F Y', $date_formattee->getTimestamp());
                                    // à réparer ici!!!
                                }
                                ?>
                            </p>

                            <a class="volets_bloc_lire" href="<?php the_permalink(); ?>">
                                Lire l’article complet →
                            </a>
                        </div>
                    </div>
                </div>

            </article>

        <?php } ?>
        <?php wp_reset_postdata(); ?>
    <?php } ?>

</main>

<?php get_footer(); ?>