<?php

&db = parse_url(getenv("DATABASE-URL"));

$pdo = new PDO("pgsql:" . sprintf("host=%s;port=%s;user=%s;password=%s;dbname=%s",
	$db["host"],
	$db["port"],
	$db["user"],
	$db["pass"],
	ltrim($db["path"],"/")
));

if(isset($_POST['login'])){
	session_start();
	$username = $_POST['user'];
	$password = $_POST['pass'];

?>

<html>
<head>
	<title>Login Page</title>
</head>

<body>
	<form>
		<p>
			username:<input type="text" name="user" />
		</p>
		<p>
			password:<input type="text" name="pass" />
		</p>
		<p>
			<input type="submit" value="login" name="login" />
		</p>
	</form>

</body>
</html>
