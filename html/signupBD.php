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

      $username = $_POST["username"];
      $email = $_POST["email"];
      $qry = "select * from studenti where email='$email'";
      $rez = mysqli_query($mysql, $qry);
      if($rez)
        echo "0";
      else echo "1";

      //
?>
