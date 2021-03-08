<section class="container p-rel mt-5">
  <div class="services-description">
    <div class="description-item">
      <h1 class="title-1">Vitrine</h1>
      <h3 class="subtitle-1">de Tecnologia</h3>
      <!-- <p class="text margin-left">
        Acesse nosso Portfólio de patentes, softwares e outros ativos e
        <b>INOVE</b> na sua empresa.
      </p> -->
      <p class="text margin-left">
        <?php echo get_theme_mod('vitrine_tecnologia',""); ?>
      </p>
      <a class="btn-blue" href="<?php echo get_theme_mod('vitrine_link',"");?>" >Saber Mais</a>
    </div>
    <div class="description-item desktop">
      <div id="desktop-animado" class="animated-desktop">

		  <!-- wp-content/themes/AginovTema/img/data.html -->
      </div>
		<script>
      $(function(){
      $("#desktop-animado").load(baseurl+"data.html");
      });
    </script>
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
        <p class="text margin-right  align-r">
          <?php echo get_theme_mod('ecossistema_text',""); ?>
        </p>
      </div>
      <a href="<?php echo get_theme_mod('ecossistema_link'); ?>" class="btn-blue float-r">Saber Mais</a>
    </div>
  </div>
  <img class="img-bg vitrine-circle" src="<?php bloginfo('template_url'); ?>/img/circles-line.svg" alt="">
  <img class="img-bg vitrine-circle2" src="<?php bloginfo('template_url'); ?>/img/circles-line.svg" alt="">
  <img class="img-bg vitrine-square" src="<?php bloginfo('template_url'); ?>/img/square-divided.svg" alt="">
</section>