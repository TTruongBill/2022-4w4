<?php get_header(); ?>
    <main class="site_main_front_page">
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

{/**php get_nav_menu(array(
    "menu"=> "menu_accueil"
    "container" => "nav"));
    */}