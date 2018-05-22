$("document").ready(function(){




  $.scrollify({
    section : ".cd-section",
    before: function (section) {
      console.log(section);
      if (section===1){
        $("#secondIndexLi1").addClass("fadeInUp1");
        $("#secondIndexLi2").addClass("fadeInUp2");
        $("#secondIndexLi3").addClass("fadeInUp3");
        $("#secondIndexLi4").addClass("fadeInUp4");
        $("#secondIndexLi5").addClass("fadeInUp5");
      }
      else {
        $("#secondIndexLi1").removeClass("fadeInUp1");
        $("#secondIndexLi2").removeClass("fadeInUp2");
        $("#secondIndexLi3").removeClass("fadeInUp3");
        $("#secondIndexLi4").removeClass("fadeInUp4");
        $("#secondIndexLi5").removeClass("fadeInUp5");
      }
    }
  });
});

// $(document).ready( function () {
//     $('#wellTable').DataTable();
// } );
