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
      $('.teilnehmer a').show() // show all
    } else {
      $('.teilnehmer a').hide() // hide all
      $('.y' + v).show()        // show only selected
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


// get all posts where ACF array field 'vortragende' is not empty
$allPosts = get_posts(array(
  'numberposts' => -1,
  'post_type'   => 'page',
  'meta_query'  => array(
    array(
      'key'     => 'vortragende',   // check if array is not empty
      'compare' => '!=',
      'value'   => '',
    )
  )
));

// make speaker array
$cleaned = array();
$allYears = array();
foreach ($allPosts as $p) {
  $vortragende = get_field('vortragende', $p);
  foreach ($vortragende as $v) {
    if ( empty($cleaned[$v['vortragender']]) ) {
      $cleaned[$v['vortragender']] = array();
    }
    $year = date('Y', strtotime(get_field('datum_und_uhrzeit', $p)));
    $allYears[] = $year;

    $cleaned[$v['vortragender']][] = array(
      'id'   => $p->ID,
      'year' => $year
    );
  }
}
ksort($cleaned);  // sort alphabetically

// Get number of apperances and years
$output = array();
foreach ($cleaned as $name => $yearArray) {

  $years = array();
  foreach ($yearArray as $a) {
    $years[] = 'y' . $a['year'];
  }
  $years = array_unique($years);    // make unique
  sort($years);
  $y = implode(' ', $years);

  $link = get_site_url() . "/teilnehmer/" . urlencode($name);

  $output[] = "\n    <a href='$link' class='$y'>$name<sup>" . count($yearArray) . "</sup></a>";
}






?>
  <h1>Teilnehmer</h1>
  <select id="yearselect">
    <option value="all">Alle</option>
<?php


  $allYears = array_unique($allYears);    // make unique
  rsort($allYears);
  $optionsOutput = array();
  foreach ($allYears as $y) {
    $optionsOutput[] = "    <option value=\"$y\">$y</option>\n";
  }
  echo implode("", $optionsOutput);


?>
  </select>

  <div class="teilnehmer body"><?php echo implode('', $output); ?>

  </div>
</div>

<?php get_footer(); ?>
