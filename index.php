<?php get_header(); ?>

<div id="content">

  <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <?php include (TEMPLATEPATH . '/post.php'); ?>

    <?php endwhile; ?>

    <div class="post_navigation">
      <div class="left" ><?php next_posts_link('<span class="next_link">&laquo; Older Entries</span>') ?></div>
      <div class="right"><?php previous_posts_link('<span class="prev_link">Newer Entries  &raquo;</span>') ?></div>
    </div>

  <?php else : ?>

    <h4>Error 404 - Oops! My search monkeys were caught napping!</h4>

  <?php endif; ?>

</div> <!-- End Content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>