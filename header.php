<!DOCTYPE html>
<html>
<head>
  <title>Onsem - Seminar zur österreichischen Gegenwartsliteratur</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
  <style>
<?php

if (get_field('farbe')) {
  //echo "#background { background: ". get_field('farbe') ."}";
  $color = get_field('farbe');
} else if (get_field('farbe', $post->post_parent)) {
  //echo "#background { background: ". get_field('farbe', $post->post_parent) ."}";
  $color = get_field('farbe', $post->post_parent);

}
?>
    a, a:visited {
      background-color: <?php echo $color; ?>;
    }
  </style>
</head>
<body class="">
  <div id="background">
    <header>
      <div class="text-lg font-normal px-8 py-1 bg-white text-center">
        Seminar zur österreichischen Gegenwartsliteratur in Japan オーストリア現代文学ゼミナール
      </div>
      <div class="menu">
        <a href="<?php echo home_url(); ?>">Onsem</a>
<?php showMenu('top-menu'); ?>
      </div>
<?php showBreadcrumbs(); ?>
    </header>
