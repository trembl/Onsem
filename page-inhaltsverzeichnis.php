<?php
/*
Template Name: Inhaltsverzeichnis
*/

get_header(); ?>

<div class="articlecolumn inhaltsverzeichnis">
<?php while ( have_posts() ) : the_post(); ?>
<div class="articlehead">
<?php the_title();
edit_post_link('*');
?>
</div>
<?php endwhile;


// get all texts with custom field 'Volltext'

$args = array(
	'sort_order' => 'ASC',
	'sort_column' => 'post_title',
	'meta_key' => 'volltext',
//	'meta_value' => 'true',
	'post_type' => 'page',
	'post_status' => 'publish'
); 
$pages = get_posts($args);

$seminarPages = array();
$lecturerPages = array();



foreach($pages as $page) {
	// add page to seminarPages
	$parentID = $page->post_parent;
	if ( !array_key_exists($parentID, $seminarPages) ) {
		$seminarPages[$parentID] = array();
	}
	$seminarPages[$parentID][] = $page;
	
	// add page to lecturerPages
	//$lecturer = get_post_meta($page->ID, 'Vortragender', true);
	if (!array_key_exists($lecturer, $lecturerPages)) {
		$lecturerPages[$lecturer] = array();
	}
	$lecturerPages[$lecturer][] = $page;

}
?>


<h3>Verfasser</h3>
<?
foreach($lecturerPages as $lecturerName=>$lectures) {
	//$lecturerPage = get_page($lecturerID);
	echo "<h3><em>". $lecturerName . "</em></h3>";
	
	foreach($lectures as $page) {
		$parentID = $page->post_parent;
		$parent = get_page($parentID);
		echo '<a href="' . get_permalink($page->ID) . '">' .  strip_tags($page->post_title, "<em>, </em>") . "</a> ";
		echo '(<a href="' . get_permalink($parent->ID) . '">Seminar '. ltrim($parent->post_name, "seminar") . "</a> mit " . $parent->post_title .") <br />";
	}
}

?>

<br />
<br />
<h3>Seminare</h3>
<?
//print_r($seminarPages);
foreach($seminarPages as $seminarID=>$seminar) {
	$semiarPage = get_page($seminarID);
	echo "<h3><em>Seminar ". ltrim($semiarPage->post_name, "seminar") . " mit " . $semiarPage->post_title . "</em></h3>";
	
	foreach($seminar as $page) {
		//echo get_post_meta($page->ID, 'Vortragender', true) . ": ";	
		echo '<a href="' . get_permalink($page->ID) . '">' .  strip_tags($page->post_title, "<em>, </em>") . "</a><br />";
	}
}

?>



</div>




	
<?php get_footer(); ?>
