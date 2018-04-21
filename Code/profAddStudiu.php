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
      $studiu = $_POST["studiu"];
      $qry = "insert into profstudii values ('$userId' , '$studiu')";
      mysqli_query($mysql, $qry);
?>
