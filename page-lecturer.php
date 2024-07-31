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



// Check DB for contributions
$args = array(
  'order'       => 'ASC',
  'orderby'     => 'datum_und_uhrzeit',
  'meta_key'    => 'vortragender',
  'meta_value'  => $lecturer,
  'post_type'   => 'page',
  'post_status' => 'publish'
); 
$lectures = get_posts($args);

if (count($lectures) == 0 ) {
  http_response_code(404);
  include('404.php');
  die();
}

get_header(); 

?>

<div class="font-medium text-6xl p-8 text-center">
  <span class="italic"><?php echo $lecturer; ?></span>
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
foreach($lectures as $lecture) {
  $parent = get_post_parent($lecture->ID);
  $lecturer = get_field('author_name', $parent->ID);
  $lecturer_link = urlencode(strtolower($lecturer));

?>
    <tbody>
      <tr>

        <td style="background-color:<?php echo get_field('farbe', $parent->ID); ?>;">
          <a href="<?php echo get_permalink($parent->ID); ?>">
            <?php echo get_field('jahr', $parent->ID); ?>
          </a>
        </td>
        <td>
          <a href="<?php echo home_url(); ?>/archiv/<?php echo $lecturer_link; ?>">
            <?php echo $lecturer; ?>
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




