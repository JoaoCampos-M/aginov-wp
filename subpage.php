<?php /*template name: Subpage */?>
<?php get_header();?>

<?php include('banner-portifolio.php');  ?>

<section class="section-info container d-flex">
  <div class="menu-info">
    <img class="img-menu" src="<?php bloginfo('template_url') ?>/img/Image@2x.png" alt="">
    <div class="item-menu-info">
      <strong class="text-legenda m-dados">Situação</strong>
      <p class="text-legenda m-dados">Registo Concedido</p>
    </div>
    <div class="item-menu-info">
      <strong class="text-legenda m-dados">Número do Pedido no INPI</strong>
      <p class="text-legenda m-dados">BR 51 2017 000491-9</p>
    </div>
    <div class="item-menu-info">
      <strong class="text-legenda m-dados">Data do Registro</strong>
      <p class="text-legenda m-dados">15/05/2017</p>
    </div>
    <div class="item-menu-info">
      <strong class="text-legenda m-dados">Data da Concessão</strong>
      <p class="text-legenda m-dados">25/05/2017</p>
    </div>
    <div class="item-menu-info">
      <strong class="text-legenda m-dados">Cotitularidade:</strong>
      <p class="text-legenda m-dados">Não</p>
    </div>
    <div class="buttons-list">
      <a class="btn-menu " href="">Baixe o resumo execultivo</a>
      <a class="btn-menu-video" href=""> Veja o vídeo explicativo </a>
      <a class="btn-menu" href="">Entre em contato </a>
    </div>
    <div class="buttons-list">
      <a href="<?php echo home_url(); ?>" class="a-none"><img src="<?php bloginfo('template_url') ?>/img/btn-volta.svg"
          alt=""></a>
      <div class="comp-midias">
        <div class="icon-midias">
          <img src="<?php bloginfo('template_url');?>/img/compartilha-info.svg" alt="">
        </div>
        <div class="icon-midias">
          <img src="<?php bloginfo('template_url');?>/img/internet-info.svg" alt="">
          <img src="<?php bloginfo('template_url');?>/img/twitter-info.svg" alt="">
          <img src="<?php bloginfo('template_url');?>/img/facebook-info.svg" alt="">
          <img src="<?php bloginfo('template_url');?>/img/instagram-2016.svg" alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="info-content">
    <div class="description-item">
      <h1 class="info-principal-title">(Titulo do Software)</h1>
      <h4 class="paragraph-title"> Descrição</h4>
      <div class="d-flex border-l m-tb-10">
        <p class="info-txt">
          A UNEMAT tem, ao longo dos anos, apoiado ações e fomentado a cultura
          empreendedora e de inovação na sua comunidade universitária, o
          promovendo inspirar ambientes de inovação que se comunicam e
          interagem como um Ecossistema </p>
      </div>
    </div>
	 <div class="description-item">
      <h4 class="paragraph-title"> Criadores</h4>
      <div class="d-flex border-l m-tb-10">
        <p class="info-txt">
          A UNEMAT tem, ao longo dos anos, apoiado ações e fomentado a cultura
          empreendedora e de inovação na sua comunidade universitária, o
          promovendo inspirar ambientes de inovação que se comunicam e
          interagem como um Ecossistema </p>
      </div>
    </div>
	 <div class="description-item">
      <h4 class="paragraph-title"> Aplicação</h4>
      <div class="d-flex border-l m-tb-10">
        <p class="info-txt">
          A UNEMAT tem, ao longo dos anos, apoiado ações e fomentado a cultura
          empreendedora e de inovação na sua comunidade universitária, o
          promovendo inspirar ambientes de inovação que se comunicam e
          interagem como um Ecossistema </p>
      </div>
    </div>

  </div>
</section>

<?php get_footer()?>