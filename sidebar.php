<?php

// Sidebar. Image & Timetable

$video = ' <img src="' . get_bloginfo('template_directory') . '/images/video.gif" width="28" height="9">';
$abstract = ' <img src="' . get_bloginfo('template_directory') . '/images/abstract.gif" width="46" height="9">';
$fulltext = ' <img src="' . get_bloginfo('template_directory') . '/images/volltext.gif" width="45" height="9">';

?>

<div class="sidecolumn">

<?php

// Seminar 2022 Karl Lubomirski
if (is_front_page() OR is_page('4289') OR $post->post_parent=='4289'):
  $parent_id = '4289';
  
// Seminar 2021 Julya Rabinowich
elseif (is_page('4105') OR $post->post_parent=='4105'):
  $parent_id = '4105';

// Seminar 2020 Daniel Wisser
elseif (is_page('3930') OR $post->post_parent=='3930'):
  $parent_id = '3930';

// Seminar 2019 Thomas Stangle
elseif (is_page('3688') OR $post->post_parent=='3688'):
  $parent_id = '3688';

// Seminar 2018 Raoul Schrott
elseif (is_page('3560') OR $post->post_parent=='3560'):
  $parent_id = '3560';

// Seminar 2017 Reinhard Kaiser-Mühlecker
elseif (is_page('3381') OR $post->post_parent=='3381'):
  $parent_id = '3381';

// Seminar 2016 Clemens J. Setz
elseif (is_page('3207') OR $post->post_parent=='3207'):
 $parent_id = '3207';

// Seminar 2015, Christoph Ransmayr
elseif (is_page('3077') OR $post->post_parent=='3077'):
  $parent_id = '3077';

// Seminar 2014, Sabine Gruber
elseif (is_page('2866') OR $post->post_parent=='2866'): 
  $parent_id = '2866';
?>
  
  
<a href="<?php echo home_url(); ?>/seminar2014/">
<div class="bild">
<img src="https://www.onsem.info/wp-content/uploads/2014/05/SabineGruberFeb2011a.jpg" width="100%" />
</div>
</a>
<div class="bilduberschrift">Sabine Gruber</div>
<div class="bildunterschrift"></div>

<div class="programm">
<table class="schedule">
<tr><td colspan="2" class="schedule-header">Freitag, 14. November 2014</td></tr>
<tr><td class="schedule-time">18:00</td><td class="schedule-alt">Abendessen</td></tr>
<tr><td class="schedule-time">19:30</td><td><?php showLecture(2948); // Vogl ?></td></tr>
<tr><td class="schedule-time">20:15</td><td class="schedule-alt"><?php showLecture(3043); // Lesung Sabine Gruber?></td></tr>

<tr><td colspan="2" class="schedule-header">Samstag, 15. November 2014</td></tr>
<tr><td class="schedule-time">09:30</td><td class="schedule-alt"><?php showLecture(2934); // Überall fremd – Sabine Grubers Roman “Aushäusige” ?></td></tr>
<tr><td class="schedule-time">10:00</td><td><?php showLecture(2936); // Die Sprache schneit, unablässig schweigt sie Neues hervor, wirbelt an den Rändern – Über die Lyrik Sabine Grubers ?></td></tr>
<tr><td class="schedule-time">10:30</td><td class="schedule-alt"><?php showLecture(3045); // Lesung Sabine Gruber ?></td></tr>
<tr><td class="schedule-time">11:00</td><td><?php showLecture(2938); //  Wassermassen ?></td></tr>
<tr><td class="schedule-time">11:30</td><td class="schedule-alt"><?php showLecture(2940); //  Zumutung ?></td></tr>
<tr><td class="schedule-time">12:15</td><td>Mittagessen</td></tr>
<tr><td class="schedule-time">15:00</td><td class="schedule-alt"><?php showLecture(2942); // Den Toten ?></td></tr>
<tr><td class="schedule-time">15:30</td><td><?php showLecture(2944); // Organtransplatation ?></td></tr>
<tr><td class="schedule-time">16:30</td><td>Werkstattgespräch mit Sabine Gruber, Masahiko Tsuchiya und Shinichi Suzuki</td></tr>
<tr><td class="schedule-time">17:30</td><td class="schedule-alt">Lesung Sabine Gruber</td></tr>
<tr><td class="schedule-time">18:30</td><td>Abendessen</td></tr>
<tr><td class="schedule-time">19:30</td><td class="schedule-alt"><?php showLecture(2946); // 111 Orte ?></td></tr>
<tr><td class="schedule-time">21:00</td><td>Hörspielabend: “Bis dass ein Tod” - ein Hörspiel von Sabine Gruber (mit Einleitung)</td></tr>

<tr><td colspan="2" class="schedule-header">Sonntag, 16. November 2014</td></tr>
<tr><td class="schedule-time">09:30</td><td class="schedule-alt"><?php showLecture(2952); // Stillback ?></td></tr>
<tr><td class="schedule-time">10:00</td><td><?php showLecture(2954); ?></td></tr>
<tr><td class="schedule-time">10:30</td><td class="schedule-alt"><?php showLecture(2956); ?></td></tr>
<tr><td class="schedule-time">11:00</td><td>Podiumsdiskussion</td></tr>
<tr><td class="schedule-time">11:30</td><td class="schedule-alt">Lesung Sabine Gruber</td></tr>
<tr><td class="schedule-time">12:00</td><td >Schlussworte</td></tr>

