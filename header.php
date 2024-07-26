<!DOCTYPE html>
<html>
<head>
  <title>Onsem - Seminar zur österreichischen Gegenwartsliteratur</title>
  <meta charset="UTF-8">
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
  <style><?php
    if (get_field('farbe')) echo "body { background: ". get_field('farbe') ."; }";
    else if (get_field('color', $post->post_parent)) echo "body { background: ". get_field('color', $post->post_parent) ."; }";
  ?></style>
  <?php // wp_head(); ?>
</head>
<body class="">
  <div class="">
    <header >
      <div id="menu">
        <a href="<?php echo home_url(); ?>">♨️ Onsem 📖</a>
<?php showMenu('top-menu'); ?>
      </div>
      <div class="px-8 bg-gradient-to-b from-white to-transparent">
        <div class="text-2xl italic">
          31. Seminar zur österreichischen 🇦🇹 Gegenwartsliteratur in Japan
          🇯🇵オーストリア現代文学ゼミナール
          16. Dezember 2022.
        </div>

       
      <div>
    </header>
