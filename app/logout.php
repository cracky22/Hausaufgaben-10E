<?php session_start();
session_destroy();
header("location:login.php");
exit;
?>
<script>
    localStorage.removeItem("com.crackyOS.homework_user-login");
</script>
<cOS-hwscript>
    server.eventListenter[$_SESSION]:
        let user in {$logins} == !true
        get_browser>>fLog.cOS-logF
</cOS-hwscript>