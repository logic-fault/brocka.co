<?php
session_start();
require_once('hf.php');

printHeader('contact');

?>


<div id="wrapper">
	<div id="contactwrapper">
	<form id="contact" name="contact" method="post" action="contact.php" enctype="multipart/form-data">
		<input type="hidden" name="check" value="01">
		
		<label for="name" id="namelabel">Name:<span class="err topp">enter your name</span></label>
		<input type="text" name="name" id="name" class="textinput">
		 
		
		<label for="email" id="emailabel">E-mail:<span class="err topp">enter a valid e-mail address</span></label>
		<input type="email" name="email" id="email" class="textinput">
		
		<label for="message" id="msglabel">Message:<span class="err txarea">share some stuff with us</span></label>
		<textarea name="message" id="message" class="msgtextarea"></textarea>
		
		<img src="contact_form/captcha.php" id="captchaimg">
		
		<label for="captcha" id="captchalabel">Human?<span class="err capter">your CAPTCHA code looks wrong</span></label>
		<input type="text" name="captchavalue" id="captchavalue" class="textcaptcha">
		
		<section id="subber">
		<a href="javascript:void(0);" name="submitlink" id="submitlink" class="btn">Send Message</a>
		</section>
	</form>
	</div>
</div>

<script type="text/javascript">
function checkValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i);
    
    return pattern.test(emailAddress);
};

var mailsendstatus;
function userSendMailStatus(uname, uemail, umsg, ucaptcha) {
	// checking for some valid user name
	if(!uname) {
		$("#namelabel").children(".err").fadeIn('slow');
	}
	else if(uname.length > 3) {
		$("#namelabel").children(".err").fadeOut('slow');		
	}
	
	// checking for valid email
	if(!checkValidEmailAddress(uemail)) {
		$("#emailabel").children(".err").fadeIn('slow');
	}
	else if(checkValidEmailAddress(uemail)) {
		$("#emailabel").children(".err").fadeOut('slow');	
	}
	
	// checking for valid message
	if(!umsg) {
		$("#msglabel").children(".err").fadeIn('slow');
	}
	else if(umsg.length > 5) {
		$("#msglabel").children(".err").fadeOut('slow');
	}
	
	// ajax check for captcha code
	$.ajax(
		{
			type: 'POST',
			url: 'contact_form/captcha_check.php',
			data: $("#contact").serialize(),
			success: function(data) {
				if(data == "false") {
					mailsendstatus = false;
					$("#captchalabel").children(".err").fadeIn('slow');
				}
				else if(data == "true"){
					$("#captchalabel").children(".err").fadeOut('slow');
					
					if(uname.length > 3 && umsg.length > 5 && checkValidEmailAddress(uemail)) {
						// in this case all of our inputs look good
						// so we say true and send the mail
						mailsendstatus = true;
						
						$("#subber").html('<img src="load.gif" alt="loading...">');

						$.ajax(
							{
								type: 'POST',
								url: 'contact_form/sendmail.php',
								data: $("#contact").serialize(),
								success: function(data) {
									if(data == "yes") {
									$("#contactwrapper").slideUp(650, function(){
										$(this).before("<strong>Yep your mail has been sent!</strong>");
									});
									}
								}
							}
						); // close sending email ajax call	
					} // close if logic for mailsendstatus true
				} // close check CAPTCHA return true
			} // close ajax success callback function
		} // close ajax bracket open
	);
	
	return mailsendstatus;
}

$(document).ready(function(){
	$("#contact").submit(function() { return false; });
	
	$("#submitlink").bind("click", function(e){
		var usercaptvalue = $("#captchavalue").val();
		var subnamevalue  = $("#name").val();
		var emailvalue    = $("#email").val();
		var msgvalue      = $("#message").val();
		
		
		var postchecks = userSendMailStatus(subnamevalue, emailvalue, msgvalue, usercaptvalue);
	});
});
</script>

<?

printFooter();

?>
