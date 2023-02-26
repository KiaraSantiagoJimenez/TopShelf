<?php
	include_once('header.php');
?>
	<section class="login">
		<form class="" action="login.inc.php" method="post">
			<p>Username:<input type="text" placeholder="Username" name="username" /></p> 
			<p>Password:<input type="text" placeholder="Password" name="password" type="password" /></p>
			<button type="submit" name="login">Login</button>
		<?php 
			if(isset($_GET['error'])) { 
			echo "<p>Incorrect username or password</p>"; 
			}  
		?> 
		</form>
	</section>
<?php
	include("footer.php");
?>