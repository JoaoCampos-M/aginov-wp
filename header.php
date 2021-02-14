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
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/toggle.css"/>
  
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
  <?php wp_head();?>
</head>

<body>
<div class="baner-inicio">
    <header>
      <div class="menu-icones">
        <div class="logo-Aginov">
          <img src="<?php bloginfo('template_url'); ?>/img/logo-aginov-desk.svg" alt="" />
        </div>
        
        <?php      
       $options =  array(
    'items_wrap'        => '%3$s', 
    
    'menu_class'        => false, 
    'menu_id'           => false,
    'container'         => 'div',
    'container_class'   => 'navbar-principal',
    'container_id'      => false,
    'walker' => new WP_Bootstrap_Navwalker(),
);

$menu = wp_nav_menu($options);

echo strip_tags($menu, '');
        ?>
        <!-- <nav class="navbar-principal">
          <div class="navbar-item">
            <p class="inicio-op"> Início</p>
            <div class="barra-navbar"></div>
            <ul class="inicio d-none">
              <li>A agencia</li>
              <li>Empresa</li>
              <li>Teste</li>
              <li>menu1</li>
            </ul>
          </div>
          <div class="navbar-item">
            <p class="menu2-op">Portfólio</p>
            <div class="barra-navbar"></div>
            <ul class="menu2 d-none">
              <li>menu2</li>
              <li>menu2</li>
              <li>menu2</li>
              <li>menu2</li>
            </ul>
          </div>
          <div class="navbar-item">
            <p class="menu3-op">Parcerias</p>
            <div class="barra-navbar"></div>
            <ul class="menu3 d-none">
              <li>menu3</li>
              <li>menu3</li>
              <li>menu3</li>
              <li>menu3</li>
            </ul>
          </div>
          <div class="navbar-item">
            <p class="empreend-op">Empreendedorismo</p>
            <div class="barra-navbar"></div>
            <ul class="empreend d-none">
              <li>Cursos e Eventos</li>
              <li>Empresas Júnior</li>
              <li>Incubadoras da Unemat</li>
              <li>Ecossistema de inovação</li>
              <li>Disciplinas de Empreendedorismo</li>
            </ul>
          </div>
          <div class="navbar-item">
            <p class="contato-op">Contato</p>
            <div class="barra-navbar"></div>
            <ul class="contato d-none">
              <li>menu4</li>
              <li>menu4</li>
              <li>menu4</li>
              <li>menu4</li>
            </ul>
          </div>
        </nav> -->
        <div class="area-pesq">
          <div class="logo-vitrine">
            <img id="brasao" src="<?php bloginfo('template_url'); ?>/img/brasao-unemat.svg" alt=""
              onmouseover="trocaImage()" />
          </div>
          <div>
            <div class="search-forms">
              <div class="pesquisa-img">
                <img class="search-button-img" src="<?php bloginfo('template_url'); ?>/img/lupa-branca.svg"
                  id="pesquisa-img" onclick="opensearch()" alt="" srcset="" />
              </div>
              <form class="pesquisa d-none" id="pesquisa" action="" method="post">
                <div class="barra-pesquisa">
                  <input type="search" class="search-bar" />
                  <button class="search-button" type="submit" value="">
                    <img class="search-button-img" src="<?php bloginfo('template_url'); ?>/img/lupa-azul.svg" alt=""
                      onclick="opensearch()" />
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="menu-icones-mobile">
        <div id="open" class="dropdown open-dropdown" onclick=" menu() ">
          <img class="btn-drop" src="<?php bloginfo('template_url'); ?>/img/menu-dropdown-open.svg" alt="">
        </div>

        <div id="close" class=" dropdown d-none close-dropdown">
          <img class="btn-drop" src="<?php bloginfo('template_url'); ?>/img/menu-dropdown-close.svg" onclick=" menu()"
            alt="">
          <div class="menu-list">
            <ul class="opcao-list">
              <li class="elements-list"><a class="item-menu-color" id="menu-drop-1" href="#">
                  <p class="iten-list-option">Inicio</p>
                </a>
                <ul class="list-item-menu d-none" id="submenu-drop-1">
                  <li class="item-menu-drop"><a href="#" class="item-menu-color">menu</a></li>
                  <li class="item-menu-drop"><a href="#" class="item-menu-color">menu</a></li>
                  <li class="item-menu-drop"><a href="#" class="item-menu-color">menu</a></li>
                  <li class="item-menu-drop"><a href="#" class="item-menu-color">menu</a></li>
                </ul>
              </li>
              <li class="elements-list"><a class="item-menu-color" id="menu-drop-2" href="#">
                  <p class="iten-list-option">Portfólio</p>
                </a>
                <ul class="list-item-menu d-none" id="submenu-drop-2">
                  <li class="item-menu-drop"><a href="#" class="item-menu-color">menu</a></li>
                  <li class="item-menu-drop"><a href="#" class="item-menu-color">menu</a></li>
                  <li class="item-menu-drop"><a href="#" class="item-menu-color">menu</a></li>
                  <li class="item-menu-drop"><a href="#" class="item-menu-color">menu</a></li>
                </ul>
              </li>
              <li class="elements-list"><a class="item-menu-color" id="menu-drop-3" href="#">
                  <p class="iten-list-option">Parcerias</p>
                </a>
                <ul class="list-item-menu d-none" id="submenu-drop-3">
                  <li class="item-menu-drop"><a href="#" class="item-menu-color">menu</a></li>
                  <li class="item-menu-drop"><a href="#" class="item-menu-color">menu</a></li>
                  <li class="item-menu-drop"><a href="#" class="item-menu-color">menu</a></li>
                  <li class="item-menu-drop"><a href="#" class="item-menu-color">menu</a></li>
                </ul>
              </li>
              <li class="elements-list"><a class="item-menu-color" id="menu-drop-4" href="#">
                  <p class="iten-list-option">Empreendedorismo</p>
                </a>
                <ul class="list-item-menu d-none" id="submenu-drop-4">
                  <li class="item-menu-drop"><a href="#" class="item-menu-color">menu</a></li>
                  <li class="item-menu-drop"><a href="#" class="item-menu-color">menu</a></li>
                  <li class="item-menu-drop"><a href="#" class="item-menu-color">menu</a></li>
                  <li class="item-menu-drop"><a href="#" class="item-menu-color">menu</a></li>
                </ul>
              </li>
              <li class="elements-list"><a class="item-menu-color" id="menu-drop-5" href="#">
                  <p class="iten-list-option">Contato</p>
                </a>
                <ul class="list-item-menu d-none" id="submenu-drop-5">
                  <li class="item-menu-drop"><a href="#" class="item-menu-color">menu</a></li>
                  <li class="item-menu-drop"><a href="#" class="item-menu-color">menu</a></li>
                  <li class="item-menu-drop"><a href="#" class="item-menu-color">menu</a></li>
                  <li class="item-menu-drop"><a href="#" class="item-menu-color">menu</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <img class="bg-dropdown" src="<?php bloginfo('template_url'); ?>/img/background-footer.svg" alt="">
        </div>
        <nav class="nav-mobile navbar-principal">
          <div class="logo-Aginov">
            <img src="<?php bloginfo('template_url'); ?>/img/logo-aginov-mobi.svg" alt="" />
          </div>
          <form class="pesquisa " id="pesquisa" action="" method="post">
            <div class="barra-pesquisa">
              <input type="search" class="search-bar" />
              <button class="search-button" type="submit" value="">
                <img class="search-button-img" src="<?php bloginfo('template_url'); ?>/img/lupa-azul.svg" alt=""
                  onclick="opensearch()" />
              </button>
            </div>
          </form>
        </nav>
      </div>
      <img class="bg-header-wave " src="<?php bloginfo('template_url'); ?>/img/background-header-2.svg" />
      <img class="bg-header-wave header-temp-1 zindex"
        src="<?php bloginfo('template_url'); ?>/img/background-header.svg" />
      <img class="bg-header-wave zindex mr-03" src="<?php bloginfo('template_url'); ?>/img/background-header.svg" />

    </header>
    <section>
      <img class="bg-header-cicle-1" src="<?php bloginfo('template_url'); ?>/img/circles-line.svg" />
      <img class="bg-header-square-1" src="<?php bloginfo('template_url'); ?>/img/square.svg" alt="" />
      <div class="cards-header">
        <div class="card-h-item">
          <p class="card-h-titulo">
            <strong> Transferência </strong> de Tecnologia
          </p>
          <a class="btn-saibamais">Saiba Mais</a>
          <div class="card-h-body">
            <img src="<?php bloginfo('template_url'); ?>/img/img-computer-vitrine.svg" alt="" />
          </div>
        </div>
        <div class="card-h-item">
          <p class="card-h-titulo">
            <strong> Alianças </strong> Estratégicas
          </p>
          <a class="btn-saibamais">Saiba Mais</a>
          <div class="card-h-body">
            <img src="<?php bloginfo('template_url'); ?>/img/img-computer-vitrine.svg" alt="" />
          </div>
        </div>
        <div class="card-h-item">
          <p class="card-h-titulo">
            <strong> Empreendedorismo </strong> e Logística
          </p>
          <a class="btn-saibamais">Saiba Mais</a>
          <div class="card-h-body">
            <img src="<?php bloginfo('template_url'); ?>/img/img-computer-vitrine.svg" alt="" />
          </div>
        </div>
      </div>
    </section>
    <img class="bg-header-wave-2 img-bg temp2" src="<?php bloginfo('template_url'); ?>/img/background-midias2.svg" alt="">
    <img class="bg-header-wave-2 img-bg" src="<?php bloginfo('template_url'); ?>/img/background-midias2.svg" alt="">
    <img class="bg-header-wave-2 img-bg temp3" src="<?php bloginfo('template_url'); ?>/img/background-midias.svg" alt="">
  <img class="bg-header-wave-2 img-bg temp1" src="<?php bloginfo('template_url'); ?>/img/background-midias3.svg" alt="">
  </div>