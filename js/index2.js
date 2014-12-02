$("#ajustesIndex").click(function () {
  $.msgbox("<p>In order to process your request you must provide the following:</p>", {
    type    : "prompt",
    inputs  : [
      {type: "text",     label: "Insert your Name:", value: "George", required: true},
      {type: "password", label: "Insert your Password:", required: true}
    ],
    buttons : [
      {type: "submit", value: "OK"},
      {type: "cancel", value: "Exit"}
    ]
  }, function(name, password) {
    if (name) {
      $.msgbox("Hello <strong>"+name+"</strong>, your password is <strong>"+password+"</strong>.", {type: "info"});
    } else {
      $.msgbox("Bye!", {type: "info"});
    }
  });
});



$(function(){
  $('#loginform').submit(function(e){
    return false;
  });
  
  $('#modaltrigger').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
});




