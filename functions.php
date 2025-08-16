<?php
// Enqueue parent theme styles
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
