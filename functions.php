<?php
function cidw_4W4_enqueue(){
    //wp_enqueue_style('style_css', get_template_directory_uri());
    wp_enqueue_style('style_css', 
                    get_template_directory_uri() . '/style.css', 
                    array(), 
                    filemtime(get_template_directory() . '/style.css'), 
                    false);
    wp_enqueue_style('cidw_4w4_police_google',
    "https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap",
    false);
}

add_action("wp_enqueue_scripts", "cidw_4W4_enqueue");
/*--------------------------Enregistrer le menu*/

Function cidw_4W4_enregistre_mon_menu() {
    register_nav_menus(
        array(
            'principal' => esc_html__('Menu principal', 'cidw_4w4'),
            'footer' => esc_html__('Footer','cidw-4w4'),
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

?>