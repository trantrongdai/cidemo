$(document).ready(function() {
	$("#SendMail").click(function() {
		var name = $("#name").val();
		var email = $("#email").val();
		var website = $("#website").val();
		var subject = $("#subject").val();
		var content = $("#contents").val();
		var captcha = $("#captcha").val();
		var email_regex = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
		var data_string = 'name=' + name + '&email=' + email + '&website=' + website + '&subject=' + subject + '&contents=' + contents + '&captcha=' + captcha; 
		
		if(name == "") {
           $("#nameError").slideDown('slow').delay(1000).slideUp('slow');
           $("#name").focus();
           return false;
        }

        if(!email_regex.test(email) || email == "") {
           $("#emailError").slideDown('slow').delay(1000).slideUp('slow');
           $("#email").focus()
           return false;
        }

        if(website == "") {
           $("#websiteError").slideDown('slow').delay(1000).slideUp('slow');
           $("#website").focus()
           return false;
        }

        if(subject == "") {
           $("#subjectError").slideDown('slow').delay(1000).slideUp('slow');
           $("#subject").focus();
           return false;
        }

        if(contents == "") {
           $("#contentError").slideDown('slow').delay(1000).slideUp('slow');
           $("#contents").focus()
           return false;
        }

        if(captcha == "") {
           $("#captchaError").slideDown('slow').delay(1000).slideUp('slow');
           $("#captcha").focus()
           return false;
        }

        $("#loading").html("<img src='images/loading.gif'/>").fadeIn('fast');
            $.ajax({
                type: "POST",
                url: "sendmail.php",
                data: data_string,
                success: function(data_form) {
                    if(data_form == "true") {
                        $('#loading').fadeOut('fast');
                        $("#success").slideDown('slow').delay(3000).slideUp('slow');
                            clear_form();
                            change_captcha();
                    } else {
                        $('#loading').fadeOut('fast');
                        $("#error").slideDown('slow').delay(3000).slideUp('slow');
                        }
                    }
                });
        return false;

	});

	function clear_form() {
        $("#name").val('');
        $("#email").val('');
        $("#website").val('');
        $("#subject").val('');
        $("#content").val('');
        $("#captcha").val('');
    }

    $("#load_captcha").click(function() {
        change_captcha();
    });

    function change_captcha() {
        document.getElementById('img_captcha').src="captcha.php?rnd=" + Math.random();
    }
});