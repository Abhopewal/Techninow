
$(document).ready(function() {
  $("#edit").click(function() {

    $("#ubio").toggle();
    $("#uwebsite").toggle();
    $("#ufacebook").toggle();
    $("#uimglabel").toggle();
    $("#save").toggle();
    $("#cancel").toggle();

  });
  $("#cancel").click(function() {
    $("#ubio").hide();
    $("#uwebsite").hide();
    $("#ufacebook").hide();
    $("#uimglabel").hide();
    $("#save").hide();
    $("#cancel").hide();
  })
});
