<footer class="site_footer">
    <div class="site_footer_colonne"> 
        <section class="site_footer_colonne_info">
            <section class="footer_adresse"><?php get_sidebar("pied_page_colonne_1")?></section>
            <section class="footer_article"><?php get_sidebar("pied_page_colonne_2")?></section>
            <section class="footer_lien">
                <h3>Liens Externes</h3>
                <?php wp_nav_menu(array("menu" => "lien_externe",
                                        "container" => "nav",
                                        "container_class" => "footer_menu",
                                        "menu_class" => "footer_menu_ul")); ?>
            </section>
        </section>  
        <section class="recherche"><?php get_search_form(); ?></section>
    </div>
    <div class="site_footer_ligne">
        <?php get_sidebar("pied_page_ligne_1")?>
        <?php get_sidebar("pied_page_ligne_2")?>
        <p>Copyright &copy 2022 - Collège de Maisonneuve. Tous droits réservés </p>
    </div>
</footer>		
<?php wp_footer(); ?>

</body>
</html>