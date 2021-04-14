<section class="container p-rel">
  <div class="services-description">
    <div class="description-item mg-1 order-desk">
      <div class="cards-lives-groups">
        <?php
		  		wp_reset_query();
				  wp_reset_postdata();
				  $cont=0;
            $my_args = array(
            	'post_type' => 'events',
					'post_per_page' => 3,
					'order' => 'DESC'
            );
            $my_query =new WP_Query($my_args);
            ?>

        <?php
            if($my_query->have_posts()):while( $my_query->have_posts() && $cont<3 ): $my_query->the_post();?>
        <div class="cards-lives">
          <div class="cards-info">
            <p class="cards-info-title d-flex fd-col j-cent"> <?php the_title();?> </p>
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
            <p class="cards-info-subtitle"><b>Descrição:</b></p>
            <div class="cards-info-text"><?php the_excerpt(); ?></div>
            <a href="<?php the_permalink();?>"> <button type="submit" class="btn-blue">Saiba
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

        <?php $cont++;  endwhile;endif;  ?>
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
  <img class="img-bg events-circle circle2" src="<?php bloginfo('template_url'); ?>/img/circles-point.svg" alt="">
  <img class="img-bg events-hash1 hash1" src="<?php bloginfo('template_url'); ?>/img/hashtag.svg" alt="">
  <img class="img-bg events-hash2 hash2" src="<?php bloginfo('template_url'); ?>/img/hashtag.svg" alt="">
  <img class="img-bg events-spot" src="<?php bloginfo('template_url'); ?>/img/mancha.svg" alt="">
</section>