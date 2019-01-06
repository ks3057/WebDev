<?php

	// Constants
	define("TITLE", "Arrays");


	// Variables
	$this_year = date('Y');
	$my_name = "Kirtana";
	
	// Arrays
	$people = array(
		array(
			name => "Kirtana",
			country => "India",
		),
		array(
			name => "Jiaxin",
			country => "China",
		),
		array(
			name => "Ariana",
			country => "Kosovo",
		),
	);
	
	
	$clothing = array(
		array(
			name => "Saree",
			description => "A garment consisting of a length of cotton or silk elaborately draped around the body",
		),
		array(
			name => "Cheongsam",
			description => "It is one of the most typical, traditional, and feminine body-hugging dress with distinctive Chinese features. It was also known as qipao",
		),
		array(
			name => "Peshtjellak",
			description => "Peshtjellak is consistent of a long white shirt, and two 'peshtjellak' (a white apron), the front and the back one.",
		),
	);
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Get Your Hands Dirty: <?php echo TITLE; ?></title>
		<link href="/assets/styles.css" rel="stylesheet">
		<script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shCore.js"></script>
		<script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shBrushPhp.js"></script>
		<link type="text/css" rel="stylesheet" href="/assets/syntaxhighlighter/styles/shCoreDefault.css"/>
		<script type="text/javascript">SyntaxHighlighter.all();</script>
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="/assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Get Your Hands Dirty: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3><?php echo $people[0][name]; ?> from <?php echo $people[0][country]; ?></h3>
				<p>The most famous clothing for women in <?php echo $people[0][country]; ?> is <?php echo $clothing[0][name]; ?>. It can be described as: 
				<?php echo $clothing[0][description]; ?></p>
				
				<h3><?php echo $people[1][name]; ?> from <?php echo $people[1][country]; ?></h3>
				<p>The most famous clothing for women in <?php echo $people[1][country]; ?> is <?php echo $clothing[1][name]; ?>. It can be described as: 
				<?php echo $clothing[1][description]; ?></p>
				
				<h3><?php echo $people[2][name]; ?> from <?php echo $people[2][country]; ?></h3>
				<p>The most famous clothing for women in <?php echo $people[2][country]; ?> is <?php echo $clothing[2][name]; ?>. It can be described as: 
				<?php echo $clothing[2][description]; ?></p>
								
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the final example</a>
			
			<div class="navs cf">
				<a href="/08_MultiDimensionalArrays" class="button prev">Previous Lecture</a>
				<a href="/10_IfStatements" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<?php echo $this_year; ?> - <?php echo $my_name; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