</table>
</div>



<?php
// Seminar 2013, Herbert J. Wimmer
elseif (is_page('2449') OR $post->post_parent=='2449'): ?>

<a href="<?php echo home_url(); ?>/seminar2013/">
<div class="bild">
<img src="<?php echo home_url(); ?>/wp-content/themes/onsem/images/autoren/wimmer.png" width='460' />
</div>
</a>
<div class="bilduberschrift">Herbert J. Wimmer</div>
<div class="bildunterschrift"></div>

<div class="programm">
<table class="schedule">
<tr><td colspan="2" class="schedule-header">Freitag, 15. November 2013</td></tr>
<tr><td class="schedule-time">18:00</td><td class="schedule-alt">Eröffnung und Abendessen</td></tr>
<tr><td class="schedule-time">20:00</td><td><?php showLecture(2675); // Wiener Wut ­ Einführendes Referat (Walter Vogl) ?></td></tr>
<tr><td class="schedule-time">20:30</td><td class="schedule-alt"><?php showLecture(2678); // Wortneubildungen in Wimmers Lyrik und Prosa (Christian Zemsauer) ?></td></tr>
<tr><td class="schedule-time">21:00</td><td><?php showLecture(2680); // Erste Lesung?> </td></tr>

<tr><td colspan="2" class="schedule-header">Samstag, 16. November 2013</td></tr>
<tr><td class="schedule-time">09:30</td><td class="schedule-alt"><?php showLecture(2682); // Innere Stadt ?></td></tr>
<tr><td class="schedule-time">10:00</td><td><?php showLecture(2684); // Nervenlauf (Kazuo Hosaka) ?></td></tr>
<tr><td class="schedule-time">10:30</td><td class="schedule-alt"><?php showLecture(2686); // Zweite Lesung HJW ?></td></tr>
<tr><td class="schedule-time">11:00</td><td><?php showLecture(2688); //Gedichte als ?></td></tr>
<tr><td class="schedule-time">11:30</td><td class="schedule-alt"><?php showLecture(2690); // Leseeindrücke ?></td></tr>
<tr><td class="schedule-time">12:15</td><td>Mittagspause</td></tr>
<tr><td class="schedule-time">15:00</td><td class="schedule-alt"><?php showLecture(2692); //Über Herbert J. Wimmer und Elfriede Gerstl ?></td></tr>
<tr><td class="schedule-time">15:30</td><td><?php showLecture(2694); //Werkstattgespräch ?></td></tr>
<tr><td class="schedule-time">16:30</td><td class="schedule-alt"><?php showLecture(2696); // Dritte Lesung ?></td></tr>
<tr><td class="schedule-time">17:00</td><td><?php showLecture(2698); // Entscheidung (Wakiko Kobayashi) ?></td></tr>
<tr><td class="schedule-time">18:00</td><td class="schedule-alt">Abendessen</td></tr>
<tr><td class="schedule-time">19:30</td><td><?php showLecture(2778); // Prater ?></td></tr>

<tr><td colspan="2" class="schedule-header">Sonntag, 17. November 2013</td></tr>
<tr><td class="schedule-time">09:30</td><td class="schedule-alt"><?php showLecture(2702); // Ein medienkritisches Sprachspiel ?></td></tr>
<tr><td class="schedule-time">10:00</td><td><?php showLecture(2704); // Membran I (Erich Meuthen) ?></td></tr>
<tr><td class="schedule-time">10:30</td><td class="schedule-alt"><?php showLecture(2706); // Membran I ?></td></tr>
<tr><td class="schedule-time">11:00</td><td><?php showLecture(2708); // Diskussion ?></td></tr>
<tr><td class="schedule-time">11:30</td><td class="schedule-alt"><?php showLecture(2710); // Vierte Lesung HJW ?></td></tr>
<tr><td class="schedule-time">12:00</td><td><?php showLecture(2712); // Schlussworte ?></td></tr>

</table>
</div>

<?php
// Seminar 2012, Doron Rabinovici
elseif (is_page('2167') OR $post->post_parent=='2167'): ?>

<a href="<?php echo home_url(); ?>/seminar2012/">
<div class="bild">

<img src="<?php echo home_url(); ?>/wp-content/themes/onsem/images/autoren/Rabinovici.png" width='450' height='338'/>

</div>
</a>
<div class="bilduberschrift">Doron Rabinovici</div>
<div class="bildunterschrift"></div>

<div class="programm">
<table class="schedule">
<tr><td colspan="2" class="schedule-header">Freitag, 23. November 2012</td></tr>

<tr><td class="schedule-time">18:00</td><td class="schedule-alt">Eröffnung und Abendessen</td></tr>
<tr><td class="schedule-time">20:00</td><td><?php showLecture(2237); // Theresa Specht ?> </td></tr>
<tr><td class="schedule-time">21:00</td><td class="schedule-alt"><?php showLecture(2318); // Erste Lesung Doron Rabinovici ?></td></tr>

<tr><td colspan="2" class="schedule-header">Samstag, 24. November 2012</td></tr>

