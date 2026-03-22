<?php
get_header();
?>

<main class="page">

    <?php the_post(); ?>
    <article class="article">
        <header class="article__entete">
            <h2 class="article__titre"><?php the_title() ?></h2>
        </header>

        <?php
        $image_info = get_field("photo_1", get_the_ID());

        if($image_info != null){
        ?>
            <picture>
                <source media="(min-width: 800px)" srcset="<?= $image_info['sizes']['large'] ?? $image_info['url'] ?>">
                <source media="(min-width: 601px)" srcset="<?= $image_info['sizes']['medium'] ?? $image_info['url'] ?>">
                <img src="<?= $image_info['sizes']['thumbnail'] ?? $image_info['url'] ?>" alt="<?= $image_info['alt']; ?>">
            </picture>
        <?php } ?>

        <p class="article__texte">
            <?php echo get_field("texte_volet", get_the_ID()); ?>
        </p>

        <footer class="article__piedPage">
            <h4>Publié le: <?php echo get_field("date_volet", get_the_ID()); ?></h4>
        </footer>
    </article>

</main>

<?php get_footer() ?>