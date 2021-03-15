<?php
get_header();
?>
      <div class="row">

        <div class="col-md-8 col-sm-12">
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <?php the_title(); ?>
				<?php the_content();?>
          <?php endwhile; ?>

        </div>
      </div>

    </div>
<?php
get_footer();
?>
