<?php
// create post type Product with custom taxonomy Category and Tag
function create_post_type_product() {
    register_post_type( 'product',
        array(
            'labels' => array(
                'name' => __( 'Products' ),
                'singular_name' => __( 'Product' )
            ),
            'public' => true,
            'icon' => 'dashicons-cart',
            'has_archive' => true,
            'rewrite' => array('slug' => 'product'),
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
    register_taxonomy(
        'product_cat',
        'product',
        array(
            'label' => __( 'Categories' ),
            'rewrite' => array( 'slug' => 'category' ),
            'hierarchical' => true,
        )
    );
    register_taxonomy(
        'product_tag',
        'product',
        array(
            'label' => __( 'Tags' ),
            'rewrite' => array( 'slug' => 'tag' ),
            'hierarchical' => false,
        )
    );
}
add_action( 'init', 'create_post_type_product' );

