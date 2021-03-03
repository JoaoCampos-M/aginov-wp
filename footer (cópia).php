<div class="w-100 bg-claro border-top border-dark mt-5">
      <div class="container">
        <div class="row">
          <div class="col py-5 text-center">
            <h5><?php echo get_theme_mod('footer_title','Footer title Wordpress'); ?></h5>
            <p class="mb-0"><?php echo get_theme_mod('footer_text', 'Footer text Wordpress') ?> </p>
          </div>
        </div>
      </div>
    </div>

    <?php wp_footer()?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php bloginfo('template_url');?>/js/jquery.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/popper.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
  </body>
</html>