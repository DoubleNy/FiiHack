<?php
      $mysql = new mysqli (
                    'localhost',
                    'root',
                    '',
                    'FiiDB'
      );
              //
      if($mysql->connect_error){
        die("Eroare la conectare");
      }

      $fname = $_POST["fname"];
      $lname = $_POST["lname"];
      $username = $_POST["username"];
      $email = $_POST["email"];
      $password = $_POST["password"];
      $repassword = $_POST["repassword"];
      $faculty = $_POST["faculty"];
      $year = $_POST["year"];
      $phone = $_POST["phone"];
      $gender = $_POST["gender"];
      $id=rand(100,10000);
      $qry = "insert into studenti values ('$id' , '$username', '$email', '$password', '$fname', '$lname', '$faculty', '$year', '$phone', '$gender')";
      mysqli_query($mysql, $qry);
      echo "Fname: " . $fname;
      echo "Lname: " . $lname;
      echo "Username: " . $username;
      echo "Email: " . $email;
      echo "Password: " . $password;
      echo "Repassword: " . $repassword;
      echo "Facultate: " . $faculty;
      echo "Year: " . $year;
      echo "Phone: " . $phone;
      echo "Gender: " . $gender;

      //
?>
