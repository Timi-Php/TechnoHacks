<!DOCTYPE html>
<html>
	<head>
		<title>
			 Simple Calculator
		</title>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="">
		<link rel="stylesheet" type="text/css" href="">
	</head>
	<body>
		
		<div>
			<div class="text-center">
			<h3>Simple Calculator</h3>
			</div>
		</div>
		<div class="form-login form-wrap">
			<br>
		<div class="card">
			<form class="container" action="index.php" method="POST">
				<input type="text" class="form-control" name="f" placeholder="Input first number" required="">
				<br>
				<input type="text" class="form-control" name="s" placeholder="Input second number" required="">
				<br>
				<input type="submit" name="add" value="Add +" required="">
				<br>
				<input type="submit" name="sub" value="Subtract -" required="">
				<br>
				<input type="submit" name="multi" value="Multiply *" required="">
				<br>
				<input type="submit" name="div" value="Divide /">
				<br>
			</form>
		</div>
		<output>	
		<?php  
			if (isset($_POST['add']))
			{
				$f = $_POST['f'];
				$s = $_POST['s'];
				$add = $f+$s;
				echo "Addition of both number is: ".$add;
			}

			// Subtraction HERE!
			if (isset($_POST['sub']))
			{
				$f = $_POST['f'];
				$s = $_POST['s'];
				$sub = $f-$s;
				echo "Subtraction of both number is: ".$sub;	
			}

			// Multiplication HERE!
			if (isset($_POST['multi']))
			{
				$f = $_POST['f'];
				$s = $_POST['s'];
				$multi = $f*$s;
				echo "Multiplication of both number is: ".$multi;
			}

			//Division HERE
			if (isset($_POST['div']))
			{
				$f = $_POST['f'];
				$s = $_POST['s'];
				$div = $f/$s;
				echo "Division of both number is: ".$div;
			}
		?>
	</output>
	</div>
	</body>
</html>