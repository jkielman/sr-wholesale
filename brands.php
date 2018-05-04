<?php
/*
Template Name: Brands
*/
?>
<?php get_header(); ?>
<div class="row">
          <div class="twelve--col page__title title--center">
            <h1 class = "title"><?php the_title(); ?></h1>
          </div>
</div>
<div class="row page__content justify--center">
    <div class="eight--col">
      <ul id ="organize-brands" class="justify--center">
        <li class="brand__element user--all" data-client="all">All</li>
        <li class="brand__element user--women" data-client="women">Women</li>
        <li class="brand__element user--men" data-client="men">Men</li>
        <li class="brand__element user--footwear" data-client="footwear">Footwear</li>
        <li class="brand__element user--children" data-client="children">Children</li>
        <li class="brand__element user--accessories" data-client="accessories">Accessories</li>
      </ul>
    </div>
</div>


<div id ="brand-cat" class=" row page__content justify--center ">



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
</main>
</div>
<?php get_footer();?>
