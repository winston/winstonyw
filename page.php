<?php get_header(); ?>

<div id="content">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="post_content" id="post-<?php the_ID(); ?>">

      <h2><?php the_title(); ?></h2>
      <div class="post_entry page"><?php the_content('[+]'); ?></div>

      <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

    </div>

  <?php endwhile; endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>