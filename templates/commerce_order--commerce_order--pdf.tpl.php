<div class="invoice-invoiced">

 <div class="header" style="position:relative">
  <div class="logo" style="height:140px"><img src="https://www.akademie-marketing.com/sites/all/themes/mma_2018/images/mma-logo-2015.png" width="175" height="70" /></div>
  <div class="mma-header">
   <div class="mma-abs">
    <p>Akademie f&uuml;r modernes Marketing Inc. & Co. KG · Biedersteiner Straße 6 · 80802 M&uuml;nchen</p>
   </div>
   <div>
    <p style="text-align:right">
     Ansprechpartner: Frau Heike Beckert<br>
     heike.beckert@akademie-marketing.com<br>
     +49(0) 800 0800 1850
    </p>
   </div>
  </div>
  <div class="invoice-header"><?php print render($content['invoice_header']); ?></div>
 </div>

 <hr/>
 <div class="invoice-header-date"><?php print render($content['invoice_header_date']); ?></div>
 <div class="customer"><?php print render($content['commerce_customer_billing']); ?></div>
 <div class="invoice-number"><?php print render($content['order_number']); ?></div>
 <div class="order-id"><?php print render($content['order_id']); ?></div>

 <div class="line-items">
  <div class="line-items-view"><?php print render($content['commerce_line_items']); ?></div>
  <div class="order-total"><?php print render($content['commerce_order_total']); ?></div>
 </div>

 <div class="invoice-text"><?php print render($content['invoice_text']); ?></div>
 <div class="invoice-footer"><?php print render($content['invoice_footer']); ?></div>

</div>

<footer>
 <div class="table">
  <div>
   <p>
    Akademie für modernes Marketing<br>
    Inc. & Co. KG
   </p>
   <p>
    Sitz: München<br>
    Amtsgericht München<br>
    HRA 103501
   </p>
  </div>

  <div>
   <p>
    Persönlich haftende Gesellschafterin:<br>
    International Marketing Consulting Inc.
   </p>
   <p>
    Präsident: Heike Beckert<br>
    Albany, New York 12205, USA<br>
    Company Nr.: A-294948
   </p>
   <p>
   Directors: Volker Becker / Heike Beckert
   </p>
  </div>

  <div>
   <p>
    Telefon<br>
    +49(0) 800 0800 1850
   </p>
   <p>
    Für Anrufer aus dem Ausland<br>
    ++49 694 600 115 347
   </p>
   <p>
    Mobil<br>
    +49(0) 151 4043476604103
   </p>
  </div>

  <div>
   <p>
    Münchner Bank EG<br>
    DE73 7019 0000 0002 1510 73<br>
    GENODEF1M01
   </p>
   <p>
    USt-Id. DE 299378108
   </p>
  </div>

 </div>
</footer>
