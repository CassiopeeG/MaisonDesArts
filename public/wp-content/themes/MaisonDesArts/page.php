<?php
get_header(); //Appel de l'inclusion d'entête de page
echo "page.php";
?>

    <main class="page"  id="contenu">

        <?php //var_dump($post); //Ce que reçoit la page?>

        <div>
            <h2><?php the_title() //fonction native WP?></h2>
            <h2><?php //echo $post->post_title  //Façon alternative en utilisant la variable $post?></h2>
        </div>
        <p>
           <?php  the_content() ?>
           <?php  //echo $post->post_content; ?>
        </p>

    </main>

<?php get_footer()?>
