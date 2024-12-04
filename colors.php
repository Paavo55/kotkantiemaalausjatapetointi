<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/colorPicker.css">
    <script src="scripts/script.js"></script>
    <title>Värien Testaus</title>
</head>
<body>
  <div id="pageContainer">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Kotkantie maalaus- ja tapetointi</a>
          </div>
          <ul class="nav navbar-nav">
                <li><a href="index.php">Etusivu</a></li>
                <li><a href="services.php">Palvelut</a></li>
                <li class="active"><a href="colors.php">Värien Testaus</a></li>
                <li><a href="contact.php">Yhteystiedot</a></li>
                <li><a href="gallery.php">Galleria</a></li>
          </ul>
        </div>
      </nav>
      <div class="container-fluid text-center">
        <div id="wall1"></div>
        <div id="wall2"></div>
        <div>
          <button id="wallToggle"><span class="material-symbols-outlined">
            swap_horiz
            </span></button>
        </div>
      </div>  
      <div class="container text-center" id="colorButtonGroup">
        <button class="colorButton" data-color="#DD4132" style="background-color:#DD4132; color: white;">Fiesta</button>
        <button class="colorButton" data-color="#9E1030" style="background-color:#9E1030; color: white;">Jester Red</button>
        <button class="colorButton" data-color="#FE840E" style="background-color:#FE840E; color: white;">Turmeric</button>
        <button class="colorButton" data-color="#FF6F61" style="background-color:#FF6F61;">Living Coral</button>
        <button class="colorButton" data-color="#C62168" style="background-color:#C62168; color: white;">Pink Peacock</button>
        <button class="colorButton" data-color="#8D9440" style="background-color:#8D9440;">Pepper Stem</button>
        <button class="colorButton" data-color="#FFD662" style="background-color:#FFD662;">Aspen Gold</button>
        <button class="colorButton" data-color="#00539C" style="background-color:#00539C; color: white;">Princess Blue</button>
        <button class="colorButton" data-color="#755139" style="background-color:#755139; color: white;">Toffee</button>
        <button class="colorButton" data-color="#D69C2F" style="background-color:#D69C2F;">Mango Mojito</button>
        <button class="colorButton" data-color="#616247" style="background-color:#616247; color: white;">Terrarium Moss</button>
        <button class="colorButton" data-color="#E8B5CE" style="background-color:#E8B5CE;">Sweet Lilac</button>
        <button class="colorButton" data-color="#D2C29D" style="background-color:#D2C29D;">Soybean</button>
        <button class="colorButton" data-color="#343148" style="background-color:#343148; color: white;">Eclipse</button>
        <button class="colorButton" data-color="#F0EAD6" style="background-color:#F0EAD6;">Sweet Corn</button>
        <button class="colorButton" data-color="#615550" style="background-color:#615550; color: white;">Brown Granite</button>
      </div>
    </div>
      <footer class="footer container-fluid text-center">
        <div class="row" id="footerRow">
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" id="footerForm">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              <label for="emailInput">Your Email:</label>
              <input type="email" id="emailInput" name="emailInput"><br>
              <label for="messageInput">Message</label><br>  
              <textarea name="messageInput" rows="6" cols="40"></textarea><br>
              <input type="submit">
            </form>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" id="footerLinks">
            <ul>
              <li><a href="index.php">Etusivu</a></li>
              <li><a href="services.php">Palvelut</a></li>
              <li><a href="colors.php">Värien Testaus</a></li>
              <li><a href="contact.php">Yhteystiedot</a></li>
              <li><a href="gallery.php">Galleria</a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" id="footerContacts">
            <ul>
              <li>Puh. 044 99988899</li>
              <li>Kotkantie 3, 90100 Oulu</li>
              <li>info@kotkantiemaalaus.fi</li>
            </ul>
            <div>
              <a href="https://www.youtube.com/"><img src="pics/youtube_social_icon_red.png"></a>
              <a href="https://www.instagram.com"><img src="pics/instagram.png"></a>
            </div>
          </div> 
        </div> 
      </footer>
</body>
</html>