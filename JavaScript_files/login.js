/* sign in pop */
$("#back").hide();
$("#pass_submit").hide();
$("#errors").hide();
/* use jquery document fully loaded*/
$(document).ready(function(){
/* return button starts hidden */


$("#next").click(function(){

	/* Email regex validation */
	email = $("#email").val();
	pattern = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

	/* Verify email format */
	if (email.match(pattern)!=null){
		
		$.post("./database/login_verification.php",	/* File with form verification code */
			{'username':email},	/* pass entered emial for verification*/
			function(data){
				console.log(data);
				results = JSON.parse(data);
				/* If email found proceed to password*/
				console.log(results[0].test1)
				if (results[0].user_checked){
				console.log("email found.. password now");
					$("#email_next").hide(500, "swing");
					$("#pass_submit").show(500, "swing");
					$("#back").show(500, "swing");
					$("#email_show").empty().css({"margin-left": "30%", "margin-top":"20px"});
					$("#email_show").append(email);
					$("#errors").empty();
				}
				/* else tell user email not in databse */
				else{
					console.log("email not found, fix error showing");
					$("#errors").empty();
					$("#errors").append("Email not found! \n Try signing up");
					$("#errors").show(800, "swing");
				}
			}
		)
	}
	else{
		/* Show errors if email is invalid */
		$("#errors").empty().append("Please enter a valid Email to continue");
		$("#errors").show(800, "swing");
	}
	

})

$("#back").click(function(){
	$("#pass_submit").hide(500, "swing");
	$("#email_next").show(500, "swing");
	$("#back").hide(500, "swing");
})

/* funtion will send data to php and re-direct to profile page*/
$("#submit").click(function(){
	email = $("#email").val();
	password = $("#password").val();
	console.log(password);
	
	$.post("./database/login_verification.php",		/* File with form verification code */
		{"username":email, 'password':password},	/* pass entered emial for verification*/
		function(data){
			console.log(data);
			results = JSON.parse(data);
			if (results[0].pass_checked){
				link = "./php_files/profile.php?ID="+results[0].Id
				window.location.href = (link);
			}
			else{
				$("#errors").empty().append("Incorrect password entered");
				$("#errors").show(800, "swing");
			}
		})

	
})

$("#close").click(function(){
	$("#signIn").hide(500, "swing");
})

})
