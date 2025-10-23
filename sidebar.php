<?php
/*
$video = ' <img src="' . get_bloginfo('template_directory') . '/images/video.gif" width="28" height="9">';
$abstract = ' <img src="' . get_bloginfo('template_directory') . '/images/abstract.gif" width="46" height="9">';
$fulltext = ' <img src="' . get_bloginfo('template_directory') . '/images/volltext.gif" width="45" height="9">';
*/
?>

<div class="sidecolumn">

<?php

$seminarIDs = getSeminars();
foreach($seminarIDs as $seminarID) {
  if (is_front_page() AND (is_page($seminarID) OR ($post->post_parent==$seminarID))) {
    makeSidebar($seminarID);
  } elseif (is_page($seminarID) OR ($post->post_parent==$seminarID)) {
    makeSidebar($seminarID);
  }
}

?>

</div><!-- end sidecolumn -->
