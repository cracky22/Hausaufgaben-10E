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