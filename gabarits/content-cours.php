<?php
    $categorie = get_the_category();
    $mon_titre = get_the_title();
    $mon_titre_filtre = substr($mon_titre,8);
    $mon_sigle = substr($mon_titre,0,7);
    $mon_heure = get_field( "nombre_dheures" ) . " heures";
    $departement = get_field("departement");
    $mon_titre_filtre = substr($mon_titre_filtre, 0, strrpos($mon_titre_filtre,'('));
?>
<section class="carte <?php echo $categorie[1]->slug; ?>" >
<?php the_post_thumbnail("thumbnail")?>
    <h3 class="carte_titre" >
        <a href="<?php echo get_permalink(); ?>">
            <?php echo $mon_titre_filtre; ?>
        </a>    
    </h3>
    <section class="carte_info">
        <p class="carte_sigle"><?php echo $mon_sigle; ?></p>
        <p class="carte_heure"><?php echo $mon_heure; ?></p>
    </section>
    <p class="carte_contenu"><?php echo $mon_contenu; ?></p>
    <p class="carte_departement"><?php echo $departement; ?></p>

</section>
            
