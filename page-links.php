<?php
/*
Template Name: Links
*/

get_header(); ?>

<div class="articlecolumn">
<?php while ( have_posts() ) : the_post(); ?>
<div class="articlehead">
<?php
the_title();
edit_post_link('*');
?>
</div>

<div  id="links">
<?php

//wp_list_bookmarks();
// show links


$terms = get_terms('link_category', array(
	'orderby'       => 'id', 	// id, slug, count, name
	'order'         => 'DESC',
));
foreach($terms as $term) {
	echo '<h3>' . $term->name .'</h3>';
	
	$bookmarks = get_bookmarks( array(
					'orderby'		=> 'name',
					'order'			=> 'ASC',
					'category'		=>	$term->term_id
				));

	// Loop through each bookmark and print formatted output
	foreach ( $bookmarks as $bm ) { 
		echo '<a class="relatedlink" href="'.$bm->link_url.'">'.$bm->link_name."</a> ";
		if (!empty($bm->link_description)) {
			echo $bm->link_description . "";
		}
		echo "<br />\n<br />\n";
	}
	
}
	



?>
</div>
	
<?php endwhile; ?>
</div>
	
<?php
get_sidebar();
get_footer();
?>

