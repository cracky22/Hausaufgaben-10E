<?php session_start();
	if(isset($_POST['Submit'])){
		$logins = array(
			'9E' => 'istcool',
      '9e' => 'istcool',
      'admin' => 'admin'
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

<!DOCTYPE html>
<html lang="de-De">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./src/mdl/googleAPI-style.css">
  <link rel="stylesheet" href="./src/mdl/mdl-style.css">
  <script src="./src/mdl/mdl-script.js"></script>
  <title>
    Hausaufgaben 9E login
  </title>
</head>

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <span class="mdl-layout-title">
        Hausaufgaben 9E
      </span>
      <div class="mdl-layout-spacer"></div>
      <nav class="mdl-navigation mdl-layout--large-screen-only"></nav>
      <button id="demo-menu-lower-right" class="mdl-button mdl-js-button mdl-button--icon">
        <i class="material-icons">
          more_vert
        </i>
      </button>

      <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right">
        <a style="color: black; text-decoration: none;" href="./contact.php?comeFrom=login.php#register">
          <li class="mdl-menu__item">
            Registrieren <b>[Neuer Nutzer]</b>
          </li>
        </a>
        <a style="color: black; text-decoration: none;" href="./HomeWorkData.html">
          <li class="mdl-menu__item">
            Hausaufgaben anzeigen <b>[Gast]</b>
          </li>
        </a>
        <a style="color: black; text-decoration: none;" href="#guesLogin=false;" disabled>
          <li class="mdl-menu__item" disabled>
            Gast Login <i>[Inaktiv]</i>
          </li>
        </a>
        <a style="color: black; text-decoration: none;" href="#adminLogin=false;" disabled>
          <li class="mdl-menu__item" disabled>
            <b>Admin Login <i>[Inaktiv]</i></b>
          </li>
        </a>
        <a style="color: black; text-decoration: none;" onclick="location.reload();" disabled>
          <li class="mdl-menu__item">
            Seite Neu Laden
          </li>
        </a>
      </ul>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">
      Menü
    </span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="#main" disabled>
        Anmelden für Menü
      </a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content">
      <center>
        <form action="" method="post" name="Login_Form">
          <h3 id="main" style="font-family: CabinSketch!important;">
            Login
          </h3>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
              <input class="mdl-textfield__input" name="Username" type="text" id="sample3" required>
              <label class="mdl-textfield__label" for="sample3">
                Benutzername
              </label>
            </div>
            <br>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
              <input class="mdl-textfield__input" name="Password" type="password" id="sample3" required>
              <label class="mdl-textfield__label" for="sample3">
                Passwort
              </label>
            </div>
          <br><br>
          <input name="Submit" type="submit" value="Anmelden" class="Button3">
          <br>
        </form>
      </center>
    </div>
  </main>
</div>
</html>