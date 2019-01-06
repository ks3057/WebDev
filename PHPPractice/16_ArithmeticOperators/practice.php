<?php
	
	// Constants
	define("TITLE", "Arithmetic Operators");
	
	// Custom Variables
	$this_year = date('Y');
	$lesson_number = 16;
	$my_name = "Kirtana";
	
	$a = 10;
	$b = 20;


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
				
				<h3>Addition <code>+</code></h3>
				<?php
					$c = $a + $b;
					echo "$a + $b = $c";
				?>
				
				<h3>Subtraction <code>-</code></h3>
				<?php
					$c = $a - $b;
					echo "$a - $b = $c";
				?>
				
				<h3>Multiplication <code>*</code></h3>
				<?php
					$c = $a * $b;
					echo "$a * $b = $c";
				?>
				
				<h3>Division <code>/</code></h3>
				<?php
					$c = $a / $b;
					echo "$a / $b = $c";
				?>
				
				<h3>Modulus <code>%</code></h3>
				<?php
					$c = $a % $b;
					echo "$a % $b = $c";
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
