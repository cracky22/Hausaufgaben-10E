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
	<link rel="icon" type="image/x-icon" href="./src/img/homework-favicon1.cOS-imageFile">
	<title>Termine</title>
</head>

<script>
	while (counter < 20) {
		fetch(
			"http://cracky.ddns.net/services/apps/crackyOS/application/com.crackyOS.homework/calendar"
		)
			.then((response) => response.json())
			.then((data) => {
			console.log(data);
			})
			.catch((error) => {
			console.error("Fehler bei der Anfrage:", error);
			});
		counter++;
		}
</script>

<body>
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
		<header class="mdl-layout__header">
			<div class="mdl-layout__header-row">
				<span class="mdl-layout-title">Termine&nbsp;<b>9E</b></span>
				<div class="mdl-layout-spacer"></div>
				<nav class="mdl-navigation mdl-layout--large-screen-only">

				</nav>
			</div>
			<div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
		</header>
		<div class="mdl-layout__drawer" id="top-menu">
			<span class="mdl-layout-title">
				<b>Menü</b>&nbsp;-&nbsp;<small>Termine</small>
			</span>
			<nav class="mdl-navigation">
				<a class="mdl-navigation__link" title="Zurück&nbsp;gehen"
					href="./cOS-HomeWork.php?comeFrom=./calendar.php">
					&#127968;&nbsp;Home
				</a>
				<a class="mdl-navigation__link" title="Links&nbsp;ansehen"
					href="./links.php?comeFrom=./calendar.php">
					&#128279;&nbsp;Links
				</a>
				<a class="mdl-navigation__link" title="Stundenplan&nbsp;öffnen"
					href="./timetable.php?comeFrom=./calendar.php">
					&#128198;&nbsp;Stundenplan
				</a>
				<a class="mdl-navigation__link" title="Datenschutz&nbsp;öffnen"
					href="./p/Datenschutz.php?comeFrom=../calendar.php">
					&#128272;&nbsp;Datenschutz
				</a>
				<a class="mdl-navigation__link" title="Impressum&nbsp;öffnen"
					href="./p/Impressum.php?comeFrom=../calendar.php">
					&#128209;&nbsp;Impressum
				</a>
				<a class="mdl-navigation__link" title="&#9881;&nbsp;Einstellungen"
					href="./settings.php?comeFrom=./calendar.php">
					&#9881;&nbsp;Einstellungen
				</a>
				<a class="mdl-navigation__link" title="E-Mail schreiben"
					href="./contact.php?comeFrom=./calendar.php">
					&#128231;&nbsp;Kontakt
				</a>
				<a class="mdl-navigation__link" title="Info&nbsp;zu&nbsp;aktuellen&nbsp;Version&nbsp;+&nbsp;Änderungen"
					href="./changeLog.php?comeFrom=./calendar.php">
					<p class="version">
						<script src="./src/js/version.js"></script>
					</p>
				</a>
				<a class="mdl-navigation__link" style="background-color: #c3c3c34f;"
					title="&copy;&nbsp;Martin&nbsp;Blieninger"
					href="#top-menu">&#169;&nbsp;<b>cracky></b>&nbsp;<small>by&nbsp;Martin&nbsp;B.<sup>&nbsp;2023</sup></small></a>
				<img onclick="window.location.href='#qr-action';" class="qr-share" src="./src/img/qr-share-homework.cOS-imageFile">
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
				<div class="events"><br>
					<center>
						<table border="1" cellpadding="1" cellspacing="1" style="width:284.333px">
							<tbody>
								<!--<tr>
									<td style="width:106px">
									&nbsp;17.03.2023
								</td>
								<td style="width:167px">
									<span style="background-color:#d35400">
										&nbsp;
										<small>
											2. Physik Stehgreifaufgabe
										</small>
									</span>
								</td>
								</tr>
								<tr>
									<td style="width:106px">
									&nbsp;24.03.2023
								</td>
									<td style="width:167px">
									<span style="background-color:#d35400">
									&nbsp;Deutsch Debatte</span>
									</td>
								</tr>
								<tr>
									<td style="width:106px">
									&nbsp;30.03.2023
								</td>
									<td style="width:167px">
									<span style="background-color:#e74c3c">
									&nbsp;2. BwR Kurzarbeit</span>
									</td>
								</tr>-->
								<tr>
									<td style="width:106px">
									&nbsp;04.07.2023
								</td>
									<td style="width:167px">
									&nbsp;Gedenkstätte Dachau</td>
								</tr>

							</tbody>
						</table>
						
						<p class="stand">Aktueller Stand: <b>
							<script src="./src/js/cOS.calendar.js/lastChange.js"></script>
						</b></p>
						<p>&NonBreakingSpace;</p><br>
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
                            }
                        </script>
					  &nbsp;
					</div>
				</center>
			</div>
		</main>
	</div>
</body>

</html>