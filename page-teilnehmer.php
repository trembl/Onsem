<?php
/*
Template Name: Teilnehmer
*/

get_header();

if (!empty(get_query_var('teilnehmer_name'))):
  $name = urldecode(get_query_var('teilnehmer_name'));


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

  $teilnehmerPosts = array();
  foreach ($allPosts as $p) {
    $vortragende = get_field('vortragende', $p);
    foreach ($vortragende as $v) {
      if ( $v['vortragender'] == $name ) {
        $teilnehmerPosts[] = $p;
      }
    }
  }


?>

<div>
  <h1><?php echo $name; ?></h1>
  <div class="body text">
<?php

if($teilnehmerPosts) {
  echo '<table>'."\n";
  foreach($teilnehmerPosts as $p) {
    $year = date('Y', strtotime(get_field('datum_und_uhrzeit', $p)));
    echo "  <tr>\n";
    echo "    <td><a href=\"". get_site_url() . "/seminar$year/" . "\">" . $year . "</a></td>\n";
    echo "    <td class=\"left\"><a href=\"". get_permalink($p->ID) . "\">" . $p->post_title . "</a></td>\n";
    echo "  </tr>\n";
  }
  echo '  </table>'."\n";
}

?>
  </div>
</div>

<?php else: ?>

<div>
  <h1>Teilnehmer</h1>
  <div class="body text">

  </div>
</div>


<?php endif; ?>

<?php get_footer(); ?>
