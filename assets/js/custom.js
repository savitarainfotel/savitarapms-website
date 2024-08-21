// custom js for backgroun add and remove
document.addEventListener("DOMContentLoaded", function () {
	const backgroundElement = document.getElementById("background");

	if (backgroundElement) {
		const observer = new IntersectionObserver(
			(entries) => {
				entries.forEach((entry) => {
					if (entry.isIntersecting) {
						backgroundElement.classList.add("background");
					} else {
						backgroundElement.classList.remove("background");
					}
				});
			},
			{ threshold: [0.1] }
		);
		observer.observe(backgroundElement);
	}
});
// custom js end

//accordian js
const handleChangeImage = (e) => {
	const { changeImage, tabImage } = e.target.dataset;
	const dynamicImage = document.getElementById(tabImage);
	dynamicImage.src = changeImage
};

const addValidationMethods = () => {
	$.validator.addMethod('accept', function (value, element, param) {
		// Split the param string by comma to get the list of acceptable extensions
		let typeParam = typeof param === 'string' ? param.replace(/\s/g, '') : 'image/*',
			optionalValue = this.optional(element),
			i, file;

		// If the field is optional and no file is selected, validation passes
		if (optionalValue) {
			return optionalValue;
		}

		if ($(element).attr('type') === 'file') {
			typeParam = typeParam.split(/[,|]/);
			file = element.files;

			for (i = 0; i < file.length; i++) {
				// Get the file extension
				const extension = file[i].type.toLowerCase();

				// Check if the file extension is in the allowed list
				if ($.inArray(extension, typeParam) === -1) {
					return false;
				}
			}
		}
		return true;
	}, $.validator.format("Please select valid file."));

	$.validator.addMethod('email_id', function (email, element, param) {
		if (email === "") {
			return true;
		}
		const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
		return emailPattern.test(email);
	}, $.validator.format("Please enter a valid email address."));

	$.validator.addMethod('validate_mobile', function (mobile, element, param) {
		if (mobile === "") {
			return true;
		}
		const mobilePattern = /^\+?[1-9]\d{9,14}$/;
		return mobilePattern.test(mobile);
	}, $.validator.format("Please enter a valid mobile."));

	$.validator.addMethod('validate_password', function (password, element, param) {
		if (password === "") {
			return true;
		}
		const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&#])[A-Za-z\d@$!%*?&#]{8,}$/;
		return passwordPattern.test(password);
	}, $.validator.format("At least 8 characters, one uppercase, one lowercase, one number, and one special character."));
}

if ($('.ajax-form').length) {
	addValidationMethods();

	let rules;

	if (typeof rule == 'undefined') {
		rules = {
			phone_number: {
				required: true,
				validate_mobile: true,
				digits: true
			},
			email: {
				required: true,
				maxlength: 100,
				email: true,
				email_id: true
			},
			first_name: {
				required: true,
				maxlength: 100
			},
			last_name: {
				required: true,
				maxlength: 100
			},
			country: {
				required: true,
				maxlength: 100
			},
			city: {
				required: true,
				maxlength: 100
			},
			property_name: {
				required: true,
				maxlength: 100
			}
		};
	} else {
		rules = rule;
	}

	$(".ajax-form").each(function () {
		$(this).validate({
			rules: rules,
			errorElement: 'strong',
			errorClass: 'text-danger',
			errorPlacement: function (error, element) {
				const id = error.attr('id');
				if ($(`#${id}`).length) $(`#${id}`).remove();
				error.appendTo(element.closest('.form-group'));
			},
			submitHandler: function (form) {
				submitForm(form);
			}
		});
	});
}

const ajax_error_message_rsp = function (jqXHR){
    switch (jqXHR.status) {
        case 0:
            return 'Not connect.\n Verify Network.';
        case 404:
            return 'Requested page not found. [404]';
        case 500:
            return 'Internal Server Error [500].';
        case 'parsererror':
            return 'Requested JSON parse failed.';
        case 'timeout':
            return 'Time out error.';
        case 'abort':
            return 'Ajax request aborted.';

        default:
            return 'Uncaught Error. Try reload the page.';
    }
}

const submitForm = (form) => {
    event.preventDefault();
    const deferred = $.Deferred();
    const method = $(form).attr('method').toLowerCase();
    const data = method === 'post' ? new FormData(form) : $(form).serialize();
    const submitBtn = $(form).find('[type="submit"]');
    const btnHtml = submitBtn.html();

	$.ajax({
		url: $(form).attr('action'),
		type: method,
		data: data,
		dataType: 'json',
		processData: false,
		contentType: false,
		beforeSend: function() {
			$(form).find('.error-message').html('');
			submitBtn.prop('disabled', true).html(`<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader spin me-2"><line x1="12" y1="2" x2="12" y2="6"></line><line x1="12" y1="18" x2="12" y2="22"></line><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line><line x1="2" y1="12" x2="6" y2="12"></line><line x1="18" y1="12" x2="22" y2="12"></line><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line></svg> Loading...`);
		},
		error: function(jqXHR) {
			$(form).find('.error-message').html(`<div class="alert alert-danger">${ajax_error_message_rsp(jqXHR)}</div>`);
		},
		success: function(result) {
			deferred.resolve(result);
			
			if(result.redirect) {
				setTimeout(() => {
					window.location.href = result.redirect;
				}, 500);
			} else {
				if(result.validate === true && typeof result.message === 'object') {
					for (let error in result.message) {
						const errorElement = $(`<strong id="${error}-error" class="text-danger">${result.message[error]}</strong>`);
						const id = errorElement.attr('id');
						if($(`#${id}`).length) $(`#${id}`).remove();
						errorElement.appendTo($(`[name="${error}"]`).closest('.form-group'));
					}
				} else if(!result.validate && result.message) {
					$(form).find('.error-message').html(`<div class="alert alert-${result.error === false ? 'success' : 'danger'}">${result.message}</div>`);
				}

				if(result.error === false) {
					form.reset();
				}
			}
		},
		complete: function() {
			submitBtn.prop('disabled', false).html(btnHtml);
		}
	});

    return deferred.promise();
};