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

$seminarIDs = getSeminars();
foreach($seminarIDs as $seminarID) {
  $name = get_field('author_name', $seminarID);
  $color = get_field('farbe', $seminarID);
  $year = get_field('jahr', $seminarID);
  $link = get_permalink($seminarID);
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
  $freq = count($l['ID']);
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



