<!DOCTYPE html>
<html lang="en">

<head>
	
<?php
	include("header.inc");
?>
</head>
<body>
<?php
	include("menu.inc");
?>
<article>
<h1><span class="highlight">Supervisor Login Page</span></h1>

<form method="post" action="coolguy.php" novalidate="novalidate">
	<fieldset>
		<legend>Supervisor Login</legend>
		<p><label for="username">Username:</label>
		<input type="text" name="username" id="username" required="required" />
		</p>

		<p><label for="password">Password:</label>
		<input type="password" name="password" id="password" required="required" />
		</p>

		<div id="bottom"> </div>
		<p><input type="submit" value="Login" />
		</p>
	</fieldset> 
</form>

<p>You want to access the supervisor queries? We are gonna need to verify who you are. Security starts with us. Type your login details above. Thanks for your cooperation in this endeavour as we try to stamp out cyber criminals and restore justice to the attempt table.</p>
</article>

</body>
</html>
