<?php
    /*
    Template Name: card-noticias
    Template Post Type: events
    */
?>
<?php
    get_header();
    include('menu.php');

    if(have_posts()): while(have_posts()): the_post();
?>
<div>
	<section class="section-info container d-flex">
	<div class="content-news">
		<h1 class="info-principal-title txt-cent"><?php the_title(); ?></h1>
		<p class="news-date">Publicado em: <?php echo get_the_date('', $post->ID);?></p>
		<div class="my-content text-prin txt-justify">
			<div class="thumb-noticias">
			<?php the_post_thumbnail();?>
			</div>
			<div class="info-txt">
				<?php the_content();?>
			</div>
		</div>
	</div>
	</section>
	<img class="bg-contatos-prop img-bg" src="<?php bloginfo('template_url'); ?>/img/background-midias2.svg" alt="">
	<img class="bg-contatos-prop img-bg temp1" src="<?php bloginfo('template_url'); ?>/img/background-midias2.svg" alt="">
	<img class="bg-contatos-prop img-bg" src="<?php bloginfo('template_url'); ?>/img/background-midias.svg" alt="">
	<img class="bg-contatos-prop img-bg temp5" src="<?php bloginfo('template_url'); ?>/img/background-midias3.svg" alt="">
	</div>
<?php
    endwhile; endif
?>
<?php include("template_parts/transparencia-publica.php");?>
<?php
    get_footer();
?>