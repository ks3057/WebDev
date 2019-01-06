<?php
	
	// Constants
	define("TITLE", "Multi-Dimensional Arrays");
	
	
	// Custom Variables
	$lesson_number = 7;
	$this_year = date('Y');
	$my_name = "Kirtana";

	
	// Moustache Multi-Dimensional Array
	$moustaches = array(
		array(
			name => "Libero",
			creep => "low",
			growth => 90,
		),
		array(
			name => "Gandhi",
			creep => "medium",
			growth => 30,
		),
		array(
			name => "Hitler",
			creep => "high",
			growth => 60,
		),
	);


?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
		<link href="/assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="/assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lesson_number; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				<h2>The <?php echo $moustaches[0][name]; ?> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><?php echo $moustaches[0][creep]; ?></strong> and takes <strong><?php echo $moustaches[0][growth]; ?> days</strong> to grow on average.</strong></p>
				
				<h2>The <?php echo $moustaches[1][name]; ?> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><?php echo $moustaches[1][creep]; ?></strong> and takes <strong><?php echo $moustaches[1][growth]; ?> days</strong> to grow on average.</strong></p>
				
				<h2>The <?php echo $moustaches[2][name]; ?> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><?php echo $moustaches[2][creep]; ?></strong> and takes <strong><?php echo $moustaches[2][growth]; ?> days</strong> to grow on average.</strong></p>
				
				<!-- REPEAT ABOVE 2X -->
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo $this_year ?> - <?php echo $my_name ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
