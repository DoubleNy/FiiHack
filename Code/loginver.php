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
      $qryS = "select * from studenti where username='$username' and parola='$password'";
      $qryP = "select * from profesori where username='$username' and parola='$password'";
      $qryC = "select * from corporatii where username='$username' and parola='$password'";
      //echo $qry;
      $rezS = mysqli_query($mysql, $qryS);
      $rowS = mysqli_fetch_row($rezS);

      $rezP = mysqli_query($mysql, $qryP);
      $rowP = mysqli_fetch_row($rezP);

      $rezC = mysqli_query($mysql, $qryC);
      $rowC = mysqli_fetch_row($rezC);

      if(!$rowS && !$rowP && !$rowC){
        echo "0";
      }
      else{
        if($rowS){
          echo "1";
        } else if($rowP){
          echo "2";
        } else if($rowC){
          echo "3";
        }
      }
      //
?>
