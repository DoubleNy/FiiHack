function showSkillForm() {
    var x = document.getElementById("formSkill");
    var y = document.getElementById("addSkill");
    if (x.style.display === "none") {
        x.style.display = "block";
        y.innerHTML = "-";
    } else {
        x.style.display = "none";
        y.innerHTML = "+";
    }
}

function showExperienceForm() {
    var x = document.getElementById("formExperience");
    var y = document.getElementById("addExperience");
    if (x.style.display === "none") {
        x.style.display = "block";
        y.innerHTML = "-";
    } else {
        x.style.display = "none";
        y.innerHTML = "+";
    }
}

function showProjectForm() {
    var x = document.getElementById("formProject");
    var y = document.getElementById("addProject");
    if (x.style.display === "none") {
        x.style.display = "block";
        y.innerHTML = "-";
    } else {
        x.style.display = "none";
        y.innerHTML = "+";
    }
}
