<?php get_header(); ?>

<div id="content">

  <?php if (have_posts()) : ?>

    <h6>Search Results</h6>
    <?php while (have_posts()) : the_post(); ?>

      <div class="post_content" id="post-<?php the_ID(); ?>">

        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

        <div class="post_section search">
          <span class="small"><?php the_time('l, M jS, Y'); ?></span> | <span class="small">Tags: <?php the_category(' &bull; '); ?></span>
        </div>

      </div> <!-- End Post Content -->

    <?php endwhile; ?>

  <?php else : ?>
    <h4>Oops! My search monkeys couldn't find any posts with your query!</h4>
  <?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>