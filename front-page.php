<?php get_header(); ?>
    <main class="site_main_front_page">
        <section class="pages_important">
            <div class="bloc_important">
                <h3>Le département TIM</h3>
            </div>
            <div class="bloc_important">
                <h3>Les événements</h3>
            </div>
        </section>
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <h1 class="main_titre animation_titre">
            <?php the_title();?>
        </h1>
        <section class="animation_contenu">
            <?php the_content();?> 
        </section>
        <?php endwhile;?>
        <?php endif;?>
    
    </main>
<?php get_footer(); ?>