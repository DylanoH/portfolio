$(document).ready(function(){

  $.fn.shuffleChildren = function() {
    $.each(this.get(), function(index, el) {
        var $el = $(el);
        var $find = $el.children();

        $find.sort(function() {
            return 0.5 - Math.random();
        });

        $el.empty();
        $find.appendTo($el);
    });
  };

  $(".courses").shuffleChildren();

  $(".courses").children().eq(0).css({"border-top": "0", "border-left": "0"});
  $(".courses").children().eq(1).css({"border-top": "0", "border-right": "0"});
  $(".courses").children().eq(2).css({"border-bottom": "0", "border-left": "0"});
  $(".courses").children().eq(3).css({"border-bottom": "0", "border-right": "0"});

});
