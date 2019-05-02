//Hide divformu when click on the document

var formtog = $("#divformutog");
var formtogwidth = formtog.width();

$(document).click(function (event) {

    var clickover = $(event.target);
    var _opened = $("#divformu").hasClass("show");

    if (clickover.is(formtog) || clickover.parents().is(formtog)) {//If the user clicks the button or the parent of the elemtn that you click is the button

        formtog.width(formtogwidth);
        formtog.toggleClass('btn-outline-warning btn-danger fa fa-times fa-lg');
        
        if (formtog.children().is(":visible")) {
            
            formtog.children().hide();

        }else{

            formtog.children().show();
        }
    }

    //If divformu is opened, what you click is NOT divformu and what you click doesn't have a parent with the id divformu
    if (_opened == true && !clickover.is("#divformu") && !clickover.parents().is("#divformu")) {

        formtog.click();//clicks the button that opens/closes the form
    }
});