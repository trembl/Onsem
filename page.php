<?php 
/*

Notes: Article Main Page
*/

get_header(); ?>

<div class="body text">
  <div class="row">
    <div class="column column1">

      <h1 class="mt0"><?php the_title(); edit_post_link('<sup>✎</sup>');?></h1>
      <h2><?php

      // Show "Vortragender", if Custom Field exists

      // Old Post-meta
      $vortragender = get_post_meta($post->ID, 'Vortragender', true);

      // New ACF overrides Old Post-meta
      $vortragender = get_field('vortragender');
      
      $lecturer = get_field('lecturer');
      
      if ($lecturer) {
        $name = $lecturer['display_name'];
        echo "<a href='".the_permalink($lecturer->ID)"'>$name</a>\n";
      } else if ($vortragender) {
        echo "<a href=''>$vortragender</a>\n";
      }

      ?></h2>


<?php the_content(); ?>
<?php
      if( have_rows('videos') ):
        while( have_rows('videos') ) : the_row();
          echo '<iframe src="https://player.vimeo.com/video/'. get_sub_field('video') .'" width="450" height="253" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>';
        endwhile;
      endif;
?>
    </div>
    <div class="column column2">
<?php get_sidebar(); ?>
    </div>
  </div><!-- row -->
</div><!-- body text -->

<?php get_footer(); ?>