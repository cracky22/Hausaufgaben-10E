<?php session_start();
session_destroy();
header("location:login.php");
exit;
?>

<cOS-hwscript>
    server.eventListenter[$_SESSION]:
        let user in {$logins} == !true
        get_browser>>fLog.cOS-logF
</cOS-hwscript>