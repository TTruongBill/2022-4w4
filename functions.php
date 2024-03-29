<?php

require_once("options/apparence.php");


function cidw_4W4_enqueue(){
    //wp_enqueue_style('style_css', get_template_directory_uri());
    wp_enqueue_style('style_css', 
                    get_template_directory_uri() . '/style.css', 
                    array(), 
                    filemtime(get_template_directory() . '/style.css'), 
                    false);

    wp_enqueue_style('cidw_4w4_police_google',
                    "https://fonts.googleapis.com/css2?
                    family=Montserrat+Alternates:wght@500&
                    family=Poppins:wght@300;400;500&
                    family=Roboto&display=swap",
                    false);

    wp_register_script('cidw-4w4-boite-modale', 
                    get_template_directory_uri() . '/javascript/boite-modale.js', 
                    array(), 
                    filemtime(get_template_directory() . '/javascript/boite-modale.js'), 
                    true);

    wp_register_script('cidw-4w4-carrousel',
                    get_template_directory_uri() . '/javascript/carrousel.js',
                    array(),
                    filemtime(get_template_directory() . '/javascript/carrousel.js'),
                    true);

                    if(is_category('cours')){
                        wp_enqueue_script('cidw-4w4-boite-modale');
                    }
                    if(is_front_page()){
                        wp_enqueue_script('cidw-4w4-carrousel');
                    }


}

add_action("wp_enqueue_scripts", "cidw_4W4_enqueue");
/*--------------------------Enregistrer le menu*/

Function cidw_4W4_enregistre_mon_menu() {
    register_nav_menus(
        array(
            'principal' => esc_html__('Menu principal', 'cidw_4w4'),
            'footer' => esc_html__('Footer','cidw-4w4'),
            'lien_externe' => esc_html__('lien externe', 'cidw_4w4' ),
            'menu_cours' => esc_html__('Menu categories cours', 'cidw_4w4'),
            'menu_accueil' => esc_html__('Menu accueil', 'cidw_4w4'),
        )
    );
}

add_action('after_setup_theme', 'cidw_4w4_enregistre_mon_menu');

/*--------------------------Filtrer chacun des choix du nav*/
function cidw_4w4_filtre_le_menu($mon_objet) {
    foreach($mon_objet as $key => $value){
        $value->title = wp_trim_words($value ->title, 4, '...');
    }

    return $mon_objet;
}
add_filter("wp_nav_menu_objects","cidw_4w4_filtre_le_menu");
/*-------------------------------------------------- add_theme_support()*/

add_theme_support('post-thumbnails');
add_theme_support('widgets');

function prefix_nav_description($item_output, $item) {
    if(!empty($item->description)) {
        $item_output = str_replace( '</a>',
        '<hr><span class="menu-item-description">' . $item->description . '</span><div class="menu-item-icone"></div></a>',
        $item_output);
    }
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'prefix_nav_description', 10, 2);
/*-----------------------Enregistrement des sidebars--------*/

function my_register_sidebars() {
    /* Register the 'footer' sidebar. */
    register_sidebar(
        array(
            'id'            => 'pied_page_colonne_1',
            'name'          => __( 'Pied de page colonne 1' ),
            'description'   => __( 'Colonne de pied de page' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
    /* Register the '' sidebar. */
    register_sidebar(
        array(
            'id'            => 'pied_page_colonne_2',
            'name'          => __( 'Pied de page colonne 2' ),
            'description'   => __( 'Colonne de pied de page' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'pied_page_ligne_1',
            'name'          => __( 'Pied de page ligne 1' ),
            'description'   => __( 'Colonne de pied de page' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'pied_page_ligne_2',
            'name'          => __( 'Pied de page ligne 2' ),
            'description'   => __( 'Colonne de pied de page' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}

add_action( 'widgets_init', 'my_register_sidebars' );

/* ----------------------------------------------------------------- */
function trouve_la_categorie($tableau){
    foreach($tableau as $cle){
        if(is_category($cle)) return($cle);
    }
}
/*----------------Custom logo -----------*/
function cidw_4W4_add_theme_support(){
    add_theme_support('post-thumbnails');
    add_theme_support( 'custom-logo', array(
        'height' =>100,
        'width' =>100,
    ) );
}
add_action('after_setup_theme', 'cidw_4W4_add_theme_support');
/**
 * Modifie la requête global de WP_query.
 * 
 * @param WP_query $query : Objet contenant la requête global.
 * @return WP_query $query. 
 */
function cidw_4w4_pre_get_posts(WP_Query $query)
{
    if (is_admin() || !is_main_query() || !is_category(array('cours','web','jeu','design','utilitaire','creation-3d','video'))   )
    {
        
        return $query;
    }        
    else
    {
        $ordre = get_query_var('ordre');
        $cle = get_query_var('cletri');       
        $query->set('order',  $ordre);
        $query->set('orderby', $cle);

        $query->set('postperpage','-1');
        
        return $query;
    }
}


function cidw_4w4_query_vars($params){
    $params[] = "cletri";
    $params[] = "ordre";
    return $params;
}
add_action('pre_get_posts', 'cidw_4w4_pre_get_posts');
/* Le hook «pre_get_posts» nous permet d'alterer les composante de la requête WP_query */
add_filter('query_vars', 'cidw_4w4_query_vars' );
/* Le hook «query_vars» nous permet d'alterer les arguments de l'URL */

?>