<?php
/**
 * Template part for displaying page content in page.php
 *
 * @package slavinraphael
 */

?>

<div class="row">
          <div class="twelve--col page__title title--center">
            <h1 class = "title"><?php the_title(); ?></h1>
          </div>
</div>

<div class="row page__content justify--center">
          <div class="eight--col">
            <?php
			the_content();
		?>
          </div>
</div>
<?php print_custom_field('contentblocktwo:do_shortcode'); ?>
<?php print_custom_field('contentblockthree:do_shortcode'); ?>
</main>
</div>
<?php get_footer();?>
