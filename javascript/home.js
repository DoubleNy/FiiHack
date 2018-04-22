var username, email1, password1, password2, faculty1, year1, phone1, gender1, corpname1, adress1;

function loginv(){
  username = document.getElementById("usernamel").value;
  password = document.getElementById("passwordl").value;
  $.ajax({
        type: "POST",
        url: "../Code/loginver.php",
        data: ({username: username, password: password}),
        success: function(rs){
          alert(rs);
          if(rs == "0"){
            alert("Wrong username or password !");
          }else{
            if(rs == "1"){
                $.ajax({
                      type: "POST",
                      url: "",
                      data: ({username: username}),
                      success: function(data){
                        var res = data.split(" ");
                        location.href = "../html/student.php?nume=" + username;
                      }
                  });
            }
            if(rs == "2"){
                alert("E prof");
                $.ajax({
                      type: "POST",
                      url: "",
                      data: ({username: username}),
                      success: function(data){
                        location.href = "../html/professor.php?nume=" + username;
                        var res = data.split(" ");
                      }
                  });
            }
            if(rs == "3"){
              alert("E corp");
                $.ajax({
                      type: "POST",
                      url: "",
                      data: ({username: username}),
                      success: function(data){
                        var res = data.split(" ");
                        location.href = "../html/companie.php?nume=" + username;
                      }
                  });
            }

          }
        }
    });
}


function redirect(){
    username = document.getElementById("username").value;
    email1 = document.getElementById("email").value;
    password1 = document.getElementById("password1").value;
    password2 = document.getElementById("password2").value;
    $.ajax({
          type: "POST",
          url: "../Code/signupBD.php",
          data: ({username: username, email: email1}),
          success: function(rs){
            if(rs == "0"){
              alert("Username already used !");
            }else if(rs == "1"){
              alert("Email already used !");
            }else{
              if(document.getElementById("student").checked == true) {
                    $(".wrapper").css("display", "none");
                    $(".wrapperS").css("visibility", "visible");
              }
              else if(document.getElementById("profesor").checked == true) {
                    $(".wrapper").css("display", "none");
                    $(".wrapperP").css("visibility", "visible");
              }
              else if(document.getElementById("corporation").checked == true){
                    $(".wrapper").css("display", "none");
                    $(".wrapperC").css("visibility", "visible");
              }
            }
          }
      });

}

function submitStudent(){
  fname1 = document.getElementById("nume").value;
  lname1 = document.getElementById("prenume").value;
  faculty1 = document.getElementById("faculty").value;
  year1 = document.getElementById("year").value;
  phone1 = document.getElementById("phone").value;
  gender1 = document.getElementById("gender").value;
  $.ajax({
        type: "POST",
        url: "../Code/connect.php",
        data: ({fname:fname1, lname: lname1, username: username, email: email1, password: password1, repassword : password2, faculty : faculty1, year : year1, phone : phone1, gender : gender1}),
        success: function(rs){
          alert(rs);
        }
    });
}



function submitProfessor(){
  fname1 = document.getElementById("numep").value;
  lname1 = document.getElementById("prenumep").value;
  phone1 = document.getElementById("phonep").value;
  gender1 = document.getElementById("genderp").value;
  $.ajax({
        type: "POST",
        url: "../Code/connectProf.php",
        data: ({fname:fname1, lname: lname1, username: username, email: email1, password: password1, repassword : password2, phone : phone1, gender : gender1}),
        success: function(rs){
          alert("Raspuns : " + rs);
        }
    });
}


function submitCorporation(){
  //alert("am ajuns");
  corpname1 = document.getElementById("corpname").value;
  phone1 = document.getElementById("phonec").value;
  adress1 = document.getElementById("adress").value;
  alert(corpname1 + phone1 + " " +adress1);
  $.ajax({
        type: "POST",
        url: "../Code/connectCorp.php",
        data: ({username: username, email: email1, password: password1, repassword : password2, corpname : corpname1, adress : adress1, phone:phone1}),
        success: function(rs){
          alert(rs);
        }
    });
}
