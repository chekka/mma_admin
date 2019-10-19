<button class="hamburger hamburger--arrow" type="button">
 <span class="hamburger-box">
  <span class="hamburger-inner"></span>
 </span>
</button>

<script>
(function($) {
 $(document).ready(function() {
  $('.hamburger').on('click', function() {
   $(this).toggleClass('is-active');
   $('.sidebar-main').toggleClass('show');
  });
 });
})(jQuery);
</script>

<div class="sidebar-main">
 <div class="logo"><a href="/admin/dashboard"></a></div>
 <?php print render($page['sidebar_main'])?>
</div>

<?php
if (!empty($node)) {
    $nid = $node->nid;
} else {
    $nid = null;
}
?>



<div class="content-wrapper" data-nid="<?php if ($nid) {echo $nid;}?>">

 <header id="page-header" class="clearfix">
  <div class="container">

   <div class="page-top"><?php print render($page['top'])?></div>

   <hgroup id="page-title">
    <div class="clearfix">
     <?php print render($title_prefix);?>
     <h1 class="page-title <?php print $page_icon_class?>">
      <?php if (!empty($page_icon_class)): ?><span class="icon"></span><?php endif;?>
      <?php if ($title) {
    print $title;
}
?>
     </h1>
     <?php if (isset($subtitle)): ?>
     <h2><?php print $subtitle;?></h2>
     <?php endif;?>
     <?php print render($title_suffix);?>
    </div>
   </hgroup>

   <nav id="breadcrumb">
    <div class="inner"><?php print $breadcrumb?></div>
   </nav>

  </div>
 </header>

 <?php if ($primary_local_tasks || $secondary_local_tasks || $action_links || (!$toolbar && isset($secondary_menu))): ?>
 <nav id="tasks">
  <div class="main">
   <div class="inner clearfix">
    <?php print render($primary_local_tasks)?>
    <?php if ($primary_local_tasks && $action_links): ?>
    <div class="divider"></div>
    <?php endif;?>
    <?php if ($action_links): ?>
    <ul class="action-links"><?php print render($action_links)?></ul>
    <?php endif;?>
   </div>
  </div>
  <?php if ($secondary_local_tasks): ?>
  <div class="sub clearfix"><?php print render($secondary_local_tasks)?></div>
  <?php endif;?>
 </nav>
 <?php if (!$toolbar && isset($secondary_menu)): ?>
 <div class="secondary-nav" style="display:flex">
  <div style="text-align:center;padding-right:34px;line-height:1.3">
   <?php
if (user_is_logged_in()) {
    $user_vname = token_replace('[current-user:field-vorname]');
    $user_nname = token_replace('[current-user:field-nachname]');
    global $user;
    $account = user_load($user->uid);
    $user_image = field_get_items('user', $account, 'field_benutzerbild');

    print '<img src="/sites/default/files/styles/100-100/public/user-pictures/' . $user_image[0]["filename"] . '" alt="Benutzerbild" width="50" height="50" style="margin-bottom:7px; border-radius: 50%;" /><div>' . $user_vname . '<br>' . $user_nname . '</div>';
} else {
    echo '<a href="/user/login">Anmelden</a>';
}
?>
  </div>
  <div style="padding-left:34px;border-left:1px solid #d5d5d5;white-space:nowrap;align-self:flex-end;line-height:1.3">
   <?php print theme('links', array('links' => $secondary_menu, 'attributes' => array('class' => 'nav')))?>
  </div>
 </div>
 <?php endif;?>
 <?php
/*
$delta = 'user_menu';
$panel_mini = panels_mini_load($delta);
$markup = panels_render_display($panel_mini->display);
print $markup;
 */
?>
 <?php endif;?>

 <section id="page">
  <?php if ($show_messages && $messages): ?><div id="console"><?php print $messages;?></div><?php endif;?>

  <div id="main-content" class="limiter clearfix">
   <?php // if ($page['help']): ?>
   <!--<div id="help" class="well"><?php print render($page['help'])?></div>--><?php // endif; ?>
   <div id="content" class="page-content clearfix">
    <?php if (!empty($page['content'])) {
    print render($page['content']);
}
?>
   </div>
   <?php if (!empty($page['bottom'])) {
    print render($page['bottom']);
}
?>
  </div>

 </section>

 <footer>
  <div class="container">
   <!-- chekka.de -->
   <?php print render($page['footer_1'])?>
   <?php print render($page['footer_2'])?>
   <?php print render($page['footer_3'])?>
   <?php print render($page['footer_4'])?>
  </div>
 </footer>

</div>