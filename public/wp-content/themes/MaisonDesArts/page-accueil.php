<?php
/* Template name: Accueil */
get_header(); //Appel de l'inclusion d'entête de page
?>

<?php if(has_post_thumbnail()){ ?>
    <picture class="banniere">
        <?php the_post_thumbnail("full"); ?>
    </picture>
<?php } ?>

<main class="page" id="contenu">
    <!-- H1 -->
    <h1 class=entete_titre>
        <a href="<?php bloginfo("url");?>" title="<?php the_title()?>"><?php the_title()?></a>
    </h1>
    
    <p><?php  the_content() ?></p>
    
    <section class="nouvelles">
        <div class="section__titre">
            <h2>Section Nouvelles</h2>
            
            <h3>
                <a class="section__lien article__lien" href="./nouvelles/" title="Visitez toutes nos nouvelles">Visitez toutes nos nouvelles →</a>
            </h3>
        </div>
            
        <div class="container-articles">
            <?php
            $posts = get_posts(array(
                'posts_per_page' => 2,
                'post_type' => 'post',
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'DESC',
                ));
                
            if($posts){
                foreach($posts as $post){
                    setup_postdata($post); ?>
                        
            <article class="article">
                <div class="article__padding">
                    <?php if(has_post_thumbnail()){ ?>
                    <div class="article__imageUne-Carte">
                    <?php the_post_thumbnail("image-article"); ?>
                </div>
            <?php } ?>

            <header class="article__entente">
                <h2 class="article_titre">
                        <?php the_title(); ?>
                </h2>
             <div class="article__date--div">
            <h4 class="article__date"><?php the_date(); //Attention! Nécessite un appel à the_post() avant cet affichage ?></h4>
        </div>
        </header>

        <p class="article__texte">
            <?php the_excerpt(); ?>
        </p>
        
        <p>
            <a class="article__lien" href="<?php the_permalink();?>">
                Consulter l'article →
            </a>
        </p>
    </div>
    </article>

    <?php }
    wp_reset_postdata();}?>
    </div>
    </section>

    <section class="volets">
        <div class="section__titre">
            <h2>Section Volets</h2>
                
            <h3>
                <a class="section__lien article__lien" href="./volets-culturels/" title="Visitez nos volets">Visitez nos volets culturels →</a>
            </h3>
        </div>

        <div class="volets__info">
            <p>
                Lorsque vous franchirez les portes de la Maison des arts, vous entrerez dans un univers où la culture prend vie. Ce lieu n’est pas seulement un bâtiment : c’est un écosystème créatif, pensé pour accueillir toutes les générations et toutes les disciplines artistiques.
            </p>

            <img class="volets__image" src="<?php echo get_template_directory_uri();?>/liaisons/images/volets_image.png" alt="Location physique des volets dans le presbytère. Les volets Lieu de vie et de rencontre ainsi que Médiation Culturel sont au premier étage. La création de résidence d'artistes sont au deuxième étage. ">
        </div>

        <div class="volets__liens">
            <img class="volets__liens_image" src="<?php echo get_template_directory_uri();?>/liaisons/images/image_porte.png" alt="">

            <ul class="volets__liens__liste">
            <?php
            $posts = get_posts(array(
                'posts_per_page' => -1,
                'post_type'	=> 'volets',
                'post_status' => 'publish',
                'orderby' => 'title',
                'order' => 'ASC',
            ));

            if(have_posts()){
                //tant qu'il restera des articles
                foreach ($posts as $post){?>
                    <li>
                        <h3>
                            <a class="article__lien" href="<?php the_permalink();?>"><?php the_title()?> →</a>
                        </h3>
                    </li>
                <?php }}?>
            </ul>
        </div>

        
    </section>
</main>

<?php get_footer(); ?>