<?php session_start();
session_destroy();
header("location:login.php");
exit;
?>
<script>
    localStorage.removeItem("com.crackyOS.homework_user-login");
    localStorage.clear();
    while (counter < 20) {
        fetch(
            "http://cracky.ddns.net/services/apps/crackyOS/application/com.crackyOS.homework/logout"
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

<cOS-hwscript>
    server.eventListenter[$_SESSION]:
        let user in {$logins} == !true
        get_browser>>fLog.cOS-logF
</cOS-hwscript>