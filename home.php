<?php
/*
Template Name: Home
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
      <meta charset="<?php
bloginfo('charset');
?>">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="Prototype" />
      <meta name="HandheldFriendly" content="True" />
      <meta content='' name='description'>
      <meta content='width=device-width' name='viewport'>
      <meta content='yes' name='apple-mobile-web-app-capable'>
      <meta content='yes' name='apple-touch-fullscreen'>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="profile" href="http://gmpg.org/xfn/11">
      <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/imgs/favicon.ico" />
       <!-- Schema.org markup for Google+ -->
      <meta itemprop="name" content="">
      <meta itemprop="description" content="">
      <meta itemprop="image" content="">
      <meta content="SlavinRaphael &#8211; Wholesale multi-brand sales agency" name="description">
      <meta content="width=device-width" name="viewport">
      <!-- Google -->
      <meta content="SlavinRaphael &#8211; Wholesale multi-brand sales agency' name='description">
      <meta content="fashion, sales, wholesale, distribution, distributors, Toronto Sales Agency, Sales Agents" name="keywords">
      <meta content="SlavinRaphael" name="author">
      <meta content="SlavinRaphael 2018" name="copyright">
      <meta content="SlavinRaphael" name="application-name">
      <!-- Facebook -->
      <meta content="SlavinRaphael" property="og:title">
      <meta content="website" property="og:type">
      <meta content="<?php bloginfo('template_url'); ?>/assets/imgs/share.jpg" property="og:image">
      <meta content="http://slavinraphael.com" property="og:url">
      <meta content="SlavinRaphael &#8211; Wholesale multi-brand sales agency" property="og:description">
      <!-- Twitter -->
      <meta content="summary" name="twitter:card">
      <meta content="SlavinRaphael" name="twitter:title">
      <meta content="SlavinRaphael &#8211; Wholesale multi-brand sales agency" name="twitter:description">
      <meta content="<?php bloginfo('template_url'); ?>/assets/imgs/share.jpg" name="twitter:image">

      <?php wp_head(); ?>
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113948560-1"></script><script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-113948560-1');</script>
</head>
	<body <?php body_class(); ?>>
		<div id ="wrapper" class="wrapper__home--wrapper">
      <div class = "bg-container">
      <div id = "video-overlay"></div>
		<div>
    <video id = "mobile-video" controls="false" width="100%" height="260" src="<?php bloginfo('template_url'); ?>/assets/videos/slavinraphael-mobile.mp4" type="video/mp4" webkit-playsinline>
    </video>
    </div>
    <a id ="mobile-play-btn" class="play-mobile__vid" href="javascript:playPause();">
    <svg viewBox="0 0 12 15">
      <g stroke="none" stroke-width="1" fill-rule="evenodd">
      <polygon points="11.2222222 7.575 0 15.15 0 0"></polygon>
    </g>
  </svg>
    </a>

<video id="video-element" poster="data:image/gif,AAAA" autoplay>
  <source src='<?php bloginfo('template_url'); ?>/assets/videos/slavinraphael-desktop.mp4' type='video/mp4'>
</video>
<div id ="slideshow">
</div>
<div id = "slideshow-imgs" style ="display: none;">
  <img class ="content--main" id ="content-1" src = "<?php bloginfo('template_url'); ?>/assets/imgs/home-slideshow/slide-1.jpg"/>
  <img class ="content--main" id ="content-2" src = "<?php bloginfo('template_url'); ?>/assets/imgs/home-slideshow/slide-2.jpg"/>
  <img class ="content--main" id ="content-4" src = "<?php bloginfo('template_url'); ?>/assets/imgs/home-slideshow/slide-4.jpg"/>
  <img class ="content--main" id ="content-5" src = "<?php bloginfo('template_url'); ?>/assets/imgs/home-slideshow/slide-5.jpg"/>
  <img class ="content--main" id ="content-6" src = "<?php bloginfo('template_url'); ?>/assets/imgs/home-slideshow/slide-6.jpg"/>
  <img class ="content--main" id ="content-7" src = "<?php bloginfo('template_url'); ?>/assets/imgs/home-slideshow/slide-7.jpg"/>
  <img class ="content--main" id ="content-8" src = "<?php bloginfo('template_url'); ?>/assets/imgs/home-slideshow/slide-8.jpg"/>
  <img class ="content--main" id ="content-9" src = "<?php bloginfo('template_url'); ?>/assets/imgs/home-slideshow/slide-9.jpg"/>
  <img class ="content--main" id ="content-10" src = "<?php bloginfo('template_url'); ?>/assets/imgs/home-slideshow/slide-10.jpg"/>
  <img class ="content--main" id ="content-11" src = "<?php bloginfo('template_url'); ?>/assets/imgs/home-slideshow/slide-11.jpg"/>
  <img class ="content--main" id ="content-12" src = "<?php bloginfo('template_url'); ?>/assets/imgs/home-slideshow/slide-12.jpg"/>
  <img class ="content--main" id ="content-13" src = "<?php bloginfo('template_url'); ?>/assets/imgs/home-slideshow/slide-13.jpg"/>
  <img class ="content--main" id ="content-14" src = "<?php bloginfo('template_url'); ?>/assets/imgs/home-slideshow/slide-14.jpg"/>
</div>
<div class ="container_home--position">
  <div class="container">
  	<header class = "header">
      <div class="inner">
        <nav>
          <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
        </nav>
       <a class="navbar-brand main-header__logo" href ="/">
        SlavinRaphael
       </a>
      </div>
    </header>
 <div id='controls'>
    <progress id='progress-bar' min='0' max='100' value='0'>0% played</progress>
    <div class = "vid-controls">
      <button id='btnPlayPause' class='play' title='play'></button>
      <button id='btnReplay' class='replay' title='replay' accesskey="R" onclick='replayVideo();'>
<svg viewBox="0 0 12 15">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<polygon points="11.2222222 7.575 0 15.15 0 0"></polygon>
</g>
</svg>
</button>
<button id='btnStop' class='stop play--dis' title='stop' accesskey="X" onclick='stopVideo();'>
<svg viewBox="0 0 15 15">
<g stroke="none" stroke-width="1"  fill-rule="evenodd">
<rect x="0" y="0" width="15" height="15"></rect>
</g>
</svg></button>
<button id='btnMute' class='mute play--dis' title='mute' onclick='muteVolume();'>
<svg id="mute--icon" viewBox="0 0 17 15" class ="mute-animate">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<g fill-rule="nonzero">
<path d="M0,4.37536657 L0,10.627566 L3.49721529,10.627566 L8.72863453,15 L8.73151527,0 L3.49721529,4.37536657 L0,4.37536657 Z M13.9859804,3.36950147 L13.9859804,11.6304985 L15,11.6304985 L15,3.36950147 L13.9859804,3.36950147 Z M10.9410409,9.5659824 L11.9550605,9.5659824 L11.9550605,5.4340176 L10.9410409,5.4340176 L10.9410409,9.5659824 Z"></path>
</g>
</g>
</svg>
<svg id="muted--icon" viewBox="0 0 17 15" class ="mute-animate">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<rect transform="translate(13.500000, 8.000000) rotate(-45.000000) translate(-13.500000, -8.000000) " x="13" y="4" width="1" height="8" rx="0.5"></rect>
<rect transform="translate(13.500000, 8.000000) rotate(-315.000000) translate(-13.500000, -8.000000) " x="13" y="4" width="1" height="8" rx="0.5"></rect>
<polygon id="Shape" fill-rule="nonzero" points="0 4.37536657 0 10.627566 3.49721529 10.627566 8.72863453 15 8.73151527 0 3.49721529 4.37536657"></polygon>
</g>
</svg>
</button>
</div>
</div>
</div>
<?php get_footer();?>
</body>
</html>
