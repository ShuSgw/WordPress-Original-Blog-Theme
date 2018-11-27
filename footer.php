      <footer>
        <div class="container">
          <?php wp_nav_menu( array(
                'theme_location' => 'footer-nav',
          ) ); ?>
            <p>Copyright©<?php bloginfo( 'name' ); ?>All Rights Reserved.</p>
        </div>
      </footer>
      <?php wp_footer(); ?>
    </div>
  </body>
</html>