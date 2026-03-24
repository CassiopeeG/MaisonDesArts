<?php
get_header();
echo "single.php";
?>

<main class="page">

 <?php the_post(); //nécessaire à the_author() et the_date()
   // var_dump($post); //Ce que reçoit la page?>

    <article class="article">
        <header class="article__entete">
            <h1 class="article__titre"><?php the_title() ?></h1>
        </header>
		
		
      
 <?php if(has_post_thumbnail()){?>
        <div class="article__imageUne">
            <?php //affiche l'image de l'article
            the_post_thumbnail("full"); //peut être thumbnail, ou large. Il y a plusieurs possibilités?>

        </div>
<?php } ?>
	   
	   
<div class="article__padding">
        <p class="article__texte">
            <?php  the_content() ?>
        </p>
        <footer class="article__piedPage">
            <h4 class="article__author">Par: <?php the_author(); //Attention! Nécessite un appel à the_post() avant cet affichage ?></h4>
            <div class="article__date--div">
            <h4 class="article__date"><?php the_date(); //Attention! Nécessite un appel à the_post() avant cet affichage ?></h4>
</div>
        </footer>
</div>
                    <p>
                <?php //Version améliorée avec flèche et titre des articles adjacents.
                the_post_navigation( array(
                    'prev_text'  => __( '← %title' ),
                    'next_text'  => __( '%title →' ),
                ) );
            ?>
            </p>

    </article>


</main>

<?php get_footer()?>
