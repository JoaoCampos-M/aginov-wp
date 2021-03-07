<?php /*Template name: Portifólio */ ?>
<?php get_header(); ?>
<?php include('banner-portifolio.php');?>
<section class="p-rel" >
  <img class="bg-header-cicle-1" src="<?php bloginfo('template_url'); ?>/img/circles-line.svg" />
  <img class="bg-header-square-1" src="<?php bloginfo('template_url'); ?>/img/square.svg" alt="" />
  <div class="cards-header f-warp">
    <div class="card-h-item mb-10">
      <p class="card-h-titulo">
        <strong> Vitrine </strong> de Tecnologia
      </p>
      <a class="btn-saibamais">Saiba Mais</a>
      <div class="card-h-body p-rel">
        <?php include('img/data.html');?>
      </div>
    </div>
    <div class="card-h-item mb-10">
      <p class="card-h-titulo">
        <strong> Alianças </strong> Estratégicas
      </p>
      <a class="btn-saibamais">Saiba Mais</a>
      <div class="card-h-body p-rel">
        <?php include('img/puzzle.html');?>
      </div>
    </div>
    <div class="card-h-item mb-10">
      <p class="card-h-titulo">
        <strong> Empreendedorismo </strong> e Logística
      </p>
      <a class="btn-saibamais">Saiba Mais</a>
      <div class="card-h-body p-rel">
        <img src="<?php bloginfo('template_url');?>/img/inventores.svg" />
      </div>
    </div>
    <div class="card-h-item">
      <p class="card-h-titulo">
        <strong> Empreendedorismo </strong> e Logística
      </p>
      <a class="btn-saibamais">Saiba Mais</a>
      <div class="card-h-body p-rel">
        <?php include('img/notebook.html');?>
      </div>
    </div>
  </div>
  <img src="<?php bloginfo('template_url'); ?>/img/background-portifolio.svg" class="prop-int-bg desktop temp3">
</section>
<?php get_footer();?>