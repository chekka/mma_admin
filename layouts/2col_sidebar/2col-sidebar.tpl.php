<header id="mainheader">
 <div class="container">
  <div id="headerimage"></div>
  <?php print $content['header']; ?></div>
</header>
<section id="main">
 <div class="container">
  <div class="grid-7 col-left"><?php print $content['left']; ?></div>
  <aside class="grid-4 col-right sidebar"><?php print $content['right']; ?></aside>
 </div>
</section>
<?php if($content['bottom']): ?>
<section class="bottom">
 <div class="container">
  <?php print $content['bottom']; ?>
 </div>
</section>
<?php endif; ?>