<tr><td class="schedule-time">09:30</td><td class="schedule-alt"><?php showLecture(2239); // Yokura ?></td></tr>
<tr><td class="schedule-time">10:15</td><td><?php showLecture(2241); // Hiroshi Yamamoto ?></td></tr>
<tr><td class="schedule-time">11:00</td><td class="schedule-alt"><?php showLecture(2323); // Zweite Lesung Doron Rabinovici ?></td></tr>
<tr><td class="schedule-time">11:30</td><td><?php showLecture(2244); // Motoko Yajin ?></td></tr>
<tr><td class="schedule-time">12:15</td><td class="schedule-alt">Mittagessen</td></tr>
<tr><td class="schedule-time">15:00</td><td><?php showLecture(2331); // Doron Rabinovici im Radio ?></td></tr>
<tr><td class="schedule-time">16:00</td><td class="schedule-alt"><?php showLecture(2329); // Werkstattgespräch mit dem Autor ?></td></tr>
<tr><td class="schedule-time">17:00</td><td><?php showLecture(2325); // Dritte Lesung Doron Rabinovici ?></td></tr>
<tr><td class="schedule-time">18:00</td><td class="schedule-alt">Abendessen</td></tr>
<tr><td class="schedule-time">19:00</td><td><?php showLecture(2247); // Erich Meuthen ?></td></tr>
<tr><td class="schedule-time">20:00</td><td class="schedule-alt"><?php showLecture(2341); // Fernsehaufnahmen mit Doron Rabinovici ?></td></tr>

<tr><td colspan="2" class="schedule-header">Sonntag, 25. November 2012</td></tr>

<tr><td class="schedule-time">09:30</td><td class="schedule-alt"><?php showLecture(2249); // Leopold Federmair ?></td></tr>
<tr><td class="schedule-time">10:00</td><td><?php showLecture(2253); // Daina Terasawa ?></td></tr>
<tr><td class="schedule-time">10:30</td><td class="schedule-alt"><?php showLecture(2314); // Diskussion über <em>Andernorts</em> ?></td></tr>
<tr><td class="schedule-time">11:30</td><td><?php showLecture(2327); // Vierte Lesung Doron Rabinovici ?></td></tr>
<tr><td class="schedule-time">12:00</td><td class="schedule-alt">Schlussworte</td></tr>

</table>
</div>

<?php
// Seminar 2011, Erwin Einzinger
elseif ( is_page('1750') OR $post->post_parent=='1750'): ?>

<a href="<?php echo home_url(); ?>/seminar2011/">
<div class="bild">
<img src="<?php bloginfo('template_directory'); ?>/images/cutouts/Einzinger.png" width='450' height='338'/>
</div>
</a>
<div class="bilduberschrift">Erwin Einzinger</div>
<div class="bildunterschrift">Foto: Hermann Heerengruber</div>

<div class="programm">
<table class="schedule">
<tr><td colspan="2" class="schedule-header">Freitag, 18. November 2011</td></tr>
<tr><td class="schedule-time">18:00</td><td class="schedule-alt">Abendessen</td></tr>
<tr><td class="schedule-time">20:00</td><td><a href="<?php echo home_url(); ?>/seminar2011/fasthuber-einfuehrung/" <?php highlight(1846); ?>>Einführungsvortrag</a> Sebastian Fasthuber <?php echo $video; ?></td></tr>
<tr><td class="schedule-time">21:00</td><td class="schedule-alt"><a href="<?php echo home_url(); ?>/seminar2011/einzinger-erste-lesung/" <?php highlight(1851); ?>>Lesung</a> Erwin Einzinger <?php echo $video; ?></td></tr>

<tr><td colspan="2" class="schedule-header">Samstag, 19. November 2011</td></tr>
<tr><td class="schedule-time">09:30</td><td class="schedule-alt"><a href="<?php echo home_url(); ?>/seminar2011/yajin-hunde-am-fenster/" <?php highlight(1854); ?>>Die Weltsicht der <em>Hunde am Fenster</em></a> Motoko Yajin <?php echo $video; ?></td></tr>
<tr><td class="schedule-time">10:15</td><td><a href="<?php echo home_url(); ?>/seminar2011/federmair-austriazismen/" <?php highlight(1856); ?>>Austriazismen, Regionalismen, Neologismen. Der kreative Umgang mit der Sprache</a> Leopold Federmair <?php echo $video; ?></td></tr>
<tr><td class="schedule-time">11:00</td><td class="schedule-alt"><a href="<?php echo home_url(); ?>/seminar2011/einzinger-zweite-lesung/" <?php highlight(1859); ?>>Lesung: Gedichte </a> Erwin Einzinger <?php echo $video; ?></td></tr>
<tr><td class="schedule-time">11:30</td><td><a href="<?php echo home_url(); ?>/seminar2011/yamao-das-wilde-brot/" <?php highlight(1866); ?>>Skurrilität in Einzingers <em>Das wilde Brot</em></a> Ryo Yamao <?php echo $video; ?></td></tr>
<tr><td class="schedule-time">12:15</td><td class="schedule-alt">Mittagessen</td></tr>
<tr><td class="schedule-time">15:00</td><td><a href="<?php echo home_url(); ?>/seminar2011/einzinger-fragestunde/" <?php highlight(1862); ?>>Fragestunde. Erwin Einzinger gibt Auskunft über sich und sein Werk <?php echo $video; ?></a></td></tr>
<tr><td class="schedule-time">18:00</td><td class="schedule-alt">Abendessen</td></tr>
<tr><td class="schedule-time">20:00</td><td><a href="<?php echo home_url(); ?>/seminar2011/vogl-unterhaltungsmusik/" <?php highlight(1881); ?>>Über <em>Aus der Geschichte der Unterhaltungsmusik</em></a> Walter Vogl <?php echo $video; ?></td></tr>
<tr><td class="schedule-time">21:00</td><td>Der Autor als Disc-Jockey. Erwin Einzinger spielt und kommentiert Unterhaltungsmusik</td></tr>

