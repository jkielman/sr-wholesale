<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>

<div class="row">
          <div class="seven--col">
            <img src ="<?php bloginfo('template_url'); ?>/assets/imgs/contact-01.jpg"/>
          </div>
          <div class="five--col">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2884.37473579459!2d-79.46021804924771!3d43.70276085714048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b33e81502e5a7%3A0x278cbffe67f1d736!2sSlavin+Raphael!5e0!3m2!1sen!2sca!4v1518383706799" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="row page__contact justify--center">
          <div class="twelve--col">
             <h1>80 Wingold Ave.</h1>
             <p>Toronto, Ont.<br>M6B 1P5</p>
          </div>
        </div>
        <div class="row page__contact">
          <div class="four--col">
             <?php print_custom_field('contentblocktwo:do_shortcode'); ?>
          </div>
          <div class="four--col">
            <?php print_custom_field('contentblockthree:do_shortcode'); ?>
          </div>
          <div class="four--col">
            <?php print_custom_field('contentblockfour:do_shortcode'); ?>
          </div>
        </div>
</main>
</div>
<?php get_footer();?>
