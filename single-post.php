
<?php get_header(); ?>
<main class="site_main">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <article class="site_post_main">
            <?php the_post_thumbnail(); ?>
            <h1 class="main_post_titre">
                <?php the_title();?>
            </h1>
            <section class="carte_post">
                <?php the_content();?>
            </section>
        </article>
        
    <?php endwhile;?>
    <?php endif;?>
</main>
<?php get_footer();?>