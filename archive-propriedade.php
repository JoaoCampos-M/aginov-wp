<?php /*Template Name: propriedade 
Template Post Type: PropriedadePost*/?>
<?php get_header();?>

<?php include('menu.php');?>
<section class="section-info container d-flex">
<div class="menu-info">
  <img class="desktop img-bn-portifolio" src="<?php bloginfo('template_url'); ?>/img/img-computer-propriedade.svg" alt="">

    <div class="buttons-list">
      <a class="btn-menu " href="">Item Menu</a>
      <a class="btn-menu-video" href="">Item Menu</a>
      <a class="btn-menu" href="">Item Menu</a>
    </div>
  </div>
  <div class="info-content">
  <h1 class="info-principal-title">Propriedade Intelectual</h1>

  <?php if(have_posts()) : the_post(); ?>
  <div class="description-item">
    <h4 class="paragraph-title"><?php the_title();?></h4>
      <div class="d-flex border-l m-tb-10">
        <div class="info-txt">
         <?php the_content();?> </div>
      </div>      
  </div>

<?php endif; ?>
</section>

<?php get_footer()?>