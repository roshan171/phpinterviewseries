<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h2>Welcome:<?php echo $_SESSION['username'];?></h2>

 <a href="logout.php">Logout</a>
</body>
</html>