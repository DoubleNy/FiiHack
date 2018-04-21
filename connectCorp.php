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
      $password = $_POST["password"];
      $repassword = $_POST["repassword"];
      $corpname = $_POST["corpname"];
      $adress = $_POST["adress"];
      $phone = $_POST["phone"];
      echo $username . " " . $email . " " . $password . " " . $repassword . " " . $corpname . " " . $adress;
      $id=rand(100,10000);
      $qry = "insert into corporatii values ('$id', '$username', '$email', '$password', '$corpname','$phone', '$adress')";
      mysqli_query($mysql, $qry);
      echo $username . " " . $email . " " . $password . " " . $repassword . " " . $corpname . " " . $adress;

      //
?>
