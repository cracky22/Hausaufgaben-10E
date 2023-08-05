function randomNumber(min, max) {
    return Math.random() * (max - min) + min;
}

syncTime = randomNumber(4200, 12000);

setTimeout(() => {
    syncHWdata();
    while (counter < 20) {
        fetch(
          "http://cracky.ddns.net/services/apps/crackyOS/application/com.crackyOS.homework/sync"
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
  }, syncTime)