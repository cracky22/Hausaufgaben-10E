MajorVersion = 5;
SubVersion = 9;
MinVersion = 2;

document.write(
  "Version&nbsp;<small>crackyOS</small>&nbsp;" +
    MajorVersion +
    "&#46;" +
    SubVersion +
    "&#46;" +
    MinVersion
); // + "<small>&nbsp;BETA</small>");

while (counter < 20) {
  fetch(
    "http://cracky.ddns.net/services/apps/crackyOS/application/com.crackyOS.homework/version"
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
