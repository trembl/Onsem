<?php
/*
Template Name: Seminar
Notes: Author Home Page
*/

get_header(); ?>

<div class="font-medium text-6xl py-8 text-center">
  <a href="<?php echo home_url(); ?>/"><?php the_title(); ?></a> <?php edit_post_link('<sup>✎</sup>');?>
</div>
<?php if (is_front_page()) { ?>
<div class="font-medium text-4xl px-8 pb-8 text-center">
  33. Seminar zur österreichischen 🇦🇹 Gegenwartsliteratur in Japan 🇯🇵オーストリア現代文学ゼミナール <br />
  16. & 17. November 2024, Sophia Universität, Tokyo
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
