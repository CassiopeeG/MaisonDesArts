<?php get_header(); ?>

<main class="page">
    <?php echo "home.php";?>

<h2>Section Nouvelles</h2>
<?php 
if(have_posts()){
    while(have_posts()){
        the_post();?>
        <article class="article">
            <header class="article__entente">
                <h3 class="article_titre">
                    <?php ?>
                    <a class="article__lien" href="<?php the_permalink();?>"><?php the_title()?></a>
</h3>
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

<h2>À propos</h2>
<!-- Pour l'instant le contenu du à propos est Hard-codé, mais il faudrait que je le mettre dans sa propre catégorie plus tard??? -->
<p>La Maison des arts de Saint‑Augustin‑de‑Desmaures redonne vie au presbytère du village en le transformant en un lieu culturel accessible et rassembleur. Notre mission : offrir une programmation professionnelle en arts visuels, arts vivants, littérature et cinéma, accueillir des résidences d’artistes et développer des projets de médiation culturelle avec les écoles et les organismes du territoire. Ancré dans une approche durable et respectueuse du patrimoine, le projet crée un espace chaleureux où la communauté peut se rencontrer, s’inspirer et célébrer la création.</p>

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