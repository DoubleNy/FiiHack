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
      $skill = $_POST["skill"];

      $qry = "insert into studeskills values ('$id' , '$skill')";
      mysqli_query($mysql, $qry);
      echo $id . $skill;

?>


