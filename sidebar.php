<?php

$video = ' <img src="' . get_bloginfo('template_directory') . '/images/video.gif" width="28" height="9">';
$abstract = ' <img src="' . get_bloginfo('template_directory') . '/images/abstract.gif" width="46" height="9">';
$fulltext = ' <img src="' . get_bloginfo('template_directory') . '/images/volltext.gif" width="45" height="9">';

?>

<div class="sidecolumn">

<?php
// menu or options?
/*
$archive = array(
  '2024' => 4510, // Seminar 2024
  '2020' => 3930, // Seminar 2020 Daniel Wisser
);

if (is_front_page()) {
  makeSidebar($archive[0]);
} else {
  foreach($archive as $year=>$page_id) {
    if (is_page($page_id OR $post->post_parent==$page_id)) {
      makeSidebar($page_id);
    }
  }
}
*/

if (is_front_page() OR is_page('4510') OR $post->post_parent=='4510'):
  makeSidebar(4510);

// Seminar 2023 Milena Michiko Flasar
elseif (is_page('4379') OR $post->post_parent=='4379'):
  makeSidebar(4379);
  
// Seminar 2022 Karl Lubomirski
elseif (is_page('4289') OR $post->post_parent=='4289'):
  makeSidebar(4289);

// Seminar 2021 Julya Rabinowich
elseif (is_page('4105') OR $post->post_parent=='4105'):
  makeSidebar(4105);
  
// Seminar 2020 Daniel Wisser
elseif (is_page('3930') OR $post->post_parent=='3930'):
  makeSidebar(3930);

// Seminar 2019 Thomas Stangle
elseif (is_page('3688') OR $post->post_parent=='3688'):
  makeSidebar(3688);

// Seminar 2018 Raoul Schrott
elseif (is_page('3560') OR $post->post_parent=='3560'):
  makeSidebar(3560);

// Seminar 2017 Reinhard Kaiser-Mühlecker
elseif (is_page('3381') OR $post->post_parent=='3381'):
  makeSidebar(3381);

// Seminar 2016 Clemens J. Setz
elseif (is_page('3207') OR $post->post_parent=='3207'):
  makeSidebar(3207);

// Seminar 2015, Christoph Ransmayr
elseif (is_page('3077') OR $post->post_parent=='3077'):
  makeSidebar(3077);

// Seminar 2014, Sabine Gruber
elseif (is_page('2866') OR $post->post_parent=='2866'):
  makeSidebar(2866);

// Seminar 2013, Herbert J. Wimmer
elseif (is_page('2449') OR $post->post_parent=='2449'):
  include("sidebars/sidebar2013.php");

// Seminar 2012, Doron Rabinovici
elseif (is_page('2167') OR $post->post_parent=='2167'):
  include("sidebars/sidebar2012.php");

// Seminar 2011, Erwin Einzinger
elseif ( is_page('1750') OR $post->post_parent=='1750'):
  include("sidebars/sidebar2011.php");

// Seminar 2010, Lydia Mischkulnig
elseif( is_page('1356') OR $post->post_parent=='1356' OR $post->post_parent=='1519'):
  include("sidebars/sidebar2010.php");

// Seminar 2009, Thomas Glavinic
elseif ( is_page('134') OR $post->post_parent=='134' OR $post->post_parent=='143' ):
  include("sidebars/sidebar2009.php");

// Seminar 2008, Peter Waterhouse
elseif ( is_page('24') OR $post->post_parent=='24' OR $post->post_parent=='29' OR $post->post_parent=='31'):
  include("sidebars/sidebar2008.php");
  
// Seminar 2007, Karl-Markus Gauß
elseif ( is_page('50') OR $post->post_parent=='50' OR $post->post_parent=='110' OR $post->post_parent=='64'):
  include("sidebars/sidebar2007.php");
  
// Seminar 2006, Franzobel
elseif ( is_page('52') OR $post->post_parent=='52' OR $post->post_parent=='280' OR $post->post_parent=='66' ):
  include("sidebars/sidebar2006.php");
  
// Seminar 2001, Robert Menasse
elseif ( is_page('287') OR $post->post_parent=='287' OR $post->post_parent=='290' ):
  include("sidebars/sidebar2001.php");

endif; ?>

</div><!-- end sidecolumn -->
