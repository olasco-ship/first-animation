<!DOCTYPE html>
<html>
<head>
</head>
</html>
<title> first offline</title>
<meta carst="utf-8">
	</head>
	<body>
		<?php
		require(db.php);
		if(isset($_REQUEST['username'])){
			$username = stripslashes($_REQUEST['username']);
			$username = mysqli_real_escape_string($con, $username);
			$email = stripslashes($_REQUEST['email']);
			$email = mysqli_real_escape_string($con, $email);
			$password = stripslashes($_REQUEST['password']);
			$password = mysqli_real_escape_string($con, $password);
			$trn_date =  date("Y-m-d H:i:s");
			$query = "INSERT into `pedin`(username, password, email, trn_date)
			VALUES ('$username', '".md5($password)."', $email, $trn_date)";
			$result = mysqli_query($con, $query);
			if($result){
				echo "<div class='form'>
				<h4>registerd successfully</h4>
				<br/>click here to <a href=''>Login</a>
				</div>";
			}
		}else{
			
		
		?>
		<div class = "form">
			<h4> Registration </h4>
			<form name="OLasco" action="" method="post">
				<input type="text" name="Username" placeholder="Username" required />
				<input type="password" name="password" placeholder="Password" required />
				<input type="text" name="email" placeholder="Em,ail" required />
				<input type="submit" name="submit" value="submit">
			</form>
		</div>
	<?php } ?>

	</body>
</html>