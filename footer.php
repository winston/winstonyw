    <div id="footer">

      <div id="categories">
        <h4>Categories</h4>
        <ul>
          <?php wp_list_categories('show_count=1&hierarchical=0&title_li='); ?>
        </ul>
      </div>

      <div id="connect">
        <h4>Connect</h4>
        <ul>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/images/friendfeed.png" alt="FriendFeed"/>
            <a href="">FriendFeed</a>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="Twitter"/>
            <a href="">Twitter</a>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="Linkedin"/>
            <a href="">Linkedin</a>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/images/facebook.gif" alt="Facebook"/>
            <a href="">Facebook</a>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/images/delicious.png" alt="Delicious"/>
            <a href="">Delicious</a>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/images/digg.png" alt="Digg"/>
            <a href="">Digg</a>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/images/googlereader.png" alt="GoogleReader"/>
            <a href="">GoogleReader</a>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/images/gmail.png" alt="Gmail"/>
            Mail
          </li>
        </ul>
      </div>

    </div>
    <div id="credits" class="small">
      <div class="left">Winston{YW} Copyright &copy; Forever</div>
      <div class="right">Powered By Wordpress, JQuery and A Lazy Search Monkey</div>
    </div>

    <?php wp_footer(); ?>

  </div> <!--main_content-->
</div> <!-- main_container -->

<!-- Disqus Code for Displaying Comments Count-->

<!-- Google Analytics -->

</body>
</html>