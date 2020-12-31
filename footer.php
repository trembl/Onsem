    <footer>
      <div class="menu">
<?php
foreach (wp_get_nav_menu_items('navigation-menu') as $m) {
  echo "      <a href=\"$m->url\">$m->title</a> &nbsp;\n";
}
?>
      </div>
      <div id="copyright">
      </div>
      <div class="unterstutzung">
        Mit Unterstützung des Österreichischen Kulturforums Tokio
        und des <img src="http://www.onsem.info/images/logos/oeadlogo.jpg" height="15" width="60"><br />
        <img src="http://www.onsem.info/images/logos/okf_horizontal_logotype_digital_black.png" width="450">
      </div>
    </footer>

  </div>
</body>
</html>
