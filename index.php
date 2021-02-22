<?php require_once('banner-index.php'); ?>

<?php 
  $my_args = array(
    'post_type' => 'index',
    'post_per_page' => 1,
  );
  $my_query =new WP_Query($my_args);  
  if($my_query->have_posts()):while( $my_query->have_posts() ): $my_query->the_post(); 
?>
<section class="container p-rel">
  <div class="services-description">
    <div class="description-item">
      <h1 class="title-1">Vitrine</h1>
      <h3 class="subtitle-1">de Tecnologia</h3>
      <!-- <p class="text margin-left">
        Acesse nosso Portfólio de patentes, softwares e outros ativos e
        <b>INOVE</b> na sua empresa.
      </p> -->
      <p class="text margin-left">
        <?php echo get_post_meta($post->ID ,'vitrine_de_tecnologia', true) ?>
      </p>
      <button type="submit" class="btn-blue">Saber Mais</button>
    </div>
    <div class="description-item desktop">
      <div class="animated-desktop">
        <?php require('img/data.html');?>
      </div>
    </div>
  </div>
  <div class="services-description">
    <div class="description-item desktop">
      <img class="img-description" src="<?php bloginfo('template_url'); ?>/img/img-computer-ecossistema.svg" alt="" />
    </div>
    <div class="description-item">
      <h1 class="title-1 align-r">Ecossistema</h1>
      <h3 class="subtitle-1 f-end">de Inovação</h3>
      <div class="d-flex f-end">
        <!-- <p class="text margin-right  text-align">
          A UNEMAT tem, ao longo dos anos, apoiado ações e fomentado a cultura
          empreendedora e de inovação na sua comunidade universitária, o
          promovendo inspirar ambientes de inovação que se comunicam e
          interagem como um <b>Ecossistema</b>
        </p> -->
        <p class="text margin-right  text-align">
          <?php echo get_post_meta($post->ID,'ecossistema_de_inovacao', true); ?>
        </p>
      </div>
      <button type="submit" class="btn-blue float-r">Saber Mais</button>
    </div>
  </div>
  <img class="img-bg vitrine-circle" src="<?php bloginfo('template_url'); ?>/img/circles-line.svg" alt="">
  <img class="img-bg vitrine-circle2" src="<?php bloginfo('template_url'); ?>/img/circles-line.svg" alt="">
  <img class="img-bg vitrine-square" src="<?php bloginfo('template_url'); ?>/img/square-divided.svg" alt="">
</section>
<section class="prop-intelectual container p-rel">
  <!-- <img src="/img/background-propriedade-2.svg" class="prop-int-bg desktop temp2"> -->
  <img src="<?php bloginfo('template_url'); ?>/img/background-propriedade-3.svg" class="prop-int-bg desktop temp6"
    style="z-index: -2;">
  <img src="<?php bloginfo('template_url'); ?>/img/background-propriedade-2.svg" class="prop-int-bg desktop temp3">
  <img src="<?php bloginfo('template_url'); ?>/img/background-propriedade.svg" class="prop-int-bg desktop temp2">
  <div class="text-image">
    <div class="w-50">
      <h2 class="principal-title-2">Propriedade</h2>
      <p class="caption-2">Intelectual</p>
      <div class="text-container">
        <!-- <p class="txt-1">
          A Propriedade Intelectual indica a produção do intelecto nos
          segmentos industrial, científico, literário ou artístico. Assim
          algumas criações intelectuais poderão ter uma proteção definida
          por legislação.
        </p> -->
        <p class="txt-1">
          <?php echo get_post_meta($post->ID,'propriedade_intelectual',true); ?>
        </p>
      </div>
      <a class="btn-saber-mais-1" href="">Saber Mais</a>
    </div>

    <img class="desktop" src="<?php bloginfo('template_url'); ?>/img/img-computer-propriedade.svg" />
  </div>
  <?php endwhile;endif; ?>
  <?php wp_reset_query()?>
