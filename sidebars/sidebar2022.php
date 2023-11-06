<a href="<?php echo home_url(); ?>/seminar2022/">
  <div class="bild">
    <img src="<?php echo get_field('author_image', $parent_id)['sizes']['medium_large']; ?>" />
  </div>
</a>
<div class="byline">
  <strong><?php the_field('byline_author', $parent_id); ?></strong> <?php the_field('byline_credit', $parent_id); ?>
</div>
<?php 

//id of top page
makeTimetable($parent_id);

?>
