<?php 
	define("TITLE", "Contact | Franklin's Fine Dining"); 
	include('includes/header.php');
?>

<div id = "contact">
	<hr>
	<h1> Get in touch with us </h1>
	
	<?php 
		
		// check for header injections
		function has_header_injection($str){
			return preg_match("/[\r\n]/", $str);
		}
		
		if(isset($_POST['contact_submit'])){
			$name = trim($_POST['name']);
			$email = trim($_POST['email']);
			$msg = $_POST['message'];
			
			//Check to see if $name or $email have header injections
			if(has_header_injection($name) || has_header_injection($email)){
				die();// if true, kill script
			}
			
			if(!$name || !$email || !$msg){
				echo '<h4 class="error">All fields required.</h4><a href="contact.php" class="button block">Go back and try again</a>';
				exit;
			}
			
			// add the recipient email to a variable
			$to = "jupajuxuh@khtyler.com";
			
			//Create subject
			$subject = "$name sent you a message via your contact form";
			$message = "Name: $name\r\n";
			$message .= "Email: $email\r\n";
			$message .= "Message:\r\n$msg";
			
			//if subscriber check box was checked
			if(isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe'){
				$message .= "\r\n\r\nPlease add $email to mailing list.\r\n";
			}
			
			$message = wordwrap($message, 72);
			
			//set mail headers to variable
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
			$headers .= "From: $name <$email> \r\n";
			$headers .= "X-Priority: 1\r\n";
			$headers .= "X-MSMail-Priority: High\r\n\r\n";
			
			//send the email
			mail($to, $subject, $headers);
		
	?>
	
	<!-- Show success message after email is sent -->
	<h5> Thanks for contacting us</h5>
	<p>Please allow 24 hours for a response</p>
	<p><a href="index.php" class="button block">&laquo; Go to Home Page</a></p>
	<?php } else { ?>
	
	<!-- when action is empty, it posts to same page -->
	<form method="post" action="" id="contact-form">
		
		<label for="name">Your name</label>
		<input type="text" id="name" name="name">
		
		<label for="email">Your email</label>
		<input type="email" id="email" name="email">
		
		<label for="message">and your message</label>
		<textarea id="message" name="message"></textarea>
		
		<input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
		<label for="subscribe">Subscribe to Newsletter</label>
		
		<input type="submit" class="button next" name="contact_submit" value="Send Message">
	
	</form>
	
	<?php } ?>
	
	<hr>
	
</div><!-- contact -->

<?php 
	include('includes/footer.php');
?>