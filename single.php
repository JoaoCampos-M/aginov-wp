<?php /*template name: Propriedade Intelectual*/?>
<?php get_header();?>

<?php include('menu.php');?>


<section class="section-info container d-flex">

<div class="menu-info">
  <img class="desktop img-bn-portifolio" src="<?php bloginfo('template_url'); ?>/img/img-computer-propriedade.svg" alt="">

  <?php 
    $my_args = array(
    'post_type' => 'propriedade',
    'posts_per_page' => 4
  );

  $my_query =new WP_Query($my_args);
?>
  <?php if( $my_query->have_posts()) : while( $my_query->have_posts() ) : $my_query->the_post(); ?>    
    <!--
    <div class="item-menu-info i-selected">
      <strong class="text-legenda m-dados">Item Selecionado</strong>
      <p class="text-legenda m-dados">Descrição do item</p>
    </div>
    <div class="item-menu-info">
      <strong class="text-legenda m-dados">Item 2</strong>
      <p class="text-legenda m-dados">Descrição do item</p>
    </div>
    <div class="item-menu-info">
      <strong class="text-legenda m-dados">Item 3</strong>
      <p class="text-legenda m-dados">Descrição do item</p>
    </div>
    <div class="item-menu-info">
      <strong class="text-legenda m-dados">Item 4</strong>
      <p class="text-legenda m-dados">Descrição do item</p>
    </div>
    <div class="item-menu-info">
      <strong class="text-legenda m-dados">Item 5</strong>
      <p class="text-legenda m-dados">Descrição do item</p>
    </div>
    
    -->
    <a href="<?php the_permalink();?>" class="item-menu-info">
      <strong class="text-legenda m-dados"><?php the_title();?></strong>
      <!-- <p class="text-legenda m-dados">Descrição do item</p> -->
    </a>
    <?php endwhile; endif; wp_reset_query()?>
    <div class="buttons-list">
      <a class="btn-menu " href="">Item Menu</a>
      <a class="btn-menu-video" href="">Item Menu</a>
      <a class="btn-menu" href="">Item Menu</a>
    </div>
    
  </div>

  <div class="info-content">
  <h1 class="info-principal-title">Propriedade Intelectual</h1>

  <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<?php the_content(); ?>

<?php endwhile; endif; ?>
</section>

<?php get_footer()?>