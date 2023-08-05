function SystemStatus() {
    SystemStatus = "<b><z>Online</z> und Verfügbar</b>";
    document.getElementById("sysstat").innerHTML = "Systemstatus <b>crackyOS</b> Server:<br>" + SystemStatus;
}

function randomNumber(min, max) {
    return Math.random() * (max - min) + min;
}

syncTime = randomNumber(1800, 2800);

setTimeout(() => {
    SystemStatus();
  }, syncTime)


  while (counter < 20) {
    fetch(
      "http://cracky.ddns.net/services/apps/crackyOS/application/com.crackyOS.homework/system_status"
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