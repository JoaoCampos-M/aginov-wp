<?php /*template name: Propriedade Intelectual (Categoria 3)
		Template Name: single-parcerias
		Template Post Type: parcerias

*/ ?>
<?php get_header(); ?>

<?php include('menu.php'); ?>

<?php if(have_posts()) : the_post(); ?>
	<?php
		the_title();
		the_content();
	?>
<?php endif;?>

<?php get_footer() ?>