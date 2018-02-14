<?php
/*
Template Name: Showroom
*/
?>
<?php get_header(); ?>



<div class="row">
  <div class="twelve--col">
 <div class="slideshow__container">
    <div id="slideshow-imgs">
      <?php print_custom_field('slideshowinterior:do_shortcode'); ?>
    </div>
    <div id ="slideshow-width-nav">
    </div>
        <div id ="p__n__nav"><div id = "p--btn">
    <svg viewBox="0 0 29 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <polygon fill-rule="nonzero" transform="translate(14.500000, 19.500000) rotate(-180.000000) translate(-14.500000, -19.500000) " points="29 19.5 0 39 0 0"></polygon>
      </g>
    </svg>
    </div>
    <div id = "n--btn">
    <svg viewBox="0 0 29 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g stroke="none" fill-rule="evenodd">
        <g transform="translate(14.500000, 19.500000) rotate(-360.000000) translate(-14.500000, -19.500000) " fill-rule="nonzero">
            <polygon points="29 19.5 0 39 0 0"></polygon>
        </g>
    </g>
</svg>
    </div>
  </div>
</div>
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
