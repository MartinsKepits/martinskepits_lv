$(document).ready(function () {
    $('#contact-form').validate({
        rules: {
            name: {
                required: true,
                maxlength: 255
            },
            email: {
                required: true,
                email: true,
                maxlength: 255
            },
            message: {
                required: true,
                maxlength: 500
            }
        },
        messages: {
            name: {
                required: "Name is required.",
                maxlength: "Name should not be longer than 255 characters."
            },
            email: {
                required: "Email address is required.",
                email: "Please enter a valid email address.",
                maxlength: "Email should not be longer than 255 characters."
            },
            message: {
                required: "Message is required.",
                maxlength: "Message should not be longer than 500 characters."
            }
        },
        submitHandler: function(form) {
            $("#contact-form .submit-btn").attr("disabled", true);
            grecaptcha.ready(function() {
                grecaptcha.execute(window.recaptchaSiteKey, {action: 'submit'}).then(function(token) {
                    $('#g-recaptcha-response').val(token);
                    form.submit();
                });
            });
        }
    });
});
