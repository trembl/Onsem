<?php
/*
Template Name: Seminar
Notes: Author Home Page
*/

get_header(); ?>

<div class="body text">
  <div class="row">
    <div class="column column1">
      <?php the_content(); ?>
    </div>
    <div class="column column2">
<?php get_sidebar(); ?>
    </div>
  </div><!-- row -->
</div><!-- body text -->

<?php get_footer(); ?>
