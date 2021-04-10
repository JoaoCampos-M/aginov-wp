<?php /*template name: Propriedade Intelectual (Categoria 2)*/ ?>
<?php get_header(); ?>

<?php include('menu.php'); ?>
<div>
  <section class="section-info container d-flex">

    <div class="menu-info">
      <img class="desktop img-bn-portifolio" src="<?php bloginfo('template_url'); ?>/img/img-computer-propriedade.svg"
        alt="">

      <?php
		$my_args = array(
			'post_type'=>'propriedade',
			'category_name' => 'PropriedadeIntelectual Categoria 2',
			'posts_per_page' => 3
		);

		$my_query = new WP_Query($my_args);
		?>
      <?php if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>
      <!--
    <div class="item-menu-info i-selected">
      <strong class="text-legenda m-dados">Item Selecionado</strong>
      <p class="text-legenda m-dados">Descrição do item</p>
    </div>
    -->
      <a href="<?php the_permalink(); ?>" class="item-menu-info">
        <strong class="text-legenda m-dados"><?php the_title(); ?></strong>
        <!-- <p class="text-legenda m-dados">Descrição do item</p> -->
      </a>
      <?php endwhile;
		endif;
		wp_reset_query() ?>
      <?php
				$my_args = array(
					'post_type' => 'page',
					'pagename' => 'propriedade-intelectual'
				);
				$my_query =new WP_Query($my_args);
				$pId;
			?>
      <?php if($my_query->have_posts()):while( $my_query->have_posts()): $my_query->the_post();?>
      <?php $pId=get_the_ID();?>
      <?php  endwhile; endif; wp_reset_query();?>
      <div class="buttons-list">
        <a class="btn-menu" href="http://aginov.risc.lan/propriedade-intelectual/">Página 1</a>
        <?php
				$my_args = array(
					'post_type'  => 'page',
					'post_parent'=> $pId
				);
				$my_query =new WP_Query($my_args);
				$cont=1;
			?>
        <?php if($my_query->have_posts()):while( $my_query->have_posts()): $my_query->the_post();?>
        <?php $cont++;?>
        <a class="btn-menu" href="<?php the_permalink(); ?>">Página <?php echo $cont; ?></a>
        <?php endwhile; endif; wp_reset_query(); ?>
      </div>


    </div>

    <div class="info-content">
      <h1 class="info-principal-title">Propriedade Intelectual</h1>
      <?php
			$my_args = array(
				'post_type'=>'propriedade',
				'category_name' => 'PropriedadeIntelectual Categoria 2',
				'posts_per_page' => 1,
			);
			$my_query = new WP_Query($my_args);
		?>

      <?php if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>
      <div class="description-item">
        <a href="<?php the_permalink(); ?>">
          <h4 class="paragraph-title"><?php the_title(); ?></h4>
        </a>
        <div class="d-flex border-l m-tb-10">
          <div class="info-txt"><?php the_content(); ?> </div>
        </div>
      </div>
      <?php endwhile;
		endif; ?>
      <?php wp_reset_query(); ?>
  </section>
  <img class="bg-contatos-prop img-bg" src="<?php bloginfo('template_url'); ?>/img/background-midias2.svg" alt="">
  <img class="bg-contatos-prop img-bg temp1" src="<?php bloginfo('template_url'); ?>/img/background-midias2.svg" alt="">
  <img class="bg-contatos-prop img-bg" src="<?php bloginfo('template_url'); ?>/img/background-midias.svg" alt="">
  <img class="bg-contatos-prop img-bg temp5" src="<?php bloginfo('template_url'); ?>/img/background-midias3.svg" alt="">
</div>
<?php include("template_parts/transparencia-publica.php");?>

<?php get_footer() ?>