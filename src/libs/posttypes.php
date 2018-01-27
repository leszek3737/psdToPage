<?php
add_action('init', 'psdToPsd_init_posttypes');
function psdToPsd_init_posttypes() {
    $recipes_args = array(
        'labels' => array(
            'name' => 'Produkt',
            'singular_name' => 'Produkt',
            'all_items' => 'produkty',
            'add_new' => 'Dodaj nowy produkt',
            'add_new_item' => 'Dodaj nowy produkt',
            'edit_item' => 'Edytuj produkt',
            'new_item' => 'Nowy produkt',
            'viev_item' => 'Zobacz przepis',
            'search_items' => 'Szukaj w przepisach',
            'not_found' => 'Nie znaleziono produktu',
            'not_found_in_trash' => 'Nie znaleziono produktu',
            'parent_item_colon' => '',
            'archives' => 'psdToHtmlProduct',
            
        ),
        'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true, 
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => 5,
            'supports' => array(
                'title','thumbnail','excerpt',
            ),
            'has_archive' => true            
    );
    register_post_type('recipes', $recipes_args);
}
?>
