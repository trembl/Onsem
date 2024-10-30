<?php
/*
Template Name: Seminar
Notes: Author Home Page
*/

get_header(); ?>

<div id="title" class="font-medium text-6xl py-8 text-center">
  <a href="<?php echo home_url(); ?>/"><?php the_title(); ?></a> <?php edit_post_link('<sup>✎</sup>');?>
</div>
<?php if (is_front_page()) { ?>
<div class="font-medium text-4xl px-8 pb-8 text-center">
  <?php the_field("seminar_info"); ?>
</div>
<?php } ?>
<div id="content">
  <div>
<?php showImage($post->ID); ?>
<?php the_markdown_content(); ?>
  </div>
  <div><!-- sidebar -->
<?php get_sidebar(); ?>
  </div><!-- END sidebar -->
</div><!-- END content -->


<?php get_footer(); ?>
