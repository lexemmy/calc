$(function() {

	$("#username_error_message").hide();
	$("#number_error_message").hide();
	$("#password_error_message").hide();
	$("#retype_password_error_message").hide();
	$("#email_error_message").hide();
	$("#subject_error_message").hide();
	$("#message_error_message").hide();
	

	var error_username = false;
	var error_number = false;
	var error_password = false;
	var error_retype_password = false;
	var error_email = false;
	var error_subject = false;
	var error_message = false;
	

	$("#form_username").focusout(function() {

		check_username();
		
	});

	$("#form_number").focusout(function() {

		check_number();
		
	});

	$("#form_password").focusout(function() {

		check_password();
		
	});

	$("#form_retype_password").focusout(function() {

		check_retype_password();
		
	});

	$("#form_email").focusout(function() {

		check_email();
		
	});

	$("#form_subject").focusout(function() {

		check_subject();
		
	});

	$("#form_message").focusout(function() {

		check_message();
		
	});

	function check_username() {
	
		var username_length = $("#form_username").val().length;
		
		if(username_length < 5 || username_length > 30) {
			$("#username_error_message").html("Should be between 5-30 characters");
			$("#username_error_message").show();
			error_username = true;
		} else {
			$("#username_error_message").hide();
		}
	
	}

	function check_number() {

		
		var number_length = $("#form_number").val().length;
	
		if( number_length != 11) {
			$("#number_error_message").html("Invalid phone number");
			$("#number_error_message").show();
			error_number = true;
		} else {
			$("#number_error_message").hide();
		}
	
	}

	function check_password() {
	
		var password_length = $("#form_password").val().length;
		
		if(password_length < 4) {
			$("#password_error_message").html("At least 4 characters");
			$("#password_error_message").show();
			error_password = true;
		} else {
			$("#password_error_message").hide();
		}
	
	}

	function check_retype_password() {
	
		var password = $("#form_password").val();
		var retype_password = $("#form_retype_password").val();
		
		if(password !=  retype_password) {
			$("#retype_password_error_message").html("Passwords do not match");
			$("#retype_password_error_message").show();
			error_retype_password = true;
		} else {
			$("#retype_password_error_message").hide();
		}
	
	}

	function check_email() {

		var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
	
		if(pattern.test($("#form_email").val())) {
			$("#email_error_message").hide();
		} else {
			$("#email_error_message").html("Invalid email address");
			$("#email_error_message").show();
			error_email = true;
		}
	
	}

	function check_subject() {
	
		var subject_length = $("#form_subject").val().length;
		
		if(subject_length < 5 || subject_length > 30) {
			$("#subject_error_message").html("Should be between 5-30 characters");
			$("#subject_error_message").show();
			error_subject = true;
		} else {
			$("#subject_error_message").hide();
		}
	
	}

	function check_message() {
	
		var message_length = $("#form_message").val().length;
		
		if(message_length < 5 || message_length > 30) {
			$("#message_error_message").html("please write a message to us");
			$("#message_error_message").show();
			error_message = true;
		} else {
			$("#message_error_message").hide();
		}
	
	}

	$("#registration_form").submit(function() {
											
		error_username = false;
		error_password = false;
		error_retype_password = false;
		error_email = false;
		error_number = false
											
		check_username();
		check_password();
		check_retype_password();
		check_email();
		check_number();
		
		if(error_username == false && error_password == false && error_retype_password == false && error_email == false && error_number == false) {
			return true;
		} else {
			return false;	
		}

	});

	$("#login_form").submit(function() {
										
		error_password = false;
		error_email = false;
	
											
		
		check_password();
	
		check_email();
		
		if(error_password == false && error_email == false) {
			return true;
		} else {
			return false;	
		}

	});

	$("#contact_form").submit(function() {
										
		error_username = false;
		error_email = false;
		error_subject = false;
		error_message = false;
	
											
		
		check_username();
		check_subject();
		check_email();
		check_message();
		
		if(error_username == false && error_email == false && error_message == false && error_subject == false) {
			return true;
		} else {
			return false;	
		}

	});

});