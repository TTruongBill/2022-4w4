<footer class="site_footer">
    <section class="footer_info">
        <ul class="footer_contact">
            <li>3 800, rue Sherbrooke Est Montréal</li>
            <li>(Québec) H1X 2A2</li>
            <li>514-254-7131</li>
            <li>lorem ipsum dolor quaerat?</li>
            <li>Lorem ipsum dolor quaerat?</li>
            <li>Lorem ipsum dolor quaerat?</li>
        </ul>
        <div class="footer_links">
        <?php wp_nav_menu(array("menu"=>"simple",
                                "container"=>"nav")); 
        ?>
        </div>
        <p class="footer_parag">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui totam consectetur magnam itaque minima soluta ipsa id placeat inventore tempora. Cum voluptate maxime quibusdam amet fuga sed optio. Repudiandae, expedita.</p>
    </section>
    <section class="footer_droit">
       <p>Copyright &copy 2022 - Collège de Maisonneuve. Tous droits réservés </p>
       
    </section>
</footer>		
<?php wp_footer(); ?>

</body>
</html>