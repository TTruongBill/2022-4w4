
<?php get_header(); ?>
    <main class="site_main">
        <h2 class="main_titre">Liste des cours</h2>
        <?php if(have_posts()):
            while(have_posts()): the_post();?>
            <?php
                $mon_titre = get_the_title();
                $mon_titre_filtre = substr($mon_titre,8);
                $mon_sigle = substr($mon_titre,0,7);
                $mon_heure = substr($mon_titre_filtre, strrpos($mon_titre_filtre,'('));
                $mon_titre_filtre = substr($mon_titre_filtre, 0, strrpos($mon_titre_filtre,'('));
                $mon_contenu = get_the_excerpt();
            ?>
            <section class="carte">
                <h3 class="carte_titre"><?php echo $mon_titre_filtre; ?></h3>
                <section class="carte_info">
                    <p class="carte_sigle"><?php echo $mon_sigle; ?></p>
                    <p class="carte_heure"><?php echo $mon_heure; ?></p>
                </section>
                <p class="carte_contenu"><?php echo $mon_contenu; ?></p>
            </section>

            <?php endwhile; ?>
        <?php endif; ?>
        
        
    </main>
    <?php get_footer();?>