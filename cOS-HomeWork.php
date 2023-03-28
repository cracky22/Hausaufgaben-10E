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
    <script src="./src/js/sync.js"></script>
    <script src="./src/js/syncLoader.js"></script>
    <link rel="manifest" href="./config/manifest.webmanifest">
    <link rel="stylesheet" href="./src/css/style.css">
    <script src="https://consent.cookiefirst.com/sites/cracky.ddns.net-59a7ab1b-448b-4c3b-a3af-901feeb159d2/consent.js"></script>
    <link rel="icon" type="image/x-icon" href="./src/img/homework-favicon1.png">
    <title>Hausaufgaben 9E</title>
</head>

<body window.onload="syncHWdata()">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <span class="maintitle mdl-layout-title">Hausaufgaben&nbsp;9E&nbsp;&nbsp;&#128218;</span>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation">
                    <button id="demo-menu-lower-right"
                        class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="material-icons">more_vert</i>
                    </button>
                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        for="demo-menu-lower-right">
                        <li class="mdl-menu__item">
                            <a href="./cOS--wipe-cache.php?comeFrom=cOS-HomeWork.php;action=destroy@*">
                                <b>Komplett Neu Laden&nbsp;&#128260;</b>
                            </a>
                        </li>
                        <li class="mdl-menu__item">
                            <a href="./changeLog.php?comeFrom=./cOS-HomeWork.php">
                                <b>Neuigkeiten&nbsp;[Update]&nbsp;&#128230;</b>
                            </a>
                        </li>
                        <li class="mdl-menu__item">
                            <a href="./contact.php?comeFrom=cOS-HomeWork.php">
                                <b>Kontakt - Entwickler&nbsp;&#128231;</b>
                            </a>
                        </li>
                        <li class="mdl-menu__item">
                            <a href="./logout.php?comeFrom=cOS-HomeWork.php;action=user.logout();session=destroy">
                                <b>Abmelden&nbsp;&#128682;</b>
                            </a>
                        </li>
                        <li class="mdl-menu__item">
                            <button type="button" class="cOS-analytics" onclick="save()">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="analytics">
                                    <input type="checkbox" id="analytics" class="mdl-checkbox__input" checked>
                                    <span class="mdl-checkbox__label">Analysedaten teilen&nbsp;&#127850;</span>
                                </label>
                            </button>
                        </li>
                        <li class="mdl-menu__item">
                            <b>Menü Einklappen&nbsp;&#128285;</b>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title"><b>Menü</b>&nbsp;-&nbsp;<small>Hausaufgaben</small></span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" title="Links&nbsp;ansehen"
                    href="./links.php?comeFrom=./cOS-HomeWork.php">&#128279;&nbsp;Links</a>
                <a class="mdl-navigation__link" title="Termine&nbsp;ansehen"
                    href="./calendar.php?comeFrom=./cOS-HomeWork.php">&#128467;&nbsp;Termine</a>
                <a class="mdl-navigation__link" title="Stundenplan&nbsp;öffnen"
                    href="./timetable.php?comeFrom=./cOS-HomeWork.php">&#128198;&nbsp;Stundenplan</a>
                <a class="mdl-navigation__link" title="Datenschutz&nbsp;öffnen"
                    href="./p/Datenschutz.php?comeFrom=../cOS-HomeWork.php">&#128272;&nbsp;Datenschutz</a>
                <a class="mdl-navigation__link" title="Impressum&nbsp;öffnen"
                    href="./p/Impressum.php?comeFrom=../cOS-HomeWork.php">&#128209;&nbsp;Impressum</a>
                <a class="mdl-navigation__link" title="&#9881;&nbsp;Einstellungen"
                    href="./settings.php?comeFrom=./cOS-HomeWork.php">&#9881;&nbsp;Einstellungen</a>
                <a class="mdl-navigation__link" title="E-Mail schreiben"
                    href="./contact.php?comeFrom=./cOS-HomeWork.php">&#128231;&nbsp;Kontakt</a>
                <a class="mdl-navigation__link" title="Info&nbsp;zu&nbsp;aktuellen&nbsp;Version&nbsp;+&nbsp;Änderungen"
                    href="./changeLog.php?comeFrom=./cOS-HomeWork.php">
                    <p class="version">
                        <script src="./src/js/version.js"></script>
                    </p>
                </a>
                <a class="mdl-navigation__link" style="background-color: #c3c3c34f;"
                    title="&copy;&nbsp;Martin&nbsp;Blieninger"
                    href="#">&#169;&nbsp;<b>cracky></b>&nbsp;<small>by&nbsp;Martin&nbsp;B.<sup>&nbsp;2023</sup></small></a>
                <img class="qr-share" src="./src/img/qr-share-homework.png">
                <p class="qr-text">QR-Code zum teilen</p>
                </img>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
            <div class="page-content">
                <div class="hw-chat_framework">
                    <hwframework src="http://cracky.ddns.net/frameworks/homework.framework/import/*">
                    <hwscript crackyOS-http_response_code=
                            import *
                            for i in arry [0 to 10] in $_reloads {
                                set var CookieID.identification = user1
                                elf {
                                    set var CookieID.identifikation = user2
                                }
                                $_.breake!.
                            }
                            for $user1, $user2 in $_CookieID(x) {
                                crypto-loclStrg = a1;
                                function.setItem = True_ @Z1;
                                userIdentf = auto;
                                verifymtd = beToken;
                            }
                            for PHPMYADMIN in $_sudo | '/bin' {
                                push = 0;
                                refresh = 1;
                                breaker = document.print InnterHtml("br");
                            
                            locale_accept_from_http=true
                            >
                        </hwscript>
                    </hwframework>
                </div>
                <div class="homeworkApplication"><br>
                    <center>
                        <form action="save.php" method="POST">
                            <div class="container">
                                <embed class="hwdata" title="Das sind deine Hausaufgaben" type="text/plain"
                                    data="./HomeWorkData.html" src="./HomeWorkData.html">
                                <br>
                                <span style="display: inline-block;"></span>
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="homework mdl-textfield__input" type="text" name="hwdata" id="hwdata" required>
                                    <label class="homework mdl-textfield__label" for="sample3">Was war Hausaufgabe?</label>
                                </div>
                                <select class="fach" title="Wähle das Fach aus, indem du Hausaufgaben aufbekommen hast" name="fach" required>
                                    <option value="" class="chooseTitle" disabled selected>Fach</option>
                                    <option title="Betriebswirtschaftslehre und Rechnungswesen" value="BwR&nbsp;&#128215;">BwR&nbsp;&#128215;</option>
                                    <option title="Deutsch" value="Deutsch&nbsp;&#128217;">Deutsch&nbsp;&#128217;</option>
                                    <option title="Mathematik" value="Mathe&nbsp;&#128213;">Mathe&nbsp;&#128213;</option>
                                    <option title="Englisch" value="Englisch&nbsp;&#128216;">Englisch&nbsp;&#128216;</option>
                                    <option title="Informationstechnologie" value="Informatik&nbsp;&#128187;">Informatik&nbsp;&#128187;</option>
                                    <option title="Chemie" value="Chemie&nbsp;&#128211;">Chemie&nbsp;&#128211;</option>
                                    <option title="Physik" value="Physik&nbsp;&#128211;">Physik&nbsp;&#128211;</option>
                                    <option title="Wirtschaft und Recht" value="WuR&nbsp;&#128210;">WuR&nbsp;&#128210;</option>
                                    <option title="Geographie" value="Geographie&nbsp;&#127758;">Geographie&nbsp;&#127758;</option>
                                    <option title="Geschichte" value="Geschichte&nbsp;&#128212;">Geschichte&nbsp;&#128212;</option>
                                    <option title="Musik" value="Musik&nbsp;&#127925;">Musik&nbsp;&#127925;</option>
                                    <option title="Kunst" value="Kunst&nbsp;&#127912;">Kunst&nbsp;&#127912;</option>
                                    <option title="Organisatorische Aufgaben von Lehrern" value="<small>Organisatorisches &#128193;</small>">Organisatorisches&nbsp;&#128193;</option>
                                    <option title="Sonstiges (Falls oben nicht aufgelistet)" value="Sonstiges&nbsp;&#128194;">Sonstiges&nbsp;&#128194;</option>
                                </select>
                                <select class="date" title="" name="date">
                                    <option value="" class="chooseTitle" disabled selected>bis wann?</option>
                                    <option title="Die Hausaufgaben sind bis Montag zu erledigen" value="&nbsp;<small>(bis Montag)</small>">Montag</option>
                                    <option title="Die Hausaufgaben sind bis Dienstag zu erledigen" value="&nbsp;<small>(bis Dienstag)</small>">Dienstag</option>
                                    <option title="Die Hausaufgaben sind bis Mittwoch zu erledigen" value="&nbsp;<small>(bis Mittwoch)</small>">Mittwoch</option>
                                    <option title="Die Hausaufgaben sind bis Donnerstag zu erledigen" value="&nbsp;<small>(bis Donnerstag)</small>">Donnerstag</option>
                                    <option title="Die Hausaufgaben sind bis Freitagtag zu erledigen" value="&nbsp;<small>(bis Freitag)</small>">Freitag</option>
                                    <option title="Die Hausaufgaben sind bis nächste Woche zu erledigen" value="&nbsp;<small>(bis nächste Woche)</small>">nächste Woche</option>
                                </select>
                                &nbsp;&nbsp;
                                <span style="display: inline-block;"></span><input class="submit" type="submit"
                                    title="Sende die eingegebenen Hausaufgaben für alle Nutzer in die Liste"
                                    value="senden" />
                                    <br>
                                <div>
                                    <button
                                        class="clearBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect"
                                        onclick="window.location.href='./shell.php?cmd=bash+clearHomeWorkData.sh'">
                                        Hausaufgaben leeren
                                    </button>
                                </div>
                                <br>
                                <script>
                                    function refresh() {
                                        console.log("refresh page...");
                                        location.reload();
                                    }

                                    function save() {	
	                                    var checkbox = document.getElementById("analytics");
                                        localStorage.setItem("analytics", checkbox.checked);analytics
                                        document.cookie = ("analytics", checkbox.checked);
                                        //location.reload();
                                    }

                                    var checked = JSON.parse(localStorage.getItem("analytics"));
                                        document.getElementById("analytics").checked = checked;
                                        localStorage.setItem("__name__", "__main__")
                                        document.cookie = "onload=true";
                                </script>
                            </div><br>
                </div>
                </form>
                </center>
            </div>
    </div>
    </main>
    </div>
</body>

</html>