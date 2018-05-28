$(document).ready(function(){



  $('.assignment:gt(2)').removeClass('fadeOnLoad').addClass('fadeInLeft');

  $('.fadeOnLoad').each( function(i){
    var current = $(this);
    setTimeout(function(){
      $(current).animate({'opacity':'1','margin-left':'0px'}, 800);
    }, 200 * i);
  });

  $('.hamburger-container').hover(function() {
    $('.hamburger1, .hamburger2, .hamburger3').css('background-color', '#40E0D0');
  }, function() {
    $('.hamburger1, .hamburger2, .hamburger3').css('background-color', '#171717');
  });
  // $('.assignmentPage:nth-child(3)').nextAll().addClass('fadeInLeft');

  $(window).scroll( function(){
    $('.fadeInLeft').each( function(i){
      var top_of_object = $(this).position().top + $(this).outerHeight() - 300;
      var bottom_of_window = $(window).scrollTop() + $(window).height();

      if( bottom_of_window > top_of_object ){
          $(this).animate({'opacity':'1', 'margin-left' : '0px'}, 1000);
      }
    });

    // if($(this).scrollTop() + $(window).height() >= $(document).height()) {
    //   $('.downButton').css('opacity', '0');
    //   $('.upButton').css('opacity', '1');
    // }
  });

  $('.upButton').on('click', function(){
    $('html, body').animate({
      scrollTop: $('main').offset().top},
      'slow');
  });

  // nav //
  $('.hamburger-container').on('click', function() {

    $(this).toggleClass('change');
    $('.nav').toggleClass('widthChange');

  });



  $(".courses").children().eq(0).css({"border-top": "0", "border-left": "0"});
  $(".courses").children().eq(1).css({"border-top": "0", "border-right": "0"});
  $(".courses").children().eq(2).css({"border-bottom": "0", "border-left": "0"});
  $(".courses").children().eq(3).css({"border-bottom": "0", "border-right": "0"});

  $("form.addAssignment").submit(function(e){
      e.preventDefault();
      var formData = new FormData(this);
      formData.append("add", "add");

      $.ajax({
          type: "POST",
          url: "/Portfolio/admin/add.php",
          data: formData,
          cache: false,
          contentType: false,
          processData: false,
          success: function(result){
            alert(result);
              window.location = "/Portfolio/admin/list.php";
          }
      });
  });

  $("form.editAssignment").submit(function(e){
      e.preventDefault();
      var formData = new FormData(this);
      formData.append("edit", "edit");

      $.ajax({
          type: "POST",
          url: "/Portfolio/admin/edit.php",
          data: formData,
          cache: false,
          contentType: false,
          processData: false,
          success: function(result){
            alert(result);
              window.location = "/Portfolio/admin/list.php";
          }
      });
  });
});
