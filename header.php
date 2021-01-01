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

      <div id="title" class="center">
        <div class="medium">Seminar zur österreichischen Gegenwartsliteratur</div>
        <div id="title_jp">オーストリア現代文学ゼミナール</div>
      <div>
    </header>
