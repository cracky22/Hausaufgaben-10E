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
    <title>
        Stundenplan
    </title>
</head>

<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <span class="mdl-layout-title">
                    Stundenplan&nbsp;<b>9E</b>
                </span>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation mdl-layout--large-screen-only">

                </nav>
            </div>
            <div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">
                <b>Menü</b>&nbsp;-&nbsp;<small>Stundenplan</small>
            </span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" title="Zurück&nbsp;gehen"
                    href="./cOS-HomeWork.php?comeFrom=./timetable.php">
                    &#127968;&nbsp;Home
                </a>
                <a class="mdl-navigation__link" title="Links&nbsp;ansehen"
                    href="./links.php?comeFrom=./timetable.php">
                    &#128279;&nbsp;Links
                </a>
                <a class="mdl-navigation__link" title="Termine&nbsp;ansehen"
                    href="./calendar.php?comeFrom=./timetable.php">
                    &#128467;&nbsp;Termine
                </a>
                <a class="mdl-navigation__link" title="Datenschutz&nbsp;öffnen"
                    href="./p/Datenschutz.php?comeFrom=../timetable.php">
                    &#128272;&nbsp;Datenschutz
                </a>
                <a class="mdl-navigation__link" title="Impressum&nbsp;öffnen"
                    href="./p/Impressum.php?comeFrom=../timetable.php">
                    &#128209;&nbsp;Impressum
                </a>
                <a class="mdl-navigation__link" title="&#9881;&nbsp;Einstellungen"
                    href="./settings.php?comeFrom=./timetable.php">
                    &#9881;&nbsp;Einstellungen
                </a>
                <a class="mdl-navigation__link" title="E-Mail schreiben"
                    href="./contact.php?comeFrom=./timetable.php">
                    &#128231;&nbsp;Kontakt
                </a>
                <a class="mdl-navigation__link" title="Info&nbsp;zu&nbsp;aktuellen&nbsp;Version&nbsp;+&nbsp;Änderungen"
                    href="./changeLog.php?comeFrom=./timetable.php">
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
            <div class="page-content">
                <div class="timetable">
                    <center><br><br>
                        <table border="1" cellpadding="1" cellspacing="1" style="width:242.333px">
                            <tbody>
                              <tr>
                                <td style="text-align:center; width:14px">
                                    <span style="font-size:14px">
                                        <span style="font-family:Comic Sans MS,cursive">
                                            <strong>
                                                St
                                            </strong>
                                        </span>
                                    </span>
                                </td>
                                <td style="text-align:center; width:35px">
                                    <span style="font-size:14px">
                                        <span style="font-family:Comic Sans MS,cursive">
                                            <strong>
                                                Mo
                                            </strong>
                                        </span>
                                    </span>
                                </td>
                                <td style="text-align:center; width:35px">
                                    <span style="font-size:14px">
                                        <span style="font-family:Comic Sans MS,cursive">
                                            <strong>
                                                Di
                                            </strong>
                                        </span>
                                    </span>
                                </td>
                                <td style="text-align:center; width:31px">
                                    <span style="font-size:14px">
                                        <span style="font-family:Comic Sans MS,cursive">
                                            <strong>
                                                Mi
                                            </strong>
                                        </span>
                                    </span>
                                </td>
                                <td style="text-align:center; width:54px">
                                    <span style="font-size:14px">
                                        <span style="font-family:Comic Sans MS,cursive">
                                            <strong>
                                                Do
                                            </strong>
                                        </span>
                                    </span>
                                </td>
                                <td style="text-align:center; width:41px">
                                    <span style="font-size:14px">
                                        <span style="font-family:Comic Sans MS,cursive">
                                            <strong>
                                                Fr
                                            </strong>
                                        </span>
                                    </span>
                                </td>
                              </tr>
                              <tr>
                                <td style="text-align:center; width:14px">
                                        <span style="font-size:14px">
                                            <strong>
                                                1
                                            </strong>
                                        </span>
                                </td>
                                <td style="text-align:center; width:35px">
                                    <span style="font-size:14px">
                                        <script src="./src/js/cOS.timetable.js/monday/1h.js"></script>
                                    </span>
                                </td>
                                <td style="text-align:center; width:35px">
                                    <span style="font-size:14px">
                                        <script src="./src/js/cOS.timetable.js/tuesday/1h.js"></script>
                                    </span>
                                </td>
                                <td style="text-align:center; width:31px">
                                    <span style="font-size:14px">
                                        <script src="./src/js/cOS.timetable.js/wednesday/1h.js"></script>
                                    </span>
                                </td>
                                <td style="text-align:center; width:54px">
                                    <span style="font-size:14px">
                                        <script src="./src/js/cOS.timetable.js/thursday/1h.js"></script>
                                    </span>
                                </td>
                                <td style="text-align:center; width:41px">
                                    <span style="font-size:14px">
                                        <script src="./src/js/cOS.timetable.js/friday/1h.js"></script>
                                    </span>
                                </td>
                              </tr>
                                <tr>
                                <td style="text-align:center; width:14px">
                                    <span style="font-size:14px">
                                        <strong>
                                            2
                                        </strong>
                                    </span>
                                </td>
                                <td style="text-align:center; width:35px">
                                    <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/monday/2h.js"></script>
                                    </span>
                                </td>
                                <td style="text-align:center; width:35px">
                                    <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/tuesday/2h.js"></script>
                                    </span>
                                </td>
                                <td style="text-align:center; width:31px">
                                    <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/wednesday/2h.js"></script>
                                    </span>
                                </td>
                                <td style="text-align:center; width:54px">
                                    <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/thursday/2h.js"></script>
                                    </span>
                                </td>
                                <td style="text-align:center; width:41px">
                                    <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/friday/2h.js"></script>
                                    </span>
                                </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center; width:14px">
                                        <span style="font-size:14px">
                                            <strong>
                                                P
                                            </strong>
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:35px">
                                        <span style="font-size:14px">
                                            Pause
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:35px">
                                        <span style="font-size:14px">
                                            Pause
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:31px">
                                        <span style="font-size:14px">
                                            Pause
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:54px">
                                        <span style="font-size:14px">
                                            Pause
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:41px">
                                        <span style="font-size:14px">
                                            Pause
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center; width:14px">
                                        <span style="font-size:14px">
                                            <strong>
                                                3
                                            </strong>
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:35px">
                                        <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/monday/3h.js"></script>
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:35px">
                                        <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/tuesday/3h.js"></script>
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:31px">
                                        <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/wednesday/3h.js"></script>
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:54px">
                                        <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/thursday/3h.js"></script>
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:41px">
                                        <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/friday/3h.js"></script>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                <td style="text-align:center; width:14px">
                                    <span style="font-size:14px">
                                        <strong>
                                            4
                                        </strong>
                                    </span>
                                </td>
                                    <td style="text-align:center; width:35px">
                                        <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/monday/4h.js"></script>
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:35px">
                                        <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/tuesday/4h.js"></script>
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:31px">
                                        <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/wednesday/4h.js"></script>
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:54px">
                                        <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/thursday/4h.js"></script>
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:41px">
                                        <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/friday/4h.js"></script>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center; width:14px">
                                        <span style="font-size:14px">
                                            <strong>
                                                P
                                            </strong>
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:35px">
                                        <span style="font-size:14px">
                                            Pause
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:35px">
                                        <span style="font-size:14px">
                                            Pause
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:31px">
                                        <span style="font-size:14px">
                                            Pause
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:54px">
                                        <span style="font-size:14px">
                                            Pause
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:41px">
                                        <span style="font-size:14px">
                                            Pause
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center; width:14px">
                                        <span style="font-size:14px">
                                            <strong>
                                                5
                                            </strong>
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:35px">
                                        <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/monday/5h.js"></script>
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:35px">
                                        <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/tuesday/5h.js"></script>
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:31px">
                                        <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/wednesday/5h.js"></script>
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:54px">
                                        <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/thursday/5h.js"></script>
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:41px">
                                        <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/friday/5h.js"></script>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                <td style="text-align:center; width:14px">
                                    <span style="font-size:14px">
                                        <strong>
                                            6
                                        </strong>
                                    </span>
                                </td>
                                    <td style="text-align:center; width:35px">
                                        <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/monday/6h.js"></script>
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:35px">
                                        <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/tuesday/6h.js"></script>
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:31px">
                                        <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/wednesday/6h.js"></script>
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:54px">
                                        <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/thursday/6h.js"></script>
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:41px">
                                        <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/friday/6h.js"></script>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center; width:14px">
                                        <span style="font-size:14px">
                                            <strong>
                                                MP
                                            </strong>
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:35px">
                                        <span style="font-size:14px">
                                            Pause
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:35px">
                                        <span style="font-size:14px">
                                            &nbsp;
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:31px">
                                        <span style="font-size:14px">
                                            Pause
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:54px">
                                        <span style="font-size:14px">
                                            Pause
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:41px">
                                        <span style="font-size:14px">
                                            &nbsp;
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center; width:14px">
                                        <span style="font-size:14px">
                                            <strong>
                                                7
                                            </strong>
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:35px">
                                        <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/monday/7h.js"></script>
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:35px">
                                        <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/tuesday/7h.js"></script>
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:31px">
                                        <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/wednesday/7h.js"></script>
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:54px">
                                        <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/thursday/7h.js"></script>
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:41px">
                                        <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/friday/7h.js"></script>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center; width:14px">
                                        <span style="font-size:14px">
                                            <strong>
                                                8
                                            </strong>
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:35px">
                                        <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/monday/8h.js"></script>
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:35px">
                                        <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/tuesday/8h.js"></script>
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:31px">
                                        <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/wednesday/8h.js"></script>
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:54px">
                                        <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/thursday/8h.js"></script>
                                        </span>
                                    </td>
                                    <td style="text-align:center; width:41px">
                                        <span style="font-size:14px">
                                            <script src="./src/js/cOS.timetable.js/friday/8h.js"></script>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="stand">
                            Aktueller Stand: 
                            <b>
                                <script src="./src/js/cOS.timetable.js/lastChange.js"></script>
                            </b>
                        </p>
                        <p style="text-align:justify">
                            &nbsp;
                        </p>
                        <p>&nbsp;</p><br>
                        <button
                            class="rldBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
                            onclick="refresh()">
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
                    </center>
                </div>
            </div>
        </main>
    </div>
</body>

</html>