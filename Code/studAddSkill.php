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
      $skillName = $_POST["skillName"];
      $qry = "insert into studeskills values ('$userId' , '$skillName')";
      mysqli_query($mysql, $qry);
?>
