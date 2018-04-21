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
      $experienta = $_POST["experienta"];
      $qry = "insert into profexp values ('$userId' , '$experienta')";
      mysqli_query($mysql, $qry);
?>
