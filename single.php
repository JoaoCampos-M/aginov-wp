<?php get_header();?>

<?php include('menu.php');?>

<?php $t="oi"; $c=""; $cat="";?>

<section class="section-info container d-flex">
<?php if(have_posts()) : the_post(); ?>
	<?php
		$t = get_the_title();
		$c = get_the_content();
		$categories = get_the_category($pos->ID);
		$format = get_post_format( $post->ID );
		foreach ( $categories as $category ) {
			$cat = $category->cat_name;
		}
		echo $format;
	?>
<?php endif;?>
<div class="menu-info">
  <img class="desktop img-bn-portifolio" src="<?php bloginfo('template_url'); ?>/img/img-computer-propriedade.svg" alt="">

<?php
   $my_args = array(
		'category_name' => $cat,
		'posts_per_page' => 3
  	);
	$my_query =new WP_Query($my_args);
?>
  <?php if( $my_query->have_posts()) : while( $my_query->have_posts() ) : $my_query->the_post(); ?>
    <a href="<?php the_permalink();?>" class="item-menu-info">
      <strong class="text-legenda m-dados"><?php the_title();?></strong>
      <!-- <p class="text-legenda m-dados">Descrição do item</p> -->
    </a>
    <?php endwhile; endif;  wp_reset_query();?>
    <div class="buttons-list">
	 	<a class="btn-menu" href="http://localhost/aginov-wp/index.php/propriedade/">page1</a>
		<a class="btn-menu" href="http://localhost/aginov-wp/index.php/propriedade-intelectual/propriedadepage/">page2</a>
    </div>
  </div>
  <div class="info-content">
  <h1 class="info-principal-title">Propriedade Intelectual</h1>
  <div class="description-item">
			<a>
				<h4 class="paragraph-title"><?php echo $t; ?></h4>
			</a>
			<div class="d-flex border-l m-tb-10">
				<div class="info-txt"><?php echo $c;?></div>
			</div>
	</div>
</section>
<?php get_footer()?>