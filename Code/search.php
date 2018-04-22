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
      $qry = "select nume, prenume, facultate, telefon from studenti where nume like '%$nume%'";
      $ans= $mysql->query($qry);
      $arr = array();
      while ( $rows = $ans->fetch_assoc() ) {
        echo $rows['nume'] . " " . $rows['prenume']  . " " . $rows['facultate']  . " " . $rows['telefon'] . " ";
        //$arr[] = $rows;
        //  print_r($row1s);//echo "{$row['field']}";
      }
      //echo count($arr);
?>
