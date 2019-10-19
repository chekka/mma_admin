(function($) {
  $(document).ready(function() {
    $(".view-my-tickets .ajax-load a").click(function(e) {
      e.preventDefault();
      var order_id = window.location.href.substring(window.location.href.lastIndexOf("/") + 1);
      var url = $(this).attr("href") + "?destination=admin/commerce/orders/" + order_id + " #block-system-main";
      $("body").append('<div id="ajax-load-element-wrapper" style="display:none;"><div id="ajax-load-element" style="padding: 20px;"></div></div>');
      $("#ajax-load-element").load(url, function() {
        $.colorbox({
          href: "#ajax-load-element",
          width: "90%",
          height: "90%"
        });
      });
    });

    // Skriptupload
    $("#views-form-commerce-products-page-skriptupload img + a").each(function() {
      $(this).replaceWith("<span>&nbsp;&nbsp;" + $(this).text() + "</span>");
    });

    // Homebox Config Page
    $("#homebox-add-link")
      .addClass("button")
      .on("click", function() {
        $("#homebox").toggleClass("edit");
      });

    // Show Module Description
    $(".page-admin-modules td.help").on("click", function() {
      $(".page-admin-modules td.description").removeClass("show");
      $(this)
        .parent()
        .find("td.description")
        .toggleClass("show");
    });

    // USERMENU
    $(".secondary-nav").on("click", function() {
      $(this).toggleClass("active");
    });
    $(document).mouseup(function(e) {
      var container = $(".secondary-nav");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        container.removeClass("active");
      }
    });

    $("#block-menu-menu-admin-sidebar > .content > .menu > li").each(function() {
      var span = $(this).find(".nolink");
      span.unwrap();
    });

    $("#block-menu-menu-admin-sidebar > .content > .menu").accordion({
      icons: false,
      collapsible: true,
      activate: function(event, ui) {
        var index = $(this)
          .find("div")
          .index(ui.newHeader[0]);
        localStorage.setItem("accIndex", index);
      },
      active: parseInt(localStorage.getItem("accIndex")) || 0,
      header: ".nolink",
      heightStyle: "content",
      animate: 200
    });

    $("#block-menu-menu-admin-sidebar > .content > .menu > li > a").on("click", function() {
      localStorage.setItem("accIndex", 0);
    });

    $(".node-form h2.element-invisible").on("click", function() {
      $(this)
        .next(".vertical-tabs")
        .toggle();
    });

    // Rules
    $('div[class^="rules-debug-"] .placeholder').each(function() {
      var txt = $(this).text();
      if (txt == "TRUE") {
        $(this)
          .parent("li")
          .addClass("true");
      }
      if (txt == "FALSE") {
        $(this)
          .parent("li")
          .addClass("false");
      }
    });

    // Collapse URL-Alis in sidebar
    $(".path-form.collapsible.form-wrapper.collapse-processed a.fieldset-title").click();
    $("#edit-subscribe.collapsible.form-wrapper.collapse-processed a.fieldset-title").click();

    $("input[type=checkbox],input[type=radio]")
      .parent("div")
      .each(function() {
        var label = $(this)
          .find("label")
          .text();
        var id = $(this)
          .find("input")
          .attr("id");
        if (label == "" && id != null) {
          $(this).append('<label for="' + id + '"></label>');
        }
      });

    // Layout Related
    $(".expand-to-left .group-right").on("click", function() {
      $(this)
        .addClass("expand")
        .siblings("div")
        .addClass("shrink");
    });
    $(".expand-to-left .group-left").on("click", function() {
      $(this)
        .removeClass("shrink")
        .siblings("div")
        .removeClass("expand");
    });
    $(".page-user-edit #edit-l10n-client").appendTo("#user-profile-form .group-right");
    $(".page-user-edit #edit-eazylaunch").appendTo("#user-profile-form .group-right");
    $(".page-user-edit #edit-block").appendTo("#user-profile-form .group-right");

    // $("fieldset.collapsible:not('.collapsed')").addClass("collapsed");

    /* region FIELDS */

    /* Description Toggle */
    $(".form-item .description").wrapInner('<div class="hidden"></div>');

    /* #endregion FIELDS */
  }); // End document.ready

  // AFTER AJAX COMPLETE

  $(document).ajaxComplete(function() {
    $("body").addClass("loaded");
    $(".form-item .description").wrapInner('<div class="hidden"></div>');
    /*
    // Seminar Modul bearbeiten
    $('.form-item[class*="workflow-workflow-comment"] label')
      .unbind("click")
      .on("click", function() {
        $(this)
          .next()
          .slideToggle();
      });
*/
  });

  /*
  // WHILE SCROLLING

  $(window).scroll(function() {
    $(".page-admin-modules td.description").removeClass("show");
    $(".secondary-nav").removeClass("active");
    $(".sticky-header").each(function() {
      if ($(this).css("visibility") == "visible") {
        $(this).addClass("stick");
      } else {
        $(this).removeClass("stick");
      }
    });
  });
 */
})(jQuery);
