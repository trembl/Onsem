<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title><?php wp_title(); ?></title>
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class="page w-100 pa4">
    <header>

      <div class="menu">
<?php
foreach (wp_get_nav_menu_items('navigation-menu') as $m) {
  echo "        <a href=\"$m->url\">$m->title</a> &nbsp;\n";
}
?>
      </div>

      <div id="title">
        <div class="medium">29. Seminar zur österreichischen Gegenwartsliteratur (auf Zoom)</div>
        <div id="title_jp">
          オーストリア現代文学ゼミナール
        </div>
        <div>12. und 13. Dezember 2020. Mit <a href="<?php echo home_url(); ?>">Daniel Wisser</a></div>
      <div>
    </header>
