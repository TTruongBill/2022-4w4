<?php /*Template Name: Atelier */ ?>
<?php get_header(); ?>
<main class="site_main">
    <?php if(have_posts()) : the_post(); ?>

    <h1 class="page_main_titre">
        <?php the_title();?>
    </h1>
    <h2> Description de l'atelier</h2>
    <section class="carte_post atelier">
        <p class="atelier_animateur"><?php echo get_field_object("animateur")["prepend"] . " <b> " . get_field_object("animateur")["value"];?></b></p>
        <p class="atelier_local"><?php echo get_field_object("local")["prepend"] . " <b> " . get_field_object("local")["value"];?></b></p>
        <p class="atelier_description"><?php the_field('description'); ?></p>
    </section> 
    <h2>Horaire et dates de l'atelier</h2>
    <section class="carte_post atelier">
        <p class="atelier_duree"> <?php echo get_field_object("duree")["prepend"] . " <b> " . get_field_object("duree")["value"] . " " . get_field_object("duree")["append"]; ?></b></p>
        <p class="atelier_date_debut">Date de début : <b> <?php the_field("date_debut"); ?></b></p>
        <p class="atelier_date_fin">Date de fin : <b> <?php the_field("date_fin"); ?></b></p>
        <p class="atelier_jours"><?php echo get_field_object("jours")["prepend"] . " <b> " . get_field_object("jours")["value"];?></b></p>
        <p class="atelier_heure">L'horaire : de <b> <?php the_field("heure_debut")?></b> à <b> <?php the_field("heure_fin");?></b></p>
    </section> 
    <?php endif;?>
    
</main>
<?php get_footer();?>