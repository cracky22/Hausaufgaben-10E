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
    <link rel="icon" type="image/x-icon" href="../src/img/homework-favicon1.cOS-imageFile">
    <title>Einstellungen</title>
    <script src="../src/js/sysstat.js"></script>
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
                <a class="mdl-navigation__link" title="Links&nbsp;ansehen" href="./links.php?comeFrom=./settings.php">
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
                        <script src="../src/js/version.js"></script>
                    </p>
                </a>
                <a class="mdl-navigation__link" style="background-color: #c3c3c34f;"
                    title="&copy;&nbsp;Martin&nbsp;Blieninger"
                    href="#top-menu">&#169;&nbsp;<b>cracky></b>&nbsp;<small>by&nbsp;Martin&nbsp;B.<sup>&nbsp;2023</sup></small></a>
                <img onclick="window.location.href='#qr-action';" class="qr-share"
                    src="../src/img/qr-share-homework.cOS-imageFile">
                <p class="qr-text">
                    Tippe für <b>QR-Code</b>
                </p>
                </img>
                <br>
                <a class="mdl-navigation__link" title="nach oben" href="#top-menu">
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
                        onclick="window.location.href='./shell.php?cmd=bash+../src/sh/sync.sh'">
                        Hausaufgaben Synchronisieren
                    </button>
                    <br>
                    <button type="button" class="cOS-auto_sync btn-spacer" onclick="save_auto_login()">
                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="auto_login">
                            <input type="checkbox" id="auto_login" class="mdl-switch__input">
                            <span class="mdl-switch__label">Automatische&nbsp;Anmeldung</span>
                        </label>
                    </button>
                    <br>
                    <button type="button" class="cOS-auto_sync btn-spacer" onclick="save_auto_sync()">
                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="auto_sync">
                            <input type="checkbox" id="auto_sync" class="mdl-switch__input">&nbsp;
                            <span class="mdl-switch__label">Auto&nbsp;Synchronisierung</span>
                        </label>
                    </button>
                    <br>
                    <button
                        class="settingBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
                        onclick="window.location.href='#clearDialog'">
                        Hausaufgaben leeren (Papierkorb)
                    </button>
                    <br>
                    <button
                        class="settingBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
                        onclick="window.location.href='#wipeDialog'">
                        Hausaufgaben&nbsp;löschen
                    </button>
                    <br>
                    <button
                        class="settingBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
                        onclick="window.location.href='#restoreDialog'">
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
                        onclick="window.location.href='#highPrivacyDialog';">
                        Hohen&nbsp;Datenschutz&nbsp;aktivieren
                    </button>
                    <br>
                    <button
                        class="settingBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
                        onclick="window.location.href='#debugModDialog';">
                        Debug&nbsp;Modus&nbsp;Aktivieren&nbsp;(10M)
                    </button>
                    <br>
                    <button
                        class="settingBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
                        onclick="window.location.href='#clearCacheDialog';">
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
                                    <b>Server:</b>&nbsp;Synology&nbsp;DS&nbsp;220+&nbsp;8TB&nbsp;10GB&nbsp;DDR4&nbsp;RAM
                                    <br>
                                    <b>Betriebssystem:</b>&nbsp;SynologyDSM&nbsp;7.2&nbsp;&nbsp;Ubuntu&nbsp;Server
                                    <br>
                                    <b>WebServer</b>&nbsp;/&nbsp;<b>Backend:</b>&nbsp;Apache2&nbsp;/&nbsp;PHP&nbsp;8.2
                                </small>
                            </p>
                        </h6>
                    </div>
                    <div id="clearDialog" class="overlay">
                        <div class="popup">
                            <h4>Liste leeren?</h4>
                            <a class="close" href="#closeDialoge">
                                &times;
                            </a>
                            <div class="content">
                                <button type="button" onclick="window.location.href='#closeDialoge';"
                                    class="clear-dialoge-button no mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                                    Nein
                                </button>
                                &emsp;
                                <button type="button"
                                    onclick="window.location.href='./shell.php?cmd=bash+clearHomeWorkData.sh';"
                                    class="clear-dialoge-button yes mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                                    Ja
                                </button>
                                <br><br>
                            </div>
                        </div>
                    </div>
                    <div id="wipeDialog" class="overlay">
                        <div class="popup">
                            <h4>Liste löschen?</h4>
                            <a class="close" href="#closeDialoge">
                                &times;
                            </a>
                            <div class="content">
                                <button type="button" onclick="window.location.href='#closeDialoge';"
                                    class="clear-dialoge-button no mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                                    Nein
                                </button>
                                &emsp;
                                <button type="button"
                                    onclick="window.location.href='./shell.php?cmd=bash+wipeHomeWorkData.sh';"
                                    class="clear-dialoge-button yes mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                                    Ja
                                </button>
                                <br><br>
                            </div>
                        </div>
                    </div>
                    <div id="restoreDialog" class="overlay">
                        <div class="popup">
                            <h4>Gelöschte Liste wiederherstellen?</h4>
                            <a class="close" href="#closeDialoge">
                                &times;
                            </a>
                            <div class="content">
                                <button type="button" onclick="window.location.href='#closeDialoge';"
                                    class="clear-dialoge-button no mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                                    Nein
                                </button>
                                &emsp;
                                <button type="button"
                                    onclick="window.location.href='./shell.php?cmd=bash+restoreHomeWorkData.sh';"
                                    class="clear-dialoge-button yes mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                                    Ja
                                </button>
                                <br><br>
                            </div>
                        </div>
                    </div>
                    <div id="highPrivacyDialog" class="overlay">
                        <div class="popup">
                            <h4>Hohen Datenschutz aktivieren?</h4>
                            <a class="close" href="#closeDialoge">
                                &times;
                            </a>
                            <div class="content">
                                <button type="button" onclick="window.location.href='#closeDialoge';"
                                    class="clear-dialoge-button no mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                                    Nein
                                </button>
                                &emsp;
                                <button type="button" onclick="highPrivacy();"
                                    class="clear-dialoge-button yes mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                                    Ja
                                </button>
                                <br><br>
                            </div>
                        </div>
                    </div>
                    <div id="debugModDialog" class="overlay">
                        <div class="popup">
                            <h4>Debugging aktivieren [10M] ?</h4>
                            <a class="close" href="#closeDialoge">
                                &times;
                            </a>
                            <div class="content">
                                <button type="button" onclick="window.location.href='#closeDialoge';"
                                    class="clear-dialoge-button no mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                                    Nein
                                </button>
                                &emsp;
                                <button type="button" onclick="enableDebugMod();"
                                    class="clear-dialoge-button yes mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                                    Ja
                                </button>
                                <br><br>
                            </div>
                        </div>
                    </div>
                    <div id="clearCacheDialog" class="overlay">
                        <div class="popup">
                            <h4>Cache / <i>localstorage</i> leeren?</h4>
                            <a class="close" href="#closeDialoge">
                                &times;
                            </a>
                            <div class="content">
                                <button type="button" onclick="window.location.href='#closeDialoge';"
                                    class="clear-dialoge-button no mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                                    Nein
                                </button>
                                &emsp;
                                <button type="button" onclick="clearCache();"
                                    class="clear-dialoge-button yes mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                                    Ja
                                </button>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </center>
                <br>
                <script>
                    var checked = JSON.parse(localStorage.getItem("auto_login"));
                    document.getElementById("auto_login").checked = checked;
                    function save_auto_login() {
                        var checkbox = document.getElementById("auto_login");
                        localStorage.setItem("auto_login", checkbox.checked);
                        document.cookie = "analytics=saveStd";
                        //location.reload();
                    }

                    var checked = JSON.parse(localStorage.getItem("auto_sync"));
                    document.getElementById("auto_sync").checked = checked;
                    function save_auto_sync() {
                        var checkbox = document.getElementById("auto_sync");
                        localStorage.setItem("auto_sync", checkbox.checked);
                        document.cookie = "analytics=saveStd";
                        //location.reload();
                    }
                    document.cookie = "user=toggle.setting";
                    function highPrivacy() {
                        /*localStorage.clear();*/
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
                        window.location.href = '#closeDialog';
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
                        window.location.href = '#closeDialog';
                    }

                    function clearCache() {
                        console.log("clear localStorage");
                        document.cookie = "scmd=clearCache";
                        /*localStorage.clear();*/
                        location.reload();
                    }

                    function refresh() {
                        console.log("refresh page...");
                        /*sessionStorage.clear();*/
                        /*localStorage.clear();*/
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