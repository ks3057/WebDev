<?php 
	define("TITLE", "Team | Franklin's Fine Dining"); 
	include('includes/header.php');
?>

<div id = "team-members" class="cf">
	<h1> Our team at Franklin's </h1>
	<p><strong>  We are a family run business </strong></p>
	
	<hr>
	<?php 
		foreach($teamMembers as $member){
			
	?>
		<div class = "member">
			<img src="img/<?php echo $member[img];?>.png" alt="<?php echo $member[name];?>">
			<h2><?php echo $member[name];?></h2>
			<p><?php echo $member[bio];?></p>
			
		</div><!-- member -->
	
	<?php 
		}
	?>
	
</div><!-- team-members -->

<?php 
	include('includes/footer.php');
?>