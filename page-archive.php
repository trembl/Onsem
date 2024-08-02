<?php
/*
Template Name: Archiv
*/

get_header(); 

?>

<div class="font-medium text-6xl p-8 text-center">
  <span class=""><?php the_title(); ?></span> <?php edit_post_link('<sup>✎</sup>');?>
</div>
<div>
  <h2 class="font-medium text-5xl text-center">Seminare</h2>
  <div class="autoren px-8">
<?php
$seminare = get_field('seminare');

foreach($seminare as $s) {
  $seminar = $s['seminar'];
  $name = get_field('author_name', $seminar->ID);
  $color = get_field('farbe', $seminar->ID);
  $year = get_field('jahr', $seminar->ID);
  $link = get_permalink($seminar->ID);
  echo "    <div><a href=\"$link\" style=\"background-color:$color\">$year $name</a></div>\n";
  
}

?>
  </div>
  
  <h2 class="font-medium text-5xl text-center">Vortragende</h2>
  <div class="font-medium text-4xl px-8 text-center">
<?php

$lecturers = accumulateLecturers();
$output = array();
foreach($lecturers as $l) {
  $name = $l['name'];
  $freq = $l['freq'];
  $lastname = $l['lastname'];
  $link = urlencode(strtolower($name));
  array_push($output, "    <a href=\"$link\">$name</a><sup>$freq</sup>");
}
echo implode(",\n", $output);
?>

    
  </div>
  <div>
<?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>



  </div>

<?php

/*
// get all posts where ACF array field 'vortragender' is not empty
$allPosts = get_posts(array(
  'numberposts' => -1,
  'post_type'   => 'page',
  'meta_query'  => array(
    array(
      'key'     => 'vortragender',   // check if array is not empty
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

/*
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
