<?php
// Enqueue parent theme styles
// 🔹 Register Portfolio CPT
function aadam_register_portfolio_cpt() {
    register_post_type('portfolio', [
        'labels' => [
            'name' => __('Portfolio'),
            'singular_name' => __('Portfolio Item'),
            'add_new_item' => __('Add New Portfolio Item'),
            'edit_item' => __('Edit Portfolio Item'),
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'aadam_register_portfolio_cpt');

// 🔹 Register Testimonials CPT
function aadam_register_testimonials_cpt() {
    register_post_type('testimonial', [
        'labels' => [
            'name' => __('Testimonials'),
            'singular_name' => __('Testimonial'),
            'add_new_item' => __('Add New Testimonial'),
            'edit_item' => __('Edit Testimonial'),
        ],
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-format-quote',
        'supports' => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'aadam_register_testimonials_cpt');

// 🔹 Register Products CPT
function aadam_register_products_cpt() {
    register_post_type('product', [
        'labels' => [
            'name' => __('Products'),
            'singular_name' => __('Product'),
            'add_new_item' => __('Add New Product'),
            'edit_item' => __('Edit Product'),
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-cart',
        'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
        'taxonomies' => ['category'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'aadam_register_products_cpt');

add_action( 'wp_enqueue_scripts', 'astra_child_enqueue_styles' );
function astra_child_enqueue_styles() {
    wp_enqueue_style( 'astra-parent-style', get_template_directory_uri() . '/style.css' );
}
function aadam_custom_single_post_loop() {
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            ?>

            <article <?php post_class(); ?>>

                <h1 class="entry-title"><?php the_title(); ?></h1>

                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="featured-image">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <div class="post-meta">
                    <p>Published on: <?php echo get_the_date(); ?></p>
                    <p>Author: <?php the_author(); ?></p>
                </div>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

            </article>

            <?php
        endwhile;
    endif;
}
