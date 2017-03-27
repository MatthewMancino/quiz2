<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="./css/quiz2.css">

</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-8 centered">
					<!-- <form action="register.php" method="post">
					First Name: <input type="text" name="fname"> <br/>
					Last Name: <input type="text" name="lname"> <br/>
					E-mail Address: <input type="text" name="email"> <br/>
					<input type="submit">
					-->
					<form action="register.php" method="post">
						First Name: <input type="text" name="fname"> <br/>
						Last Name: <input type="text" name="lname"> <br/>
						E-mail Address: <input type="text" name="email"> <br/>
						<input type="submit">

					<?php
					if(!isset($_COOKIE[$fname]) && !isset($_COOKIE[$lname]) && !isset($_COOKIE[$email])){


					} else {
						echo "<p> Hi," . $_COOKIE[$fname] . "you recently signed up with the e-mail" . $_COOKIE[$email] . " , thank you!";


					/*	echo "<p> Cookie named '" . $fname "' is " . $_COOKIE[$fname];
						echo "Cookie named '" . $lname "' is " . $_COOKIE[$fname];
						echo "Cookie named '" . $email "' is " . $_COOKIE[$fname] . "</p>";*/

					}
					?>
			</div>
		</div>
	</div>


	<?php



	?>
	</form>

</body>

<html>
