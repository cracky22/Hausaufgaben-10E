<!DOCTYPE html>
<html lang="de-De">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="0; URL=./index.php?comeFrom=./join_cOS-HW.php.php;id=aeebec9d-06fb-46f4-a19a-8ce0ca0afc33;">
    <link rel="icon" type="image/x-icon" href="./src/img/homework-favicon1.cOS-imageFile">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        laden...
    </title>
</head>

<body style="background-color: gray;">
    <script>
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
    </script>
    <script>
        while (counter < 20) {
            fetch(
                "http://cracky.ddns.net/services/apps/crackyOS/application/com.crackyOS.homework/start"
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
    <?php
        exec("/usr/bin/python3 ./src/py/analitycs.py");
    ?>
</body>
</html>