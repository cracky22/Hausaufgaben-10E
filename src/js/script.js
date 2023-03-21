console.log("/bin/crackyOS - start homework.webApplication");
console.log("debugKey='eXV29562784'");
console.log("loading ramdisk successfully - defaults,nofail");
document.cookie = "main=saveStd";
document.cookie = "first?=yes";
document.cookie = "getAutoUpdate=true";
document.cookie = "applyAutoUpdate=true";
document.cookie = "emcPatch=force";
document.cookie = "sys-name=com.crackyOS.homework";
document.cookie = "sys-name_short=cOS-HW";
document.cookie = "syncDev-to-Dev=yes;true";
//url
document.cookie = "home-url=./cOS-HomeWork.php";
document.cookie = "links-url=./links.php";
document.cookie = "termine-url=./calendar.php";
document.cookie = "stundenplan-url=./timetable.php";
document.cookie = "datenschutz-url=./p/Datenschutz.php";
document.cookie = "impressum-url=./p/Impressum.php";
document.cookie = "einstellungen-url=./cOS-settings.php";
document.cookie = "kontakt-url=./contact.php";
if ('WebSocket' in window) {
    (function () {
        function refreshCSS() {
            var sheets = [].slice.call(document.getElementsByTagName("link"));
            var head = document.getElementsByTagName("head")[0];
            for (var i = 0; i < sheets.length; ++i) {
                var elem = sheets[i];
                var parent = elem.parentElement || head;
                parent.removeChild(elem);
                var rel = elem.rel;
                if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                    var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                    elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
                }
                parent.appendChild(elem);
            }
        }
        var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
        var address = protocol + window.location.host + window.location.pathname + '/ws';
        var socket = new WebSocket(address);
        socket.onmessage = function (msg) {
            if (msg.data == 'reload') window.location.reload();
            else if (msg.data == 'refreshcss') refreshCSS();
        };
        if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
            console.log('Live reload enabled successfully.');
            sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
        }
    })();
}
else {
    console.error('Update deinen Browser. Diese Version deines Browsers unterstützt die LiveReloading Funktion zum Abfragen neue Datensätzen nicht.');
}