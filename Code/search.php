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
      $nume = $_POST["nume"];
      echo "Cautam numele :  " . $nume . "\n";
      $qry = "select nume, prenume, facultate from studenti where nume like '%$nume%'";
      $ans= $mysql->query($qry);
      $arr = array();
      while ( $rows = $ans->fetch_assoc() ) {
        //echo $rows['nume'] . "\n" . $rows['prenume']  . "\n" . $rows['facultate']  . "\n" . $rows['phone'] . "\n";
        $arr[] = $rows;
        //  print_r($row1s);//echo "{$row['field']}";
      }
      //echo count($arr);
      echo JSON.encode($arr);
?>
