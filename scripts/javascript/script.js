$(document).ready(function(){

  // nav //



  $('.hamburger-container').on('click', function() {
    this.classList.toggle('change');
    var toggleWidth = $('.sidenav').width() > 800 ? "0px" : "100%";
    $('.sidenav').animate({ width: toggleWidth });
  });

/* Close/hide the sidenav */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

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
