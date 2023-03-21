<!DOCTYPE html>
<html lang="de-De">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./src/mdl/googleAPI-style.css">
	<link rel="stylesheet" href="./src/mdl/mdl-style.css">
	<script src="./src/mdl/mdl-script.js"></script>
	<script src="./src/js/script.js"></script>
	<script src="./src/js/syncContent.js"></script>
	<link rel="manifest" href="./config/manifest.webmanifest">
	<link rel="stylesheet" href="./src/css/style.css">
	<link rel="icon" type="image/x-icon" href="./src/img/homework-favicon1.png">
	<title>Termine</title>
</head>
<style>
	::placeholder {
		color: black;
	}
</style>
<body>
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
		<header class="mdl-layout__header">
			<div class="mdl-layout__header-row">
				<span class="mdl-layout-title">Hausaufgaben&nbsp;9E</b></span>
				<div class="mdl-layout-spacer"></div>
				<nav class="mdl-navigation mdl-layout--large-screen-only">

				</nav>
			</div>
			<div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
		</header>
		<div class="mdl-layout__drawer">
			<span class="mdl-layout-title"><b>Menü</b>&nbsp;-&nbsp;<small>Login</small></span>
			<nav class="mdl-navigation">
				<p>&emsp;<b>Info:</b>&emsp;Anmelden um ins Menü<br>&emsp;zu kommen</p>
			</nav>
		</div>
		<main class="mdl-layout__content">
			<div class="page-content">
				<?php session_start();
					if(isset($_POST['Submit'])){
						$logins = array(
							'9E' => 'istcool'
						);
						$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
						$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
						if (isset($logins[$Username]) && $logins[$Username] == $Password){
							$_SESSION['UserData']['Username']=$logins[$Username];
							header("location:index.php");
							exit;
						} else {
						$msg="<span style='font-size: 100%;'><i>Ungültige</i> <u>Zugangsdaten</u><b>!</b></span>";
						}
					}
				?>

				<body>
					<center>
						<form action="" method="post" name="Login_Form">
							<h2>Login</h2>
							<input name="Username" type="text" class="Input" placeholder="Benutzername" required>
							<br>
							<input name="Password" type="password" class="Input" placeholder="Passwort" required>
							<br><br>
							<input name="Submit" type="submit" value="Anmelden" class="Button3">
						</form>
					</center>
			</div>
		</main>
	</div>
</body>

</html>