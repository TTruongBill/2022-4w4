<?php /*Template Name: Évenement */ ?>
<?php get_header(); ?>
<main class="site_main">
    <?php if(have_posts()) : the_post(); ?>
    <h1 class="page_main_titre">
        <?php the_title();?>
    </h1>
    <section class="carte_post evenement">
        <p class="evenement_resume"><?php the_field("resume");?></p>
        <p class="evenement_endroit"><?php the_field("endroit");?></p>
        <p class="evenement_organisateur"><?php the_field('organisateur'); ?></p>
    </section> 
    <?php endif;?>
    
</main>
<?php get_footer();?>