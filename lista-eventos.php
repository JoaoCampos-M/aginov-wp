<?php
    /*template name: Eventos (Ver todos)*/
?>
<?php
    get_header();
    include('menu.php');

    if(have_posts()): while(have_posts()): the_post();
?>
<div>

  <section class="sc-cardsEvents container">
    <h1 class="info-principal-title">Todos os Eventos</h1>
    <div class="event-list-page mg-1 order-desk">
      <div class="cards-lives-groups">
        <?php
		  		wp_reset_query();
				  wp_reset_postdata();
            $my_args = array(
            	'post_type' => 'eventos',
					'post_per_page' => 3,
					'nopaging' => false
            );
            $my_query =new WP_Query($my_args);
          ?>
        <?php
            if($my_query->have_posts()):while( $my_query->have_posts()): $my_query->the_post();?>
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

        <?php endwhile;endif;  ?>
        <?php wp_reset_query()?>
      </div>
      <a onclick="postsContagem();" class="btn-blue float-r">Ver Mais</a>
    </div>
  </section>
  <img class="bg-contatos-prop img-bg" src="<?php bloginfo('template_url'); ?>/img/background-midias2.svg" alt="">
  <img class="bg-contatos-prop img-bg temp1" src="<?php bloginfo('template_url'); ?>/img/background-midias2.svg" alt="">
  <img class="bg-contatos-prop img-bg" src="<?php bloginfo('template_url'); ?>/img/background-midias.svg" alt="">
  <img class="bg-contatos-prop img-bg temp5" src="<?php bloginfo('template_url'); ?>/img/background-midias3.svg" alt="">
</div>
<?php
    endwhile; endif
?>
<?php include("template_parts/transparencia-publica.php");?>
<script src="<?php bloginfo('template_url'); ?>/js/cardeventos.js"></script>
<script>
	$.ajax({
		type: 'POST',
		url: '<?php echo admin_url('admin-ajax.php');?>',
		dataType: "json", // add data type
		data: {
			action: 'get_ajax_posts'
		},
		success: function(response) {
			console.log('response');
			console.log(response);
			allEvents = response;
			eventsLength = response.length;
			postsContagem();

		}
	});

</script>
<?php
    get_footer();
?>