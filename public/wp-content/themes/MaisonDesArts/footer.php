</div aria-label="Pied de page">
<!-- <?php echo "footer.php"; ?> -->
<footer class="pied_de_page">
    <img src="./liaisons/images/logoGrand.png" alt="Accueil">

    <form action="" method="POST">
        <label for="email">Courriel:</label><br>
        <input type="email" id="email" name="email" placeholder="Entrez votre courriel"><br><br>
        <button type="submit">Abonnez-vous</button>
    </form>

    <div class="Adresse">
        <p>Adresse: </p>
        <p>25 Route 138, Saint-Augustin-de-Desmaures, QC, G3A 1G7</p>
    </div>


    <div class="contact">
        <p>Nous contacter: </p>
        <p>lepresbytere.arts@gmail.com</p>
        <img src="" alt="logo facebook">
        <img src="" alt="logo linkedin">
    </div>

    <p>Un projet culturel en développement, porté par et pour la communauté.</p>

</footer>
<?php wp_footer();?>

<script src="<?php echo get_template_directory_uri()?>/liaisons/js/menuwp.js"></script>
</body>
</html>