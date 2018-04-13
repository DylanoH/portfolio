$(document).ready(function(){



  $(".courses").children().eq(0).css({"border-top": "0", "border-left": "0"});
  $(".courses").children().eq(1).css({"border-top": "0", "border-right": "0"});
  $(".courses").children().eq(2).css({"border-bottom": "0", "border-left": "0"});
  $(".courses").children().eq(3).css({"border-bottom": "0", "border-right": "0"});



  $("#image").on("click", function() {
    var imageName = $("#image").val();
    if (imageName == "") {
      alert("please select an image");
      return false
    }
    else {
      var extension = $("#image").val().split('.').pop().toLowerCase();
      if (jQuery.inArray(exension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
        alert("invalid file name");
        $("#image").val('');
        return false;
      }
    }
  });

  //   particlesJS("particles-js", {
  //   "particles": {
  //     "number": {
  //       "value": 355,
  //       "density": {
  //         "enable": true,
  //         "value_area": 789.1476416322727
  //       }
  //     },
  //     "color": {
  //       "value": "#ffffff"
  //     },
  //     "shape": {
  //       "type": "circle",
  //       "stroke": {
  //         "width": 0,
  //         "color": "#000000"
  //       },
  //       "polygon": {
  //         "nb_sides": 5
  //       },
  //       "image": {
  //         "src": "img/github.svg",
  //         "width": 100,
  //         "height": 100
  //       }
  //     },
  //     "opacity": {
  //       "value": 0.48927153781200905,
  //       "random": false,
  //       "anim": {
  //         "enable": true,
  //         "speed": 0.2,
  //         "opacity_min": 0,
  //         "sync": false
  //       }
  //     },
  //     "size": {
  //       "value": 2,
  //       "random": true,
  //       "anim": {
  //         "enable": true,
  //         "speed": 2,
  //         "size_min": 0,
  //         "sync": false
  //       }
  //     },
  //     "line_linked": {
  //       "enable": false,
  //       "distance": 150,
  //       "color": "#ffffff",
  //       "opacity": 0.4,
  //       "width": 1
  //     },
  //     "move": {
  //       "enable": true,
  //       "speed": 0.2,
  //       "direction": "none",
  //       "random": true,
  //       "straight": false,
  //       "out_mode": "out",
  //       "bounce": false,
  //       "attract": {
  //         "enable": false,
  //         "rotateX": 600,
  //         "rotateY": 1200
  //       }
  //     }
  //   },
  //   "interactivity": {
  //     "detect_on": "courses",
  //     "events": {
  //       "onhover": {
  //         "enable": true,
  //         "mode": "bubble"
  //       },
  //       "onclick": {
  //         "enable": true,
  //         "mode": "push"
  //       },
  //       "resize": true
  //     },
  //     "modes": {
  //       "grab": {
  //         "distance": 400,
  //         "line_linked": {
  //           "opacity": 1
  //         }
  //       },
  //       "bubble": {
  //         "distance": 83.91608391608392,
  //         "size": 1,
  //         "duration": 3,
  //         "opacity": 1,
  //         "speed": 3
  //       },
  //       "repulse": {
  //         "distance": 200,
  //         "duration": 0.4
  //       },
  //       "push": {
  //         "particles_nb": 4
  //       },
  //       "remove": {
  //         "particles_nb": 2
  //       }
  //     }
  //   },
  //   "retina_detect": true
  // });
});
