<?php get_header(); ?>
    <main class="site_main_front_page">
    <div class="animation">   
        <h1 class="animation_bloc">1</h1>
        <h1 class="animation_bloc">2</h1>
        <h1 class="animation_bloc">3</h1>
        <h1 class="animation_bloc">4</h1>
        <h1 class="animation_bloc">5</h1>
    </div> 
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <h1 class="main_titre">
            <?php the_title();?>
        </h1>
        <?php the_content();?> 
        <?php endwhile;?>
        <?php endif;?>
    
    </main>
<?php get_footer(); ?>