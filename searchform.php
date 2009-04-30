<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
  <div>
    <input id="s" name="s" type="text" value="<?php the_search_query(); ?>"/>
    <input id="search_submit" type="submit" value="Search" class="button" />
  </div>
</form>