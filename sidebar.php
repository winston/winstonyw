<div id="sidebar">

  <?php   /* Widgetized sidebar, if you have the plugin installed. */
    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) :
  ?>

  <div class="module">
    <div class="module_header">
      <h4>About</h4>
    </div>
    <div class="module_content">
      <img class="about" src="<?php bloginfo('template_directory'); ?>/images/me.jpg" alt="My Picture"/>
      <h5>Name</h5>
      <p>
        Description <a href="/about">[+]</a>
      </p>
    </div> <!-- End Module Content -->
  </div> <!-- End Module -->

  <div class="module">
    <div class="module_header">
      <h4>Subscribe To Blog Updates</h4>
    </div>
    <div class="module_content">
      <ul class="module_list">
        <li>
          <a class="rss" href="">Subscribe via RSS Feed</a>
          <!-- Feed Burner Chicklet -->
          <!-- ><a href="http://feeds.feedburner.com/winstonyw"><img src="http://feeds.feedburner.com/~fc/winstonyw?bg=f97d7c&amp;fg=333333&amp;anim=0" height="26" width="88" style="border:0" alt="" /></a> -->
        </li>
        <li>
          <!-- Feed Burner Subscribe By Email Form -->
          <!--
          <form action="http://www.feedburner.com/fb/a/emailverify" method="post" target="popupwindow" onsubmit="window.open('http://www.feedburner.com/fb/a/emailverifySubmit?feedId=2082430', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
            <label class="rss_label" for="email">Subscribe via Email</label>
            <input type="hidden" name="url"   value="http://feeds.feedburner.com/~e?ffid=2082430" />
            <input type="hidden" name="title" value="WinstonYW" />
            <input type="hidden" name="loc"   value="en_US"/>
            <input type="text"   name="email" value="Enter your Email Address" id="email" />
            <input type="submit" value="Submit"/>
          </form>
          -->
        </li>
      </ul>
    </div> <!-- End Module Content -->
  </div> <!-- End Module -->

  <div class="module">
    <div class="module_header">
      <h4>Archives</h4>
    </div>
    <div class="module_content">
      <ul class="module_list">
        <li>
          <label for="archive_dropdown">Browse by Month</label>
          <select id="archive_dropdown" name="archive_dropdown">
            <option value="">Month</option>
            <?php wp_get_archives('type=monthly&format=option&show_post_count=1'); ?>
          </select>
        </li>
        <li>
          <label>Search Archives</label>
          <!-- Search Box Code from Google CSE -->
          <!-- <?php include (TEMPLATEPATH . '/searchform.php'); ?> -->
        </li>
      </ul>
    </div> <!-- End Module Content -->
  </div> <!-- End Module -->

  <div class="module">
    <div class="module_header">
      <h4>Adsense</h4>
    </div>
    <div class="module_content">
      <!-- Adsense Code -->
    </div> <!-- End Module Content -->
  </div> <!-- End Module -->

  <?php endif; ?>


</div> <!-- End Side Bar -->