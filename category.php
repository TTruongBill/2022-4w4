
<?php get_header(); ?>
    <main class="site_carte_main">
    <div>
        <a href="?cletri=title&ordre=desc">desc</a><br>
        <a href="?cletri=title&ordre=asc">asc</a><br>
    </div>
    
        <?php  wp_nav_menu(array(
            "menu"=>"categorie_cours",
            "container" => "nav"));  ?>
        <h2 class="main_titre">Liste des cours</h2>
        <?php 
        /*
        if (is_category('jeu')){ echo "<h3>Cours Jeu</h3>";}
        if (is_category('design')){ echo "<h3>Cours design</h3>";}
        if (is_category('utilitaire')){ echo "<h3>Cours utilitaire</h3>";}
        if (is_category('creation-3d')){ echo "<h3>Cours création 3D</h3>";}
        if (is_category('video')){ echo "<h3>Cours vidéo</h3>";}
        */

        $url_categorie = trouve_la_categorie(array('web','jeu','design', 'utilitaire', 'creation-3d', 'video'));
        $ma_categorie = get_category_by_slug($url_categorie);
        echo "<h3>" . $ma_categorie->description . "</h3>"; 



        ?>
        <div class="formation__liste">
            <?php if(have_posts()):
                while(have_posts()): the_post();?>
                <?php get_template_part("gabarits/content", "cours"); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        
    </main>
    <?php get_footer();?>