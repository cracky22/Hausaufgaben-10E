<!DOCTYPE html>
<html lang="de-De">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="./data.cache">
    <meta http-equiv="refresh" content="0.7; url=user-login_pin.php">
    <title>
        Login
    </title>
</head>
<body>
    <script>
        function reload() {
            location.reload();
        }
        if (localStorage.getItem("com.crackyOS.homework_user-login") === "410083735735a10e658a19edd1704e606c9dd112e225825b63fafeded766c8b9") {
            if (localStorage.getItem("auto_login") === "true") {
                window.location.href='./index.php';
            }
        } else if (localStorage.getItem("auto_login") === "false") {
            window.location.href='./user-login_pin.php';
        } else {
            window.location.href='./user-login_pin.php';
        }
    </script>
</body>
</html>