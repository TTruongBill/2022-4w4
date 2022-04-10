<?php get_header(); ?>
    <main class="site_main_front_page">
        <section class="page_important">
            <div class="dep_TIM">

            </div>
            <div class="evenement">
                
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