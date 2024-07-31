<?php 
/*

Notes: Article Main Page
*/

get_header(); 

$lecturer = get_field('vortragender');

// split by ", " // if more than 1
$lecturers = explode(", ", $lecturer);
?>

<div class="font-medium text-6xl p-8">
  <span class="italic">
<?php
foreach($lecturers as $lecturer) {
  $link = urlencode(strtolower($lecturer));
?>
    <a href="<?php echo home_url(); ?>/archiv/<?php echo $link; ?>">
      <?php echo $lecturer; ?>
    </a>
    

<?php
}
?>

  </span>
  <span class=""><?php the_title(); ?></span> <?php edit_post_link('<sup>✎</sup>');?>
</div>
<div id="content">
  <div>
<?php

the_markdown_content();

if( have_rows('videos') ):
  while( have_rows('videos') ) : the_row();
    echo '<div style="padding:56.25% 0 0 0;position:relative;">';
    echo '<iframe src="https://player.vimeo.com/video/'. get_sub_field('video') .'" frameborder="0" allow="autoplay; fullscreen" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe>';
    echo '</div>';
  endwhile;
endif;

?>
  </div>
  <div class="">
<?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>