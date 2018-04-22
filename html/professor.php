<?php
    $uri = $_SERVER['REQUEST_URI'];
    //echo $uri; // Outputs: URI

    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

    $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    //echo $url; // Outputs: Full URL
    $arr = explode("=",$url);
    $nume = $arr[1];
    //echo $nume;

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
          $qry = "select id from profesori where username='$nume'";
          $rez = mysqli_query($mysql, $qry);
          $row = mysqli_fetch_row($rez);


      $userId = $row[0];
$nume = "necunoscut";
$email = "necunoscut";
$telefon = "necunoscut";



$sql = "SELECT nume, prenume, email, telefon FROM profesori WHERE id = $userId";
$result = mysqli_query($mysql, $sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nume = $row["nume"]. " " .$row["prenume"];
    $email = $row["email"];
    $telefon = $row["telefon"];
}

$sql2 = "SELECT experienta FROM profexp WHERE id = $userId";
$result2 = mysqli_query($mysql, $sql2);

$experiente = array();
if ($result2->num_rows > 0) {
    while($row = $result2->fetch_assoc()) {
      $experiente[] = $row["experienta"];
    }
}

$sql3 = "SELECT curs FROM profpreda WHERE id = $userId";
$result3 = mysqli_query($mysql, $sql3);

$cursuri = array();
if ($result3->num_rows > 0) {
    while($row = $result3->fetch_assoc()) {
      $cursuri[] = $row["curs"];
    }
}

$sql4 = "SELECT facultate FROM profstudii WHERE id = $userId";
$result4 = mysqli_query($mysql, $sql4);

$facultati = array();
if ($result4->num_rows > 0) {
    while($row = $result4->fetch_assoc()) {
      $facultati[] = $row["facultate"];
    }
}

$sql5 = "SELECT review FROM profreviews WHERE id = $userId";
$result5 = mysqli_query($mysql, $sql5);

$reviews = array();
if ($result5->num_rows > 0) {
    while($row = $result5->fetch_assoc()) {
      $reviews[] = $row["review"];
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <link rel="stylesheet" href="../css/professor.css">
    <link rel="stylesheet" href="../css/searchBar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../javascript/professor.js"></script>
</head>
<body>

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

<div class="container" style="margin: 50px auto 0px;">

    <div class="containerLeft">
        <img src="../images/eagle.jpg" alt="Avatar" style="width:200px">
    </div>

    <div class="containerRight">
        <h1 id="name"><?php echo $nume; ?></h1>
        <h2>University: </h2>
        <h3 id = "university"> Alexandru Ioan Cuza, Computer Science, Iasi</h3>
        <h2>Phone No :</h2>
        <h3 id="phoneNo"><?php echo $telefon; ?></h3>
        <h2>Email :</h2>
        <h3 id="email"><?php echo $email; ?></h3>
    </div>

</div>

<div class="container2">

    <h1 id="sectionName">Teaches</h1>
    <h1 id="addObject" onclick="showTeachesForm()">+</h1>

    <div id="formObject">
        <form action="javascript:adaugaSkill()">
            <input type="text" name="skillName" id="skillName" required>
            <input type="submit">
        </form>
    </div>

    <div class="object">
      <?php
      foreach ($cursuri as $value) {
        echo "<h1>$value</h1>";
      }
      ?>
    </div>

</div>

<div class="container2">

    <h1 id="sectionName">Experience</h1>
    <h1 id="addExperience" onclick="showExperienceForm()">+</h1>

    <div id="formExperience">
        <form action="javascript:adaugaExperienta()">
            <textarea rows="4" cols="50" name="comment" id="experienta"></textarea>
            <input type="submit">
        </form>
    </div>

    <div class="experience">
      <?php
      foreach ($experiente as $value) {
        echo "<h1>$value</h1>";
      }
      ?>
    </div>

</div>

<div class="container2">

    <h1 id="sectionName">Studies</h1>
    <h1 id="addStudy" onclick="showStudiesForm()">+</h1>

    <div id="formStudy">
        <form action="javascript:adaugaStudii()">
            <textarea rows="4" cols="50" name="comment" id="studiu"></textarea>
            <input type="submit">
        </form>
    </div>

    <div class="studies">
      <?php
      foreach ($facultati as $value) {
        echo "<h1>$value</h1>";
      }
      ?>
    </div>

</div>

<div class="container2" style="margin: 2px auto 50px;">

    <h1 id="sectionName">Reviews</h1>
    <h1 id="addReview" onclick="showReviewsForm()">+</h1>

    <div id="formReview">
        <form action="javascript:adaugaReview()">
            <textarea rows="4" cols="50" name="comment" id="review"></textarea>
            <input type="submit">
        </form>
    </div>

    <div class="review">
      <?php
      foreach ($reviews as $value) {
        echo "<h1>$value</h1>";
      }
      ?>
    </div>

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
