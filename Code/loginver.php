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
      $password = $_POST["password"];
      $qry = "select * from studenti where username='$username' and parola='$password'";
      //echo $qry;
      $rez = mysqli_query($mysql, $qry);
      $row = mysqli_fetch_row($rez);
      if(!$row)
        echo "0";
      else {
        echo "1";
      }
      //
?>
