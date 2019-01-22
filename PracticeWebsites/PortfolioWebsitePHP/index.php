<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Kirtana Suresh</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container">

    <div class="assignments">
      <h3>Assignments</h3>
      <ul>Homework
        <li><a href="#">Homework 1</a></li>
        <li><a href="#">Homework 2</a></li>
        <li><a href="#">Homework 3</a></li>
      </ul>
      <ul>ICEs
        <li><a href="#">ICE 1</a></li>
        <li><a href="#">ICE 2</a></li>
        <li><a href="#">ICE 3</a></li>
      </ul>
      <ul>Projects
        <li><a href="#">Project 1</a></li>
        <li><a href="#">Project 2</a></li>
        <li><a href="#">Project 3</a></li>
      </ul>
    </div>


    <div class="content">
      <header>
        <h2>Kirtana Suresh</h2>
      </header>
      <div class="image">
        <img class="profile-pic" src="images/pic1.jpg" alt="A photo of me on the banks of Genesee river"><br>
        <!-- image-close -->
      </div>
      Hi everyone, my name is Kirtana. <br>
      I'm from Nagpur, India and I currently live in Rochester, NY. I'm an MS Software Engineering student at Rochester Institute of Technology.<br>
      <strong>Email: ks3057 [at] rit [dot] edu</strong>
      <!-- content-close -->
    </div>

    <div class="form">

		<h3>Contact Me</h3>


		<?php

        // Check for Header Injections
        function has_header_injection($str)
        {
            return preg_match("/[\r\n]/", $str);
        }


        if (isset($_POST['contact_submit'])) {

            // Assign trimmed form data to variables
            $name	= trim($_POST['name']);
            $email	= trim($_POST['email']);
            $msg	= $_POST['message'];
            $name_error = $email_error = $success_msg = "";

            // Check to see if $name or $email have header injections
            if (has_header_injection($name) || has_header_injection($email)) {
                die(); // If true, kill the script
            }

            if (empty($_POST["name"])) {
                $name_error = "Name is required";
            } else {
                if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                    $nameErr = "Name can contain only letters and white space";
                }
            }

            if (empty($_POST["email"])) {
                $email_error = "Email is required";
            } else {
                if (filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
                    $email_error= "Email address '$email_a' is invalid";
                }
            }


            // Add the recipient email to a variable
            $to	= "mefi@next2cloud.info";

            //Create header
            $headers = "From: ".$email;
            $headers .= "\r\n" ."CC: ".$email;

            //Create a subject
            $subject = "$name sent a message via contact form";

            // Send the email!
            if ($name_error == "" and $email_error == "") {
                mail($to, $subject, $msg, $headers);
                $success_msg = "Thanks for contacting me! Please allow 24 hours for a response.";
                $name_error = $email_error = "";
            }
        } ?>

		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="contact-form">
			<label for="name">Your name</label>
			<input type="text" id="name" name="name" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ''; ?>">
			<span class="error"><?php echo $name_error; ?></span>

			<label for="email">Your email</label>
			<input type="email" id="email" name="email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>">
			<span class="error"><?php echo $email_error; ?></span>

			<label for="message">Your message</label>
			<textarea id="message" name="message"><?php echo $msg; ?></textarea>

			<input type="submit" class="button next" name="contact_submit" value="Send Message">
      <span class="success"><?php echo $success_msg; ?></span>
		</form>
      <!-- form-close -->
    </div>

    <!-- container-close -->
  </div>

  <footer class="links">
    <ul>
      <li><a href="https://www.linkedin.com/in/kirtana-suresh" target="_blank"><img src="images/linkedin.png" /></a></li>
      <li><a href="https://github.com/ks3057" target="_blank"><img src="images/GitHub.png" /></a></li>
    </ul>
  </footer>

</body>

</html>
