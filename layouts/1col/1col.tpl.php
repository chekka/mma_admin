<header id="mainheader">
 <div class="container">
  <?php print $content['header']; ?>
 <div id="headerimage"></div>
</header> 
<section id="main">
 <div class="container">
  <div class="grid-12 col-content"><?php print $content['content']; ?></div>
 </div>
</section>
<?php if($content['bottom']): ?>
<section class="bottom">
 <div class="container">
  <?php print $content['bottom']; ?>
 </div>
</section>
<?php endif; ?>
