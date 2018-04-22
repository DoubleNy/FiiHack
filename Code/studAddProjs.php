<?php
      $mysql = new mysqli (
                    'localhost',
                    'root',
                    '',
                    'FiiDB'
      );
      if($mysql->connect_error){
        die("Eroare la conectare");
      }

      $userId = $_POST["userId"];
      $proiect = $_POST["proiect"];
      $qry = "insert into studproiecte values ('$userId' , '$proiect')";
      mysqli_query($mysql, $qry);
?>
