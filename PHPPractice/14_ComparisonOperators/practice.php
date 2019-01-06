<?php
	
	// Constants
	define("TITLE", "Comparison Operators");
	
	// Custom Variables
	$this_year = date('Y');
	$lesson_number = 14;
	$my_name = "Kirtana";
	
	$yearsOnEarth = 26;
	$favStringNum = "7";
	$yourFavNum = 10;
	



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
				
				<h3>Equal <code>==</code></h3>
				<?php
					if($yearsOnEarth == 26){
						echo "<p>Your age is $yearsOnEarth!</p>";
					} else {
						echo "<p>Oh you are $yearsOnEarth years old.</p>";
					}
				?>
				
				<h3>Identical <code>===</code></h3>
				<?php
					if($favStringNum === "1"){
						echo "<p>Your fav number is a string!</p>";
					} else if($favStringNum === 1) {
						echo "<p>Your fav number is an integer!</p>";
					} else {
						echo "<p>Your fav number is not an integer or string!</p>";
					}
				?>
				
				<h3>Not Equal <code>!=</code></h3>
				<?php
					if($yearsOnEarth != 26){
						echo "<p>Your age is not $yearsOnEarth!</p>";
					} else {
						echo "<p>Oh you are $yearsOnEarth years old.</p>";
					}
				?>
				
				<h3>Not Identical <code>!==</code></h3>
				<?php
					if($favStringNum !== "1"){
						echo "<p>Your fav number is either not a string or not equal to 1!</p>";
					}
				?>
				
				<h3>Less Than <code>&lt;</code></h3>
				<?php
					if($yourFavNum < 100){
						echo "<p>Your fav num is less than 100!</p>";
					} else {
						echo "<p>Your fav num is not less than 100!</p>";
					}
				?>
				
				<h3>Greater Than <code>&gt;</code></h3>
				<?php
					if($yourFavNum > 100){
						echo "<p>Your fav num is greater than 100!</p>";
					} else {
						echo "<p>Your fav num is not greater than 100!</p>";
					}
				?>
				
				<h3>Less Than or Equal To <code>&lt;=</code></h3>
				<?php
					if($yourFavNum <= 50){
						echo "<p>Your fav num is less than equal to 50!</p>";
					} else {
						echo "<p>Your fav num is not less than equal to 50!</p>";
					}
				?>
				
				<h3>Greater Than or Equal To <code>&gt;=</code></h3>
				<?php
					if($yourFavNum >= 50){
						echo "<p>Your fav num is greater than equal to 50!</p>";
					} else {
						echo "<p>Your fav num is not greater than equal to 50!</p>";
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
