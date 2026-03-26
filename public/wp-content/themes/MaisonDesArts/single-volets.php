<?php
get_header();
?>

<main class="single_volets_page">

    <?php the_post(); ?>

    <?php
    $image_info = get_field('photo_1', get_the_ID());
    $texte_volet = get_field('texte_volet', get_the_ID());
    $date_volet = get_field('date_volet', get_the_ID());

    $date_affichee = '';

    if ($date_volet) {
        $date_obj = DateTime::createFromFormat('Ymd', $date_volet);

        if ($date_obj) {
            $date_affichee = date_i18n('j F Y', $date_obj->getTimestamp());
        } else {
            $date_affichee = $date_volet;
        }
    }
    ?>

    <article class="single_volets_article">

        <header class="single_volets_entete">
            <h1 class="page-header"><?php the_title(); ?></h1>
        </header>


        <section class="single_volets_visuel">

            <?php if ($image_info) { ?>
                <div class="single_volets_image">
                    <img src="<?php echo $image_info['url']; ?>" alt="<?php echo $image_info['alt']; ?>">
                </div>
            <?php } ?>

            <div class="single_volets_bloc_bleu">
                <div class="single_volets_bloc_contenu">

                    <?php if ($texte_volet) { ?>
                        <div class="single_volets_texte">
                            <?php echo $texte_volet; ?>
                        </div>
                    <?php } ?>

                    <?php if ($date_affichee) { ?>
                        <div class="single_volets_date">
                            <?php echo $date_affichee; ?>
                        </div>
                    <?php } ?>

                </div>
            </div>

        </section>

        <nav class="single_volets_navigation">
            <?php
            the_post_navigation(array(
                'prev_text' => '← Consulter l’article précédent',
                'next_text' => 'Consulter l’article suivant →'
            ));
            ?>
        </nav>

    </article>

</main>

<?php get_footer(); ?>