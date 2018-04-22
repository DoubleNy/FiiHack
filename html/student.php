<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/student.css">
    <link rel="stylesheet" href="../css/searchBar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../javascript/student.js"></script>
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
      <input type="text" id="cuvantInserat" placeholder="Search.." name="search">
      <button type="submit" onclick="searchElements()"><i class="fa fa-search"></i></button>
    </form>
</div>

<div class="container" style="margin: 50px auto 0px;">

  <div class="containerLeft">
    <img src="../images/eagle.jpg" alt="Avatar" style="width:200px">
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
            $qry = "select id from studenti where username='$nume'";
            $rez = mysqli_query($mysql, $qry);
            $row = mysqli_fetch_row($rez);


        $id = $row[0];
        $qry = "select * from studenti where id='$id'";
        //echo $qry;
        $rez = mysqli_query($mysql, $qry);
        $row = mysqli_fetch_row($rez);
        /*if(!$row)
          echo "0";
        else {
          echo "1";
        }*/
        //
  ?>
  <div class="containerRight">
      <h1 id="name"><?php echo $row[4].' '.$row[5]; ?></h1>
      <h2>Faculty :</h2>
      <h3 id="faculty"><?php echo $row[6]; ?></h3>
      <h2>Year :</h2>
      <h3 id="year"><?php echo $row[7]; ?></h3>
      <h2>Phone No :</h2>
      <h3 id="phoneNo"><?php echo $row[8]; ?></h3>
      <h2>Email :</h2>
      <h3 id="email"><?php echo $row[2]; ?></h3>
  </div>

</div>

<div class="container2">

    <h1 id="sectionName">Skills</h1>
    <h1 id="addSkill" onclick="showSkillForm()">+</h1>

    <div id="formSkill">
      <form action="javascript:adaugaSkills()">
        <input type="text" id="skillNames" name="skillName" required>
        <input type="submit">
      </form>
    </div>
    <div class="skill">
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

          $id = 2044;
          $qry = "select * from studeskills where id='$id'";
          $rez = mysqli_query($mysql, $qry);

          while($row=mysqli_fetch_row($rez)){
            echo ("<h1 id=skill1>".$row[1]."</h1>");

          }
          //
    ?>

  </div>

</div>

<div class="container2">

    <h1 id="sectionName">Experience</h1>
    <h1 id="addExperience" onclick="showExperienceForm()">+</h1>

    <div id="formExperience">
      <form action="javascript:adaugaExps()">
        <textarea rows="4" cols="50" name="comment" id="experientas"></textarea>
        <input type="submit">
      </form>
    </div>

    <div class="experience">
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

          $id = 2044;
          $qry = "select * from studexp where id='$id'";
          $rez = mysqli_query($mysql, $qry);

          while($row=mysqli_fetch_row($rez)){
            echo ("<h1 id=experienta1>".$row[1]."</h1>");

          }
          //
    ?>

  </div>

</div>

<div class="container2" style="margin: 2px auto 50px;">

    <h1 id="sectionName">Projects</h1>
    <h1 id="addProject" onclick="showProjectForm()">+</h1>

    <div id="formProject">
      <form action="javascript:adaugaProjs()">
        <textarea rows="4" cols="50" name="comment" id="proiect"></textarea>
        <input type="submit">
      </form>
    </div>

    <div class="project">
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

          $id = 2044;
          $qry = "select * from studproiecte where id='$id'";
          $rez = mysqli_query($mysql, $qry);

          while($row=mysqli_fetch_row($rez)){
            echo ("<h1 id=proiect1>".$row[1]."</h1>");

          }
          //
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
