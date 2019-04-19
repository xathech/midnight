//Hide divformu when click on the document
$(document).click(function (event) {
  var clickover = $(event.target);

  var _opened = $("#divformu").hasClass("show"); //If divformu is opened, what you click is NOT divformu and what you click doesn't have a parent with the id divformu


  if (_opened == true && !clickover.is("#divformu") && !clickover.parents().is("#divformu")) {
    $("#divformutog").click(); //clicks the button that opens/closes the form
  }
});
