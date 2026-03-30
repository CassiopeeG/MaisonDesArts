<?php
get_header();

$page_courante = get_query_var('paged') ? get_query_var('paged') : 1;
$articles_par_page = 2;

$posts = get_posts(array(
    'posts_per_page' => $articles_par_page,
    'post_type'      => 'volets',
    'post_status'    => 'publish',
    'orderby'        => 'menu_order title',
    'order'          => 'ASC',
    'paged'          => $page_courante
));

$total_posts = wp_count_posts('volets')->publish;
$total_pages = ceil($total_posts / $articles_par_page);
?>

<main class="single_volets_page">
<h1 class="page-header"><?php the_title(); ?></h1>
    <?php if ($posts) { ?>
        <?php foreach ($posts as $post) { ?>
            <?php setup_postdata($post); ?>

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

            </article>

        <?php } ?>
        <?php wp_reset_postdata(); ?>
    <?php } ?>

    <nav class="single_volets_navigation">
        <div class="nav-links">

            <div class="nav-previous">
                <?php if ($page_courante > 1) { ?>
                    <a href="<?php echo get_pagenum_link($page_courante - 1); ?>">← Consulter l’article précédent</a>
                <?php } ?>
            </div>

            <div class="nav-next">
                <?php if ($page_courante < $total_pages) { ?>
                    <a href="<?php echo get_pagenum_link($page_courante + 1); ?>">Consulter l’article suivant →</a>
                <?php } ?>
            </div>

        </div>
    </nav>

</main>

<?php get_footer(); ?>