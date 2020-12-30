<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php
  global $page, $paged;
  wp_title('', true);
  ?></title>
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
<?php wp_head(); ?>
</head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  // Facebook Code
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/de_DE/all.js#xfbml=1&appId=107940335913847";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="page">

<div class="header">
  <a href="<?php echo home_url(); ?>">
  <div class="box light">
    <img id="logo" src="<?php echo bloginfo('template_directory'); ?>/images/logo-zoom.png" width="93" height="50">
  </div>
  </a>

  <div class="box2">
    29. Seminar zur österreichischen Gegenwartsliteratur (auf Zoom)<br />
    オーストリア現代文学ゼミナール<br />
    <br />

    12. und 13. Dezember 2020<br />
    Mit <a href="<?php echo home_url(); ?>/">Daniel Wisser</a><br />
  </div>

  <div class="box">
    <!-- <a href="<?php echo home_url(); ?>/ankundigungen/">Ankündigungen</a><br /> -->
    <!-- <a href="<?php echo home_url(); ?>/anfahrt/">Anfahrt</a><br />-->
    <!-- <a href="<?php echo home_url(); ?>/seminar2019/lesereise-thomas-stangl/">Lesereise</a><br />-->
  </div>

  <div class="box">
    <a href="<?php echo home_url(); ?>/anmeldung">Anmeldung</a><br />
    <a href="<?php echo home_url(); ?>/stipendium">Stipendium</a><br />
    <a href="<?php echo home_url(); ?>/organisation/">Organisation</a><br />
    <!--<a href="<?php echo home_url(); ?>/hotel/">Hotel</a><br /> -->
  </div>

  <div class="box">
    <a href="<?php echo home_url(); ?>/das-seminar/">Über das Seminar</a><br />
    <a href="<?php echo home_url(); ?>/nozawa-onsen/">Nozawa Onsen</a><br />
    <a href="<?php echo home_url(); ?>/liste/">Mailinglist</a><br />
    <a href="<?php echo home_url(); ?>/kontakt/">Kontakt</a><br />
    <a href="<?php echo home_url(); ?>/links/">Links</a><br />
    <a href="<?php echo home_url(); ?>/archiv/" <?php highlight(22)?>>Archiv...</a><br />
  </div>

</div>

<div class="content">
