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
    <title>Einstellungen</title>
    <script src="./src/js/sysstat.js"></script>
</head>

<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <span class="mdl-layout-title">
                    Einstellungen
                </span>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation mdl-layout--large-screen-only">

                </nav>
            </div>
            <div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title" id="top-menu">
                <b>Menü</b>&nbsp;-&nbsp;<small>Einstellungen</small>
            </span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" title="Zurück&nbsp;gehen"
                    href="./cOS-HomeWork.php?comeFrom=./cOS-settings.php">
                    &#127968;&nbsp;Home
                </a>
                <a class="mdl-navigation__link" title="Links&nbsp;ansehen"
                    href="./links.php?comeFrom=./settings.php">
                    &#128279;&nbsp;Links
                </a>
                <a class="mdl-navigation__link" title="Termine&nbsp;ansehen"
                    href="./calendar.php?comeFrom=./cOS-settings.php">
                    &#128467;&nbsp;Termine
                </a>
                <a class="mdl-navigation__link" title="Stundenplan&nbsp;öffnen"
                    href="./timetable.php?comeFrom=./cOS-settings.php">
                    &#128198;&nbsp;Stundenplan
                </a>
                <a class="mdl-navigation__link" title="Datenschutz&nbsp;öffnen"
                    href="./p/Datenschutz.php?comeFrom=../cOS-settings.php">
                    &#128272;&nbsp;Datenschutz
                </a>
                <a class="mdl-navigation__link" title="Impressum&nbsp;öffnen"
                    href="./p/Impressum.php?comeFrom=../cOS-settings.php">
                    &#128209;&nbsp;Impressum
                </a>
                <a class="mdl-navigation__link" title="E-Mail schreiben"
                    href="./contact.php?comeFrom=./cOS-settings.php">
                    &#128231;&nbsp;Kontakt
                </a>
                <a class="mdl-navigation__link" title="Info&nbsp;zu&nbsp;aktuellen&nbsp;Version&nbsp;+&nbsp;Änderungen"
                    href="./changeLog.php?comeFrom=./cOS-settings.php">
                    <p class="version">
                        <script src="./src/js/version.js"></script>
                    </p>
                </a>
                <a class="mdl-navigation__link" style="background-color: #c3c3c34f;"
                    title="&copy;&nbsp;Martin&nbsp;Blieninger"
                    href="#top-menu">&#169;&nbsp;<b>cracky></b>&nbsp;<small>by&nbsp;Martin&nbsp;B.<sup>&nbsp;2023</sup></small></a>
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
                <center>
                    <h5>
                        Allgemeine Einstellungen
                    </h5>
                    <button
                        class="settingBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
                        onclick="window.location.href='./shell.php?cmd=bash+./src/sh/sync.sh'">
                        Hausaufgaben Synchronisieren
                    </button>
                    <br>
                    <button
                        class="settingBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
                        onclick="window.location.href='./shell.php?cmd=bash+clearHomeWorkData.sh'">
                        Hausaufgaben leeren (Papierkorb)
                    </button>
                    <br>
                    <button
                        class="settingBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
                        onclick="window.location.href='./shell.php?cmd=bash+wipeHomeWorkData.sh'">
                        Hausaufgaben&nbsp;löschen
                    </button>
                    <br>
                    <button
                        class="settingBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
                        onclick="window.location.href='./shell.php?cmd=bash+restoreHomeWorkData.sh'">
                        <small>Hausaufgaben&nbsp;wiederherstellen</small>
                    </button>
                    <br>
                    <button
                        class="settingBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
                        onclick="window.location.href='./HomeWorkData.html?setting=noAutoSyncMod:false;'">
                        Hausaufgabenliste&nbsp;Teilen
                    </button>
                    <br><br>
                    <button
                        class="settingBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
                        onclick="window.location.href='./p/Datenschutz.php?setting=noAutoSyncMod:false;#privacySettings'">
                        Datenschutz&nbsp;Einstellungen
                    </button>
                    <br>
                    <button
                        class="settingBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
                        onclick="highPrivacy();">
                        Hohen&nbsp;Datenschutz&nbsp;aktivieren
                    </button>
                    <br>
                    <button
                        class="settingBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
                        onclick="enableDebugMod()">
                        Debug&nbsp;Modus&nbsp;Aktivieren&nbsp;(10M)
                    </button>
                    <br>
                    <button
                        class="settingBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
                        onclick="clearCache();">
                        Cache&nbsp;leeren&nbsp;(localStorage)
                    </button>
                    <br>
                </center>

                <center>
                    <div class="sysstat">
                        <h6 id="sysstat" class="sysstat"></h6>
                    </div>

                    <button
                        class="settingBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
                        onclick="window.location.href='./contact.php?comeFrom=cOS-settings.php'">
                        Administartor&nbsp;Kontaktieren
                    </button>
                    <br><br>
                </center>

                <center>
                    <div class="sysinfo">
                        <h6 class="header">
                            <small>
                                <u>
                                    &emsp;Systeminformationen&emsp;
                                </u>
                            </small>
                            <p>
                                <small>
                                    <b>Server:</b>&nbsp;Raspberry&nbsp;Pi&nbsp;4B&nbsp;4GB&nbsp;DDR4&nbsp;RAM
                                    <br>
                                    <b>Betriebssystem:</b>&nbsp;Debian&nbsp;(Raspbian)&nbsp;11&nbsp;Lite
                                    <br>
                                    <b>WebServer</b>&nbsp;/&nbsp;<b>Backend:</b>&nbsp;Apache2&nbsp;/&nbsp;PHP&nbsp;8.1
                                </small>
                            </p>
                        </h6>
                    </div>
                </center>
                <br>
                <script>
                    document.cookie = "user=toggle.setting";
                    function highPrivacy() {
                        localStorage.clear();
                        document.cookie = "privacyMod=hightPrivacy";
                        localStorage.setItem(
                            "errorReport",
                            "false"
                        );
                        localStorage.setItem(
                            "analytics",
                            "false"
                        );
                        localStorage.setItem(
                            "tracking",
                            "false"
                        );
                        localStorage.setItem(
                            "openAI",
                            "false"
                        );
                        localStorage.setItem(
                            "hightPrivacyMode",
                            "true"
                        );
                    }

                    function enableDebugMod() {
                        document.cookie = "dbugMod=enable";
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
                            "undefinied"
                        );
                        localStorage.setItem(
                            "openAI",
                            "undefinied"
                        );
                        localStorage.setItem(
                            "debug-mod",
                            "true"
                        );
                        localStorage.setItem(
                            "datacollection",
                            "expandet"
                        );
                        localStorage.setItem(
                            "loggingMod",
                            "E-8283_NUL>029347"
                        );
                        localStorage.setItem(
                            "autoExpire",
                            "true"
                        );
                        localStorage.setItem(
                            "expireAfter",
                            "10m"
                        );
                    }

                    function clearCache() {
                        console.log("clear localStorage");
                        document.cookie = "scmd=clearCache";
                        localStorage.clear();
                    }

                    function refresh() {
                        console.log("refresh page...");
                        sessionStorage.clear();
                        localStorage.clear();
                        location.reload();
                    }
                </script>
                </center>
            </div>
    </div>
    </main>
    </div>
</body>

</html>