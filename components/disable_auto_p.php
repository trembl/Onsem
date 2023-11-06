<?php

// Disable Auto <p>

// remove <p>
remove_filter('the_content',  'wpautop');
//remove_filter('comment_text', 'wpautop');

/*
the_excerpt()               // with <p>
echo get_the_excerpt()      // without
*/


// replace \n with <br />
// substitute <br /> for line breaks in the content
function addLineBreaks($content) {
   return str_replace("\n", "\n<br />", $content);
}
add_filter('the_content', 'addLineBreaks');


?>
