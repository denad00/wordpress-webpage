<?php ?>
  </main>   <!-- .site-main -->

  <footer class="site-footer" id="site-footer">
    <div class="back-to-top">
      <a href=""><i class="fa-solid fa-arrow-up"></i>
      </a>
    </div>

    <div class="footer-logo">
      <?php the_custom_logo(); ?>
    </div>



    <div class="footer-navigation">
      <?php
      wp_nav_menu(array(
            'theme_location'      =>      'menu-socials',
            'container'           =>      'div',
            'container_class'     =>      'footer-menu-social',
            'link_before'         =>      '<span>',
            'link_after'          =>      '</span>'
          ))
        ?>
    </div>
  </footer>
</div>      <!-- .content-area -->
<?php wp_footer(); ?>
</body>
</html>