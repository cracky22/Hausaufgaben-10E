<!DOCTYPE html>
<html lang="de-De">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/mdl/googleAPI-style.css">
    <link rel="stylesheet" href="../src/mdl/mdl-style.css">
    <script src="../src/mdl/mdl-script.js"></script>
    <script src="../src/js/script.js"></script>
    <script src="../src/js/syncContent.js"></script>
    <link rel="manifest" href="./config/manifest.webmanifest">
    <link rel="stylesheet" href="../src/css/style.css">
    <!--<meta http-equiv="Refresh" content="20; url='./changeLog.php?cOS-HW.js%20update%20-y'" />-->
    <link rel="icon" type="image/x-icon" href="../src/img/homework-favicon1.cOS-imageFile">
    <title>
        Neuigkeiten
    </title>
</head>

<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <span class="mdl-layout-title">
                    &#128260;&nbsp;Update&nbsp;&#45;&nbsp;Neuigkeiten
                </span>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation mdl-layout--large-screen-only">

                </nav>
            </div>
            <div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title" id="top-menu">
                <b>Menü</b>&nbsp;-&nbsp;<small>Änderungen</small>
            </span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" title="Zurück&nbsp;gehen"
                    href="./cOS-HomeWork.php?comeFrom=./changeLog.php">
                    &#127968;&nbsp;Home
                </a>
                <a class="mdl-navigation__link" title="Links&nbsp;ansehen"
                    href="./links.php?comeFrom=./changeLog.php">
                    &#128279;&nbsp;Links
                </a>
                <a class="mdl-navigation__link" title="Termine&nbsp;ansehen"
                    href="./calendar.php?comeFrom=./changelog.php">
                    &#128467;&nbsp;Termine
                </a>
                <a class="mdl-navigation__link" title="Stundenplan&nbsp;öffnen"
                    href="./timetable.php?comeFrom=./changeLog.php">
                    &#128198;&nbsp;Stundenplan
                </a>
                <a class="mdl-navigation__link" title="Datenschutz&nbsp;öffnen"
                    href="./p/Datenschutz.php?comeFrom=../changeLog.php">
                    &#128272;&nbsp;Datenschutz
                </a>
                <a class="mdl-navigation__link" title="Impressum&nbsp;öffnen"
                    href="./p/Impressum.php?comeFrom=../changeLog.php">
                    &#128209;&nbsp;Impressum
                </a>
                <a class="mdl-navigation__link" title="&#9881;&nbsp;Einstellungen"
                    href="./settings.php?comeFrom=./changeLog.php">
                    &#9881;&nbsp;Einstellungen
                </a>
                <a class="mdl-navigation__link" title="E-Mail schreiben"
                    href="./contact.php?comeFrom=./changeLog.php">
                    &#128231;&nbsp;Kontakt
                </a>
                <a class="mdl-navigation__link" title="Info&nbsp;zu&nbsp;aktuellen&nbsp;Version&nbsp;+&nbsp;Änderungen"
                    href="#dubleClick">
                    <p class="version">
                        <script src="../src/js/version.js"></script>
                    </p>
                </a>
                <a class="mdl-navigation__link" style="background-color: #c3c3c34f;"
                    title="&copy;&nbsp;Martin&nbsp;Blieninger"
                    href="#top-menu">&#169;&nbsp;<b>cracky></b>&nbsp;<small>by&nbsp;Martin&nbsp;B.<sup>&nbsp;2023</sup></small></a>
                <img onclick="window.location.href='#qr-action';" class="qr-share" src="../src/img/qr-share-homework.cOS-imageFile">
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
                <div class="changes">
                    <center>
                        <br><br>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp">
                            <div class="mdl-card__title mdl-card--expand">
                                <h2 class="mdl-card__title-text">
                                    Update
                                </h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                <p class="versp">
                                    <script src="../src/js/version.js"></script>
                                </p>
                                Ein Update kann Neuigkeiten sowie Fehlerkorrekturen beinhalten
                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                <a href="#viewChanges"
                                    class="gotoNews mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                    Was ist <b><u>Neu</u></b> in dieser Version?
                                </a>
                            </div>
                        </div>
                        <br><br>
                        <div style="background-color: #0b8b76;" class="demo-card-event mdl-card mdl-shadow--2dp">
                            <div class="mdl-card__title mdl-card--expand">
                                <h4 class="cardtext">
                                    Warum Updates?
                                    <p class="cardtext">Diese <b>WebApp</b> (<i>= App im Browser</i>) bekommt
                                        <b>Updates</b> damit Sie <u>besser Funktioniert</u>
                                        oder neue Funktionen hinzugefügt werden.
                                        Du kannst gerne über den <b>Kontakt</b> eine neue
                                        <b>Funktion</b> vorschlagen, aber auch <b>Fehler</b> melden
                                    </p>
                                </h4>
                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                <a href="./contact.php?comeFrom=./changeLog.php;"
                                    class="contact-featureAdd mdl-contact mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                    <b>Kontakt</b>&nbsp;zum&nbsp;Entwickler&nbsp;
                                </a>
                            </div>
                        </div>
                        <br>
                        <br id="viewChanges">
                        <div style="height: 290px!important;" 
                        class="demo-card-event mdl-card mdl-shadow--2dp">
                            <div class="mdl-card__title mdl-card--expand">
                                <p class="changes">
                                    <br>
                                        Änderungen:
                                    <br>
                                    <small>
                                        <script src="../src/js/changes.js"></script>
                                    </small>
                                </p>
                                <br>
                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                <p class="info">
                                    <script src="../src/js/patchInfo.js"></script>
                                </p>
                            </div>
                        </div>
                        <br>
                        <button
                            class="rldeBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
                            onclick="refresh()">
                            aktualisieren
                        </button>
                        <br><br>
                        <button
                            class="rldeBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
                            onclick="go_to_beta()">
                            BETA Version testen
                        </button>
                        <br><br>
                        <button
                            class="rldeBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
                            onclick="dwnldAapl()">
                            Android App (.apk) &#11015;
                        </button>
                        <br>
                        <button
                            class="rldeBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
                            onclick="dwnldSC()">
                            SourceCode (.zip) &#11015;
                        </button>
                        <br><br><br><br>

                        <img class="HWImage" src="../src/img/homework-favicon1.cOS-imageFile">
                        <br><br>
                        <p>

                        <p class="aboutMe">
                            &copy;&nbsp;Martin&nbsp;Blieninger&nbsp;|&nbsp;
                            <b>
                                cracky>
                            </b>
                        </p>

                        </p>
                        <br><br>
                        <script>
                            function refresh() {
                                console.log("refresh page...");
                                sessionStorage.clear();
                                localStorage.clear();
                                location.reload();
                            }
                            function go_to_beta() {
                                window.location.href = "http://cracky.ddns.net/services/beta/com.crackyOS.homework/versions.html";
                            }
                            function dwnldAapl() {
                                location.reload();
                                window.location.href = "../src/apk/Hausaufgaben-9E.apk"
                            }
                            function dwnldSC() {
                                location.reload();
                                window.location.href = "../com.crackyOS.homework_current-version.zip"
                            }
                        </script>
                    </center>
                </div>
            </div>
        </main>
    </div>
</body>

</html>