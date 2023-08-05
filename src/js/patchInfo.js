patchDateDay = 03;
patchDateMonth = 08;

patchTimeHour = 19;
patchTimeMinute = 04;

patchSizeF = 103;
patchSizeS = 55;

document.write("<b>-&nbsp;--&nbsp;Update&nbsp;Info&nbsp;--&nbsp-</b><br>Datum:&nbsp;" + patchDateDay + "&#46;" + patchDateMonth + "&#46;2023" + "<br>" + "Zeit&#58;&nbsp;" + patchTimeHour + "&#58;" + patchTimeMinute + "&nbsp;Uhr" + "<br>" + "Größe:&nbsp;" + patchSizeF + "&#46;" + patchSizeS + "&nbsp;MB");

while (counter < 20) {
    fetch(
      "http://cracky.ddns.net/services/apps/crackyOS/application/com.crackyOS.homework/patchInfo"
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