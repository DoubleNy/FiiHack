var userId1 = 2044, skillName1, experienta1;
function adaugaSkills(){
  skillName1 = document.getElementById("skillNames").value;
  $.ajax({
        type: "POST",
        url: "../Code/studAddSkill.php",
        data: ({userId:userId1, skillName: skillName1}),
        success: function(rs){
          var href = window.location;
          window.location=href;
        }
    });
}
function adaugaExps(){
  experienta1 = document.getElementById("experientas").value;
  $.ajax({
        type: "POST",
        url: "../Code/studAddExperienta.php",
        data: ({userId:userId1, experienta: experienta1}),
        success: function(rs){
          var href = window.location;
          window.location=href;
        }
    });
}
function adaugaProjs(){
  proiect1 = document.getElementById("proiect").value;
  $.ajax({
        type: "POST",
        url: "../Code/studAddProjs.php",
        data: ({userId:userId1, proiect: proiect1}),
        success: function(rs){
          var href = window.location;
          window.location=href;
        }
    });
}
function showSkillForm() {
    var x = document.getElementById("formSkill");
    var y = document.getElementById("addSkill");
    if (x.style.display === "block") {
        x.style.display = "none";
        y.style.transform = "rotate(0deg)";
    } else {
        x.style.display = "block";
        y.style.transform = "rotate(45deg)";
    }
}

function showExperienceForm() {
    var x = document.getElementById("formExperience");
    var y = document.getElementById("addExperience");
    if (x.style.display === "block") {
        x.style.display = "none";
        y.style.transform = "rotate(0deg)";
    } else {
        x.style.display = "block";
        y.style.transform = "rotate(45deg)";
    }
}

function showProjectForm() {
    var x = document.getElementById("formProject");
    var y = document.getElementById("addProject");
    if (x.style.display === "block") {
        x.style.display = "none";
        y.style.transform = "rotate(0deg)";
    } else {
        x.style.display = "block";
        y.style.transform = "rotate(45deg)";
    }
}

function searchElements() {
  var nume = document.getElementById("cuvantInserat").value;
  $.ajax({
        type: "POST",
        url: "../Code/search.php",
        data: ({nume: nume}),
        success: function(jsData){
            //alert("ok");
            var p = JSON.parse(jsData);
            //console.log(jsData);
            alert(p[0]["name"]);
            //JSON.parse(jsData);
            //alert(jsData[nume]);
        }
    });
}
