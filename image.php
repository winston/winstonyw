<?php get_header(); ?>

<div id="content">

  <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

      <div class="post_content" id="post-<?php the_ID(); ?>">

        <h2><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <?php the_title(); ?></h2>

        <div class="post_section">
          <div class="section_label date small">Date</div>
          <div class="section_content small"><?php the_time('l, M jS, Y'); ?></div>
        </div>
        <div class="post_section">
          <div class="section_label tags small">Tags</div>
          <div class="section_content small"><?php the_category(' &bull; '); ?></div>
        </div>

        <div class="post_section">

          <div class="post_entry">

            <div class="gallery_show">
              <a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'large' ); ?></a>
            </div>
            <div class="gallery_show-caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt(); ?></div>

            <div class="gallery_navigation">
              <div class="left">
                <?php previous_image_link() ?>
                <span class="prev_link small">&laquo; Prev Image</span>
              </div>
              <div class="right">
                <?php next_image_link() ?>
                <span class="next_link small">Next Image &raquo;</span>
              </div>
            </div>

          </div>

        </div>

      </div>

      <!-- Disqus Embed Comments Code -->

    <?php endwhile; ?>

  <?php else : ?>

    <h4>Error 404 - Oops! What happened?</h4>

  <?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>