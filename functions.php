<?php


//update_option('siteurl','xxx');
//update_option('home','xxx');


// Add Functions
include('components/disable_updates.php');
include('components/clean_header.php');
include('components/disable_adminbar_links.php');
include('components/disable_visual_editor.php');
//include('components/disable_auto_p.php');

// Rewrite Rules for Lecturer Archhive
add_action('init', function() {
  add_rewrite_rule( 'archiv/([^/]+)[/]?$', 'index.php?lecturer=$matches[1]', 'top' );
});
add_filter('query_vars', function( $query_vars ) {
  $query_vars[] = 'lecturer';
  return $query_vars;
});
add_filter('template_include', function( $template ) {
  if ( get_query_var('lecturer' ) == false || get_query_var( 'lecturer' ) == '' ) {
    return $template;
  }
  return get_template_directory() . '/page-lecturer.php';
});





/*
function sideMenu($category, $displayName) {
	if (is_category($category) || in_category($category) || is_page($category) ) {
		echo '<div class="navline"></div><span class="navitem">' . $displayName . ' </span><br />';
	} else {
		echo '<a href="' . get_bloginfo("url") . '/' . $category . '/" class="navitem">' . $displayName . " </a><br />\n";
	}
}

// no additional marks after excerpt
function new_excerpt_more($more) {
	return '';
}
//add_filter('excerpt_more', 'new_excerpt_more');

function showMainNav($linkID, $lastBr = true) {
	global $post;
	$linkPage = get_page($linkID);

	$subnav = get_post_meta($linkID, "Main_Navigation", true);
	$text = $subnav ? $subnav : $linkPage->post_title;

	$br = ($lastBr) ? "<br />" : "";

	if (($post->ID == $linkPage->ID) OR ($post->post_parent == $linkPage->ID) ) {
		echo $text . '<span class="activestar"></span><br />' ."\n";
	} else {
		echo '<a href="' . get_bloginfo('url')  . "/" . $linkPage->post_name . '/">' . $text . '</a>'. $br ."\n";
	}
}


function showSubNav($linkID, $lastBr = true) {
	global $post;
	$linkPage = get_page($linkID);

	$subnav = get_post_meta($linkID, "Sub_Navigation", true);
	$text = $subnav ? $subnav : $linkPage->post_title;

	$br = ($lastBr) ? "<br />" : "";

	if ($post->ID == $linkPage->ID) {
		echo $text . '<span class="activestar"></span><br />' ."\n";
	} else {
		echo '<a href="' . get_bloginfo('url')  . "/" . $linkPage->post_name . '/">' . $text . '</a>' . $br ."\n";
	}
}
*/


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
  //$author = get_post_meta($post_id, 'Vortragender', true);
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
function makeSidebar($parentID=0) {
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

  // make global post ID accessible
  global $post;
  
  // loop
  if($posts) {
    echo '<div class="text-center text-4xl font-medium mb-4">Programm</div>'."\n";
    echo '<table class="schedule">'."\n";

    echo '<tr><td colspan="2" class="text-center italic">Nozawa Onsen</td></tr>'."\n";
    
    $day = "";
    foreach($posts as $p) {

      // output current day
      $rawTime = get_field('datum_und_uhrzeit', $p->ID);

      // filter posts with empty 'datum_und_uhrzeit'
      if (empty($rawTime)) continue;

      $date = new DateTime($rawTime);

      $currentDay = $date->format('Y-m-d');
      if ($currentDay != $day) {
        $d = __($date->format('l')) . ", " . $date->format('d') . ". " . __($date->format('F')) . " " . $date->format('Y') . "</br>\n";
        echo '<tr><td colspan="2" class="schedule-header">'. $d .'</td></tr>'."\n";
      }
      $day = $currentDay;

      $title = $p->post_title . " " . get_field('vortragender', $p->ID);
      if (get_field('vortragender', $p->ID)) {
        $title = '<a href="' . get_permalink($p->ID) . '">'.$p->post_title.'</a> ' . get_field('vortragender', $p->ID);
      }
      // highlight
      if ($post->ID == $p->ID) {
        $h = "highlight";
      }
      echo '<tr class="'.$h.'"><td class="schedule-time">'. $date->format('H:i') .'</td><td class="schedule">'. $title .'</td></tr>'."\n";
    }
    echo '</table>'."\n";
  }
}

