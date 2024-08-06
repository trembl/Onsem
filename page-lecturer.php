<?php
/*
Template Name: Lecturer
*/

// GET lecturer from query
$lecturer_url = get_query_var('lecturer');

// Decode URL
$lecturer = urldecode($lecturer_url);

// Capitalize
$lecturer = str_replace("-", " - ", $lecturer); // special case: Kaiser-Mühlecker
$lecturer = ucwords($lecturer);
$lecturer = str_replace(" - ", "-", $lecturer);

$lecturerObj = accumulateLecturers($lecturer);
if (count($lecturerObj) == 0 ) {
  http_response_code(404);
  include('404.php');
  die();
}
$name = $lecturerObj['name'];
$count = count($lecturerObj['ID']);

get_header(); 
?>

<div class="font-medium text-6xl p-8 text-center">
  <span class="italic"><?php echo $name; ?> <sup><?php echo $count; ?></sup></span>
</div>

<div class="p-8 font-medium text-2xl">
  <table class="table-auto w-full">
    <thead>
      <tr>
        <th scope="col">Seminar</th>
        <th scope="col">Autor</th>
        <th scope="col">Title</th>
      </tr>
    </thead>
<?php

$args = array(
  'post_type'      => 'page',
  'posts_per_page' => -1,
  'post__in'       => $lecturerObj['ID'],
  'meta_key'       => 'datum_und_uhrzeit',
  'orderby'        => 'meta_value',
  'order'          => 'ASC'
);
$posts = get_posts($args);


foreach($posts as $lecture) {
  $parent = get_post_parent($lecture->ID);
  $author_name = get_field('author_name', $parent->ID);
  $author_link = urlencode(strtolower($author_name));
?>
    <tbody>
      <tr>

        <td style="background-color:<?php echo get_field('farbe', $parent->ID); ?>;">
          <a href="<?php echo get_permalink($parent->ID); ?>">
            <?php echo get_field('jahr', $parent->ID); ?>
          </a>
        </td>
        <td>
          <a href="<?php echo home_url(); ?>/archiv/<?php echo $author_link; ?>">
            <?php echo $author_name; ?>
          </a>
        </td>
        <td>
          <a href="<?php echo get_permalink($lecture->ID); ?>">
            <?php echo $lecture->post_title; ?>
          </a>
        </td>
      </tr>
<?php
}
?>
    </tbody>
  </table>
</div>

<?php get_footer(); ?>




