jQuery(document).ready(function($) {
    var menuStatus;

    $(".sidebar-toggle").click(function(){
        if(menuStatus != true){
        $("#secondary").animate({
            marginLeft: "0px",
          }, 300, function(){menuStatus = true});
          return false;
          } else {
            $("#secondary").animate({
            marginLeft: "-300px",
          }, 300, function(){menuStatus = false});
            return false;
          }
    });
});