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
      $corpname = $_POST["corpname"];
      $adress = $_POST["adress"];

      $qry = "insert into corporations values ('$username', '$email', '$password', '$corpname', '$adress')";
      mysqli_query($mysql, $qry);
      echo $username . " " . $email . " " . $password . " " . $repassword . " " . $corpname . " " . $adress;

      //
?>
