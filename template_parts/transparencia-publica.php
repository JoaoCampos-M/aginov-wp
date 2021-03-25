<section id="trasparencia" class="container p-rel mg-t-12 mb-10">
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
            <?php echo get_theme_mod('rua');?>, N° <?php echo get_theme_mod('numero'); ?>, <?php echo get_theme_mod('bairro'); ?><br>
            <?php //echo get_post_meta($post->ID, 'endereco',true );?>
            Cep: <?php echo get_theme_mod('cep');?> <?php echo get_theme_mod('cidade');?> <br>
            Telefones: <?php echo get_theme_mod( 'telefone');?><br>
            Email: <?php echo get_theme_mod('email');?><br>
            <br><br>
            Horário de expediente:<br>
            Matutino: 08h às 12h<br>
            Vespertino: 14h às 18h<br>
        </p>
      </div>
    </div>
  </div>
</section>