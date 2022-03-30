
<?php get_header(); ?>
<main class="site_main">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <?php
            $mon_titre = get_the_title();
            $mon_titre_filtre = substr($mon_titre,8);
            $mon_sigle = substr($mon_titre,0,7);
            $mon_heure = substr($mon_titre_filtre, strrpos($mon_titre_filtre,'('));
            $mon_titre_filtre = substr($mon_titre_filtre, 0, strrpos($mon_titre_filtre,'('));
            $mon_contenu = get_the_excerpt();
        ?>
        <article class="site_post_main">
            <div class="site_post_main_img">
                <?php the_post_thumbnail(); ?>
            </div>
            <h1 class="main_post_titre">
                <?php echo $mon_titre_filtre;?>
            </h1>
            <section class="info_extra">
                <p> Heure de cours nécessaire à faire : <?php echo $mon_heure; ?></p>
                <p> Le code du cours(sigle) : <?php echo $mon_sigle; ?></p>
            </section>

            <section class="carte_post">
                <?php the_post_thumbnail("medium"); ?>
                <?php echo get_the_content();?>
            </section>
        </article>
        
    <?php endwhile;?>
    <?php endif;?>
</main>
<?php get_footer();?>