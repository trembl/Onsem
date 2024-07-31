<?php
/*
Template Name: Lesereise
*/

get_header(); ?>

<div class="articlecolumn">
<?php while ( have_posts() ) : the_post(); ?>
<div class="articlehead">
<?php
the_title();
edit_post_link(' [edit]');?>

</div>

<?php the_content(); ?>


<table>
<?php if( have_rows('lesereise') ): while ( have_rows('lesereise') ) : the_row(); ?>
  <tr>
    <td><?php the_sub_field('datum'); ?></td>
    <td><?php the_sub_field('ort'); ?></td>
    <td><?php the_sub_field('veranstaltung'); ?></td>
  </tr>
<?php endwhile; endif; ?>
</table>




<?php endwhile; ?>
</div>

<?php
// if page or parent is seminar2010

get_sidebar();
get_footer(); ?>