<tr><td colspan="2" class="schedule-header">Sonntag, 20. November 2011</td></tr>
<tr><td class="schedule-time">09:30</td><td class="schedule-alt"><a href="<?php echo home_url(); ?>/seminar2011/specht-virtuelle-forelle/" <?php highlight(1870); ?>>Komische Aspekte in Einzingers neuem Gedichtband <em>Die virtuelle Forelle</em></a> Theresa Specht <?php echo $video; ?></td></tr>
<tr><td class="schedule-time">10:30</td><td><a href="<?php echo home_url(); ?>/seminar2011/diskussion-dschalalabad/" <?php highlight(1874); ?>><em>Von Dschalalabad nach Bad Schallerbach</em>: Vorstellung und Diskussion</a> Erwin Einzinger <?php echo $video; ?></td></tr>
<tr><td class="schedule-time">11:30</td><td class="schedule-alt"><a href="<?php echo home_url(); ?>/seminar2011/einzinger-schlusslesung/" <?php highlight(1877); ?>>Schlusslesung</a> Erwin Einzinger <?php echo $video; ?></td></tr>
<tr><td class="schedule-time">12:15</td><td>Seminarende</td></tr>
</table>
</div>

<?php
// Seminar 2010, Lydia Mischkulnig
elseif( is_page('1356') OR $post->post_parent=='1356' OR $post->post_parent=='1519'): ?>

<a href="<?php echo home_url(); ?>/seminar2010/">
<div class="bild ">
<img src="<?php bloginfo('template_directory'); ?>/images/cutouts/Mischkulnig1.png" width="460" />
<div class="bilduberschrift">Lydia Mischkulnig</div>
<div class="bildunterschrift">Foto: Bernhard Aichner</div>
</div>
</a>

<div class="programm">
<table class="schedule">
<tr><td colspan="2" class="schedule-header">Freitag, 12. November 2010</td></tr>
<tr><td class="schedule-time">18:00</td><td class="schedule-alt">Abendessen</td></tr>
<tr><td class="schedule-time">20:00</td><td><a href="<?php echo home_url(); ?>/seminar2010/vogl-kadaver-kapriolen-kippfiguren/" <?php highlight(1522); ?>>Kadaver, Kapriolen, Kippfiguren: Einführungsvortrag</a> Walter Vogl<?php echo $abstract.$video; ?></td></tr>
<tr><td class="schedule-time">21:00</td><td class="schedule-alt"><a href="<?php echo home_url(); ?>/seminar2010/mischkulnig-erste-lesung/" <?php highlight(1580); ?>>Lesung</a> Lydia Mischkulnig <?php echo $video; ?></td></tr>

<tr><td colspan="2" class="schedule-header">Samstag, 13. November 2010</td></tr>
<tr><td class="schedule-time">09:30</td><td class="schedule-alt"><a href="<?php echo home_url(); ?>/seminar2010/tokunaga-kinderland/" <?php highlight(1524); ?>>Vortrag: Schönes Kinderland? – Zum Begriff <em>Heimat</em> in Lydia Mischkulnigs <em>Begegnung im Gebiet</em></a> Kyoko Tokunaga<?php echo $abstract.$video; ?></td></tr>
<tr><td class="schedule-time">10:30</td><td><a href="<?php echo home_url(); ?>/seminar2010/tsuchiya-identitatssuche/" <?php highlight(1586); ?>>Identitätssuche im Roman <em>Umarmung</em></a> Masahiko Tsuchiya<?php echo $video; ?></td></tr>
<tr><td class="schedule-time">11:30</td><td class="schedule-alt"> <a href="<?php echo home_url(); ?>/seminar2010/mischkulnig-zweite-lesung/" <?php highlight(1583); ?>>Lesung</a> Lydia Mischkulnig<?php echo $video; ?></td></tr>
<tr><td class="schedule-time">12:15</td><td> Mittagsessen </td></tr>
<tr><td class="schedule-time">15:00</td><td class="schedule-alt"><a href="<?php echo home_url(); ?>/seminar2010/meuthen-bildliche-rede/" <?php highlight(1537); ?>>Bildliche Rede in <em>Macht euch keine Sorgen</em> und <em>Schwestern der Angst</em></a> Erich Meuthen<?php echo $abstract.$video; ?></td></tr>
<tr><td class="schedule-time">16:00</td><td><a href="<?php echo home_url(); ?>/seminar2010/mischkulnig-dritte-lesung/" <?php highlight(1589); ?>>Lesung Lydia Mischkulnig – Anschließend: Werkstattgespräch mit der Autorin</a><?php echo $video; ?></td></tr>
<tr><td class="schedule-time">18:00</td><td class="schedule-alt">Abendessen</td></tr>
<tr><td class="schedule-time">20:00</td><td><a href="<?php echo home_url(); ?>/seminar2010/kobayashi-erich/" <?php highlight(1529); ?>>Sprich, damit ich existiere: Eine Identitätssuche körperloser Stimmen – Wakiko Kobayashi spricht über <em>Erich, der Erich</em></a> (ORF 1997); danach Aufführung des Hörspiels<?php echo $abstract.$video; ?></td></tr>

