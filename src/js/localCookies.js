function save_analytics() {
    var checkbox = document.getElementById("analytics");
    localStorage.setItem("analytics", checkbox.checked); analytics
    document.cookie = ("analytics", checkbox.checked);
}
var checked = JSON.parse(localStorage.getItem("analytics"));
document.getElementById("analytics").checked = checked;

localStorage.setItem("__name__", "__main__")
document.cookie = "onload=true";


function save_tracking() {
    var checkbox = document.getElementById("tracking");
    localStorage.setItem("tracking", checkbox.checked); tracking
    document.cookie = ("tracking", checkbox.checked); tracking
}

var checked = JSON.parse(localStorage.getItem("tracking"));
document.getElementById("tracking").checked = checked;


function save_openAI() {
    var checkbox = document.getElementById("openAI");
    localStorage.setItem("openAI", checkbox.checked); openAI
    document.cookie = ("openAI", checkbox.checked);
}

var checked = JSON.parse(localStorage.getItem("openAI"));
document.getElementById("openAI").checked = checked;