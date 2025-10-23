

  <footer class= >
    <div class="p-8 container mx-auto">
      <div class="text-lg italic text-center">
<?php

$seminarIDs = getSeminars();
foreach($seminarIDs as $seminarID) {
  if ( (is_front_page() AND is_page($seminarID)) OR is_page($seminarID) OR $post->post_parent==$seminarID) {
    $year = get_field('jahr', $seminarID);
    if ($year < 2023) {
?>
        Mit Unterstützung des <a href="https://www.austrocult.jp">Österreichischen Kulturforums Tokio</a>
        und des<a href="https://oead.at">OeAD</a>.
        <br />
        <a href="https://www.austrocult.jp"><img class="inline" src="<?php echo bloginfo('template_directory'); ?>/images/OKF_horizontal_logotype_digital_black_acf.png" width="350"></a>
        <a href="https://oead.at"><img class="inline" src="<?php echo bloginfo('template_directory'); ?>/images/OeAD_LogoSolo.jpg" width="150"></a>
<?php
    } else {
?>
        Eine Veranstaltung des <a href="https://dept.sophia.ac.jp/is/ei/⁩">Europa-Instituts der Sophia-Universität</a>.
        Mit Unterstützung des <a href="https://www.austrocult.jp">Österreichischen&nbsp;Kulturforums&nbsp;Tokio</a>
        und des <a href="https://oead.at">OeAD</a>.
        <br />
        <a href="https://dept.sophia.ac.jp/is/ei/⁩"><img class="inline" src="<?php echo bloginfo('template_directory'); ?>/images/sophia-institute.jpg" width="80"></a>
        <a href="https://www.austrocult.jp"><img class="inline" src="<?php echo bloginfo('template_directory'); ?>/images/OKF_horizontal_logotype_digital_black_acf.png" width="350"></a>
        <a href="https://oead.at"><img class="inline" src="<?php echo bloginfo('template_directory'); ?>/images/OeAD_LogoSolo.jpg" width="150"></a>
<?php
    }
  }
}

?>
      </div>
    </div>
    <div class="menu menu-bottom">
      <a href="<?php echo home_url(); ?>">♨️ Onsem 📖</a>
  <?php showMenu('top-menu'); ?>
    </div>
  </footer>

</div><!--end page -->
<?php wp_footer(); ?>

</body>
</html>

