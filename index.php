<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/65e913fc89.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
    <script src="scripts/script.js" defer></script>
    <script src="scripts/gallery.js" defer></script>
    <title>Etusivu</title>
</head>
<body>
  <div id="pageContainer">
    <nav class="navbar navbar-default" id="navbar">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Kotkantie maalaus- ja tapetointi</a>
        </div>
        <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Etusivu</a></li>
              <li><a href="services.php">Palvelut</a></li>
              <li><a href="colors.php">Värien Testaus</a></li>
              <li><a href="contact.php">Yhteystiedot</a></li>
              <li><a href="gallery.php">Galleria</a></li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <div class="mt-12 text-center">
        <div class="col-sm-12 col-md-12" id="gallery">
          <button class="btn btn-default" id="backButton"><span class="material-symbols-outlined">
            arrow_back
            </span></button>
          <img id="galleryImage" src="" class="img">
          <button class="btn btn-default" id="nextButton"><span class="material-symbols-outlined">
            arrow_forward
            </span> </button>
        </div>
      </div>
      <div class="text-center" id="smallInfoBox">
        <div class="col-sm-4 col-md-4">
          <p>Hei! Olemme Kotkantien maalaus- ja tapetointi! Me hoidamme maalaukseen ja tapetointiin liittyvät pulmasi!</p>
        </div>
        <div class="col-sm-4 col-md-4">
          <p>Meidän työntekijämme ovat ammattitaitoisia ja luotettavia. Kokeneimmat maalariimme ovat olleet alalla jo vuosia!</p>
        </div>
        <div class="col-sm-4 col-md-4">
          <p>Tilaa meiltä työ ja olemme valmiita toimittamaan parin viikon sisällä!</p>
        </div>
      </div>
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