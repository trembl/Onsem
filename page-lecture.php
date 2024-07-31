<?php
/*
Template Name: Lecture
*/

get_header(); ?>

<div class="articlecolumn">
<?php while ( have_posts() ) : the_post(); ?>
<div class="articlehead">
<?php  the_title();
edit_post_link(' [edit]');

// Show "Vortragender", if Custom Field exists

// Old Post-meta
//$vortragender = get_post_meta($post->ID, 'Vortragender', true);

// New ACF overrides Old Post-meta
$vortragender = get_field('vortragender');

if ($vortragender) {
  echo "<div class=\"vortragender\">$vortragender</div>\n";
}

?>

</div>

<?php the_content(); ?>

<?php
if( have_rows('videos') ):
  while( have_rows('videos') ) : the_row();
    echo '<iframe src="https://player.vimeo.com/video/'. get_sub_field('video') .'" width="450" height="253" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>';
  endwhile;
endif;
?>


<?php endwhile; ?>
</div>

<?php
// if page or parent is seminar2010

get_sidebar();
get_footer(); ?>
