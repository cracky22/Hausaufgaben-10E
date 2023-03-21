function randomNumber(min, max) {
    return Math.random() * (max - min) + min;
}

syncTime = randomNumber(1950, 4200);

setTimeout(() => {
    syncHWdata();
  }, syncTime)

function syncHWdata() {
    var x =
    document.getElementById("p2");
    if (x.style.display === "none")
    {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}