
<?php get_header(); ?>
<main class="site_main">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <article class="cours">
            <h1 class="cours_titre">
                <?php the_title();?>
            </h1>
                <?php the_content();?>
        </article>
        
    <?php endwhile;?>
    <?php endif;?>
</main>
<?php get_footer();?>