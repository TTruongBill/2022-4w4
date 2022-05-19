<?php /*Template Name: Atelier */ ?>
<?php get_header(); ?>
<main class="site_main">
    <?php if(have_posts()) : the_post(); ?>

    <h1 class="page_main_titre">
        <?php the_title();?>
    </h1>
    <h2> Description de l'atelier</h2>
    <section class="carte_post atelier">
        <p class="atelier_animateur">L'animateur de l'atelier : <?php the_field("animateur");?></p>
        <p class="atelier_local">L'atelier sera donné au local : <?php the_field("local");?></p>
        <p class="atelier_description"><?php the_field('description'); ?></p>
    </section> 
    <h2>Horaire et dates de l'atelier</h2>
    <section class="carte_post atelier">
        <p class="atelier_duree">Durée de chacune des séances et de : <?php the_field("duree") ?> heures</p>
        <p class="atelier_date_debut">Date de début : <?php the_field("date_debut") ?></p>
        <p class="atelier_date_fin">Date de fin : <?php the_field("date_fin") ?></p>
        <p class="atelier_jours">la formation se donnera : <?php the_field("jours") ?></p>
        <p class="atelier_heure">L'horaire : de <?php the_field("heure_debut")?> à <?php the_field("heure_fin")?></p>
    </section> 
    <?php endif;?>
    
</main>
<?php get_footer();?>