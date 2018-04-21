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
      $qry = "select * from studenti where username='$username'";
      //echo $qry;
      $rez = mysqli_query($mysql, $qry);
      $row = mysqli_fetch_row($rez);
      if($row)
        echo "0";//$row;
      else {
        $qry1 = "select * from studenti where email='$email'";
        $rez1 = mysqli_query($mysql, $qry1);
        $row1 = mysqli_fetch_row($rez1);
        if($row1)
          echo "1";
        else echo "2";
      }

      //
?>
