<?php get_header(); ?>

<div class="articlecolumn">
<?php while ( have_posts() ) : the_post(); ?>
<div class="articlehead">
<?php  the_title();
edit_post_link('*');
// Show Vortragender, if Custom Field exists
//$vortragender = get_post_meta($post->ID, 'Vortragender', true);
if ($vortragender) {
	echo "<div class=\"vortragender\">$vortragender</div>\n";
} ?>
</div>


<?php  the_content(); ?>	
<?php endwhile; ?>
</div>
	
<?php 

//get_sidebar();
get_footer();

?>
