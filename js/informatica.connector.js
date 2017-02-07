/**
* Created by ched.switzer on 1/26/16.
*
* This script is to detect Marketo forms and
* attach Informatica validation to the elements
*/

MktoForms2.whenReady(function (form) {
  var errorCount = 0;
  var postData = {};
  form.verify = false;
  var formValidate = false;
  
  form.onValidate(function () {
	$("body").css("cursor", "progress");
	var consoleMsg = "";
	form.submittable(false);   
	
	// Email /
	var email = form.getFormElem().find("#Email");
	if (email.length && !formValidate) {
	  consoleMsg += "Email Element Found\n";
	  postData["emailVerify"] = "yes";
	  postData["email"] = form.getFormElem().find("#Email").val();
	  form.verify = true;
	}
	// Phone //
/*
	var phone = form.getFormElem().find("#Phone");
	if (phone.length && !formValidate) {
	  consoleMsg += "Phone Element Found\n";
	  postData["phoneVerify"] = "yes";
	  postData["phone"] = form.getFormElem().find("#Phone").val();
	  form.verify = true;
	}
*/	
	console.log(consoleMsg);
	  // We have something to check //
	  if (form.verify && !formValidate && !form.submitable()) {
		console.log ("Validation Check: ", postData);
		if (errorCount <= 3) {
		  $.get("/api/marketo/validation.php", postData)
		  .done(function (result) {
			console.log ("Validation Results: ", result);
			var data = $.parseJSON(result);
			console.log("DATA: ", data);
			if (data.email == 'failure') {
			  // Show error message, pointed at Email element
			  form.showErrorMessage(decodeHtml("The email address you have entered is invalid. Please try again."), email);
			  errorCount = errorCount + 1;
			}else if(data.phonenum == 'failure') {
			  // Show error message, pointed at Phone element
			  form.showErrorMessage(decodeHtml("The phone number you have entered is invalid. Please try again."), phone);
			  errorCount = errorCount + 1;
			}else if (data.address == 'failure') {
			  // Show error message, pointed at Address element
			  form.showErrorMessage(decodeHtml("The address you have entered is invalid. Please try again."), address);
			  errorCount = errorCount + 1;
			}else {
			  console.log("SUBMITTING: ", form);
			  form.verify = false;
			  formValidate = true;
			  form.submit();
			}
		  }, 'jsonp');
		} else {
		  // Show error message, pointed at Button element
		  var button = form.getFormElem().find(".mktoButton");
		  form.showErrorMessage(decodeHtml("The information you have entered is invalid. Please try again."), button);
		}
	  } else {
		  form.submitable(true);
	  }
	});
});


function decodeHtml(html) {
  var txt = document.createElement("textarea");
  txt.innerHTML = html;
  return txt.value;
}

/** Free trials Infusionsoft forms additions by Austin Harbert 10/28/16 **/

$('#orderForm').ready(function (form) {
    var errorCount = 0;
    var postData = {};
    var form = $('#orderForm');
    form.verify = false;
    var formValidate = false;
     var validationCount = 0;
    
      $('#orderForm').submit(function (event) {
       
        $('#Order').val('Sending please wait...');
        $('.submitWarning').removeClass('hide');
        var consoleMsg = "";
        if(validationCount === 0){ 
            // Email /
            var email = $("#Email").val();
            if (email.length) {
              consoleMsg += "Email Element Found\n";
              postData["emailVerify"] = "yes";
              postData["email"] = email;
              form.verify = true;
            }else{
                email = "No email Entered";
                consoleMsg += "Email Element Found\n";
                postData["emailVerify"] = "yes";
                postData["email"] = email;
                form.verify = true;
            }

            console.log(consoleMsg);
              // We have something to check //
              if (form.verify) {
                console.log ("Validation Check: ", postData);
                  $.get("/api/marketo/validation.php", postData)
                  .done(function (result) {
                    console.log ("Validation Results: ", result);
                    var data = $.parseJSON(result);
                    console.log("DATA: ", data);
                    if (data.email == 'failure') {
                      // Show error message, pointed at Email element
                      $('#errorMessage').empty();
                      $('#errorMessage').append('The email address you have entered is invalid. Please try again.')
                      //errorCount = errorCount + 1;
                      $('#Order').val('Order');
                      $('.submitWarning').addClass('hide');
                      return false;
                    }else {
                      console.log("SUBMITTING: ", form);
                      form.verify = false;
                      //formValidate = true;
                      $('#errorMessage').empty();
                      //return true;
                      validationCount = 1;
                      $('#Order').val('Order Sent!');
                      $('.submitWarning').addClass('hide');
                      form.submit();
                    }
                  }, 'jsonp');
              }
            return false;
         };//check if verify = false
          

        });
    
});