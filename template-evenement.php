<?php /*Template Name: Évenement */ ?>
<?php get_header(); ?>
<main class="site_main">
    <article class="evenement">
    <?php if(have_posts()) : the_post(); ?>
        <h1 class="page_main_titre">
            <?php the_title();?>
        </h1>
        <section class="carte_post">
            <?php the_field("resume");?>
            <p class="evenement_endroit"> 
                <?php the_field("endroit"); ?>
            </p>

        </section> 
    </article>
    <?php endif;?>
    
</main>
<?php get_footer();?>