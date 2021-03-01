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
      <div class="cards-header" >

        <div class="description-item">
      <h1 class="title-1">Portifólio</h1>
      <h3 class="subtitle-1">de Serviços</h3>
      <p class="text margin-left">
        Acesse nosso Portfólio de patentes, softwares e outros ativos e INOVE na sua empresa.</p>
      <button type="submit" class="btn-blue">Saber Mais</button>
    </div>
      <img class="" src="<?php bloginfo('template_url'); ?>/img/portifolio.svg"
      alt="">
      </div>
    </section>
    <img class="bg-header-wave-2 img-bg temp2 bt-0" src="<?php bloginfo('template_url'); ?>/img/portifolio-wave.svg"
      alt="">
    <img class="bg-header-wave-2 img-bg bt-0" src="<?php bloginfo('template_url'); ?>/img/portifolio-wave.svg" alt="">
    <img class="bg-header-wave-2 img-bg bt-0" src="<?php bloginfo('template_url'); ?>/img/portifolio-wave2.svg"
      alt="">
    <img class="bg-header-wave-2 img-bg temp1 bt-8" src="<?php bloginfo('template_url'); ?>/img/background-header3.svg"
      alt="">
  </div>
  