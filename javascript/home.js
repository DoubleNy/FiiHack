var nume, email1, password1, password2, faculty1, year1, phone1, gender1, corpname1, adress1;

function redirect(){
    nume = document.getElementById("username").value;
    email1 = document.getElementById("email").value;
    password1 = document.getElementById("password1").value;
    password2 = document.getElementById("password2").value;

    if(document.getElementById("student").checked == true) {
          $(".wrapper").css("display", "none");
          $(".wrapperS").css("visibility", "visible");
    }
    if(document.getElementById("profesor").checked == true) {
          $(".wrapper").css("display", "none");
          $(".wrapperP").css("visibility", "visible");
    }
    if(document.getElementById("corporation").checked == true){
          $(".wrapper").css("display", "none");
          $(".wrapperC").css("visibility", "visible");
    }
}

function submitStudent(){
  faculty1 = document.getElementById("faculty").value;
  year1 = document.getElementById("year").value;
  phone1 = document.getElementById("phone").value;
  gender1 = document.getElementById("gender").value;
  $.ajax({
        type: "POST",
        url: "../connect.php",
        data: ({name: nume, email: email1, password: password1, repassword : password2, faculty : faculty1, year : year1, phone : phone1, gender : gender1}),
        success: function(rs){
          alert(rs);
        }
    });
}



function submitProfessor(){
  $.ajax({
        type: "POST",
        url: "../connectProf.php",
        data: ({name: nume, email: email1, password: password1, repassword : password2}),
        success: function(rs){
          alert("Raspuns : " + rs);
        }
    });
}


function submitCorporation(){
  corpname1 = document.getElementById("corpname").value;
  adress1 = document.getElementById("adress").value;
  $.ajax({
        type: "POST",
        url: "../connectCorp.php",
        data: ({name: nume, email: email1, password: password1, repassword : password2, corpname : corpname1, adress : adress1}),
        success: function(rs){
          alert(rs);
        }
    });
}
