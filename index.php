<!DOCTYPE html>
<html lang="en">
<head>
<title>Pocketmine Devs Central</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/font.css">
<link rel="stylesheet" href="css/main.css">
<script src="js/functions.js"></script>
</head>
<body>
<header>
<div style="display:none" id="userPanel" class="userPanel">
 <? require_once("server/constants/loginForm.php"); ?>
 <br>
 <? require_once("server/constants/registerForm.php"); ?>
</div>
<div class="login-register">
	<input type="button" onclick="Show(userPanel)" value="Login/Registration">
</div>
</header>
</body>
</html>
