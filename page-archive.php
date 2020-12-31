<?php
/*
Template Name: Archive
*/

get_header(); ?>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.5.1.min.js" charset="utf-8"></script>
<script type="text/javascript">

$(document).ready(function() {
  $('#yearselect').change(function(e) {
    var v = $(this).val()
    if (v === 'all') {
      $('.teilnehmer a').show()
    } else {
      $('.teilnehmer a').hide()
      $('.y' + v).show()
    }
  })
})

</script>

<div>
  <h1>Seminare</h1>
  <div class="archiv body">
<?php

foreach (wp_get_nav_menu_items('author-menu') as $m) {
  echo "    <a href=\"$m->url\">$m->title</a>\n";
}

?>
  </div>

<?php

$speakers = array();
$output = array();
$allYears = array();

// get all posts with filled out 'vortragender'
$allPosts = get_posts(array(
  'numberposts' => -1,
  'post_type'   => 'page',
  'meta_query'  => array(
    array(
      'key'     => 'vortragender',
      'compare' => '!=',
      'value'   => '',
    )
  )
));

// make speaker array
foreach ($allPosts as $p) {
  $speakers[] = trim(get_field('vortragender', $p));
}

$speakers = array_unique($speakers);    // make unique
$speakers = array_filter($speakers);    // remove empty
sort($speakers);                        // sort by first name

// get number of apperances
foreach ($speakers as $s) {
  $posts = get_posts(array(
    'numberposts' => -1,
    'post_type'   => 'page',
    'meta_key'    => 'vortragender',
    'meta_value'  => $s
  ));
  $years = array();
  foreach ($posts as $p) {
    $years[] = 'y' . date('Y', strtotime($p->post_date));
    $allYears[] = date('Y', strtotime($p->post_date));
  }
  $years = array_unique($years);    // make unique
  rsort($years);
  $y = implode(' ', $years);
  $output[] = "\n    <a href='' class='$y'>$s<sup>" . count($posts) . "</sup></a>";
}



?>
  <h1>Teilnehmer</h1>
  <select id="yearselect">
    <option value="all">Alle</option>
<?php


  $allYears = array_unique($allYears);    // make unique
  sort($allYears);
  $options = array();
  foreach ($allYears as $y) {
    $options[] = "    <option value=\"$y\">$y</option>\n";
  }
  echo implode("", $options);


?>
  </select>

  <div class="teilnehmer body">
<?php echo implode('', $output); ?>
  </div>
</div>

<?php get_footer(); ?>
