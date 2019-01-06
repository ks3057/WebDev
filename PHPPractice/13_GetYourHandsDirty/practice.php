<?php
	
	// Constants
	define("TITLE", "If, Else-If, Else");
	
	// Custom Variables
	$this_year = date('Y');
	$lesson_number = 11;
	$my_name = "Kirtana";
	
	$zodiac = "Sagittarius";
	

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Get Your Hands Dirty: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				<?php 
					if(strcasecmp ($zodiac, "sagittarius") == 0){
						echo "Hey your zodiac is the same as mine, $zodiac!";
					} else if ($zodiac == "Leo"){
						echo "Your zodiac is, $zodiac.";
					} else {
						echo "Hmm don't care about your zodiac, $zodiac. Thank you, next!";
					} 
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo $this_year; ?> - <?php echo $my_name; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
