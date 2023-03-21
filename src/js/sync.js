document.cookie = "sync=execute";
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