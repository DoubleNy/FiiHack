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

      $qry = "insert into profesors values ('$username', '$email', '$password')";
      mysqli_query($mysql, $qry);
      echo $username . " " . $email . " " . $password . " " . $repassword ;

      //
?>
