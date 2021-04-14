<header>
  <div class="menu-icones desktop">
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
    <input type="text" value="<?php bloginfo('template_url'); ?>" id="brasaobloginfo" class="d-none">
    <div class="area-pesq">
      <div class="logo-vitrine">
        <img id="brasao" src="<?php bloginfo('template_url'); ?>/img/brasao-unemat.svg" alt=""
          onmouseover="trocaImage()" />
      </div>
    </div>
  </div>
  <div class="menu-icones-mobile">
    <div id="open" class="dropdown open-dropdown" onclick=" menu() ">
      <img class="btn-drop" src="<?php bloginfo('template_url'); ?>/img/menu-dropdown-open-2.svg" alt="">
    </div>

    <div id="close" class=" dropdown d-none close-dropdown">
      <img class="btn-drop" src="<?php bloginfo('template_url'); ?>/img/menu-dropdown-close.svg" onclick=" menu()"
        alt="">
      <div class="menu-list">

        <?php
				$options =  array(
					'items_wrap'        => '%3$s',
					'menu_class'        => false,
					'menu_id'           => false,
					'container'         => 'div',
					'container_class'   => 'opcao-list',
					'container_id'      => false,
					'walker' => new WP_Bootstrap_Navwalker(),
				);
				$menu = wp_nav_menu($options);
				echo strip_tags($menu, '');
    		?>
      </div>
      <img class="bg-dropdown" src="<?php bloginfo('template_url'); ?>/img/background-footer.svg" alt="">
    </div>
    <nav class="nav-mobile navbar-principal">
      <div class="logo-Aginov">
        <img src="<?php bloginfo('template_url'); ?>/img/logo-mobile.svg" alt="Logo Aginov" />
      </div>
    </nav>
  </div>
  <img class="bg-header-wave " src="<?php bloginfo('template_url'); ?>/img/background-header-2.svg" />
  <img class="bg-header-wave header-temp-1 zindex desktop"
    src="<?php bloginfo('template_url'); ?>/img/background-header.svg" />
  <img class="bg-header-wave zindex mr-03" src="<?php bloginfo('template_url'); ?>/img/background-header.svg" />
</header>