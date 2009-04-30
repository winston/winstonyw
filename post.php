<!-- Template for Post Entry -->
<div class="post_content" id="post-<?php the_ID(); ?>">

  <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

  <div class="post_section">
    <div class="section_label date small">Date</div>
    <div class="section_content small"><?php the_time('l, M jS, Y'); ?></div>
  </div>

  <div class="post_section">
    <div class="section_label buzz small">Buzz</div>
    <div class="section_content small">
      <div class="post_comments_count">
        <a href="<?php the_permalink() ?>#disqus_thread">Comments</a>
      </div>
      <div class="post_delicious">
        <span class="md5hash"><?php echo md5(get_permalink()); ?></span>
        <a href="http://del.icio.us/post?v=4&amp;noui&amp;jump=close&amp;url=<?php the_permalink() ?>&amp;title=<?php echo urlencode(the_title('','',FALSE)) ?>" target="_blank">Del.icio.us</a>
      </div>
      <div class="post_digg">
        <script type="text/javascript">
          digg_url      = "<?php the_permalink() ?>";
          digg_skin     = "compact";
          digg_window   = "new";
          digg_bgcolor  = "#fefefe";
        </script>
        <script src="http://digg.com/tools/diggthis.js" type="text/javascript"></script>
      </div>
    </div>
  </div>

  <div class="post_section">

    <div class="section_label post small">Post</div>

    <?php if ( in_category(21) && !is_single() ): ?>

      <div class="post_entry">
        <?php

          $attachments = get_children(array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order'));
          if ( !is_array($attachments) ) continue;
          $count      = count($attachments);
          $attachment = array_shift($attachments);

        ?>
        <p>
          <a href="<?php the_permalink() ?>" class="gallery_preview">
            <?php echo wp_get_attachment_image($attachment->ID); ?>
          </a>
        </p>
          <?php the_excerpt() ?>
        <p>
          This album contains <strong><?php echo $count ?> photos</strong>. <a href="<?php the_permalink() ?>">Browse &raquo;</a>
        </p>
      </div>

    <?php else : ?>
      <div class="post_entry"><?php the_content('[+]'); ?></div>
    <?php endif; ?>

  </div>

  <div class="post_section">
    <div class="section_label tags small">Tags</div>
    <div class="section_content small"><?php the_category(' &bull; '); ?></div>
  </div>

  <div class="post_section">
    <div class="section_label next small">Next</div>
    <div class="section_content small">
      <div class="post_addthis">
        <!-- ADDTHIS BUTTON -->
      </div>
      <div class="post_subscribe">
        <!-- RSS Link -->
      </div>
    </div>
  </div>

  <!--
    <?php trackback_rdf(); ?>
  -->

</div> <!-- End Post Content -->