<tr><td colspan="2" class="schedule-header">Sonntag, 14. November 2010</td></tr>
<tr><td class="schedule-time">09:30</td><td class="schedule-alt"><a href="<?php echo home_url(); ?>/seminar2010/tokita-ich-problematik/" <?php highlight(1534); ?>Zur Ich-Problematik in L. Mischkulnigs neuestem Roman <em>Schwestern der Angst</em></a> Yuko Tokita<?php echo $abstract.$video; ?></td></tr>
<tr><td class="schedule-time">10:30</td><td><a href="<?php echo home_url(); ?>/seminar2010/federmair-entwurf" <?php highlight(1531); ?>>Entwurf und Verwerfung. Ekliges bei Mischkulnig</a> Leopold Federmair<?php echo $abstract.$video; ?></td></tr>
<tr><td class="schedule-time">11:30</td><td class="schedule-alt"><a href="<?php echo home_url(); ?>/seminar2010/mischkulnig-vierte-lesung/" <?php highlight(1593); ?>>Lesung</a> Lydia Mischkulnig<?php echo $video; ?></td></tr>
<tr><td class="schedule-time">12:00</td><td>Schlussworte, Ende des Seminars</td></tr>
</table>
</div>

<?php // Seminar 2009, Thomas Glavinic
elseif ( is_page('134') OR $post->post_parent=='134' OR $post->post_parent=='143' ): ?>

<a href="<?php echo home_url(); ?>/seminar2009/">
<div class="bild">
<img src="<?php bloginfo('template_directory'); ?>/images/cutouts/Glavinic.png" width="460" />
<div class="bilduberschrift">Thomas Glavinic</div>
<div class="bildunterschrift">Foto: Marco Flammang</div>
</div>
</a>

<div class="programm">
<table class="schedule">
<tr><td colspan="2" class="schedule-header">Freitag, 13. November 2009</td></tr>
<tr><td class="schedule-time">18:00</td><td class="schedule-alt">Eröffnung und Abendessen</td></tr>
<tr><td class="schedule-time">20:00</td><td><a href="<?php echo home_url(); ?>/2009/vogl-glavinic/">Einführung in das Werk Thomas Glavinics</a> Walter Vogl</td></tr>
<tr><td class="schedule-time">21:00</td><td class="schedule-alt"><a href="<?php echo home_url(); ?>/seminar2009/glavinic-begruessung/" <?php highlight(1197); ?>>Lesung</a> Thomas Glavinic<?php echo $video; ?></td></tr>

<tr><td colspan="2" class="schedule-header">Samstag, 14. November 2009</td></tr>
<tr><td class="schedule-time">09:30</td><td class="schedule-alt"><a href="<?php echo home_url(); ?>/seminar2009/lenhart-apokalypse-goes-horror/">Apokalypse goes Horror – Thomas Glavinics <em>Endzeiten</em></a> Elmar Lenhart<?php echo $video.$abstract; ?></td></tr>
<tr><td class="schedule-time">10:15</td><td><a href="<?php echo home_url(); ?>/seminar2009/yajin-medienproblematik/">Die Medienproblematik im Roman <em>Der Kameramörder</em></a> Motoko Yajin<?php echo $video.$abstract; ?></td></tr>
<tr><td class="schedule-time">11:00</td><td class="schedule-alt">Lesung Thomas Glavinic<?php echo $video; ?></td></tr>
<tr><td class="schedule-time">11:30</td><td><a href="<?php echo home_url(); ?>/seminar2009/meuthen-gewaltstruktur/">Die Motive der Gewalt und Schrift in <em>Die Arbeit der Nacht</em> und <em>Carl Haffners Liebe zum Unentschieden</em></a> Erich Meuthen<?php echo $video.$abstract; ?></td></tr>
<tr><td class="schedule-time">12:15</td><td class="schedule-alt">Mittagessen</td></tr>
<tr><td class="schedule-time">15:00</td><td><a href="<?php echo home_url(); ?>/seminar2009/glavinic-werkstattgespraech/" <?php highlight(1191); ?>> Interview und Werkstattgespräch</a><?php echo $video; ?></td></tr>
<tr><td class="schedule-time">18:00</td><td class="schedule-alt">Abendessen</td></tr>
<tr><td class="schedule-time">20:00</td><td><a href="<?php echo home_url(); ?>/seminar2009/somiya-passiv-mit-leidenschaft/">Passiv mit Leidenschaft - <em>Carl Haffners Liebe zum Unentschieden</em> und <em>Wie man leben soll</em></a> Tomoko Somiya<?php echo $video.$abstract; ?></td></tr>
<tr><td class="schedule-time">21:00</td><td class="schedule-alt">Ausschnitte aus dem Hörspiel „Der Kameramörder“ und ein Videointerview zur Verfilmung des &#8220;Kameramörder&#8221; mit Regisseur Robert Adrian Pejo</td></tr>

