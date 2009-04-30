<?php get_header(); ?>

<div id="content">

  <?php if (have_posts()) : ?>

    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

    <!-- Category -->
    <?php if (is_category()) { ?>
      <h6>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h6>
    <!-- Tag -->
    <?php } elseif ( is_tag() ) { ?>
      <h6>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h6>
    <!-- Day -->
    <?php } elseif ( is_day() ) { ?>
      <h6>Archive for <?php the_time('F jS, Y'); ?></h6>
    <!-- Monthly -->
    <?php } elseif ( is_month() ) { ?>
      <h6>Archive for <?php the_time('F, Y'); ?></h6>
    <!-- Yearly -->
    <?php } elseif ( is_year() ) { ?>
      <h6>Archive for <?php the_time('Y'); ?></h6>
    <!-- Author -->
    <?php } elseif ( is_author() ) { ?>
      <h6>Author Archive</h6>
    <!-- Paged -->
    <?php } elseif ( isset($_GET['paged']) && !empty($_GET['paged']) ) { ?>
      <h6>Blog Archives</h6>
    <?php } ?>

    <?php while (have_posts()) : the_post(); ?>
      <?php include (TEMPLATEPATH . '/post.php'); ?>
    <?php endwhile; ?>

  <?php else : ?>
    <h4>Oops! My search monkeys couldn't find any posts with your query!</h4>
  <?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>