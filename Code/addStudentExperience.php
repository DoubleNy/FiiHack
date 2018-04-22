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

      $id = $_POST["id"];
      $experience = $_POST["experience"];

      $qry = "insert into studexp values ('$id' , '$experience')";
      mysqli_query($mysql, $qry);
      //
      echo $id . $experience;
?>