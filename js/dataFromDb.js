$(document).ready(function(){
    $.ajax({
      url: "connect.php",
      mathod: "GET",
      success: function(data){
        
      },
      error: function(data){
        console.log(data);
      }

    });

});
