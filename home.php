<?php get_header(); ?>

<div class="newscolumn">
<?php while ( have_posts() ) : the_post(); ?>
	
<div class="newsitem">
<h3><?php the_title(); ?></h3>
<?php the_author(); ?> am <?php the_date('j.n.Y'); ?> <?php edit_post_link('<em>Bearbeiten</em>'); ?>
<br />
<br />
<?php
the_content();	
?>
</div>

<?php endwhile; ?>
</div>
	
<?php 
//get_sidebar();
get_footer();
?>
