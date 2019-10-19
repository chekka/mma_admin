<a href="#" id="start" class="button">Start Presentation</a>

<div id="presentation" class="reveal">
 <a href="#" id="close">Close Presentation</a>
 <div class="slides">
  <?php print render($content['field_folie']); ?>
 </div>
</div>

 <style src="/<?php echo drupal_get_path('theme',$GLOBALS['theme']); ?>/assets/js/reveal.js-master/css/reveal.css"></style>
 <script src="/<?php echo drupal_get_path('theme',$GLOBALS['theme']); ?>/assets/js/reveal.js-master/js/reveal.js"></script>

 <script type="text/javascript">
  (function($) {
   $(document).ready(function(){

    $('ol li').addClass('fragment');
    $('#start').on('click',function(){
     $('#presentation').addClass('active');
     Reveal.initialize({     
      width: 1200,
      height: 700,
      margin: .1,
      minScale: .2,
      maxScale: 3,
      center: false,
     });
    });
 
    $('#close').on('click',function(){
     location.reload();
    });

   });
  })(jQuery);
 </script>
