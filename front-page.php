<?php get_header(); ?>
    <main class="site_main_front_page" style="background-color:<?= get_theme_mod("background_body");?>;">
        
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <h1 class="main_titre animation_titre">
            <?php the_title();?>
        </h1>
        <section class="animation_contenu">
            <?php the_content();?> 
        </section>
        <?php endwhile;?>
        <?php endif;?>
        <section class="pages_important">  
                <h3>Le département TIM</h3>
                <?php
                wp_nav_menu(array('menu'=>"accueil",
                                    "container"=>"nav"));
                ?>    
                <h3>Les événements</h3>
                <?php
                wp_nav_menu(array('menu'=>"evenement",
                                    "container"=>"nav"));
                ?>  
        </section>
    </main>
<?php get_footer(); ?>