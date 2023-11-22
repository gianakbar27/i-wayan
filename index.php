<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login form</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<div class="container">
		<form action="controller/login.php" method="POST" class="login-username">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<?php
				if(isset($_GET['pesan'])){
				if($_GET['pesan']=="gagal"){
					echo "<div class='alert'>username dan Password tidak sesuai !</div>";	
				}	
			}
			?>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
		</form>
	</div>
</body>
</html>