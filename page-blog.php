<?php
/*
Template Name: Blog Page
*/
get_header();
?>

<main class="custom-blog-page">
  <h1 class="page-title"><?php the_title(); ?></h1>

  <div class="blog-grid">
    <?php
    $args = [
      'post_type' => 'post',
      'posts_per_page' => 6,
      'category_name' => '', // Optional: add category slug here
    ];
    $query = new WP_Query($args);

    if ($query->have_posts()) :
      while ($query->have_posts()) : $query->the_post(); ?>
        <div class="blog-card">
          <?php if (has_post_thumbnail()) : ?>
            <div class="card-image">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium'); ?>
              </a>
            </div>
          <?php endif; ?>

          <div class="card-content">
            <h2 class="card-title">
              <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_the_title()); ?></a>
            </h2>
            <p class="card-excerpt"><?php echo esc_html(get_the_excerpt()); ?></p>
            <a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
          </div>
        </div>
      <?php endwhile;
      wp_reset_postdata();
    else :
      echo '<p>No posts found.</p>';
    endif;
    ?>
  </div>
</main>

<?php get_footer(); ?>
