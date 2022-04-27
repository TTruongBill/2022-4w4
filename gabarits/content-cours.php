<?php
    $categorie = get_the_category();
    $mon_titre = get_the_title();
    $mon_titre_filtre = substr($mon_titre,8);
    $mon_heure = get_field( "nombre_dheures" ) . " heures";
    $departement = get_field("departement");
    $mon_titre_filtre = substr($mon_titre_filtre, 0, strrpos($mon_titre_filtre,'('));
    $mon_contenu = get_the_content();
?>
<section class="carte <?php echo $categorie[1]->slug; ?>" >
<code class="carte_invisible"><?= $mon_contenu; ?></code>
<?php the_post_thumbnail("thumbnail")?>
    <h3 class="carte_titre" >
        <a href="<?php echo get_permalink(); ?>">
            <?php echo $mon_titre_filtre; ?>
        </a>    
    </h3>
    <section class="carte_info">
        <p class="carte_heure"><?php echo $mon_heure; ?></p>
    </section>
    <p class="carte_contenu"><?php echo wp_trim_words($mon_contenu, 15, "<button class='carte_contenu_ouvrir'> La suite </button>"); ?></p>
    <p class="carte_departement"><?php echo $departement; ?></p>

</section>
            