function showImage($id) {
  $img = get_field('portrait', $id);
  $link = $img['sizes']['medium_large'];
?>

  <div class="mb-4">
    <a href="<?php the_permalink($id); ?>">
      <img src="<?php echo $link; ?>" class="bild" width="100%" />
    </a>
<?php
  if (get_field('image_credit', $id)) {
?>
    <div class="text-sm italic float-right">
      ©Foto: <?php echo get_field('image_credit', $id); ?>

    </div>
<?php
  }
  
  if (get_field('author_name', $id)) {
?>
    <div class="text-sm">
      <?php echo get_field('author_name', $id); ?>

    </div>
<?php
  }
?>
  </div>

<?php
}


function register_onsem_menus() {
  register_nav_menus(
    array(
      'top-menu' => __( 'Top Menu' ),
      'bottom-menu' => __( 'Bottom Menu' ),
     )
   );
 }
 add_action( 'init', 'register_onsem_menus' );

function getMenu($menuSlug) {
 $l = get_nav_menu_locations();
 $menu = wp_get_nav_menu_items($l[$menuSlug]);
 if (empty($menu)) return array();
 return $menu;
}

function showMenu($menuSlug, $class='', $subClass='', $padding='        ') {
 $menuItems = getMenu($menuSlug);
 foreach($menuItems as $menuItem) {
   $pageId = get_post_meta($menuItem->ID, '_menu_item_object_id', true );   // get id of associated menu page
   $page = get_post($pageId);
   $link = get_permalink($page->ID);
   $c = ($menuItem->menu_item_parent) ? "$class $subClass" : "$class";
   echo "$padding<a href=\"$link\" class=\"$c\">$menuItem->title</a>\n";
 }
}

function showBreadcrumbs() {
  if (has_post_parent()) {
    $parent = get_post_parent();
    $link = get_permalink($parent);
    $title = get_the_title($parent);
?>
      <div id="breadcrumbs" class="px-8 text-sm font-medium italic">
        ⮑ <a href="<?php echo $link ?>"><?php echo $title ?></a> /
        <? the_title() ?>
      </div>
<?php
  }
}



// Include Markdown Parser
include('includes/Parsedown.php');
$Parsedown = new Parsedown();

function the_markdown_content() {
  global $Parsedown;
  // this field must be set in ACF
  if (get_field('enable_markdown_filter')) {
    echo $Parsedown->text(get_the_content());
  } else {
    the_content();
  }
}

// Accumulate Lecturers for Archive
function accumulateLecturers() {
  global $wpdb; 
  $query  = "SELECT wp_postmeta.meta_value ";
  $query .= "FROM wp_posts, wp_postmeta ";
  $query .= "WHERE wp_posts.post_status = 'publish' AND wp_posts.ID = wp_postmeta.post_id AND wp_postmeta.meta_key = 'vortragender' AND NOT wp_postmeta.meta_value = '' ";
  $results = $wpdb->get_results($query);
  $values = array_values($results);
  $values = array();
  foreach($results as $result) {

    $lecturers = explode(", ", $result->meta_value); // split multiple lecturers by ", "
    foreach ($lecturers as $lecturer) {
      array_push($values, $lecturer);
    }
  }
  $lecturers = array_count_values($values);
  
  $lecturersObj = array();
  foreach ($lecturers as $lecturer=>$freq) {
    $name = explode(" ", $lecturer);
    $l = array(
      'freq'     => $freq,
      'name'     => $lecturer,
      'lastname' => end($name),
    );
    array_push($lecturersObj, $l);
  }
  
  // sort by last name
  usort($lecturersObj, function($a, $b) {return strcmp($a['lastname'], $b['lastname']);});
  

  return $lecturersObj;
}

function getSeminars() {
  $archiv = get_page_by_path('archiv');
  $seminare = get_field('seminare', $archiv->ID);
  $ids = array();
  foreach($seminare as $s) {
    array_push($ids, $s['seminar']);
  }
  return $ids;
}

?>
