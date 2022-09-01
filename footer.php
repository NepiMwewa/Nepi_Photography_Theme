<footer class="footer-content">

  <nav class="site-nav">
    <h3>About</h3>
    <?php
      $args = array(
        'theme_location' => 'footer'
      );
    ?>

    <?php wp_nav_menu($args); ?>
  </nav>
  <p> &copy; <?php echo date('Y');?> <?php bloginfo('name'); ?> | Alexander Harmon</p>
</footer>

<?php wp_footer(); ?>
</body>
</html>
