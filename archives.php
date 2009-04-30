<?php /* Template Name: Archives */ ?>
<?php get_header(); ?>

  <div id="content">

    <h2>Archives by Month:</h2>
      <ul>
        <?php wp_get_archives('type=monthly'); ?>
      </ul>

    <h2>Archives by Categories:</h2>
      <ul>
         <?php wp_list_categories(); ?>
      </ul>

  </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>