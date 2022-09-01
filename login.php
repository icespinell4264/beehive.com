<?php
	include_once 'header.php';
?>
<style>
* {
  margin: 0;
  padding: 0;
}
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
  text-align: center;
  align-items: center;
  
}

h5 {
  padding-top: 18px;
  text-align: center;
}

h1 {
  padding-top: 25px;
  text-align: center;
}


.container {
  background-color: rgb(255, 255, 255);
  position: flex;
  padding-top: 200px;
}


input[type="text"],
input[type="password"] {
  text-align: center;
  width: 45%;
  padding: 20px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  border-radius: 12px;
  background: #f1f1f1;
}

input[type="text"]:focus,
input[type="password"]:focus {
  background-color: #ddd;
  outline: none;
}


hr {
  border: 1px solid #ffe600;
  margin-bottom: 100px;
}



.registerbtn {
  background: grey;
  padding: 20px;
  border: none;
  border-radius: 12px;
  cursor: pointer;
  position: relative;
  transition: all 0.35s;
  outline: none;
  margin-bottom: 130px;
}

.registerbtn:hover p {
  color: white;
}
.registerbtn:hover {
  background: #11101d;
}

.registerbtn:hover:after {
  width: 100%;
}


.container_signin {
  background-color: #e6e4e4;
  text-align: center;
  margin: auto;
  padding: 30px;
  padding-top: 30px;
}
</style>

<section class="home-section">
<div class="container">
<h2>Log in</h2>
<div class="signup-form-form">

	<form action="includes/login.inc.php" method="post">
		<br>
	<input type="text" name="uid" placeholder="username/email">
	<br>
	<input type="password" name="pwd" placeholder="password">	
	<br>
	
	<button type="submit" name="submit"class="registerbtn"><p>log in</p></button>
</form>
<div class="container_signin">
<a href = "reset-password.php">Forgot your password?</a>
  </div>

</div>
</div>
<?php
if (isset($_GET["newpwd"])) {
	if($_GET["newpwd"]== "passwordupdated"){
		echo '<p class="signupsuccess"> Your password has been reset!</p>';
	}
}
?>

<?php

	if (isset($_GET['error'])) {
		if ($_GET['error'] == "emptyinput") {
			echo "<p> Fill in all fields! </p>";
		}

		else if ($_GET['error'] == "wronglogin") {
			echo "<p>incorrect login</p>";
		
		}
	}
	?>
</section>
</section>
</body>
</html>

