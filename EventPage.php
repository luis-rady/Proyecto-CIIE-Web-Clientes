<html>
<head>
<title>Event 1 Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="EventPage.css">
</head>

<body>
  <div class="w3-container w3-blue w3-padding-32 w3-center w3-text-white w3-jumbo">
    <h1>Event Name</h1>
    <div class="w3-center">
      <a href="Home.php" class="w3-btn w3-padding-8 w3-medium w3-margin-top w3-hover-amber">Back to Home</a>
    </div>
  </div>

  <div class="w3-row w3-padding-32">
    <div class="w3-container w3-quarter w3-margin-left w3-center w3-padding-16">
      <div class="w3-container w3-light-grey w3-padding-8 w3-card-16 w3-border">
        <h3>Conferencistas</h3>
        <div class="tooltip w3-padding-8"><img src="imagenes/avatar.png" alt="Avatar" style="width: 50%">
          <span class="tooltipimage">Name <br> Empresa <br> Pais</span>
        </div>

        <div class="tooltip w3-padding-8"><img src="imagenes/avatar_mujer.png" alt="AvatarM" style="width: 50%">
          <span class="tooltipimage">Name <br> Empresa <br> Pais</span>
        </div>
      </div>
    </div>

    <div class="w3-container w3-twothird w3-margin-left w3-padding-16">
      <div class="w3-container w3-dark-grey w3-padding-8 w3-card-16">
        <div class="w3-container w3-light-grey w3-padding-8">
          <h4>Tema</h4>
          <h5>Horario</h5>
          <h6>Fecha</h6>
          <h6>Lugar</h6><br>
          <button onclick="document.getElementById('IrGrupo').style.display='block'" class="w3-btn w3-hover-amber w3-medium w3-padding-top">Ir a grupo</button>
          <div id="IrGrupo" class="w3-modal">
            <div class="w3-modal-content w3-card-4">
              <header class="w3-container w3-teal">
                <span onclick="document.getElementById('IrGrupo').style.display='none'" class="w3-closebtn">&times;</span>
              </header>
              <div class="w3-container">
                <h3 class="w3-text-black">You have been added to the group</h3>
              </div>
            </div>
          </div>
        </div> <br>
        <div id="descripcion" class="w3-container w3-light-grey w3-padding-8">
          <h3>Descripcion del Evento</h3>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
