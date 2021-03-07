<?php /*template name: Subpage */?>
<?php get_header();?>

<?php include('banner-inicio.php');  ?>

<section class="section-info container">
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
            <a class="btn-menu" href="">Entre em contato</a>
        </div>
        <div class="buttons-list">
            <a href="<?php echo home_url(); ?>" class="a-none"><img
                    src="<?php bloginfo('template_url') ?>/img/btn-volta.svg" alt=""></a>
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

    </div>
</section>

<?php get_footer()?>