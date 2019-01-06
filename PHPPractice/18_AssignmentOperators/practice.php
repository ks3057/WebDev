<?php
	
	// Constants
	define("TITLE", "Assignment Operators");
	
	// Custom Variables
	$this_year = date('Y');
	$lesson_number = 18;
	$my_name = "Kirtana";


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
				
				<h3>Addition Assignment Operator <code>+=</code></h3>
				<?php
					$a = 20;
					echo "a is $a";
					echo "<br>";
					$b = 50;
					echo "b is $b";
					$a += $b;
					echo "<br>a += b = $a";
				?>
				
				<h3>Subtraction Assignment Operator <code>-=</code></h3>
				<?php
					$a = 20;
					echo "a is $a";
					echo "<br>";
					$b = 50;
					echo "b is $b";
					$a -= $b;
					echo "<br>a -= b = $a";
				?>
				
				<h3>Multiplication Assignment Operator <code>*=</code></h3>
				<?php
					$a = 20;
					echo "a is $a";
					echo "<br>";
					$b = 50;
					echo "b is $b";
					$a *= $b;
					echo "<br>a *= b = $a";
				?>
				
				<h3>Division Assignment Operator <code>/=</code></h3>
				<?php
					$a = 20;
					echo "a is $a";
					echo "<br>";
					$b = 50;
					echo "b is $b";
					$a += $b;
					echo "<br>a += b = $a";
				?>
				
				<h3>Modulus Assignment Operator <code>%=</code></h3>
				<?php
					$a = 20;
					echo "a is $a";
					echo "<br>";
					$b = 50;
					echo "b is $b";
					$a /= $b;
					echo "<br>a /= b = $a";
				?>
				
				<h3>Concatenation Assignment Operator <code>.=</code></h3>
				<?php
					$a = 20;
					echo "a is $a";
					echo "<br>";
					$b = 50;
					echo "b is $b";
					$a .= $b;
					echo "<br>a .= b = $a";
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
