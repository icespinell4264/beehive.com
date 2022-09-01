<?php
	include_once 'header.php';
?>


<section class="signup-form">
<div class="wrapper-main">
<h2>sign up</h2>
	<h1>Reset password</h1>
	<p>a email will send u instructions on how to reset ur password</p>
	<form action="includes/reset-request.inc.php" method="post">
		<input type="text" name="email" placeholder="enter ur email...">
		<button type="submit" name="reset-request-submit">
			 receive new password by mail
		</button>
	</form>
	<?php
	 	if (isset($_GET["reset"])) {
	 		if ($_GET["reset"] == "sucess") {

	 			echo '<p class="signupsuccess"> check your email!</p>';
	 		}
	 	}

</section>

