<!DOCTYPE html>
<html lang="de" dir="ltr" class="mma-admin">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <style type="text/css">
   <?php print $inline_css; ?>
  </style>
  <link type="text/css" href="https://www.akademie-marketing.com/sites/all/themes/mmamail/css/mmamail-print.css" />
 </head>
 <body>
 <?php
  foreach ($viewed_orders as $viewed_order):
   print '<div class="invoice">';
   print render($viewed_order);
   print '</div>';
   // Force a page break.
   print '<div style="page-break-after: always;" />';
  endforeach;
 ?>
 </body>
</html>
