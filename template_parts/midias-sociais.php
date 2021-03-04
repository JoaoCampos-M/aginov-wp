<section class="container midias-noticias p-rel">
  <h2 class="principal-title-1">AGINOV</h2>
  <p class="caption-1">Nas mídias Sociais</p>
  <div class="cards-midias-sociais">
    <div class="card-ms-item">
      <p class="card-ms-titulo">
        <strong> Redes Sociais</strong> Siga AGINOV
      </p>
      <div class="social-icons">
        <div class="social-toggle">
          <img class="tg-face" src="<?php bloginfo('template_url'); ?>/img/facebook.svg" alt="Página do Facebook" />
        </div>
        <div class="social-toggle">
          <img src="<?php bloginfo('template_url'); ?>/img/instagram.svg" alt="Instagram" />
        </div>
        <div class="social-toggle">
          <img src="<?php bloginfo('template_url'); ?>/img/twitter.svg" alt="" />
        </div>
      </div>
      <div class="social-controls">
        <div class="sc-item">
          <label class="switch">
            <input class="check-face" type="checkbox" checked>
            <span class="slider round sl-face"></span>
          </label>
        </div>
        <div class="sc-item">
          <label class="switch">
            <input class="check-insta" type="checkbox">
            <span class="slider round sl-insta"></span>
          </label>
        </div>
        <div class="sc-item">
          <label class="switch">
            <input class="check-twit" type="checkbox">
            <span class="slider round sl-twit"></span>
          </label>
        </div>
      </div>
      <div class="card-ms-body check-content-face d-block ">
        <?php
          $my_args = array(
            'category_name'=>'facebook-feed',
            'posts_per_page' => 1,
          );
          $my_query = new WP_Query($my_args);
          ?>
          <?php if($my_query->have_posts()): $my_query->the_post(); ?>
          <?php  the_content();?>
          <?php endif;
          wp_reset_query();
        ?>
        <a class="btn-saibamais">Saiba Mais</a>
      </div>
      <div class="card-ms-body check-content-insta d-none">
        <a class="midia-button" href="" target="_blank">
          <img src="http://www2.caceres.mt.gov.br/wp-content/themes/prefeitura/images/Social/instagram.png" alt="">
          <p>Instagram</p>
        </a>
        <!-- <img src="<?php bloginfo('template_url'); ?>/img/instagram.svg" /> -->
        <?php
            $my_args = array(
              'category_name' => 'instagram-feed',
              'post_per_page' => 1,
            );
            $my_query =new WP_Query($my_args);
            ?>

        <?php if($my_query->have_posts()): $my_query->the_post();?>

        <?php the_content(); ?>
        <?php endif; ?>
        <?php wp_reset_query();?>
        <a class="btn-saibamais">Saiba Mais</a>
      </div>
      <div class="card-ms-body check-content-twit d-none">
       <a class="twitter-timeline" data-height="380" href="https://twitter.com/UnematOficial?ref_src=twsrc%5Etfw">Tweets by UnematOficial</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        <a class="btn-saibamais">Saiba Mais</a>
      </div>
    </div>
    <div class="card-ms-item">
      <p class="card-ms-titulo">
        <strong>AGINOV no Youtube</strong> Conheça nosso canal!
      </p>
      <div class="social-icons">
        <img src="<?php bloginfo('template_url'); ?>/img/youtube.svg" alt="" />
      </div>
      <div class="card-ms-body">

        <?php
          $my_args = array(
            'category_name'=>'youtube-feed',
            'posts_per_page' => 1,
          );
          $my_query = new WP_Query($my_args);
          ?>
          <?php if($my_query->have_posts()): $my_query->the_post(); ?>
          <?php  the_content();?>
          <?php endif;
          wp_reset_query();
        ?>
        <a class="btn-saibamais">Saiba Mais</a>
      </div>
    </div>
  </div>
  <img class="img-bg midias-circle" src="<?php bloginfo('template_url'); ?>/img/circles-complete.svg" alt="">
  <img class="img-bg midias-circle2" src="<?php bloginfo('template_url'); ?>/img/circles-line.svg" alt="">

</section>
<img class="bg-contatos img-bg" src="<?php bloginfo('template_url'); ?>/img/background-midias2.svg" alt="">
<img class="bg-contatos img-bg temp1" src="<?php bloginfo('template_url'); ?>/img/background-midias2.svg" alt="">
<img class="bg-contatos img-bg" src="<?php bloginfo('template_url'); ?>/img/background-midias.svg" alt="">
<img class="bg-contatos img-bg temp5" src="<?php bloginfo('template_url'); ?>/img/background-midias3.svg" alt="">