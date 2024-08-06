<?php
/*
Template Name: Normal
*/

get_header(); 

?>

<div class="font-medium text-6xl p-8 text-center">
  <span class=""><?php the_title(); ?></span> <?php edit_post_link('<sup>✎</sup>');?>
</div>
<div id="normal">
  <div>
<?php the_markdown_content(); ?>
  </div>
</div>

<?php get_footer(); ?>