</section>
<section class="container p-rel">
  <div class="services-description">
    <div class="description-item mg-1 order-desk">
      <div class="cards-lives-groups">
        <?php 
            $my_args = array(
              'post_type' => 'events',
              'post_per_page' => 3,
            );
            $my_query =new WP_Query($my_args);          
            ?>

        <?php 
            if($my_query->have_posts()):while( $my_query->have_posts() ): $my_query->the_post();?>

        <div class="cards-lives">
          <div class="cards-info">
            <p class="cards-info-title"> <?php the_title()?> </p>
            <p class="cards-info-subtitle"><?php echo get_post_meta( $post->ID, 'subtitulo',true) ?></p>
            <div class="row-1">
              <div class="row-2">
                <img src="<?php bloginfo('template_url'); ?>/img/icon-calendario.svg" alt="">
                <p class="cards-info-text"><?php echo get_post_meta($post->ID, 'data', true);?></p>
              </div>
              <div class="row-2">
                <img src="<?php bloginfo('template_url'); ?>/img/icon-horario.svg" alt="">
                <p class="cards-info-text"><?php echo get_post_meta($post->ID, 'horario', true);?></p>
              </div>
            </div>
            <div class="row-1">
              <div class="row-2">
                <img src="<?php bloginfo('template_url'); ?>/img/icon-localizacao.svg" alt="">
                <p class="cards-info-text"><?php echo get_post_meta($post->ID, 'modalidade', true);?></p>
              </div>
              <div class="row-2">
                <img src="<?php bloginfo('template_url'); ?>/img/icon-informacao.svg" alt="">
                <p class="cards-info-text"><?php echo get_post_meta($post->ID, 'tipo', true);?></p>
              </div>
            </div>
          </div>
          <div class="cards-categoria">
            <p><?php echo get_post_meta($post->ID, 'tema', true);?></p>
          </div>
          <div class="cards-temas">
            <p class="cards-info-subtitle"><b>Tema:</b></p>
            <p class="cards-info-text"><?php the_content(); ?></p>
            <a href="<?php echo get_post_meta($post->ID, 'link', true);?>"> <button type="submit" class="btn-blue">Saiba
                Mais</button> </a>
            <div class="row-1">
              <div class="row-2">
              </div>
              <div class="row-2">
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/icon-internet.svg" alt=""></a>
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/icon-twitter.svg" alt=""></a>
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/icon-facebook.svg" alt=""></a>
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/icon-instagram.svg" alt=""></a>
              </div>
            </div>
          </div>
        </div>

        <?php endwhile;endif; ?>
        <?php wp_reset_query()?>
      </div>
    </div>
    <div class="description-item pad-top-10 order-moba">
      <h1 class="title-1 align-r">Eventos e Cursos</h1>
      <h3 class="subtitle-1 f-end">em destaques</h3>
      <div class="d-flex f-end desktop">
        <p class="text margin-right align-r">
          Conheça e participe dos proximos Eventos e cursos!
          <br><br>
          <b>Veja todos os curso e Eventos</b>
        </p>
      </div>

      <button type="submit" class="btn-blue float-r desktop">Saber Mais</button>
    </div>
  </div>
  <img class="img-bg events-calendar" src="<?php bloginfo('template_url'); ?>/img/calendar.svg" alt="">
  <img class="img-bg events-circle" src="<?php bloginfo('template_url'); ?>/img/circles-point.svg" alt="">
  <img class="img-bg events-hash1" src="<?php bloginfo('template_url'); ?>/img/hashtag.svg" alt="">
  <img class="img-bg events-hash2" src="<?php bloginfo('template_url'); ?>/img/hashtag.svg" alt="">
  <img class="img-bg events-spot" src="<?php bloginfo('template_url'); ?>/img/mancha.svg" alt="">
</section>
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
        <img src="<?php bloginfo('template_url'); ?>/img/facebook.svg" />
        <a class="btn-saibamais">Saiba Mais</a>
      </div>
      <div class="card-ms-body check-content-insta d-none">
        <a class="midia-button" href="https://www.instagram.com/pref_caceres" target="_blank">
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
        <img src="<?php bloginfo('template_url'); ?>/img/twitter.svg" />
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

<section class="container p-rel mg-t-20">
  <div class="services-description">
    <div class="description-item text-align-right desktop">
      <h3 class="caption-2">Venha Conhecer a</h3>
      <h1 class="principal-title-2">AGINOV!</h1>
      <img class="img-mapa" src="<?php bloginfo('template_url'); ?>/img/img-mapa-mt.svg" alt="">
      <div class="map-indicator map-indicator-1">

      </div>
      <div class="map-preview map-preview-1 d-none">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.0298361322207!2d-57.68012932754182!3d-16.06394145374641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x939aff9cf7b2364f%3A0xf68936c5bf131a59!2sRisc%20-%20Centro%20de%20Inova%C3%A7%C3%A3o!5e0!3m2!1spt-BR!2sbr!4v1612469278638!5m2!1spt-BR!2sbr"
          frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
    <div class="description-item text-align-right">
      <h1 class="principal-title-2">Contato</h1>
      <h3 class="caption-2">Transparência Pública</h3>
      <div class="text-container">
        <p class="txt-1 margin-right-green">
          <strong class="text-1">Fale Conosco</strong>
          Agência de Inovação da Universidade do Estado de Mato Grosso
          <br> <br>
          Pró-Reitoria de Pesquisa e Pós-graduação - PRPPG<br>
          Av: Tancredo Neves, Nº 1095, Cavalhada III<br>
          Cep: 78200.000 Cáceres-MT<br>
          Telefones: +55 (65)3221-0040<br>
          Email: diretoria.nit@unemat.br<br>
          <br><br>
          Horário de expediente:<br>
          Matutino: 08h às 12h<br>
          Vespertino: 14h às 18h<br>
        </p>
      </div>
    </div>
  </div>
</section>
<?php get_footer()?>