<tr><td colspan="2" class="schedule-header">Sonntag, 15. November 2009</td></tr>
<tr><td class="schedule-time">09:30</td><td class="schedule-alt"><a href="<?php echo home_url(); ?>/seminar2009/vortrage/suzuki-popliteratur/">Die junge Österreichische (Pop)Literatur</a> Shinichi Suzuki</a><?php echo $video; ?></td></tr>
<tr><td class="schedule-time">10:30</td><td><a href="<?php echo home_url(); ?>/seminar2009/yokura-das-bin-doch-ich/">Buchvorstellung: <em>Das bin doch ich</em></a> Andrea Yokura<?php echo $video.$abstract; ?></td></tr>
<tr><td class="schedule-time">11:30</td><td class="schedule-alt"><a href="<?php echo home_url(); ?>/seminar2009/glavinic-lesung" <?php highlight(1201); ?>>Lesung</a> Thomas Glavinic<?php echo $video; ?></td></tr>
<tr><td class="schedule-time">12:00</td><td>Schlussdiskussion, Seminarende</td></tr>
</table>
</div>

<?php // Seminar 2008, Peter Waterhouse
elseif ( is_page('24') OR $post->post_parent=='24' OR $post->post_parent=='29' OR $post->post_parent=='31'): ?>

<a href="<?php echo home_url(); ?>/seminar2008/">
<div class="bild ">
<img src="<?php bloginfo('template_directory'); ?>/images/cutouts/Waterhouse2.png" width="460" />
<div class="bilduberschrift">Peter Waterhouse</div>
<div class="bildunterschrift"></div>
</div>
</a>

<div class="programm">
<table class="schedule">
<tr><td colspan="2" class="schedule-header">Freitag, 7. November 2008</td></tr>
<tr><td class="schedule-time">18:00</td><td class="schedule-alt">Abendessen</td></tr>
<tr><td class="schedule-time">20:00</td><td>Einführungsvortrag Martin Kubaczek</td></tr>
<tr><td class="schedule-time">21:00</td><td class="schedule-alt"><a href="<?php echo home_url(); ?>/seminar2008/waterhouse-erste-lesung/" <?php highlight(228); ?>>Lesung</a> Peter Waterhouse<?php echo $video; ?></td></tr>

<tr><td colspan="2" class="schedule-header">Samstag, 8. November 2008</td></tr>
<tr><td class="schedule-time">09:30</td><td class="schedule-alt">Poetik und Weltwahrnehmung bei Waterhouse</td></tr>
<tr><td class="schedule-time">10:15</td><td>Medienkritik in <em>Krieg und Welt</em></td></tr>
<tr><td class="schedule-time">11:00</td><td class="schedule-alt"><a href="<?php echo home_url(); ?>/seminar2008/waterhouse-erstes-gespraech" <?php highlight(231); ?>>Lesung</a> Peter Waterhouse<?php echo $video; ?></td></tr>
<tr><td class="schedule-time">11:30</td><td>Peter Waterhouse und Paul Celan</td></tr>
<tr><td class="schedule-time">12:15</td><td class="schedule-alt">Mittagessen</td></tr>
<tr><td class="schedule-time">15:00</td><td>Vertonungen von Gedichten von Waterhouse (Tonaufnahmen). Anschließend Werkstattgespräch mit dem Autor<?php echo $video; ?></td></tr>
<tr><td class="schedule-time">18:00</td><td class="schedule-alt">Abendessen</td></tr>
<tr><td class="schedule-time">20:00</td><td>Waterhouse als Übersetzer</td></tr>
<tr><td class="schedule-time">21:00</td><td class="schedule-alt">Filmporträt Waterhouse</td></tr>

<tr><td colspan="2" class="schedule-header">Sonntag, 9. November</td></tr>
<tr><td class="schedule-time">09:30</td><td class="schedule-alt">Waterhouse und die Romantik</td></tr>
<tr><td class="schedule-time">10:30</td><td><a href="<?php echo home_url(); ?>/seminar2008/waterhouse-zweites-gespraech" <?php highlight(231); ?>><em>Krieg und Welt</em>: Vorstellung und Diskussion</a> Peter Waterhouse<?php echo $video; ?></td></tr>
<tr><td class="schedule-time">11:30</td><td class="schedule-alt"><a href="<?php echo home_url(); ?>/seminar2008/waterhouse-kurze-lesung/" <?php highlight(241); ?>>Lesung</a> Peter Waterhouse<?php echo $video; ?></td></tr>
<tr><td class="schedule-time">12:15</td><td>Seminarende</td></tr>
</table>
</div>

<?php // Seminar 2007, Karl-Markus Gauß
elseif ( is_page('50') OR $post->post_parent=='50' OR $post->post_parent=='110' OR $post->post_parent=='64'): ?>

<a href="<?php echo home_url(); ?>/seminar2007/">
<div class="bild ">
<img src="<?php bloginfo('template_directory'); ?>/images/cutouts/Gauss3.png" width="460" />
<div class="bilduberschrift">Karl-Markus Gauß</div>
<div class="bildunterschrift"></div>
</div>
</a>

