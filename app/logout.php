<!DOCTYPE html>
<html lang="de-De">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="2.2; url=./login.php">
    <title>
        Logout
    </title>
</head>
<body onload="reset();">
    <script>
        localStorage.removeItem("com.crackyOS.homework_user-login");
        localStorage.clear();

        function reset() {
            localStorage.removeItem("com.crackyOS.homework_user-login");
        }
    </script>

    <?php session_start();
        session_destroy();
        exit;
    ?>
</body>
</html>