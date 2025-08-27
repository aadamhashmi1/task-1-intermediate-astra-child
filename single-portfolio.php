<?php get_header(); ?>

<main class="portfolio-single">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <h1 class="portfolio-title"><?php the_title(); ?></h1>

      <h2><?php echo esc_html(get_field('project_name')); ?></h2>

      <p><?php echo esc_html(get_field('project_description')); ?></p>

      <?php $image = get_field('project_thumbnail'); ?>
      <?php if ($image): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="portfolio-thumbnail" />
      <?php endif; ?>

      <?php $link = get_field('project_link'); ?>
      <?php if ($link): ?>
        <p><a href="<?php echo esc_url($link); ?>" target="_blank" rel="noopener">Visit Project</a></p>
      <?php endif; ?>

    </article>

  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
