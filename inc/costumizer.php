<?php

  function customize_registro($customize){
  //Conteúdo
  $customize->add_panel( 'page_content', array(
		'capability'     => 'edit_theme_options',
   	'theme_supports' => '',
   	'title'          => 'Home',
   	'priority' => 10
  ));

  $customize -> add_section('header', array(
   	'title' => __('Vitrine de Tecnologia','PostsBlog'),
   	'description'=> sprintf(__('Textos das seções do site','PostsBlog')),
   	'priority' => 21,
   	'panel'=> 'page_content'
  ));
  $customize -> add_setting('vitrine_tecnologia',array(
    'default' => _x('vazio','PostsBlog'),
    'type' => 'theme_mod'

  ));
  $customize -> add_control('vitrine_tecnologia',array(
    'label' => __('Conteúdo da seção','BlogPost'),
    'section' => 'header',
    'priority' => 1,
    'type' => 'textarea'
  ));

  $customize -> add_setting('vitrine_link',array(
    'default' => _x('(link)','PostsBlog'),
    'type' => 'theme_mod'

  ));
  $customize -> add_control('vitrine_link',array(
    'label' => __('Link do botão','BlogPost'),
    'section' => 'header',
    'priority' => 1,
    'type' => 'text'
  ));


  //Ecossitema de Inovação
  $customize -> add_section('ecossistema', array(
    'title' => __('Ecossitema de Inovação','PostsBlog'),
    'description'=> sprintf(__('Textos das seções do site','PostsBlog')),
    'priority' => 21,
    'panel'=> 'page_content'

  ));
  $customize -> add_setting('ecossistema_text',array(
    'default' => _x('vazio','PostsBlog'),
    'type' => 'theme_mod'

  ));
  $customize -> add_control('ecossistema_text',array(
    'label' => __('Conteúdo da seção','BlogPost'),
    'section' => 'ecossistema',
    'priority' => 1,
    'type' => 'textarea'
  ));

  $customize -> add_setting('ecossistema_link',array(
    'default' => _x('(link)','PostsBlog'),
    'type' => 'theme_mod'

  ));
  $customize -> add_control('ecossistema_link',array(
    'label' => __('Link do botão','BlogPost'),
    'section' => 'ecossistema',
    'priority' => 1,
    'type' => 'text'
  ));

//Propriedade Intelectual
    $customize -> add_section('propriedade', array(
      'title' => __('Propriedade Intelectual','PostsBlog'),
      'description'=> sprintf(__('Textos das seções do site','PostsBlog')),
      'priority' => 21,
      'panel'=> 'page_content'

    ));
    $customize -> add_setting('propriedade_text',array(
      'default' => _x('vazio','PostsBlog'),
      'type' => 'theme_mod'

    ));
    $customize -> add_control('propriedade_text',array(
      'label' => __('Conteúdo da seção','BlogPost'),
      'section' => 'propriedade',
      'priority' => 1,
      'type' => 'textarea'
    ));

    $customize -> add_setting('propriedade_link',array(
      'default' => _x('(link)','PostsBlog'),
      'type' => 'theme_mod'

    ));
    $customize -> add_control('propriedade_link',array(
      'label' => __('Link do botão','BlogPost'),
      'section' => 'propriedade',
      'priority' => 1,
      'type' => 'text'
    ));

    $customize->add_panel( 'transparencia', array(
		'capability'     => 'edit_theme_options',
      'theme_supports' => '',
      'title'          => 'Rodapé',
   	'priority' => 10
    ));
    $customize -> add_section('endereco', array(
      'title' => __('Endereço','PostsBlog'),
      'description'=> sprintf(__('Endereço','PostsBlog')),
      'priority' => 21,
      'panel'=> 'transparencia'
    ));
    $customize -> add_setting('rua',array(
      'default' => _x('','PostsBlog'),
      'type' => 'theme_mod'

    ));
    $customize -> add_control('rua',array(
      'label' => __('Rua','BlogPost'),
      'section' => 'endereco',
      'priority' => 1,
      'type' => 'text'
    ));
    $customize -> add_setting('numero',array(
      'default' => _x('','PostsBlog'),
      'type' => 'theme_mod'

    ));
    $customize -> add_control('numero',array(
      'label' => __('Número','BlogPost'),
      'section' => 'endereco',
      'priority' => 1,
      'type' => 'text'
    ));
    $customize -> add_setting('bairro',array(
      'default' => _x('','PostsBlog'),
      'type' => 'theme_mod'

    ));
    $customize -> add_control('bairro',array(
      'label' => __('Bairro','BlogPost'),
      'section' => 'endereco',
      'priority' => 1,
      'type' => 'text'
    ));
    $customize -> add_setting('cep',array(
      'default' => _x('','PostsBlog'),
      'type' => 'theme_mod'

    ));
    $customize -> add_control('cep',array(
      'label' => __('CEP','BlogPost'),
      'section' => 'endereco',
      'priority' => 1,
      'type' => 'text'
    ));

    $customize -> add_setting('cidade',array(
      'default' => _x('','PostsBlog'),
      'type' => 'theme_mod'

    ));
    $customize -> add_control('cidade',array(
      'label' => __('Cidade','BlogPost'),
      'section' => 'endereco',
      'priority' => 1,
      'type' => 'text'
    ));

    $customize -> add_section('contato', array(
      'title' => __('Contato','PostsBlog'),
      'description'=> sprintf(__('Endereço','PostsBlog')),
      'priority' => 21,
      'panel'=> 'transparencia'
    ));
    $customize -> add_setting('telefone',array(
      'default' => _x('','PostsBlog'),
      'type' => 'theme_mod'

    ));
    $customize -> add_control('telefone',array(
      'label' => __('Telefone','BlogPost'),
      'section' => 'contato',
      'priority' => 1,
      'type' => 'text'
    ));
    $customize -> add_setting('email',array(
      'default' => _x('','PostsBlog'),
      'type' => 'theme_mod'

    ));
    $customize -> add_control('email',array(
      'label' => __('Email','BlogPost'),
      'section' => 'contato',
      'priority' => 1,
      'type' => 'text'
    ));
}

  add_action('customize_register', 'customize_registro');
?>