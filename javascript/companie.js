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

var userId1 = 1, jobTitle1, jobInfo1;

function adaugaJob() {
  jobTitle1 = document.getElementById("jobTitle").value;
  jobInfo1 = document.getElementById("jobInfo").value;

  $.ajax({
        type: "POST",
        url: "../Code/companieAddJob.php",
        data: ({userId:userId1, jobTitle: jobTitle1, jobInfo: jobInfo1}),
        success: function(rs){
          alert(rs);
        }
    });
}
