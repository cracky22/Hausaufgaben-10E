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
	<link rel="manifest" href="./config/manifest.webmanifest">
	<link rel="stylesheet" href="./src/css/style.css">
	<link rel="icon" type="image/x-icon" href="./src/img/homework-favicon1.png">
	<title>
		Links
	</title>
</head>

<body>
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
		<header class="mdl-layout__header">
			<div class="mdl-layout__header-row">
				<span class="mdl-layout-title">
					Links&nbsp;<b>9E</b>
				</span>
				<div class="mdl-layout-spacer"></div>
				<nav class="mdl-navigation mdl-layout--large-screen-only">

				</nav>
			</div>
		</header>
		<div class="mdl-layout__drawer">
			<span class="mdl-layout-title" id="top-menu">
				<b>Menü</b>&nbsp;-&nbsp;<small>Links</small>
			</span>
			<nav class="mdl-navigation">
				<a class="mdl-navigation__link" title="Zurück&nbsp;gehen"
					href="./cOS-HomeWork.php?comeFrom=./links.php">
					&#127968;&nbsp;Home
				</a>
				<a class="mdl-navigation__link" title="Termine&nbsp;ansehen"
					href="./calendar.php?comeFrom=./links.php">
					&#128467;&nbsp;Termine
				</a>
				<a class="mdl-navigation__link" title="Stundenplan&nbsp;öffnen"
					href="./timetable.php?comeFrom=./links.php">
					&#128198;&nbsp;Stundenplan
				</a>
				<a class="mdl-navigation__link" title="Datenschutz&nbsp;öffnen"
					href="./p/Datenschutz.php?comeFrom=../links.php">
					&#128272;&nbsp;Datenschutz
				</a>
				<a class="mdl-navigation__link" title="Impressum&nbsp;öffnen"
					href="./p/Impressum.php?comeFrom=../links.php">
					&#128209;&nbsp;Impressum
				</a>
				<a class="mdl-navigation__link" title="&#9881;&nbsp;Einstellungen"
					href="./settings.php?comeFrom=./links.php">
					&#9881;&nbsp;Einstellungen
				</a>
				<a class="mdl-navigation__link" title="E-Mail schreiben"
					href="./contact.php?comeFrom=./links.php">
					&#128231;&nbsp;Kontakt
				</a>
				<a class="mdl-navigation__link" title="Info&nbsp;zu&nbsp;aktuellen&nbsp;Version&nbsp;+&nbsp;Änderungen"
					href="./changeLog.php?comeFrom=./links.php">
					<p class="version">
						<script src="./src/js/version.js"></script>
					</p>
				</a>
				<a class="mdl-navigation__link" style="background-color: #c3c3c34f;"
					title="&copy;&nbsp;Martin&nbsp;Blieninger"
					href="#top-menu">
					&#169;&nbsp;<b>cracky></b>&nbsp;<small>by&nbsp;Martin&nbsp;B.<sup>&nbsp;2023</sup></small>
				</a>
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
				<div class="links">
					<center>
						<h4>
							Standard Links
						</h4>
						
						<button
							class="urlBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
							onclick="window.location.href='https://www.home.dbrsp.de/?comeFrom=com.crackyOS.homework'">
							Schul-Webseite
						</button>
						<br>
						<button
							class="urlBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
							onclick="window.location.href='https://www.dbrsp.de/nextcloud/index.php/login?user=cracky'">
							NextCloud Schulcloud
						</button>
						<br>
						<button
							class="urlBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
							onclick="window.location.href='https://www.home.dbrsp.de/wp-content/uploads/2023/02/Hausordnung-neu.pdf'">
							Hausordnung
						</button>
						<br>
						<button
							class="urlBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
							onclick="window.location.href='https://speisezeit.ddns.opc-asp.de/index.php'">
							Mensa - Essen bestellen
						</button>
						<br>
						<button
							class="urlBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
							onclick="window.location.href='https://www.home.dbrsp.de/index.php/kontakt/#tab-1675688104701-6'">
							Kontakt zum Lehrer
						</button>
						<br>
						<button
							class="urlBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
							onclick="window.location.href='https://schul-net.ch/notenrechner/'">
							Notenschnitt Rechner
						</button>
						<br>

						<h4>
							Aktuelle Links
						</h4>

						<button
							class="urlBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
							onclick="window.location.href='https://boersenspiel.faz.net/boersenspiel/depot_portfolio.htn?gId=28679'">
							Börsenspiel 9E - Aktien
						</button>

						<h4>
							Sonstige Links
						</h4>

						<button class="rldBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" onclick="refresh()">
                            aktualisieren
                        </button>
                        <br>

                        <script>
                            function refresh() {
                                console.log("refresh page...");
                                sessionStorage.clear();
                                localStorage.clear();
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