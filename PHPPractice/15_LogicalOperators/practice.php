<?php
	
	// Constants
	define("TITLE", "Logical Operators");
	
	// Custom Variables
	$this_year = date('Y');
	$lesson_number = 15;
	$my_name = "Kirtana";
	

	$dog = True;
	$cat = False;


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
			
			<h1>Tutorial <?php echo $lesson_number; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3>And <code>and</code></h3>
				<?php
					if ($dog and $cat){
						echo "You have a dog and cat!";
					} else {
						echo "You dont have either one of, or both, dog and cat.";
					};
				?>
				
				<h3>Or <code>or</code></h3>
				<?php
					if ($dog or $cat){
						echo "You have either a dog or cat, or both!";
					} else {
						echo "You have neither a dog or cat.";
					};
				?>
				
				<h3>Not <code>!</code></h3>
				<?php
					if (!$cat){
						echo "You don't have cat, you're probably a dog person.";
					} else {
						echo "You're a cat person.";
					};
				?>
				
				<h3>And <code>&amp;&amp;</code></h3>
				<?php
					if ($dog && $cat){
						echo "You have a dog and cat!";
					} else {
						echo "You dont have either one of, or both, dog and cat.";
					};
				?>
				
				<h3>Or <code>||</code></h3>
				<?php
					if ($dog || $cat){
						echo "You have either a dog or cat, or both!";
					} else {
						echo "You have neither a dog or cat.";
					};

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
