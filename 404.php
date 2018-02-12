<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package slavinraphael
 */

get_header(); ?>



			<section class="error-404 not-found">
				<div class="row">
          <div class="twelve--col page__title title--center">
            <h1 class = "title">🙁 <?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'slavinraphael' ); ?></h1>
				</div>
			</div>

				<div class="row page__content justify--center">
          				<div class="eight--col">
					<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'slavinraphael' ); ?></p>
					    </div>
				</div>
			</section><!-- .error-404 -->



<?php
get_footer();
