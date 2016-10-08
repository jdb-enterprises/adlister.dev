$(document).ready(function(){

	// Override Defaults in jQuery plugin
	$.validator.setDefaults({
		highlight: function(element) {

			$(element).closest('.form-group').addClass('has-error');

		},
		unhighlight: function(element) {

			$(element).closest('.form-group').removeClass('has-error');

		},
		errorElement: 'span',
		errorClass: 'help-block',
		errorPlacement: function(error, element) {
			if(element.parent('.input-group').length) {
				error.insertAfter(element.parent());
			} else {
				error.insertAfter(element);
			}
		}
	});

	// validates all forms that pertain to the users
	$(".usersForm").validate({
		rules: {
			name: {
				required: true,
				minlength: 2
			},
			email: {
				required: true,
				email: true
			},
			username: {
				required: true,
				minlength: 2
			},
			password: {
				required: true,
				pwcheck: true,
				minlength: 6
			},
			confirm_password: {
				required: true,
				minlength: 6,
				equalTo: "#password"
			},
			address: "required",
			city: "required",
			state: "required",
			zipcode: {
				required: true,
				number: true,
				minlength: 5,
				maxlength: 5
			}
		},
		messages: {
			name: {
				required: "* Please enter your full name",
				minlength: "* Must have at least 2 characters"
			},
			email: {
				required: "* Please enter your email",
				email: "* Please enter a valid email"
			},
			username: {
				required: "* Please enter a username",
				minlength: "* Must have at least 2 characters"
			},
			password: {
				required: "* Please enter a password",
				pwcheck: "* Must have at least one uppercase, one lowercase, and one number",
				minlength: "* Must be at least 6 characters long",
			},
			confirm_password: {
				required: "* Please confirm password",
				minlength: "* Must be at least 6 characters long",
				equalTo: "* Please enter the same password as above"
			},
			address: "* Please enter your address",
			city: "* Please enter your city",
			state: "* Please choose a state",
			zipcode: {
				required: "* Please enter your zipcode",
				number: "* Must be a number",
				minlength: "* Must be 5 characters",
				maxlength: "* Must be 5 characters"
			}
		}
	});

	// validates all forms that pertain to items
	$(".itemsForm").validate({
		rules: {
			price: {
				required: true,
				number: true
			},
			name: {
				required: true,
				minlength: 2
			},
			description: {
				required: true,
			},
			image: "required" 
		},
		messages: {
			price: {
				required: "* Please enter a price",
				number: "* Must be a number"
			},
			name: {
				required: "* Please enter item's name",
				minlength: "* Must have at least 2 characters"
			},
			description: "* Please enter a short description",
			image: "* Please select an image"
		}
	});

	// Checks password strength 
	$.validator.addMethod("pwcheck", function(value) {
	   return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // consists of only these
		   && /[a-z]/.test(value) // has a lowercase letter
		   && /[A-Z]/.test(value) // has a uppercase letter
		   && /\d/.test(value) // has a digit
});

});