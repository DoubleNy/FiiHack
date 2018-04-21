function showTeachesForm() {
    var x = document.getElementById("formObject");
    var y = document.getElementById("addObject");
    if (x.style.display === "block") {
        x.style.display = "none";
        y.innerHTML = "+";
    } else {
        x.style.display = "block";
        y.innerHTML = "-";
    }
}

function showExperienceForm() {
    var x = document.getElementById("formExperience");
    var y = document.getElementById("addExperience");
    if (x.style.display === "block") {
        x.style.display = "none";
        y.innerHTML = "+";
    } else {
        x.style.display = "block";
        y.innerHTML = "-";
    }
}

function showStudiesForm() {
    var x = document.getElementById("formStudy");
    var y = document.getElementById("addStudy");
    if (x.style.display === "block") {
        x.style.display = "none";
        y.innerHTML = "+";
    } else {
        x.style.display = "block";
        y.innerHTML = "-";
    }
}

function showReviewsForm() {
    var x = document.getElementById("formReview");
    var y = document.getElementById("addReview");
    if (x.style.display === "block") {
        x.style.display = "none";
        y.innerHTML = "+";
    } else {
        x.style.display = "block";
        y.innerHTML = "-";
    }
}