<div class="programm">
<table class="schedule">
<tr><td colspan="2" class="schedule-header">Freitag, 10. November 2007</td></tr>
<tr><td class="schedule-time">18:00</td><td class="schedule-alt">Eröffnung und Abendessen</td></tr>
<tr><td class="schedule-time">20:00</td><td><a href="<?php echo home_url(); ?>/seminar2007/gauss-federmair-einfuehrung/" <?php highlight(166); ?>>Karl-Markus Gauß im Gespräch mit Leopold Federmair. Eine Einführung in Dialogform</a><?php echo $video; ?></td></tr>
<tr><td class="schedule-time">21:00</td><td class="schedule-alt"><a href="<?php echo home_url(); ?>/seminar2007/gauss-erste-lesung/" <?php highlight(169); ?>>Lesung</a> Karl-Markus Gauß<?php echo $video; ?></td></tr>

<tr><td colspan="2" class="schedule-header">Samstag, 11. November 2007</td></tr>
<tr><td class="schedule-time">09:30</td><td class="schedule-alt"><a href="<?php echo home_url(); ?>/seminar2007/nunokawa-reiseliteratur/" <?php highlight(191); ?>>Die Reiseliteratur von Karl-Markus Gauß</a> Yasuko Nunokawa<?php echo $video; ?></td></tr>
<tr><td class="schedule-time">10:15</td><td>Oral History als Methode</td></tr>
<tr><td class="schedule-time">11:00</td><td class="schedule-alt"><a href="<?php echo home_url(); ?>/seminar2007/gauss-zweite-lesung/" <?php highlight(175); ?>>Lesung</a> Karl-Markus Gauß<?php echo $video; ?></td></tr>
<tr><td class="schedule-time">11:30</td><td><a href="<?php echo home_url(); ?>/seminar2007/federmair-literatur-kritik//" <?php highlight(989); ?>>Literatur ist Kritik ist Literatur</a> Leopold Federmair<?php echo $video; ?></td></tr>
<tr><td class="schedule-time">12:15</td><td class="schedule-alt">Mittagessen</td></tr>
<tr><td class="schedule-time">15:00</td><td><a href="<?php echo home_url(); ?>/seminar2007/gauss-werkstattgespraech/" <?php highlight(186); ?>>Lesung und Werkstattgespräch mit dem Autor</a><?php echo $video; ?></td></tr>
<tr><td class="schedule-time">18:00</td><td class="schedule-alt">Abendessen</td></tr>
<tr><td class="schedule-time">20:00</td><td>Nationalität und Transnationalität: Karl-Markus Gauß und Stefan Zweig in Essays und Reportagen</td></tr>
<tr><td class="schedule-time">20:30</td><td class="schedule-alt">Örtlichkeiten in „Zu früh, zu spät“</td></tr>

<tr><td colspan="2" class="schedule-header">Sonntag, 12. November 2007</td></tr>
<tr><td class="schedule-time">09:30</td><td class="schedule-alt">Anmerkungen zu Gauß-Lektüren</td></tr>
<tr><td class="schedule-time">10:30</td><td>„Die Hundeesser von Svinia“: Vorstellung und Diskussion</td></tr>
<tr><td class="schedule-time">11:45</td><td class="schedule-alt"><a href="<?php echo home_url(); ?>/seminar2007/gauss-zweite-lesung/" <?php highlight(183); ?>>Lesung</a> Karl-Markus Gauß<?php echo $video; ?></td></tr>
<tr><td class="schedule-time">12:15</td><td>Seminarende</td></tr>
</table>
</div>

<?php // Seminar 2001, Franzobel
elseif ( is_page('52') OR $post->post_parent=='52' OR $post->post_parent=='280' OR $post->post_parent=='66' ): ?>

<a href="<?php echo home_url(); ?>/seminar2006/">
<div class="bild ">
<img src="<?php bloginfo('template_directory'); ?>/images/cutouts/Franzobel2.png" width="460" />
<div class="bildunterschrift"></div>
</div>
</a>

<div class="programm">
<table class="schedule">
<tr><td colspan="2" class="schedule-header">Freitag, 10. November 2006</td></tr>
<tr><td class="schedule-time">18:00</td><td class="schedule-alt">Abendessen</td></tr>
<tr><td class="schedule-time">20:00</td><td>Walter Ruprechter: Streiflichter auf Franzobel</td></tr>
<tr><td class="schedule-time">20:45</td><td class="schedule-alt"><a href="<?php echo home_url(); ?>/seminar2007/franzobel-lesung/" <?php highlight(282); ?>>Lesung</a> Franzobel<?php echo $video; ?></td></tr>

<tr><td colspan="2" class="schedule-header">Samstag, 11. November 2006</td></tr>
<tr><td class="schedule-time">09:30</td><td class="schedule-alt">Thomas Eder (Wien): „Anbetung des Beschädigten“. Zum Manierismus im Werk von Franzobel.</td></tr>
<tr><td class="schedule-time">10:45</td><td><a href="<?php echo home_url(); ?>/seminar2007/federmair-nubes/" <?php highlight(840); ?>>Sprachspiel und Volkstheater. Nestroy, Hermanovksy- Orlando, Franzobel</a> Leopold Federmair<?php echo $fulltext; ?></td></tr>
<tr><td class="schedule-time">12:00</td><td class="schedule-alt"> Mittagessen </td></tr>
<tr><td class="schedule-time">15:30</td><td>Lesung von Franzobel</td></tr>
<tr><td class="schedule-time">16:30</td><td class="schedule-alt">Werkstattgespräch mit Franzobel</td></tr>
<tr><td class="schedule-time">18:00</td><td>Abendessen</td></tr>
<tr><td class="schedule-time">20:00</td><td class="schedule-alt">Yuko Sekine: Österreichische Geschichtsmythen bei Franzobel &#8211; am Beispiel von <i>Mayerling. Die österreichische Tragödie.</i></td></tr>
<tr><td class="schedule-time">20:30</td><td><i>Der König von Absurdistan.</i> ORF-Filmporträt von Franzobel</td></tr>

