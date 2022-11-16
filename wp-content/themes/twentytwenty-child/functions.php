<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parenthandle = 'twentytwenty-style'; // This is 'twentytwenty-style' for the Twenty Twenty theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
}

function wp_woocommerce_add_sku_under_product_title(){
    global $product;
    echo '<p class="product-sku"><strong>SKU:</strong> ' . $product -> get_sku() . '</p>';
}

add_action( 'woocommerce_single_product_summary', 'wp_woocommerce_add_sku_under_product_title', 11);
add_action( 'woocommerce_shop_loop_item_title', 'wp_woocommerce_add_sku_under_product_title', 11);