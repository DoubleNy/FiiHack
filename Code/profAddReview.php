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
      $review = $_POST["review"];
      $qry = "insert into profreviews values ('$userId' , '$review')";
      mysqli_query($mysql, $qry);
?>
