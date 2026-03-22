<?php
/* Template name: Accueil */
get_header(); //Appel de l'inclusion d'entête de page
?>

<?php if(has_post_thumbnail()){ ?>
    <picture class="banniere">
        <?php the_post_thumbnail("full"); ?>
    </picture>
<?php } ?>

<main class="page">
    <!-- H1 -->
    <h1 class=entete_titre>
        <a href="<?php bloginfo("url");?>" title="<?php the_title()?>"><?php the_title()?></a>
    </h1>
    
    <p><?php  the_content() ?></p>
    
    <section class="nouvelles">
        <div class="nouvelles_titreSection">
            <h2>Section Nouvelles</h2>
            <a class="nouvelles__lien" href="<?php the_permalink();?>">
                <h3>Visitez toutes nos nouvelles
                    <a class="article__lien" href="<?php the_permalink();?>"></a>
                </h3>
            </a>
        </div>
            
        <div class="container-articles"><?php
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
                        </div><?php 
                    } ?>
            
                    <header class="article__entente">
                        <h2 class="article_titre">
                            <?php the_title(); ?>
                        </h2>
                    </header>
                
                    <p class="article__texte">
                        <?php the_excerpt(); ?>
                    </p>
                
                    <p>Consulter l'article
                        <a class="article__lien" href="<?php the_permalink();?>"></a>
                    </p>
                </article><?php }
            wp_reset_postdata();
        }?>
        </div>   
    </section>

    <section class="volets">
        <h2>Section Volets</h2>

        <ul class="liste_volets">
            
        <?php
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
    </section>
</main>

<?php get_footer(); ?>