<?php
$feedback = "";
$num1 = 0;
$num2 = 0;

if (!empty($_POST)){
	echo "Form was submitted <br>";
	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];

	$sum = $num1 + $num2;
	//variable is evaluated inside string, it is called interpolation, example below
	echo "Sum is $sum <br>";
	echo "sum: {$sum}number"; //interpolation
	echo 'sum: {$sum}number'; //no interpolation
}
//super global variables
//echo "<pre>";
//spits out all elements of the array with respective variable name
print_r($_POST);
//echo "<pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>HTML5 boilerplate – all you really need…</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body id="home">
  <?php
	echo "<h1> Hello World </h1>";
	?>
	<form method="post">
		<input name= "num1"/> + <input name="num2" /><br/>
		<input type="submit" name="submit" />
	</form>
</body>
</html>
