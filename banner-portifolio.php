<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
  <meta <?php bloginfo('charset'); ?> />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/header.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animacoes.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/footer.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/cards.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/global-styles.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fonts.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/section.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/map.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/midia-luiz.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/midia-joao.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/toggle.css" />

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
  <?php wp_head();?>
</head>

<body>
  <div class="baner-inicio">
    <?php get_header(); ?>
    <input id="templateUrl" class="d-none" type="text" value="<?php bloginfo('template_url')?>">
    <section>
      <img class="bg-header-cicle-1" src="<?php bloginfo('template_url'); ?>/img/circles-line.svg" />
      <img class="bg-header-square-1" src="<?php bloginfo('template_url'); ?>/img/square.svg" alt="" />
      <div class="cards-header">
        <div class="card-h-item">
          <p class="card-h-titulo">
            <strong> Transferência </strong> de Tecnologia
          </p>
          <a class="btn-saibamais">Saiba Mais</a>
          <div class="card-h-body p-rel">
           <?php require('img/pc-card-inicial.html');?>
          </div>
        </div>
        <div class="card-h-item">
          <p class="card-h-titulo">
            <strong> Alianças </strong> Estratégicas
          </p>
          <a class="btn-saibamais">Saiba Mais</a>
          <div class="card-h-body p-rel" >
            
            <img src="<?php bloginfo('template_url'); ?>/img/img-computer-vitrine.svg" alt="">
          </div>
        </div>
        <div class="card-h-item">
          <p class="card-h-titulo">
            <strong> Empreendedorismo </strong> e Logística
          </p>
          <a class="btn-saibamais">Saiba Mais</a>
          <div class="card-h-body p-rel">
            <img style="z-index:2;" src="<?php bloginfo('template_url'); ?>/img/foguete.gif" alt="" />
          </div>
        </div>
      </div>
    </section>
    <img class="bg-header-wave-2 img-bg temp2" src="<?php bloginfo('template_url'); ?>/img/background-header2.svg"
      alt="">
    <img class="bg-header-wave-2 img-bg" src="<?php bloginfo('template_url'); ?>/img/background-header2.svg" alt="">
    <img class="bg-header-wave-2 img-bg" src="<?php bloginfo('template_url'); ?>/img/background-header1.svg"
      alt="">
    <img class="bg-header-wave-2 img-bg temp1" src="<?php bloginfo('template_url'); ?>/img/background-header3.svg"
      alt="">
  </div>