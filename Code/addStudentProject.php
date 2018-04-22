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
$proiect = $_POST["proiect"];

$qry = "insert into studproiecte values ('$id' , '$proiect')";
mysqli_query($mysql, $qry);
//
echo $id . $experience;
?>