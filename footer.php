<footer class="site_footer">
    <section class="site_footer_info">
        <ul class="footer_contact">
            <li>3 800, rue Sherbrooke Est Montréal</li>
            <li>(Québec) H1X 2A2</li>
            <li>514-254-7131</li>
            <li>lorem ipsum dolor quaerat?</li>
            <li>Lorem ipsum dolor quaerat?</li>
            <li>Lorem ipsum dolor quaerat?</li>
        </ul>
        <div class="footer_links">
        
        <?php  
        $icone = '<svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000"><path d="M10 17l5-5-5-5v10z"></path><path d="M0 24V0h24v24H0z" fill="none"></path></svg>';
        wp_nav_menu(array("menu" => "footer",
                                "container" => "nav",
                                "container_class" => "site_footer_menu_nav",
                                "menu_class" => "footer_menu_ul",

                                "link_before"=> $icone)); 
        ?>
        </div>
        <p class="footer_parag">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui totam consectetur magnam itaque minima soluta ipsa id placeat inventore tempora. Cum voluptate maxime quibusdam amet fuga sed optio. Repudiandae, expedita.</p>

        <?php get_search_form(); ?>
    </section>
    <section class="site_footer_droit">
       <p>Copyright &copy 2022 - Collège de Maisonneuve. Tous droits réservés </p>
    </section>
</footer>		
<?php wp_footer(); ?>

</body>
</html>