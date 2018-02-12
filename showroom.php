<?php
/*
Template Name: Showroom
*/
?>
<?php get_header(); ?>



<div class="row">
  <div class="twelve--col">
    <div id="slideshow-imgs">
      <?php print_custom_field('slideshowinterior:do_shortcode'); ?>
    </div>
    <div id ="slideshow"></div>
  </div>
</div>


<div class="row">
          <div class="twelve--col page__title title--center">
            <h1 class = "title"><?php the_title(); ?></h1>
          </div>
</div>


<div class="row page__content justify--center">
  <div class="eight--col">

			<?php
			while ( have_posts() ) : the_post();

				the_content();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

</div>

        </div>
</main>
</div>
<?php get_footer();?>
