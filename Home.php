<?php require('ConnectDB.php');?>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="Home.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <ul class="w3-navbar w3-red w3-card-2 w3-left-align w3-large w3-display-container">
    <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
      <a class="w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    </li>
    <li><a href="#" class="w3-padding-large w3-white">Home</a></li>
    <li class="w3-hide-small"><a id="calendar" href="Calendar.php" class="w3-padding-large w3-hover-white">Calendar</a></li>
   <li class="w3-hide-small"><a href="Categories.php" class="w3-padding-large w3-hover-white">Categories</a></li>
   <input placeholder="Search..." class="w3-input w3-border w3-quarter w3-padding-large w3-display-topmiddle" type="search">
 </ul>

<!-- Navbar on small screens -->
  <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium">
    <ul class="w3-navbar w3-left-align w3-large w3-black">
      <li><a id="calendar" class="w3-padding-large page-scroll" href="Calendar.php">Calendar</a></li>
       <li><a class="w3-padding-large page-scroll" href="Categories.php">Categories</a></li>
    </ul>
  </div>
</div>

<!--Content-->
<div class="w3-row w3-padding-64">
  <div class="w3-row w3-padding-16">
    <div class="w3-container w3-third w3-padding">
      <div class="w3-container w3-padding-16 w3-center " style="width:100%">
        <div class="w3-container w3-light-grey w3-padding-32 w3-margin-left w3-card-16">

          <!--Profile Section -->
          <div class="w3-container w3-dark-grey w3-center w3-padding-16">
            <h3>Profile</h3>
            <img src="imagenes/avatar.png" alt="Avatar" style="width: 50%"><br>
            <?php //Query Name
            $sqlName= "SELECT usuariocol FROM usuario WHERE email = 'crdluis97@gmail.com'";
            $resultName= mysqli_query($connection, $sqlName);

            if(mysqli_num_rows($resultName) > 0)
            {
              while($row = mysqli_fetch_assoc($resultName)){
                echo "<p class='w3-padding-bottom'>". $row["usuariocol"] ."</p>";
              }
            }
            else {
                echo "0 results";
            }
            ?>
            <label onclick="getElementById('changeImage').style.display='block'" id="add-info" class="w3-small">Change image</label>

            <!--Change Image Modal -->
            <div id="changeImage" class="w3-modal">
              <div class="w3-modal-content w3-card-4">
                <header class="w3-container w3-teal">
                  <label class="w3-xlarge">Select New Image</label>
                  <span onclick="document.getElementById('changeImage').style.display='none'" class="w3-closebtn">&times;</span>
                </header>
                <div class="w3-container w3-padding">
                  <div class="w3-container w3-padding-8 w3-content">
                    <button class="w3-btn w3-padding-8 w3-medium w3-margin-top w3-hover-red">Select Image</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Agenda of the day -->
    <div class="w3-row w3-twothird">
      <div class="w3-container w3-padding-16 w3-center">
        <div id="event-container" class="w3-container w3-padding-16 w3-margin-bottom">
          <?php //Query for Events
          $sqlEvents = "SELECT Hora_Ini, Hora_Fin, titulo, tema, conferencistas.nombre FROM eventos,imparte_conferencia,conferencistas WHERE fechaInicio = CURDATE() AND eventos.id = imparte_conferencia.evento AND imparte_conferencia.idConferencista = conferencistas.id ORDER BY Hora_Ini";
          $result = mysqli_query($connection, $sqlEvents);

          if(mysqli_num_rows($result) > 0)
          {
            echo "<table class='w3-table w3-card-8 w3-bordered w3-border w3-hoverable w3-centered w3-white w3-border-bottom w3-small'><tr><th class='w3-red' style='width: 15%'>Hour</th><th class='w3-blue'>Event</th></tr>";
            while($row = mysqli_fetch_assoc($result)){
              echo "<tr><td>".$row['Hora_Ini']." ".$row['Hora_Fin']."</td><td><a href='EventPage.php'>".$row['titulo']."<br><br>".$row['tema']."<br><br>".$row['nombre']."</a></td></tr>";
            }
            echo "</table>";
          }
          else {
              echo "<div class='w3-container w3-blue w3-opacity w3-padding-64 w3-card-8'>";
              echo "<h2 class='w3-padding-16'><strong>"."No events today"."</strong></h2>";
              echo "<br>";
              echo "<a href='Calendar.php'>Check Calendar for other events</a>";
              echo "</div>";
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
<br><br><br>

<!--Log Out-->
<footer class="w3-container w3-padding-8 w3-center w3-opacity w3-teal">
  <div class="w3-xlarge w3-padding-8">
   <a href="LandingPage.php" class="w3-center w3-btn w3-padding-8 w3-medium w3-hover-red">Log Out</a>
 </div>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>


</body>
</html>
