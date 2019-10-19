<header id="mainheader">
 <div class="container">
  <div id="headerimage"></div>
  <?php print $content['header']; ?>
 </div>
</header>
<section id="main">
 <div class="container">
  <div class="grid-6 col-left"><?php print $content['left']; ?></div>
  <div class="grid-6 col-right"><?php print $content['right']; ?></div>
 </div>
</section>
<section class="bottom">
 <div class="container">
  <?php print $content['bottom']; ?>
 </div>
</section>