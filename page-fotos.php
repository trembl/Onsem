<?php
/*
Template Name: Fotos
*/

get_header(); ?>

<div class="articlecolumn" id="bilder">
<?php while ( have_posts() ) : the_post(); ?>
<div class="articlehead">
<?php
the_title();
edit_post_link('*');
?>
</div>

<?php wp_link_pages('before=<div>&after=</div>'); ?>
<br />

<?php  the_content(); ?>	

<br />
<?php wp_link_pages('before=<div>&after=</div>'); ?>


<?php endwhile; ?>
</div>
	
<?php
//get_sidebar();
get_footer();
?>

