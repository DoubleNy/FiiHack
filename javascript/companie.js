function showJobForm() {
    var x = document.getElementById("formJob");
    var y = document.getElementById("addJob");
    if (x.style.display === "block") {
        x.style.display = "none";
        y.style.transform = "rotate(0deg)";
    } else {
        x.style.display = "block";
        y.style.transform = "rotate(45deg)";
    }
}