<tr><td colspan="2" class="schedule-header">Sonntag, 12. November 2006</td></tr>
<tr><td class="schedule-time">09:30</td><td class="schedule-alt">Martin Kubaczek: „Il re pastore“ und das homonymische Glück. Franzobels Neuschreibung einer Oper von Mozart</td></tr>
<tr><td class="schedule-time">10:30</td><td>Elmar Lenhart: „Die Kracherlbande im Horror Vacui“. Vorstellung des Romans Das Fest der Steine.</td></tr>
<tr><td class="schedule-time">anschl.</td><td class="schedule-alt">Statements zu Das Fest der Steine von Yasuko Nunokawa, Shinichi Suzuki, Eberhard Scheiffele mit Publikumsdiskussion</td></tr>
<tr><td class="schedule-time">11:45</td><td>11.45	Lesung von Franzobel aus Das Fest der Steine.</td></tr>
<tr><td class="schedule-time">12.15</td><td class="schedule-alt">Ende des Seminars</td></tr>
</table>
</div>

<?php // Seminar 2001, Robert Menasse
elseif ( is_page('287') OR $post->post_parent=='287' OR $post->post_parent=='290' ): ?>

<a href="<?php echo home_url(); ?>/seminar2001/">
<div class="bild ">
<img src="<?php bloginfo('template_directory'); ?>/images/cutouts/Menasse2.png" width="460" />
<div class="bildunterschrift"></div>
</div>
</a>

<div class="programm">
<table class="schedule">
<tr><td colspan="2" class="schedule-header">November 2001</td></tr>
<tr><td class="schedule-time">&nbsp;</td><td class="schedule-alt"><a href="<?php echo home_url(); ?>/seminar2001/vortrage/menasse-zweite-discussion/" <?php highlight(294); ?>>2. DiskussionAbendessen</a> Robert Menasse<?php echo $video; ?></td></tr>
<tr><td class="schedule-time">&nbsp;</td><td><a href="<?php echo home_url(); ?>/seminar2001/vortrage/menasse_4/" <?php highlight(292); ?>>Menasse 4<?php echo $video; ?></td></tr>
<tr><td class="schedule-time">&nbsp;</td><td class="schedule-alt"><a href="<?php echo home_url(); ?>/seminar2001/vortrage/menasse-minidisc1/" <?php highlight(441); ?>>MiniDisc 1</a> Robert Menasse<?php echo $video; ?></td></tr>
<tr><td class="schedule-time">&nbsp;</td><td><a href="<?php echo home_url(); ?>/seminar2001/vortrage/menasse-minidisc2/" <?php highlight(437); ?>>MiniDisc 2</a> Robert Menasse<?php echo $video; ?></td></tr>
<tr><td class="schedule-time">&nbsp;</td><td class="schedule-alt"><a href="<?php echo home_url(); ?>/seminar2001/vortrage/menasse-minidisc3/" <?php highlight(433); ?>>MiniDisc 3</a> Robert Menasse<?php echo $video; ?></td></tr>
<tr><td class="schedule-time">&nbsp;</td><td><a href="<?php echo home_url(); ?>/seminar2001/vortrage/menasse-minidisc4/" <?php highlight(429); ?>>MiniDisc 4<?php echo $video; ?></td></tr>
<tr><td class="schedule-time">&nbsp;</td><td class="schedule-alt"><a href="<?php echo home_url(); ?>/seminar2001/vortrage/menasse-sozialpartnerschaft/" <?php highlight(424); ?>>Sozialpartnerschaft</a> Robert Menasse<?php echo $video; ?></td></tr>
</table>
</div>

<?php endif; ?>

<?php if ($parent_id): ?>
  <a href="<?php the_permalink($parent_id); ?>">
    <div class="bild">
      <img src="<?php echo get_field('portrait', $parent_id)['sizes']['medium_large']; ?>" />
    </div>
  </a>
  <div class="byline">
    <strong><?php the_field('author_name', $parent_id); ?></strong> <?php the_field('image_credit', $parent_id); ?>
  </div>
  <?php makeTimetable($parent_id); ?>
<?php endif; ?>

</div>

<?php /* ?>
<div id="social">
  <a href="https://twitter.com/share" class="twitter-share-button" data-url="https://www.onsem.info" data-text="<?php echo get_option('onsem_twitter_message'); ?>" data-lang="de" data-hashtags="<?php echo get_option('onsem_twitter_hashtag'); ?>">Twittern</a>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<div>&nbsp;</div>
<div class="fb-like" data-href="https://www.onsem.info" data-send="true" data-width="430" data-show-faces="true"></div>
</div>
<?php */ ?>
