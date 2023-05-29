
var alertClass = "";
var alertMessage = "";
$(document).ready(function () {
    $('.btnContact').button();
});

// on start of  ContactUs
function startContactUs() {

    $('.btnContact').button('loading');
    $(".msg").html("");

}

// on succuss of  ContactUs
function successContactUs(result) {

    if (result == "true") {
        alertClass = "alert-success";
        alertMessage = "<strong>Hurrah!</strong> Your message has been submitted successfully. Thank you for contacting us.";
        clear_form_elements("#frmContactUs");
    }
    else {
        alertClass = "alert-error";
        alertMessage = "<strong>Oops!</strong> Unable to process your request at this time. Please try again";
    }
    var message = "<div class='alert alert-block fade in " + alertClass + "'>";
    message += "<button class='close' data-dismiss='alert' type='button'>×</button> ";
    message += alertMessage + "</div>";

    $(".msg").html(message);
    $('.btnContact').button('complete')

}

// end of  ContactUs
function completeContactUs() {
    $('.btnContact').button('reset')
}

// if ajax call fails for  ContactUs
function errorContactUs() {
    $('.btnContact').button('reset')
}
