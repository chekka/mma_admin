<header id="mainheader">
 <div id="headerimage"></div>
 <div class="container"><?php print $content['header']; ?></div>
</header>
<section id="main">
 <div class="container">
  <div class="grid-4 col-left"><?php print $content['left']; ?></div>
  <div class="grid-4 col-center"><?php print $content['center']; ?></div>
  <div class="grid-4 col-right"><?php print $content['right']; ?></div>
 </div>
</section>
<?php if($content['bottom']): ?>
<section class="bottom">
 <div class="container">
  <?php print $content['bottom']; ?>
 </div>
</section>
<?php endif; ?>