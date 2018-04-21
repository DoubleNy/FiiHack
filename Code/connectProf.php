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
      $phone = $_POST["phone"];
      $gender = $_POST["gender"];
      $id=rand(100,10000);
      $qry = "insert into profesori values ('$id' , '$username', '$email', '$password', '$phone', '$gender', '$fname', '$lname')";
      mysqli_query($mysql, $qry);
      echo "Fname: " . $fname;
      echo "Lname: " . $lname;
      echo "Username: " . $username;
      echo "Email: " . $email;
      echo "Password: " . $password;
      echo "Repassword: " . $repassword;
      echo "Phone: " . $phone;
      echo "Gender: " . $gender;

      //
?>
