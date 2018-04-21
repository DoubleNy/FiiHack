function showJobForm() {
    var x = document.getElementById("formJob");
    var y = document.getElementById("addJob");
    if (x.style.display === "block") {
      x.style.display = "none";
      y.innerHTML = "+";
    } else {

        x.style.display = "block";
        y.innerHTML = "-";
    }
}
