<?php 
	define("TITLE", "Menu | Franklin's Fine Dining"); 
	include('includes/header.php');
		
	function strip_bad_chars($input){
		$output = preg_replace("/[^a-zA-Z0-9_-]/", "", $input);
		return $output;
		
	}
	
	if(isset($_GET['item'])){
		$menuItem = strip_bad_chars($_GET['item']);
		
		$dish = $menuItems[$menuItem];
	}
	
	function suggested_tip($price, $tip){
		$total_tip = $price * $tip;
		echo money_format("%.2n", $total_tip);
	}
?>

<div id="dish">
	<h1><?php echo $dish[title]; ?> <span class="price"><sup>$</sup> <?php echo $dish[price]; ?> </span></h1>
	<p><?php echo $dish[title]; ?></p>
	<br>
	<p><strong>Suggested Beverage: <?php echo $dish[drink]; ?></strong></p>
	<p><em>Suggested Tip: <sup>$</sup><?php suggested_tip($dish[price], 0.20); ?></em></p>
</div><!-- dish -->

<hr>

<a href="menu.php" class="button previous">&laquo; Back to the Menu </a>

<?php 
	include('includes/footer.php');
?>