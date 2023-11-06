<?php
/*
Template Name: Programme
*/

get_header(); ?>

<div>
  <h1>Programm</h1>

<?php

$ancestors = get_post_ancestors($post);

$posts = get_posts(array(
  'posts_per_page' => -1,
  'post_type'      => 'page',
  'post_parent'    => $ancestors[0],
  'meta_key'       => 'datum_und_uhrzeit',
  'orderby'        => 'meta_value',     // .. and not by postdate!
  'order'          => 'ASC',
));

if ($posts) {

  echo '<table>'."\n";

  $day = "";
  foreach( $posts as $post ) {

    // output current day
    $rawTime = get_field('datum_und_uhrzeit', $post->ID);

    // filter posts with empty 'datum_und_uhrzeit'
    if (empty($rawTime)) continue;

    $date = new DateTime($rawTime);

    $currentDay = $date->format('Y-m-d');
    if ($currentDay != $day) {
      $d = __($date->format('l')) . ", " . $date->format('d') . ". " . __($date->format('F')) . " " . $date->format('Y') . "</br>\n";

      echo '<tr><td colspan="3">&nbsp;</td></tr>'."\n";
      echo '<tr><td colspan="3" class="center italic">'. $d .'</td></tr>'."\n";
    }
    $day = $currentDay;

    $title = $post->post_title . " " . get_field('vortragender', $post->ID);

    echo "  <tr>\n";
    echo "    <td width='10%'>". $date->format('H:i') ."</td>\n";
    if (get_field('vortragender', $post->ID)) {
      echo "    <td width='70%'><a href=\"". get_permalink($post->ID) . "\">" . $post->post_title . "</a></td>\n";
      echo "    <td width='20%'>". get_field('vortragender', $post->ID) ."</td>\n";
    } else {
      echo "    <td width='80%' colspan='2' class='gray regular'>" . $post->post_title . "</td>\n";
    }
    echo "  </tr>\n";

  }
  echo '  </table>'."\n";
}

?>
</div>

<?php
get_footer();
?>
