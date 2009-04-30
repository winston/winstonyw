<?php get_header(); ?>

<div id="content">

  <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

      <?php include (TEMPLATEPATH . '/post.php'); ?>

      <div class="post_navigation">
        <div class="left" ><?php previous_post_link('%link','<span class="prev_link">&laquo; Previous Post</span>') ?></div>
        <div class="right"><?php next_post_link('%link','<span class="next_link">Next Post  &raquo;</span>') ?></div>
      </div>

      <!-- Disqus Embed Comments Code -->

    <?php endwhile; ?>

  <?php else : ?>

    <h4>Error 404 - Oops! What happened?</h4>

  <?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>