function showTeachesForm() {
    var x = document.getElementById("formObject");
    var y = document.getElementById("addObject");
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

function showStudiesForm() {
    var x = document.getElementById("formStudy");
    var y = document.getElementById("addStudy");
    if (x.style.display === "block") {
        x.style.display = "none";
        y.style.transform = "rotate(0deg)";
    } else {
        x.style.display = "block";
        y.style.transform = "rotate(45deg)";
    }
}

function showReviewsForm() {
    var x = document.getElementById("formReview");
    var y = document.getElementById("addReview");
    if (x.style.display === "block") {
        x.style.display = "none";
        y.style.transform = "rotate(0deg)";
    } else {
        x.style.display = "block";
        y.style.transform = "rotate(45deg)";
    }
}

var userId1 = 1, skillName1, experienta1, studiu1, review1;

function adaugaSkill(){
  skillName1 = document.getElementById("skillName").value;
  $.ajax({
        type: "POST",
        url: "../Code/profAddSkill.php",
        data: ({userId:userId1, skillName: skillName1}),
        success: function(rs){
          alert(rs);
        }
    });
}

function adaugaExperienta(){
  experienta1 = document.getElementById("experienta").value;
  $.ajax({
        type: "POST",
        url: "../Code/profAddExperienta.php",
        data: ({userId:userId1, experienta: experienta1}),
        success: function(rs){
          alert(rs);
        }
    });
}

function adaugaStudii(){
  studiu1 = document.getElementById("studiu").value;
  $.ajax({
        type: "POST",
        url: "../Code/profAddStudiu.php",
        data: ({userId:userId1, studiu: studiu1}),
        success: function(rs){
          alert(rs);
        }
    });
}

function adaugaReview(){
  review1 = document.getElementById("review").value;
  $.ajax({
        type: "POST",
        url: "../Code/profAddReview.php",
        data: ({userId:userId1, review: review1}),
        success: function(rs){
          alert(rs);
        }
    });
}
