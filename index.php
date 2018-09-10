<?php

require('config.php');
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
</head>
<body>
<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>I want to see a <a href="dash.php">potato</a> </p>
<a href="logout.php">Bye</a>
</div>
</body>
</html>
