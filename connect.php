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

      $username = $_POST["name"];
      $email = $_POST["email"];
      $password = $_POST["password"];
      $repassword = $_POST["repassword"];
      $faculty = $_POST["faculty"];
      $year = $_POST["year"];
      $phone = $_POST["phone"];
      $gender = $_POST["gender"];
      echo $username . " " . $email . " " . $password . " " . $repassword . " " . $faculty . " " . $year . " " . $phone . " " .$gender;
      $qry = "insert into students values ('$username', '$email', '$password', '$faculty', '$year', '$phone', '$gender')";
      mysqli_query($mysql, $qry);

      //
?>
