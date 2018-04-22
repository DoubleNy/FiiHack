<?php
$userId = 1;
$nume = "necunoscut";
$locatie = "necunoscuta";
$email = "necunoscut";
$telefon = "necunoscut";

$mysql = new mysqli (
              'localhost',
              'root',
              '',
              'FiiDB'
);
if($mysql->connect_error){
  die("Eroare la conectare");
}

$sql = "SELECT nume, adresa, email, telefon FROM corporatii WHERE id = $userId";
$result = mysqli_query($mysql, $sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nume = $row["nume"];
    $locatie = $row["adresa"];
    $email = $row["email"];
    $telefon = $row["telefon"];
}

$sql2 = "SELECT titlu, descriere FROM companiejobs WHERE id = $userId";
$result2 = mysqli_query($mysql, $sql2);

$titluJob = array();
$descriereJob = array();
$count = 0;
if ($result2->num_rows > 0) {
    while($row = $result2->fetch_assoc()) {
      $titluJob[] = $row["titlu"];
      $descriereJob[] = $row["descriere"];
      $count++;
    }
}

?>

<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <link rel="stylesheet" href="../css/companie.css">
    <link rel="stylesheet" href="../css/searchBar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../javascript/companie.js"></script>
</head>
<body>

<!-- Side bar -->

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn principale" onclick="closeNav()">&times;</a>
  <a class="principale" href="home.html">Log Out</a>
  <a class="principale">Notifications</a>
  <ul>
      <a href="#"><li>Item1</li></a>
      <a href="#"><li>Item2</li></a>
      <a href="#"><li>Item3</li></a>
      <a href="#"><li>Item4</li></a>
      <a href="#"><li>Item5</li></a>

  </ul>
</div>

<span style="font-size:30px;cursor:pointer;color:black;position:fixed;top:30px;left:30px;" onclick="openNav()">&#9776;</span>

<div class="search-container">
    <form action="">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>

<!-- Informatiile de baza -->

<div class="container" style="margin: 50px auto 0px;">

  <div class="containerLeft">
    <img src="../images/amazon.jpg" alt="Logo" style="width:200px">
  </div>

  <div class="containerRight">
      <h1 id="name"><?php echo $nume; ?></h1>
      <i class="material-icons">&#xe0c8;</i>
      <p id="location"><?php echo $locatie; ?></p>
      <br>
      <i style="font-size:24px" class="fa">&#xf095;</i>
      <p id="phoneNo"><?php echo $telefon; ?></p>
      <br>
      <i class="material-icons">&#xe0be;</i>
      <p id="email"><?php echo $email; ?></p>
  </div>

</div>

<!-- Adaugare de joburi -->

<div class="container2" style="margin: 2px auto 50px;">

    <h1 id="jobName">Jobs</h1>
    <h1 id="addJob" onclick="showJobForm()">+</h1>

    <div id="formJob">
      <form action="javascript:adaugaJob()">
        <input type="text" name="jobTitle" id="jobTitle" placeholder="Title of the job" required>
        <textarea rows="4" cols="50" name="jobInfo" id="jobInfo" placeholder="Info about the job"></textarea>
        <input type="submit">
      </form>
    </div>

  <?php
  for($i = 0; $i < $count; $i++) {
    echo "<div class=\"job\"><h1 class=\"jobTitle\">$titluJob[$i]</h1><h2 class=\"jobInfo\">$descriereJob[$i]</h2>";
  }
  ?>

</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

</body>
</html>
