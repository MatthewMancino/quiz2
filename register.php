<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="./css/quiz2.css">

</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-8 jumbotron">
				<p>Welcome <?php echo $_POST["fname"]; echo $_POST["lname"]; ?><br>
				Your e-mail address is: <?php echo $_POST["email"]; ?> </p>

				<?php
				$f_name = "fname";
				$l_name = "lname";
				$email = "email";
				setcookie($f_name, $_POST["fname"],time() + (86400 * 30), "/");
				setcookie($l_name, $_POST["fname"],time() + (86400 * 30), "/");
				setcookie($email, $_POST["email"], time() + (86400 * 30), "/");
				?>


			</div>
		</div>
	</div>


</body>

</html>
