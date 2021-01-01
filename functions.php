<?php

//update_option('siteurl','http://michaelalthen.de/wordpress');
//update_option('home','http://michaelalthen.de');

remove_action( 'wp_head', 'feed_links', 2 );          // Display the links to the general feeds: Post and Comment Feed
remove_action( 'wp_head', 'feed_links_extra', 3 );        // Display the links to the extra feeds such as category feeds
remove_action( 'wp_head', 'rsd_link' );             // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action( 'wp_head', 'wlwmanifest_link' );         // Display the link to the Windows Live Writer manifest file.
remove_action( 'wp_head', 'index_rel_link' );           // index link
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );   // Display relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'wp_generator' );            // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );     // prev link
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );     // start link
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );


// menus
function onsem_menus() {
  register_nav_menus(
    array(
      'navigation-menu' => __( 'Navigation Menu' ),
      'author-menu' => __( 'Author Menu' )
     )
   );
 }
 add_action( 'init', 'onsem_menus' );



function onsem_sidebar() {
  global $post;
  $year = '2010';
  $seminarPage = get_page_by_title('seminar'.$year);

  echo $post->ID . ', name:'. $post->post_name .', parent:' ;
  echo $post->post_parent;
  echo 'seminar2010: ' . $seminarPage->ID;
  print_r($seminarPage);
  /*
  if (in_array($seminarPage->ID, array($post->ID, $post->post_parent ))) {
    get_sidebar($year);
  } else {
    get_sidebar();
  }
  */
}

function highlight($nr) {

  // replace with showLecture()...
  if (is_page($nr)) {
    echo 'id="current"';
  }
}



function showLecture($post_id) {

  $current = (is_page($post_id)) ? ' id="current"' : '';
  $author = get_post_meta($post_id, 'Vortragender', true);
  echo '<a href="' . get_permalink($post_id) .'"' . $current . '>' . get_the_title($post_id) . "</a>" . $author;
}



// Onsem Theme Settings
function onsem_settings_menus() {
  add_submenu_page('options-general.php', 'Onsem Twitter', 'Onsem Twitter', 'manage_options', 'onsem-twitter', 'onsem_twitter_settings');
  add_action( 'admin_init', 'register_onsem_settings' );
}

function register_onsem_settings() {
  register_setting('onsem-settings-group', 'onsem_twitter_message');
  register_setting('onsem-settings-group', 'onsem_twitter_hashtag');
}


function onsem_twitter_settings() {
?>
<div class="wrap">
<h2>Onsem Twitter Settings</h2>
<form method="post" action="options.php">
<?php settings_fields('onsem-settings-group'); ?>
<?php do_settings_sections('onsem-settings-group'); ?>
  <table class="form-table">
    <tr valign="top">
      <th scope="row">Message</th>
    <!--  <textarea name="ping_sites" id="ping_sites" class="large-text code" rows="3"></textarea> -->
      <td><textarea maxlength='100' class="large-text" rows="1" name="onsem_twitter_message"><?php echo get_option('onsem_twitter_message'); ?></textarea></td>
    </tr>

    <tr valign="top">
      <th scope="row">Hashtag</th>
      <td><input type="text" name="onsem_twitter_hashtag" value="<?php echo get_option('onsem_twitter_hashtag'); ?>" /></td>
    </tr>
  </table>
  <?php submit_button(); ?>
</form>
</div>
<?php }

// This tells WordPress to call the function named "setup_theme_admin_menus"
// when it's time to create the menu pages.
add_action("admin_menu", "onsem_settings_menus");





// make timetable based on ACFs
function makeTimetable($parentID=0) {
  // get all children of $parentID

  $posts = get_posts(array(
    'posts_per_page' => -1,
    'post_type'      => 'page',
    'post_parent'    => $parentID,
    'meta_key'       => 'datum_und_uhrzeit',
    'orderby'        => 'meta_value',     // .. and not by postdate!
    'order'          => 'ASC',
  ));


  // filter posts with empty 'datum_und_uhrzeit'
  // print_r($posts[1]);
  //  print_r(get_field('datum_und_uhrzeit', $posts[1]->ID));

  // loop
  if($posts) {

    echo '<table class="schedule">'."\n";

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
        echo '<tr><td colspan="2" class="schedule-header">'. $d .'</td></tr>'."\n";
      }
      $day = $currentDay;


      $title = $post->post_title . " " . get_field('vortragender', $post->ID);
      if (get_field('vortragender', $post->ID)) {
        $title = '<a href="' . get_permalink($post->ID) . '">'.$post->post_title.'</a>' . get_field('vortragender', $post->ID);
      }

      echo '<tr><td class="schedule-time">'. $date->format('H:i') .'</td><td class="schedule">'. $title .'</td></tr>'."\n";
    }

    echo '</table>'."\n";

    //wp_reset_postdata();

  }


}


function showProgramme($seminarPage) {

  $posts = get_posts(array(
    'posts_per_page' => -1,
    'post_type'      => 'page',
    'post_parent'    => $seminarPage->ID,
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

      $speaker = array();
      if (have_rows('vortragende', $post)) {
        while(have_rows('vortragende', $post)) {
        the_row();
          $name = get_sub_field('vortragender', $post);
          $speaker[] = '<a href="' . $link = get_site_url() . "/teilnehmer/" . urlencode($name). '">'. $name . "</a>\n";
        }
      }

      echo "  <tr>\n";
      echo "    <td width='10%'>". $date->format('H:i') ."</td>\n";
      if (get_field('vortragender', $post->ID)) {
        echo "    <td width='70%'>\n";
        echo "      <a href=\"". get_permalink($post->ID) . "\">" . $post->post_title . "</a>\n";
        echo "    </td>\n";
        echo "    <td width='20%'>\n";
        echo "      " . implode("      <br \>\n      ", $speaker);
        echo "    </td>\n";
      } else {
        echo "    <td width='80%' colspan='2' class='gray regular'>\n";
        echo "      " . $post->post_title . "\n";
        echo "    </td>\n";
      }
      echo "  </tr>\n";

    }
    echo '  </table>'."\n";
  }
}



add_action( 'init', 'onsem_route_init' );
function onsem_route_init(){
  add_rewrite_rule(
    'teilnehmer/(.*)/?$',
    'index.php?pagename=teilnehmer&teilnehmer_name=$matches[1]',
    'top' );
}

add_filter( 'query_vars', 'onsem_query_vars' );
function onsem_query_vars( $query_vars ){
  $query_vars[] = 'teilnehmer_name';
  return $query_vars;
}


?>
