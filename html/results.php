<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/results.css">
    <link rel="stylesheet" href="../css/searchBar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
  </div>

<span style="font-size:30px;cursor:pointer;color:black;position:fixed;top:30px;left:30px;" onclick="openNav()">&#9776;</span>

<div class="search-container">
    <form action="">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>
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
          $qry = "select * from studenti where nume='$nume'";
          $rez = mysqli_query($mysql, $qry);

          while($row=mysqli_fetch_row($rez)){
          ?>
            <div class="container">
            <div class="containerLeft">
            <img src="../images/eagle.jpg" alt="Avatar">
            </div>
            <div class="containerStudent">
            <h1 class="name"><?php  echo $row[4].' '.$row[5]; ?></h1>
            <h2>Faculty :</h2>
            <h3 class="facultate"><?php echo $row[6]; ?></h3>
            <br>
            <h2>Year :</h2>
            <h3 class="an"><?php echo $row[7]; ?></h3>
            <br>
            <h2>Phone No :</h2>
            <h3 class="telefon"><?php echo $row[8]; ?></h3>
            <br>
            <h2>Email :</h2>
            <h3 class="email"><?php echo $row[2]; ?></h3>
            <br>
            <a href="studentVizitator.html"><h4>View Student Profile</h4></a>
            </div>
            </div>

          <?php
          }
          //


 ?>
 <?php
 $qry = "select * from profesori where nume='$nume'";
 $rez = mysqli_query($mysql, $qry);

 while($row=mysqli_fetch_row($rez)){
 ?>
   <div class="container">
   <div class="containerLeft">
   <img src="../images/eagle.jpg" alt="Avatar">
   </div>
   <div class="containerProfesor">
   <h1 class="name"><?php  echo $row[6].' '.$row[7]; ?></h1>
   <h2>Phone No :</h2>
   <h3 class="telefon"><?php echo $row[4]; ?></h3>
   <br>
   <h2>Email :</h2>
   <h3 class="email"><?php echo $row[2]; ?></h3>
   <br>
   <a href="professorVizitator.html"><h4>View Teacher Profile</h4></a>
   </div>
   </div>

 <?php
 }
 //


?>
<?php
$qry = "select * from corporatii where nume='$nume'";
$rez = mysqli_query($mysql, $qry);

while($row=mysqli_fetch_row($rez)){
?>
  <div class="container">
  <div class="containerLeft">
  <img src="../images/eagle.jpg" alt="Avatar">
  </div>
  <div class="containerCompanie">
  <h1 class="name"><?php  echo $row[4]; ?></h1>
  <h2>Location :</h2>
  <h3 class="locatie"><?php echo $row[6]; ?></h3>
  <br>
  <h2>Phone No :</h2>
  <h3 class="telefon"><?php echo $row[5]; ?></h3>
  <br>
  <h2>Email :</h2>
  <h3 class="email"><?php echo $row[2]; ?></h3>
  <br>
  <a href="companieVizitator.html"><h4>View Company Profile</h4></a>
  </div>
  </div>

<?php
}
//


?>




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
