</div aria-label="Pied de page">
<footer class="footer">
    <img class="logo" src="<?php echo get_template_directory_uri();?>/liaisons/images/logoGrand.png" alt="Accueil">

    <form action="" method="POST" class="footer__abonnement">
        <label for="courriel" class="label">Courriel:</label><br>
        <input type="courriel" id="courriel" name="courriel" class="courriel" placeholder="Entrez votre courriel"><br><br>
        <button type="submit" class="btn_abonner">Abonnez-vous!</button>
    </form>

    <div class="footer__informations">
        <div class="footer__informations-adresse">
            <p>Adresse: </p>
            <p>25 Route 138, Saint-Augustin-de-Desmaures, QC, G3A 1G7</p>
        </div>

        <div class="footer__informations-contact">
            <p>Nous contacter: </p>
            <p>lepresbytere.arts@gmail.com</p>
            <a href="https://www.facebook.com/">
                <img src="<?php echo get_template_directory_uri();?>/liaisons/images/logo_facebook.png" alt="lien facebook">
            </a>
            <a href="">
                <!-- <?php the_field("linkedin", 38)?> Ref mute temporairement -->
                <img src="<?php echo get_template_directory_uri();?>/liaisons/images/logo_linkedin.png" alt="lien linkedin">
            </a>
            
        </div>

        <div>
            <h4><?php bloginfo("description")?></h4>
        </div>
    </div>

    <div class="footer__mentions">
        <p>@ 2026 — Tous droits réservés.</p>
        <p>Ce site a été réalisé par Cassiopée Gariépy, Moussa Said Awaleh et Alice Tremblay.</p>
    </div>
</footer>
<?php wp_footer();?>

<script src="<?php echo get_template_directory_uri()?>/liaisons/js/menuwp.js"></script>
</body>
</html>