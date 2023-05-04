<!DOCTYPE html>
<html lang="de-De">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="refresh" content="2; url=./cOS-HomeWork.php">
	<link rel="stylesheet" href="./src/mdl/googleAPI-style.css">
	<link rel="stylesheet" href="./src/mdl/mdl-style.css">
	<script src="./src/mdl/mdl-script.js"></script>
	<script src="./src/js/script.js"></script>
	<link rel="manifest" href="./config/manifest.webmanifest">
	<link rel="stylesheet" href="./src/css/style.css">
	<link rel="icon" type="image/x-icon" href="./src/img/homework-favicon1.png">
	<title>
		Hausaufgaben 9E
	</title>
</head>

<body>
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
		<header class="mdl-layout__header">
			<div class="mdl-layout__header-row">
				<span class="maintitle mdl-layout-title">
					Hausaufgaben&nbsp;9E&nbsp;&#128218;
				</span>
				<div class="mdl-layout-spacer"></div>
				<nav class="mdl-navigation mdl-layout--large-screen-only"></nav>
			</div>
		</header>
		<div class="mdl-layout__drawer">
			<span class="mdl-layout-title">
				<b>Menü</b>&nbsp;-&nbsp;<small>Hausaufgaben</small>
			</span>
			<nav class="mdl-navigation">
				<a class="mdl-navigation__link" title="Links&nbsp;ansehen"
                    href="./links.php?comeFrom=./index.php">
					&#128279;&nbsp;Links
				</a>
                <a class="mdl-navigation__link" title="Termine&nbsp;ansehen"
                    href="./calendar.php?comeFrom=./index.php">
					&#128467;&nbsp;Termine
				</a>
                <a class="mdl-navigation__link" title="Stundenplan&nbsp;öffnen"
                    href="./timetable.php?comeFrom=./index.php">
					&#128198;&nbsp;Stundenplan
				</a>
                <a class="mdl-navigation__link" title="Datenschutz&nbsp;öffnen"
                    href="./p/Datenschutz.php?comeFrom=../index.php">
					&#128272;&nbsp;Datenschutz
				</a>
                <a class="mdl-navigation__link" title="Impressum&nbsp;öffnen"
                    href="./p/Impressum.php?comeFrom=../index.php">
					&#128209;&nbsp;Impressum
				</a>
                <a class="mdl-navigation__link" title="&#9881;&nbsp;Einstellungen"
                    href="./settings.php?comeFrom=./index.php">
					&#9881;&nbsp;Einstellungen
				</a>
                <a class="mdl-navigation__link" title="E-Mail schreiben"
                    href="./contact.php?comeFrom=./index.php">
					&#128231;&nbsp;Kontakt
				</a>
                <a class="mdl-navigation__link" title="Info&nbsp;zu&nbsp;aktuellen&nbsp;Version&nbsp;+&nbsp;Änderungen"
                    href="./changeLog.php?comeFrom=./index.php">
                    <p class="version">
                        <script src="./src/js/version.js"></script>
                    </p>
                </a>
                <a class="mdl-navigation__link" style="background-color: #c3c3c34f;"
                    title="&copy;&nbsp;Martin&nbsp;Blieninger"
                    href="#">&#169;&nbsp;<b>cracky></b>&nbsp;<small>by&nbsp;Martin&nbsp;B.<sup>&nbsp;2023</sup></small></a>
                <img onclick="window.location.href='#qr-action';" class="qr-share" src="./src/img/qr-share-homework.png">
					<p class="qr-text">
                        Tippe für <b>QR-Code</b>
                    </p>
                </img>
				<br>
                <a class="mdl-navigation__link" title="nach oben"
					href="#top-menu">
					Nach oben&nbsp;&#9757;
				</a>
                <br><br><br><br><br><br>
                <br id="qr-action">
			</nav>
		</div>
		<main class="mdl-layout__content">
			<div class="page-content">
				<div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
				<center>
					<img class="sys-onload" src="./src/img/loading_cOS-HW.gif">
					<?php
					    exec("sudo bash ./sh/tdLogging.sh");
					?>
					<br>
					<div class="mdl-spinner mdl-js-spinner is-active"></div>
				</center>
                        <script>
							localStorage.setItem(
								"auto_sync",
								"true"
							);
    					    localStorage.setItem(
								"errorReport",
								"true"
							);
							localStorage.setItem(
								"analytics",
								"true"
							);
							localStorage.setItem(
								"tracking",
								"true"
							);
							localStorage.setItem(
								"openAI",
								"false"
							);
                            
							function refresh() {
                                console.log("refresh page...");
                                location.reload();
								window.location.href='./index.php?sys=refresh;'
                            }
                        </script>
					</center>
				</div>
			</div>
		</main>
	</div>
</body>

</html>