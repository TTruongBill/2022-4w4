<footer class="site_footer">
    <div class="site_footer_colonne">
        <section class="footer_adresse"><?php get_sidebar("pied_page_colonne_1")?></section>
        <section class="footer_article"><?php get_sidebar("pied_page_colonne_2")?></section>
        <section class="footer_lien"><?php get_sidebar("pied_page_colonne_3")?></section>
    </div>
    <div class="site_footer_ligne">
        <?php  wp_nav_menu(array("menu" => "lien_externe")); ?>
        <?php get_search_form(); ?>
    </div>
    <section class="site_footer_droit">
       <p>Copyright &copy 2022 - Collège de Maisonneuve. Tous droits réservés </p>
    </section>
</footer>		
<?php wp_footer(); ?>

</body>
</html>