<?php
/*
Template Name: Seminar
Notes: Author Home Page
*/

get_header(); ?>

<div class="font-medium text-6xl py-8 text-center italic">
  <a href="<?php echo home_url(); ?>/"><?php the_title(); edit_post_link('<sup>✎</sup>');?></a>
</div>
<div id="content">
  <div>
<?php the_markdown_content(); ?>
  </div>
  <div class="">
<?php get_sidebar(); ?>
  </div>
</div>


<?php get_footer(); ?>
