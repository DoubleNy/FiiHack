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
      $jobTitle = $_POST["jobTitle"];
      $jobInfo = $_POST["jobInfo"];
      $qry = "insert into companiejobs values ('$userId' , '$jobTitle', '$jobInfo')";
      mysqli_query($mysql, $qry);
?>
