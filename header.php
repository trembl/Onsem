<!DOCTYPE html>
<html>
<head>
  <title>Onsem - Seminar zur österreichischen Gegenwartsliteratur</title>
  <meta charset="UTF-8">
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
  <style><?php
    if (get_field('color')) echo "html { background: ". get_field('color') ."; }";
    else if (get_field('color', $post->post_parent)) echo "html { background: ". get_field('color', $post->post_parent) ."; }";
  ?></style>
  <?php // wp_head(); ?>
</head>
<body>
  <div class="page w-100 pa4">
    <header>
      <div class="menu">
        <a href="<?php echo home_url(); ?>">♨️ Onsem 📖</a> &nbsp;
<?php showMenu('top-menu'); ?>
      </div>
      <div id="title">
        <div class="medium">31. Seminar zur österreichischen Gegenwartsliteratur</div>
        <div id="title_jp">オーストリア現代文学ゼミナール</div>
        <span class="italic">16. Dezember 2022<br />
        Mit <a href="<?php echo home_url(); ?>/">Karl Lubomirski </a></span>
      <div>
    </header>
