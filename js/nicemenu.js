(function($) {
  $.fn.ASNiceMenu = function() {
    this.addClass("_asnicemenu");
    $("li > ul",this).addClass("_assubmenu");
    $("._assubmenu").parent().children("a").each(function(index) {
      var title = $(this).text();
      $(this).replaceWith('<span class="_asmenutitle">' + title + '</span>');
    });

    $("._asmenutitle",this).click(function() {
      $(this).parent().addClass("_asactivemenu").find("ul._assubmenu").slideDown('fast').show();
      $(this).parent().hover(function() {
      }, function() {
        $(this).parent().find("ul._assubmenu").slideUp('fast');
        $(this).parent().find("li._asactivemenu").removeClass("_asactivemenu");
      });
    });
  };
})(jQuery);
